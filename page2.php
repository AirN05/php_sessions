<?php
/**
 * Created by PhpStorm.
 * User: airi
 * Date: 14.10.17
 * Time: 14:29
 */
session_start();
    if ($_POST['name'] && $_POST['password']) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['authorized'] = 1;
    } else {

    }
//    print_r($_SESSION);

    if (isset($_SESSION['authorized'])&&$_SESSION['authorized']==1) {
        echo 'Привет, ' . $_SESSION['name'];
        echo '<br><a href="page3.php">Го на третью страницу</a>';
    } else {
        echo 'Авторизуйтесь, пожалуйста,
    <a href="index.php">тут </a>';

}

