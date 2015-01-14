<?php

namespace Controllers;

use Silex\Provider\DoctrineServiceProvider;

class UserController
{
    public $userData = array();

    public function Authorization($app)
    {
        if(isset($_POST)) {
            foreach ($_POST['form'] as $key => $value) {
                if ($key == 'submit') {
                    continue;
                }
                $userData[$key] = $value;
            }
            $userData['password'] = md5($userData['password']);
            // print_r($userData);
            $sql = "SELECT * FROM `users` WHERE `name_u` = `".$userData['name']."` AND `password_u` = `".$userData['password']."`";
//            echo $sql;

//            var_dump($result);
            if($result) {
                echo 'Good :)';
            } else {
                echo 'Not Good :(';
            }
        } else {
            exit('POST not exist');
        }
    }
}