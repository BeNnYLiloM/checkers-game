<?php

$link = new mysqli('localhost', 'root', 'root', 'checkers');
if(mysqli_connect_errno())
{
    die('Connection error: '.mysqli_connect_error());
} else {

    if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['conf_password'])) {
        $userName = $_POST['name'];
        $userPassword = md5($_POST['password']);
        $res = $link->query("SELECT `id_u` FROM `users` WHERE `name_u` = '".$userName."'");
        if($res > 0)
        {
            echo $userName;
            echo 'This name is already in the DB!';
            $res->close();
        } else {
            $link->query("INSERT INTO `users` (`name_u`,`password_u`,`status_u`) VALUES ('".$userName."', '".$userPassword."', '2')");
        }
    } else {
        echo 'Please, fill all fields!';
    }

}