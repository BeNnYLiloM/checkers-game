<?php

$link = new mysqli('localhost','root','root','checkers');

if(mysqli_connect_errno())
{
    die('Connection error: '.mysqli_connect_error());
} else {
    if(isset($_POST['name']) && isset($_POST['password']))
    {
        $userName = $_POST['name'];
        $userPassword = md5($_POST['password']);
        $res = $link->query("SELECT `id_u` FROM `users` WHERE 'name_u' = '".$userName."','password_u' = '".$userPassword."'");
        if($res)
        {
            echo 'Wellcome '.$userName.'!';
        } else {
            die('Error!');
        }
    } else {
        echo 'Please, fill all fields!';
    }
}