<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    
<?php
echo "<link rel='stylesheet' href='style.css'>";
echo"<h1>ЗАВДАННЯ 2</h1>";
echo "

   <pre>  Полину в мрія в купель океану,
          Відчують <b>шовковистість</b> глибини,
     
    Чарівні мушлі з дна собі дістану,
     Щоб <i><b>взимку</b></i>
         <u>тішили</u>
             мене
                 вони...
                 </pre>
";

echo"<h1>ЗАВДАННЯ 3</h1>";

$a=1500;
$b=29;
$r = $a/$b;
$rez=(int)$r;
echo "$a грн. можна обміняти на $rez долар";

echo"<h1>ЗАВДАННЯ 4</h1>";

$month = mt_rand (1,12);

if($month == 12 || $month == 1 || $month == 2)

echo"Вам випав сезон - <b> Зима </b>";

else if($month == 3 || $month == 4 || $month == 5)

echo"Вам випав сезон - <b> Весна </b>";

else if($month == 6 || $month == 7 || $month == 8)

echo"Вам випав сезон - <b> Літо </b>";

else if($month == 9 || $month == 10 || $month == 11)

echo"Вам випав сезон - <b> Осінь </b>";

echo"<h1>ЗАВДАННЯ 5</h1>";

$sound= "а";

switch($sound){
    case "а": echo"Буква &#39;$sound&#39; - Голосний"; break;
    case "е": echo"Буква &#39;$sound&#39; - Голосний"; break;
    case "є": echo"Буква &#39;$sound&#39; - Голосний"; break;
    case "и": echo"Буква &#39;$sound&#39; - Голосний"; break;
    case "і": echo"Буква &#39;$sound&#39; - Голосний"; break;
    case "ї": echo"Буква &#39;$sound&#39; - Голосний"; break;
    case "о": echo"Буква &#39;$sound&#39; - Голосний"; break;
    case "у": echo"Буква &#39;$sound&#39; - Голосний"; break;
    case "ю": echo"Буква &#39;$sound&#39; - Голосний"; break;
    case "я": echo"Буква &#39;$sound&#39; - Голосний"; break;
    default: echo "Буква &#39;$sound&#39; - Приголосний"; break;
}

echo"<h1>ЗАВДАННЯ 6</h1>";

$randomNumber = rand(100, 999);

$sum = 0;
$number = $randomNumber;

echo "Число для маніпуляцій - $number<br><br>";
while ($number > 0) {
    $sum += $number % 10;
    $number = (int)($number / 10);
}
echo "Сума цифр числа - $sum<br><br>"; 

$reversedNumber = 0;
$number = $randomNumber;
while ($number > 0) {
    $reversedNumber = $reversedNumber * 10 + $number % 10;
    $number = (int)($number / 10);
}
echo "Зворотнє число - $reversedNumber<br><br>";

$digits = str_split((string)$randomNumber);
rsort($digits);
$maxPermutedNumber = (int)implode('', $digits);
echo "Найбільше число - $maxPermutedNumber<br><br>";


echo"<h1>ЗАВДАННЯ 7-1</h1>";

function generateColorTable($rows, $cols) {
    echo "<table border='1'>";
    for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $cols; $j++) {
            $color = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
            echo "<td style='background-color: $color; width: 50px; height: 50px;'></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

$rows = 5;
$cols = 5;

generateColorTable($rows, $cols);
?>


</body>
</html>


