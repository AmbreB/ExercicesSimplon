# CRUD 

Vous devrez créer un CRUD complet qui permet la gestion d'une base d'utilisateurs

1- Dans `config.php` mettez  les infos de votre base de données
2- Importez le fichier `dump.sql` via phpMyAdmin, ou `mysql -uroot -p < dump.sql`

3- Dans une console, à la racine de votre projet, entrez 
```
sh server.sh
```
4- Puis ouvrez cette [http://localhost:3000]() dans votre navigateur

## Steps


- Créez le modèle `User` en prenant exemple sur `Dummy`
- Créez le controller `UsersController` en prenant exemple sur `DummiesController`
- Ajoutez les méthodes (vides) nécessaires en les déduisant d'après les routes contenues dans le fichier `routes.php`
- Créez les vues nécessaires `dans Views\users` : `index.php`, `show.php`, `edit.php`
- Commencez à créer le contenu de vos méthodes
- N'oubliez pas d'ajouter un flash pour prévenir vos utilisateurs du résultat de leurs actions

## Bonus 

- Tri des colonnes
- Pagination
- API JSON


## Méga Bonus 
## SPA : Mustache + fetch

#### Affichage d'un utilisateur
- fetch pour les requêtes ajax
- DOM natif + Mustache ou React 
