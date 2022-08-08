# Comment installer et lancer le projet ?

Le projet est une application web créée avec les technologies PHP & MySQL.

- Installer WAMP (Windows) / XAMPP (Linux) / MAMP (MacOS) => WampServer est une plateforme de développement Web de type WAMP, permettant de faire fonctionner localement des scripts PHP
- Placer tous les fichiers et dossiers contenus dans le `.zip` à l'intérieur du serveur WAMP / XAMPP / MAMP (généralement dans le répertoire `htdocs/` ou `www/` en fonction du logiciel utilisé)
- Une fois le projet en place, lancer le serveur et aller à l'adresse de celui-ci (généralement un http://localhost/nomDuProjet suffit)
- Ouvrir PHPMyAdmin à l'adresse : http://localhost/phpmyadmin
- Importer la base de données sur l'interface PHPMyAdmin à partir du fichier `database.sql` se trouvant dans le répertoire du projet
- Si besoin, modifier le ficiher `actions/database.php` en y mettant votre nom d'utilisateur et mot de passe PHPMyAdmin configurés
- Lancer le projet à adresse http://localhost/nomDuProjet !

Bacchus Howans
