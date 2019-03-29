# TODO

* faire un conteneur custom pour mysql qui permet de changer l'encription des password (pour etre compatible avec phpmyadmin) et load un dumb de la base.

* pimp le conteneur php7/apache pour
    * passer en php71
    * config apache pour que '/\*' dirige vers notre `routeur.php` (point d'entré) (prévoir l'accès aux ressources js/css/images... dans un dossier static ?, un autre vhost dédié ?)
    * config un fichier de routing php
* faire des dossiers de ressources
* essayer d'intégrer un petit redis entre la db et php (pour du cache) (nouveau conteneur)
* s'amuser avec du ES pour de la recherhe rapide (plus tard) => trigger SQL
* faire des classes, voir si on peu faire un semblant de framework avec un peu d'injection de dépendances
    * une classe d'interraction db
    * une classe d'interraction cache(redis) utilisé par la précédente
    * ...

...  
