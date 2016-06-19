<?php
$errors = array();
$success = array();

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    if (empty($_GET['title']) || empty($_GET['category']) || empty($_GET['content'])){
        $errors['empty'] = "One of your fields - title or category or content field - is empty, please re-try again!";
    } else {
        $success['notEmpty'] = "The fields are not empty ^_^";
        if (!preg_match("/^[a-zA-Z0-9 ]*$/",$_GET['title'])){
            $errors['preg'] = "One of those fields is not valid ! ";
        }
    }
    if (empty($errors)){
        $success['anyError'] = "There is any errors";
        /*$db->prepare('INSERT INTO 
                        `gauss`.`article` 
                        (`article_id`, 
                        `article_id`, 
                        `admin_pass`, 
                        `admin_email`, 
                        `admin_post_count`)
                      VALUES 
                      (NULL, 
                      \'Hatiim00\', 
                      \'lagzar\', 
                      \'PGeekc@gmail.com\',
                       \'0\'
                  );
');*/
    }

} else {
    header('location: /Gauss-science/Admin/index.php?p=Articles');
    exit("My site is OK baby ^_^");
}
var_dump($errors,$success);