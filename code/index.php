<?php

$str = 'ahb acb aeb aeeb adcb axeb';
$pattern = '/a..b/';
preg_match_all($pattern, $str, $matches);

echo "Найденные строки:\n";

foreach ($matches[0] as $match) {
    echo $match . "\n";
}
