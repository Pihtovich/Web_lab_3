<!DOCTYPE html>
<html>
<head>
    <title>Подсчет слов и символов</title>
</head>
<body>
<form method="post">
    <textarea name="text"></textarea>
    <br>
    <input type="submit" name="submit" value="Подсчитать">
</form>
<?php
if(isset($_POST['submit']))
{
    $text = $_POST['text'];
    $wordCount = str_word_count($text);
    $charCount = strlen($text);
    echo "<p>Количество слов: $wordCount</p>";
    echo "<p>Количество символов: $charCount</p>";
}
?>
</body>