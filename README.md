# redisAndPredisBP
_Package maison pour faire du redis & php directement, sur MAC :'(_

## Lancer tout le bousin
1. Récupérer dans le dossier de son serveur local (htdocs, etc.)
2. Passer un petit `php composer.phar install`, ça fait jamais de mal pour l'autoload.
3. Executer redis-server
4. Executer redis-cli
5. (opt) Installer/lancer _other/fastoredis (interface graphique)
6. Lancer son serveur local php
7. Ouvrir l'index.php via localhost/

## Opérations (déjà) effectuées
_Juste pour info_

### Installation locale de redis
https://redis.io/topics/quickstart

1. Récupération de l'archive
2. Dezip `tar xvzf redis-stable.tar.gz`
3. `cd redis-stable`
4. `make`
5. Récupération des exécutables dans /src

### Interface graphique / Fastoredis
Récupération sur le site officiel
https://fastoredis.com/anonim_users_downloads

### Composer
Récupération du .phar
https://getcomposer.org/doc/00-intro.md

Création du fichier de conf
`php composer.phar init`

Installation du projet
`php composer.phar install`

### Client PHP / Predis
https://github.com/nrk/predis

Ajout au projet via composer
`php composer.phar require predis/predis`


#### Test
Création d'un index.php alakon en suivant la doc predis.
