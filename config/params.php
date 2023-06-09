<?php

/**
 * Fichier contenant la configuration de l'application
 */
const CONFIG = [
    'db' => [
        'DB_HOST' => 'localhost',
        'DB_PORT' => '3306',
        'DB_NAME' => 'mvc',
        'DB_USER' => 'root',
        'DB_PSWD' => '',
    ],
    'app' => [
        'name' => 'Mon Projet',
        'projectBaseUrl' => 'http://localhost/PROJET_MVC'
    ]
];

/**
 * Constantes pour accéder rapidement aux dossiers importants du MVC
 */
const BASE_DIR = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR  ;
// constantes à appeler dans l'html
const BASE= CONFIG['app']['projectBaseUrl'] . '/public/index.php/';
const UPLOAD = CONFIG['app']['projectBaseUrl'] . '/public/upload/';
// constantes à appeler dans le php
const PUBLIC_FOLDER = BASE_DIR . 'public' . DIRECTORY_SEPARATOR;
const VIEWS = BASE_DIR . 'views/';
const MODELS = BASE_DIR . 'src/models/';
const CONTROLLERS = BASE_DIR . 'src/controllers/';


/**
 * Liste des actions/méthodes possibles (les routes du routeur)
 */
$routes = [
    ''                      => ['AppController', 'index'],
    '/'                     => ['AppController', 'index'],
    '/produit/ajout'        => ['AppController', 'ajoutProduit'],
    '/produit/gestion'      => ['AppController', 'gestionProduit'],
    '/produit/modifier'     => ['AppController', 'modifierProduit'],
    '/produit/supprimer'    => ['AppController', 'supprimerProduit'],
    '/produit/vue'          => ['AppController', 'vueProduit'],
    '/user/inscription'     => ['securityController', 'inscription'],
    '/user/login'            => ['securityController', 'login'],
    '/user/logout'           => ['securityController', 'logout'],
    '/user/gestion'          => ['AdminController', 'gestionUser'],
    '/user/supprimer'        => ['AdminController', 'supprimerUser'],
    '/user/modifier'         => ['AdminController', 'modifierUser'],
    '/user/role'            => ['AdminController', 'modifierRole'],
    '/cart/add'             => ['AppController', 'addCart'],
    '/cart/substract'             => ['AppController', 'substractCart'],
    '/cart/view'             => ['AppController', 'viewCart'],
    '/cart/remove'             => ['AppController', 'removeCart'],
    '/cart/delete'             => ['AppController', 'deleteCart'],
    '/produit/category'             => ['AppController', 'addCategory'],
    '/produit/gestioncategory'             => ['AppController', 'gestionCategory'],
    '/produit/deletecategory'             => ['AppController', 'deleteCategory'],
    '/produit/modifiercategory'             => ['AppController', 'modifierCategory'],



];
