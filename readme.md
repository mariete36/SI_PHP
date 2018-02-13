# Semaine intensive PHP
  Groupe 9 : Marie, Léa, Vincent, Mahel, Anthony en W1 P2020.


## Intro

  Ceci est le fruit du travail du groupe 9 lors de la semaine intensive dédiée au php dans le cadre d'HETIC.

  Le sujet nous impose de gérer une base de donnée MySQL, à l'aide d'un CRUD (CREATE READ UPDATE DELETE) developpé en php.

  Nous avons décidé de créer un site sur le thème de l'animation japonaise, étant un centre d'intérêt commun. Notre projet consiste à créer une plateforme type allociné pour les animes.

  Nos techs :
  
      - PHP 7.2.2
      - MySQL 5.7.21
      - NGNIX 1.12.2


## Nomenclature du repo

  ```
  SI_PHP
  |
  |-actions
  |   |--action_add.php
  |   |--action_delete.php
  |   |--action_modify.php
  |--index.php
  |--init_db.php
  ```


## Documentation

  Voici une rapide description de la fonction de chaque ficher. Pour plus de détails consultez les commentaires dans le code.

  - ```index.php```
      Ce fichier affiche notre base de donnée sous forme d'un tableau. Cette page ne sera consultée que par les admins.

  - ```init_db.php```
      Ce fichier est le lien entre notre base de donnée MySQL, et notre interface admin de l'```index.php```.

  - ```action_add.php```
      Ce fichier est notre fonction permettant d'ajouter des données dans la base de donnée.

  - ```action_delete.php```
      Ce fichier est notre fonction permettant de supprimer des données dans la base de donnée.

  - ```action_modify.php```
      Ce fichier est notre fonction permettant de modifier des données dans la base de donnée.
   
  