<?php

function lang($sentence){
    static $lang = array(
        'mainWelcome'   =>      'Bienvenue dans le teableau de bord',
        'HomePage'      =>      'Page Accueil',
        'Options'       =>      'Paramètres',
        'ErrorLogin1'   =>      'Veuillez verifiez vos informations, le nom d\'utilisateur ou le mot de passe est invalide',
        'SuccessLogin'  =>      'Vous êtes connecté',
        'mainPage'      =>      'Accueil',
        'addArticle'    =>      'Ajouter un nouveau article',
        'deleteArticle' =>      'Supprimer un article',
        'categories'    =>      'Categories',
        'editProfil'    =>      'Modifier votre profil',
        'changePass'    =>      'Changer votre mot de passe',
        // Page Login
        'Remember'		=>		'Garder ma session ouverte',
        'Username'		=>		'Nom d\'utilisateur',
        'Password'		=>		'Mot de passe',
        'placeholder_username'  =>      'Entrez votre nom d\'utilisateur',
        'placeholder_password'  =>      'Entrez votre mot de passe',
        'connexion'             =>      'Se connecter',
        'invalidUser'           =>      "Votre nom d'utilisateur est invalide ou vide, verifiez vos entrées s'il vous plaît",
        // Navbar
        'logoAdmin'             =>      'Espace d\'administration',
        'item1'                 =>      'Accueil',
        'item2'                 =>      'Articles',
        'item3'                 =>      'Commentaires',
        'item4'                 =>      'Utilisateurs',
        'logout'                =>      'Déconnexion'

    );
    return $lang[$sentence];
}
