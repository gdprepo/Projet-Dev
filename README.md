# Presentation

Voici la partie du projet qui va vous permettre de creer la base de donnée et d'avoir un CRUD pour la modifier à partir de laravel.

## Installation

* Commencer par faire un git clone du projet

Ensuite utiliser la commande suivante dans le dossier 

> composer install

* Vous aurez besoin de remplacer le fichier .env.example par .env ensuite utilisez

> php artisan key:generate

Creer un user et un password mysql

* Remplir le fichier .env : databse, username, password...

Importer la base de donée

> php artisan migrate:fresh --seed

* Pour finir lancer le serveur

> php artisan serv


## Screenshots

* Voici les différentes parties du site

![alt text](https://github.com/wewlr17/Projet-Dev/blob/master/screen/accueil.png "Image accueil")

![alt text](https://github.com/wewlr17/Projet-Dev/blob/master/screen/listcategories.png "Image list cateogories")

![alt text](https://github.com/wewlr17/Projet-Dev/blob/master/screen/addcategory.png "Image create category")

![alt text](https://github.com/wewlr17/Projet-Dev/blob/master/screen/listproducts.png "Image list products")

![alt text](https://github.com/wewlr17/Projet-Dev/blob/master/screen/addproduct.png "Image create product")

![alt text](https://github.com/wewlr17/Projet-Dev/blob/master/screen/modifierproduct.png "Image modifier product")


