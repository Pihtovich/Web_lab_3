<?php
//1.a
$str = 'ahb acb aeb aeeb adcb axeb';
$pattern = '/a..b/';
preg_match_all($pattern, $str, $matches);

echo "Найденные строки:\n";
foreach ($matches[0] as $match)
{
    echo $match."\n";
}
echo "<br>";
echo "\n";

//1.b
$input = 'a4b2c3';
echo "Строка до преобразования: ".$input."\n";
echo "<br>";
echo "\n";
$regex = '/(\d+)/';

$replace = function ($matches)
{
    return pow($matches[1], 3);
};

$output = preg_replace_callback($regex, $replace, $input);
echo "Строка после преобразования: ".$output."\n";