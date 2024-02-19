<?php
/*
 * Front Controller de la gestion du livre d'or
 */

/*
 * Chargement des dépendances
 */
// chargement de configuration
require_once "../config.php";
// chargement du modèle de la table livreor

require_once "../model/livreorModel.php"

/*
 * Connexion à la base de données en utilisant PDO
 * Avec un try catch pour gérer les erreurs de connexion
 */

 try{
    $MyPDO = new PDO(DB_DRIVER.":host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT.";charset=".DB_CHARSET, DB_LOGIN, DB_PWD);

}catch(Exception $e){
    die($e->getMessage());
}

const DB_DRIVER = "mysql";
const DB_HOST = "localhost";
const DB_LOGIN = "root";
const DB_PWD = "";
const DB_NAME = "ti2web2024";
const DB_PORT = 3307;
const DB_CHARSET = "utf8mb4";

/*
 * Si le formulaire a été soumis
 */

    // on appelle la fonction d'insertion dans la DB (addLivreOr())

    // si l'insertion a réussi

    // on redirige vers la page actuelle

    // sinon, on affiche un message d'erreur

/*
 * On récupère les messages du livre d'or
 */

// on appelle la fonction de récupération de la DB (getAllLivreOr())

// fermeture de la connexion

// Appel de la vue

include "../view/livreorView.php";