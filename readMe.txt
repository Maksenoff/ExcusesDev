Excuses de Dev


L’application "Excuses de Dev", c’est un générateur de phrase pour faire patienter les utilisateurs.


Pour commencer

Pour le back-end il est en Symfony 7.1, sous php 8.2, pour le front-end des templates twig sont utilisées ainsi que le framework bootstrap. La base de donnée
quant à elle est en MySQL (php MyAdmin recommandé).


Pré-requis

Vous devez posséder xamp ou wamp pour héberger un serveur local.
la version de php 8.2
Pour lire le code un IDE comme Visual Studio Code.
Symfony, afin de lancer le serveur via la commande "Symfony server:start"


Installation & Démarrage

Dans un premier temps prenez la base de donnée présente dans le dossier et importer là via php Myadmin. La base de donnée s'appelle "excuse.sql" (elle permet d'avoir un nombre d'excuse déjà pré remplie). Donc vous créez une base de données qui s'appelle "excusesDev" et par la suite vous allez dans l'onglet "importer" pour importer "excuse.sql". Par la suite vous allez dans le Terminal sur VSCode par exemple et vous allez taper "Composer install", cela va prendre une minute ou deux.
Une fois cela fait vous pouvez aller vérifier dans le .env que le "DATABASE_URL" est correct. Après cela vous allez pouvoir taper dans le terminal la commande "Symfony server:start".
Vous aurez juste à prendre le lien en vert afin d'accéder à l'application.


Fabriqué avec

-Symfony 7.1 (framework Backend)
-php 8.2 (backend)
-TWIG (frontend)
-HTML (frontend)
-CSS (frontend)
-Bootstrap (framework frontend)


Versions
Version 1.0 du 01/08/2024

Auteur
-ICHALLALEN Maksen
