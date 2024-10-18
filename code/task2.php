<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $userData = ['name' => $_POST['name'], 'age' => $_POST['age'], 'salary' => $_POST['salary'], 'education' => $_POST['salary']];
    $_SESSION['userData'] = $userData;
    header("Location: output.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ввод данных</title>
</head>
<body>
<h2>Введите ваши данные:</h2>
<form method="post">
    label for="name">Имя:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="age">Возраст:</label>
    <input type="text" id="age" name="age"><br><br>
    <label for="salary">Зарплата:</label>
    <input type="text" id="salary" name="salary"><br><br>
    <label for="education">Образование:</label>
    <input type="text" id="education" name="education"><br><br>
    <input type="submit" value="Сохранить">
</form>
</body>
</html>
