# Hypnos

Hypnos est un groupe hôtelier fondé en 2004. Propriétaire de 7 établissements dans les quatre
coins de l’hexagone, chacun de ces hôtels s’avère être une destination idéale pour les couples
en quête d’un séjour romantique à deux.

## Environnement de développement

Pour installer et exécuter l'application Hypnos localement, vous devez disposer des prérequis suivants :

* PHP 8.1
* Composer
* Symfony CLI
* Docker
* Docker-compose
* Github
* Nodejs et npm

Vous pouvez vérifier si ces prérequis sont installés sur votre machine en exécutant la commande suivante via la CLI Symfony :

    symfony check:requirements
    composer require
    
# Installation

Voici les étapes à suivre pour lancer l'environnement de développement :

1. Clonez le dépôt Github de l'application Hypnos.
2. Installez les dépendances en exécutant la commande suivante dans le répertoire racine du projet 
   
    composer install
    npm install
    npm run build

3. Lancez les conteneurs Docker via la commande suivante :

    docker-compose up-d
    
4. Enfin, lancez l'application Symfony avec la commande suivante :

    symfony serve-d

# Configuration de la base de données 

Pour configurer la base de données de l'application, utilisez la commande suivante :

    symfony console make:docker:database

Ensuite, pour générer les classes d'entité Doctrine correspondantes, vous pouvez installer le bundle Doctrine et les fausses données grâce à FakerPHP en exécutant les commandes suivantes :

    composer require --dev orm fixtures
    composer require fakerphp/faker --dev 
    
# Création du back-office

Pour créer le back-office de l'application, utilisez le bundle EasyAdmin en exécutant la commande suivante :

    composer require easycorp/easyadmin-bundle

Ensuite, pour générer des CRUD pour vos entités Doctrine, utilisez la commande suivante :

    symfony console make:admin:crud
    
Ces étapes vous permettront d'installer et de configurer l'application Hypnos localement sur votre machine.
    
