<?php
session_start();
if (isset($_SESSION['user']))
{
    echo "Фамилия: " . $_SESSION['user']['surname'] . "<br>";
    echo "Имя: " . $_SESSION['user']['name'] . "<br>";
    echo "Возраст: " . $_SESSION['user']['age'];
}
?>