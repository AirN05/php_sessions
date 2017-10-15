<?php
/**
 * Created by PhpStorm.
 * User: airi
 * Date: 14.10.17
 * Time: 15:36
 */
session_start();

if (isset($_SESSION['authorized'])&&$_SESSION['authorized']==1) {
    echo 'Прощай, ' . $_SESSION["name"];
    echo '<br><a href="index.php">Перейти на главную</a>';
} else {
    echo 'Авторизуйтесь, пожалуйста, 
    <a href="index.php">тут </a>';
}

session_destroy();

