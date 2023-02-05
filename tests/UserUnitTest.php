<?php

namespace App\Tests;
use App\Entity\User;

use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();

        $user->setEmail('true@test.com')
             ->setPrenom('prenom')
             ->setNom('nom')
             ->setPassword('password');

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getPrenom() === 'prenom');
        $this->assertTrue($user->getNom() === 'nom');
        $this->assertTrue($user->getPassword() === 'password');
    }

    public function testIsFalse()
    {
        $user = new User();

        $user->setEmail('true@test.com')
             ->setPrenom('prenom')
             ->setNom('nom')
             ->setPassword('password');

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getPrenom() === 'false');
        $this->assertFalse($user->getNom() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
    }

    public function testIsEmpty()
    {
        $user = new User();

        $this->assertEmpty($user->getEmail() === 'false@test.com');
        $this->assertEmpty($user->getPrenom() === 'false');
        $this->assertEmpty($user->getNom() === 'false');

    }
}
