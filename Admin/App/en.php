<?php

function lang($sentence){
    static $lang = array(
        'mainWelcome'           =>      'Welcome to dashboard Admin',
        'HomePage'              =>      'Home Page',
        'Options'               =>      'Settings',
        'invalidUser'           =>      'Your username is not valid or empty please verify your entries !',
        'ErrorLogin1'           =>      'Username or password invalid, please verify your information and ty again !',
        'SuccessLogin'          =>      'You\'re connected :)',
        'mainPage'              =>      'Home',
        'addArticle'            =>      'Add a new article',
        'deleteArticle'         =>      'Delete an article',
        'categories'            =>      'Categories',
        'editProfile'           =>      'Edit your profile',
        'changePass'            =>      'Change your password',
        // Page Login
        'Remember'		        =>		'Keep my session On',
        'Username'		        =>		'Username',
        'Password'		        =>		'Password',
        'placeholder_username'  =>      'Enter your username',
        'placeholder_password'  =>      'Enter your password',
        'connexion'             =>      'Sign in',
        // Navigation bar
        'logoAdmin'             =>      'Admin Area',
        'item1'                 =>      'Home',
        'item2'                 =>      'Articles',
        'item3'                 =>      'Comments',
        'item4'                 =>      'Users',
        'logout'                =>      'Log out',
        // Add post
        'titlePost'             =>      'Title of this article',
        'contentPost'           =>      'Content of this article',
        'send'                  =>      'Create',
        'close'                 =>      'Close',
        'langPost'              =>      'Select the language of article',
        // Fetch posts
        'excerpt'               =>      'Excerpt',
        'viewsCount'            =>      'Views Number',
        'status'                =>      'Status',
        'Action'                =>      'Actions',
        'edit'                  =>      'Edit',
        'remove'                =>      'Delete'

    );
    return $lang[$sentence];
}
