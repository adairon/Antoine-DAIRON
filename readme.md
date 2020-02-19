# Antoine DAIRON Partiel Symfony : Musées Connus

# procédure d'installation
## Prérequis
- avoir un serveur web apache (si en local : Wamp pour PC ou Mamp pour Mac)
- PHP 7.3
## install pour un utilisateur lambda
- Ouvrir un dossier en local.
- Faire un git clone du repository
- ```Composer Update```
## Création de la base de données
- ```bin/console doctrine:database:create```  
## Migrations entités
1. Création du fichier de migration (code SQL) ```bin/console make:migration```
2. Executer la migration ```bin/console doctrine:migrations:migrate```