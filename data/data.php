<?php


if(basename($_SERVER['REQUEST_URI'])=='tp'){
    header('Location:index.php');
}

$pages = array(
    'acceuil' => array(
          'description'=>'page d\'acceuil du site',
          'path'=>'index.php',
  ),

    'catalogue' => array(
        'description'=>'notre catalogue de livres',
        'path'=>'catalogue.php',
    ),

    'login' => array(
        'description'=>'Notre formulaire d\'insciption ou de connection',
        'path'=>'login.php',
    ),

    'panier' => array(
        'description'=>'Gerrez vos livres',
        'path'=>'panier.php',
        ),
        
   
    'logout'=>array(
        'description'=>'Deconnection du site',
        'path'=>'logout.php',
    ),
        
    
);




