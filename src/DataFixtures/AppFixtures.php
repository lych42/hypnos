<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Gerant;
use App\Entity\Etablissement;
use App\Entity\Suite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker\Factory;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager)
    {
        // Utilisation de Faker
        $faker = Factory::create('fr_FR');

        // Création d'un Admin ???

        // Création d'un utilisateur
        $user = new User();

        $user->setEmail('user@test.com')
             ->setPrenom($faker->firstName())
             ->setNom($faker->lastName());

        $password = $this->hasher->hashPassword($user, 'password');
        $user->setPassword($password);

        $manager->persist($user);

        // Création de 7 Etablissements
        for ($i=0; $i<7; $i++) {
            $etablissement = new Etablissement();

            $etablissement->setNom($faker->colorName())
                          ->setTown($faker->city())
                          ->setAdress($faker->address())
                          ->setDescription('test description');

            $manager->persist($etablissement);
        }

        // Création de Suites de Luxe
        for ($j=0; $j<21; $j++) {
            $suite = new Suite();

            $suite->setNom($faker->colorName())
                  ->setPrix($faker->randomFloat(null, 2, 100))
                  ->setDescription('test description')
                  ->setDisponi($faker->boolean());

            $manager-> persist($suite);
        }

        // Création de Gérants
        for ($k=0; $k < 7; $k++) {
            $gerant = new Gerant();

            $gerant->setNom($faker->lastName())
                   ->setPrenom($faker->firstName())
                   ->setEmail($faker->email())
                   ->setRole([])
                   ->setPassword($faker->password());

            $manager->persist($gerant);
        }

        $manager->flush();

    }
}
