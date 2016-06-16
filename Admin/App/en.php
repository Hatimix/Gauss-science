<?php

function lang($sentence){
    static $lang = array(
        'mainWelcome'   =>      'Welcome to dashboard Admin',
        'HomePage'      =>      'Home Page',
        'Options'       =>      'Settings',
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
        'connexion'             =>      'Sign in'


    );
    return $lang[$sentence];
}
echo "Je suis là ^_^";