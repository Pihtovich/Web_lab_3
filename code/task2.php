<?php
session_start();
if (isset($_POST['submit']))
{
    $_SESSION['user'] = ['surname' => $_POST['surname'], 'name' => $_POST['name'], 'age' => $_POST['age']];
    header('Location: output.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ввод данных</title>
</head>
<body>
<form method="post">
    Фамилия: <input type="text" name="surname"><br>
    Имя: <input type="text" name="name"><br>
    Возраст: <input type="text" name="age"><br>
    <button type="submit" name="submit">Сохранить</button>
</form>
</body>
</html>
