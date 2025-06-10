🧵 Tissu Magique – Site Vitrine

Tissu Magique est un site web vitrine développé en Symfony pour une couturière souhaitant présenter ses créations et gagner en visibilité auprès de ses futurs clients.


🌐 Objectif du projet

Créer un site web responsive, moderne et administrable permettant de :

Présenter les créations de la couturière (photos, descriptions, catégories)

Valoriser son savoir-faire artisanal

Offrir un formulaire de contact simple et efficace

Permettre une gestion des contenus via un espace d’administration


🔧 Technologies utilisées

Symfony

Twig (moteur de templates)

Doctrine ORM

MySQL

HTML5 / CSS3 / Bootstrap

JavaScript

🛠️ Installation

1. Cloner le dépôt

git clone https://github.com/Oceane1803/Symfony_Deployment.git
cd tissu-magique

2. Installer les dépendances PHP

composer install

3. Configurer l’environnement

Renommer le fichier .env ou créer un fichier .env.local :

DATABASE_URL="mysql://root:yourpassword@127.0.0.1:3306/tissu_magique"

4. Créer la base de données

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

5. Lancer le serveur de développement

symfony -d serve:start
