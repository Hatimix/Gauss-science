<?php

function lang($sentence){
    static $lang = array(
        'mainWelcome'   =>      'Welcome to dashboard Admin',
        'HomePage'      =>      'Home Page',
        'Options'       =>      'Settings',
        'invalidUser'   =>      'Your username is not valid or empty please verify your entries !',
        'ErrorLogin1'   =>      'Username or password invalid, please verify your informations and ty again !',
        'SuccessLogin'  =>      'You\'re conneted :)',
        'mainPage'      =>      'Home',
        'addArticle'    =>      'Add a new article',
        'deleteArticle' =>      'Delete an article',
        'categories'    =>      'Categories',
        'editProfil'    =>      'Edit your profile',
        'changePass'    =>      'Change your password',
        // Page Login
        'Remember'		=>		'Keep my session On',
        'Username'		=>		'Username',
        'Password'		=>		'Password',
        'placeholder_username'  =>      'Enter your username',
        'placeholder_password'  =>      'Enter your password',
        'connexion'             =>      'Sign in',
        // Navbar
        'logoAdmin'             =>      'Admin Area',
        'item1'                 =>      'Home',
        'item2'                 =>      'Articles',
        'item3'                 =>      'Comments',
        'item4'                 =>      'Users',
        'logout'                =>      'Log out'

    );
    return $lang[$sentence];
}
