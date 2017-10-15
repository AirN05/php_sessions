<?php
/**
 * Created by PhpStorm.
 * User: airi
 * Date: 14.10.17
 * Time: 14:10
 */
session_start();
if(isset($_SESSION["name"])&&isset($_SESSION['authorized'])) {
    echo $_SESSION["name"] . ", вы уже вошли";
}
echo
"<form action='page2.php' method='post'>
<label>Логин</label><br>
            <input type='text' name='name' ><br>
            <label>Пароль</label><br>
            <input type='password' name='password'><br><br>";

echo "<button type='submit'>Войти или перейти на следующую страницу</button>
</form>";