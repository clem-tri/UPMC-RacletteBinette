# UPMC - Projet tutoré Raclette & Binette

Boutique e-commerce de jardinage avec Laravel et Avored

## Install

1) Faire une copie du fichier env.exemple et la renommer en .env

2) Configurer la BDD dans le fichier .env

3) `composer install`

4) `npm install`

5) Déplacer le contenu du dossier database/migrations dans un autre répertoire temporairement

6) `php artisan avored:install`

7) Re mettre les fichiers déplacés précedemment dans database/migrations

8) `php artisan migrate`


