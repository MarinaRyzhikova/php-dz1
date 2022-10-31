<?php
echo __LINE__ . PHP_EOL;
echo __FILE__ . PHP_EOL;

$newvariable = <<<END
    1 строка
        2 строка 
        3 строка
END;

echo $newvariable;

$a='Рыба';
$b='человек';
echo "$a рыбою сыта, а $b человеком";

