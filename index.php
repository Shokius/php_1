<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
    // Task 1

    $a = 10;
    $b = 2;

    echo $a + $b . '<br/>';
    echo $a - $b . '<br/>';
    echo $a * $b . '<br/>';
    echo $a / $b;
    echo '<hr/>';
    
    // Task 2

    $x = 2;
    $y = 6;
    $z = 9;
    $a = ($x + 1) * 4 - 2 * ($z - 2 * $x ** 2 + $y ** 2);

    echo $a;
    echo '<hr/>';
        
    // Task 3

    $a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;

    echo $result;
    echo '<hr/>';
    
    // Task 4

    $text1 = 'Привет, ';
    $text2 = 'Мир!';

    echo "{$text1} {$text2}";
    echo '<hr/>';

    // Task 5

    $name = 'Паша';

    echo "Привет, $name!";
    echo '<hr/>';
    
    // Task 6

    $num = '12345';

    echo $num{0} + $num{1} + $num{2} + $num{3} + $num{4};
    echo '<hr/>';

    // Task 7

    $minutes = 60;
    $hour = $minutes * 60;
    $day = $hour * 24;
    $month = $day * 31;
    $year = $month * 12;
    $year_2000 = $year * 20 + $month * 6 + $day * 22;

    echo $year_2000;
    echo '<hr/>';

    // Task 8

    $second = 32;
    $minute = 55;
    $hour = 19;

    echo "$hour:$minute:$second";
    echo '<hr/>';
   
    // Task 9

    $var = 1;
    $var += 12;
    $var -= 14;
    $var *= 5;
    $var /= 7;
    $var += 1;
    $var -= 1;

    echo $var;
    echo '<hr/>';

    // Task 10

    define('CONST_VARNAME', 'Песецкий');
    $name = 'Паша';
    $patronymic = 'Николаевич';
    $age = 25;

    if (defined('CONST_VARNAME') == true) {
        echo '"Меня зовут ' . CONST_VARNAME . " ($name[0].$patronymic[0].).<br/>Мне $age лет.\"";
    }

    ?>

</body>
</html>