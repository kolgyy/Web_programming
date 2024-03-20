<?php
// ------ Task 1 ------

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:

$order =& $very_bad_unclear_name; // Указали переменной ссылку на другую переменную
$order .= ' & 4 hamburgers'; // Произвели конкатенацию строк

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.\n"; // Будет выведена строка "15 chicken wings & 4 hamburgers" ,т.к. переменные указывают на одну и ту же область в памяти

// ------ Task 2 ------

$friday = 13; // Int
echo $friday;
echo "\n";

$pi = 3.14; // Float
echo $pi;
echo "\n";

echo --$friday; // Вывели 12 на консоль.
echo "\n";

$last_month = 1187.23;
$this_month = 1089.98;

echo "Difference: ".($last_month - $this_month); // Вывели разницу на консоль
echo "\n";

// ------ Task 11 ------

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_languages = $days / $num_languages; // Нашли среднее арифметическое
echo $days_per_languages, "\n";

// ------ Task 12 ------

echo 8**2;
echo "\n";

// ------ Task 13 ------

$my_num = 7;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
echo "\n";

// ------ Task 14 ------

// Работа с %:
$a = 10;
$b = 3;
$remainderOfdivision = $a % $b;

if ($remainderOfdivision == 0) // Если делится, то выводим сообщение
    echo "Делится\n";
else
    echo "Делится с остатком $remainderOfdivision\n"; // Если не делится, то выводим остаток

// Работа со степенью и корнем
$st = pow(2, 10);

$result = sqrt(245); // Результат от корня квадратного из 245

$arr = [4, 2, 5, 19, 13, 0, 10];
$sum_sqrt = 0;
foreach ($arr as $value)
    $sum_sqrt += pow($value, 2);
$sum_sqrt = sqrt($sum_sqrt);

echo $st, "\n"; // 2 в степени 10.
echo $result, "\n"; // Корень из 245
echo $sum_sqrt, "\n"; // Корень из суммы квадратов элементов массива

// Работа с функциями округления
$sqrt_res_1 = sqrt(379); // Квадратный корень из 379
$sqrt_round_1 = round($sqrt_res_1, 0); // Результат до целых
$sqrt_round_2 = round($sqrt_res_1, 1); // Результат до десятых
$sqrt_round_3 = round($sqrt_res_1, 2); // Результат до сотых

// Вывод результатов округления
echo $sqrt_round_1, "\n"; //
echo $sqrt_round_2, "\n"; //
echo $sqrt_round_3, "\n"; //

$sqrt_res_2 = sqrt(587);
$sqrt_floor = floor($sqrt_res_2); // Округление в меньшую сторону
$sqrt_ceil = ceil($sqrt_res_2); // Округление в большую сторону
$arr = ['floor' => $sqrt_floor, 'ceil' => $sqrt_ceil]; // Запись результатов в ассоциативный контейнер - массив.

// Работа с min и max
$arr2 = [4, -2, 5, 19, -130, 0, 10];
$min = min($arr2);
$max = max($arr2);

// Работа с рандомом
echo rand(1, 100), "\n"; // Выводим случайное число от одного до ста

$arr_rand = []; // Заполняем массив десятью случайными числами
for ($i = 0; $i != 10; ++$i)
    $arr_rand[] = rand();


// Работа с модулем
// Проверяем работу с разными значениями
$a = 5;
$b = 15;
echo abs($a - $b), "\n";
$a = 0;
$b = -10;
echo abs($a - $b), "\n";
$a = -20;
$b = -3;
echo abs($a - $b), "\n";
// Преобразуем элементы массива в новый массив, сделав их положительными.
$arrayOfNumbers = [1, 2, -1, -2, 3, -3];
$newArrayOfNumbers = [];
foreach ($newArrayOfNumbers as $value)
    $newArrayOfNumbers[] = abs($value);

// Общее: делители числа
$number = 30;
$dividers = [];
for ($i = 1; $i <= $number; $i++)
    if ($number % $i == 0)
        $dividers[] = $i;

var_dump($dividers); // Выводим массив с делителями числа 30

// Общее: сумма элементов
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
foreach ($numbers as $num) {
    $sum += $num;
    $count++;
    if ($sum > 10) {
        break;
    }
}
echo "Количество элементов для суммы больше 10: $count \n";

// ------ Task 15 ------
function printStringReturnNumber(){
    echo "Function works!", "\n";
    return 77;
}
$my_num = printStringReturnNumber(); // Вызвали функцию
echo $my_num, "\n"; // Вывели значение на консоль

// ------ Task 16 ------

function increaseEnthusiasm($string)
{
    return $string.'!'; // Возвращаем строку с прибавленным восклицательным знаком
}
echo increaseEnthusiasm("Hello, world"), "\n";

function  repeatThreeTimes($string) // Функция, повторяющая строку три раза
{
    return $string.$string.$string;
}
echo repeatThreeTimes("_GO_"), "\n";

echo increaseEnthusiasm(repeatThreeTimes("_LOVE_IS_PAIN_")), "\n";

function cut($string, $length = 10)
{
    return substr($string, 0, $length);
}

$arr5 = [7, 12, 55, 9, -5, 0, 3, 31];
function printArray($array, $offset = 0)
{
    if ($offset < count($array)) {
        echo $array[$offset], "\t";
        printArray($array, ++$offset);
    }
}
printArray($arr5);

function countDigits($number)
{
    $num_sum = array_sum(str_split($number));

    $result = 0;
    if ($num_sum > 9)
        $result = countDigits($num_sum);
    else
        $result = $num_sum;

    return $result;
}

function printElementsRecursively($array, $index = 0) {
    if ($index < count($array)) {
        echo $array[$index] . "\n";
        printElementsRecursively($array, $index + 1);
    }
}
$array = [1, 2, 3, 4, 5];
printElementsRecursively($array);

function sumDigits($number) {
    $sum = array_sum(str_split($number));
    if ($sum > 9) {
        return sumDigits($sum);
    } else {
        return $sum;
    }
}

echo sumDigits(777), "\n";

// ------ Task 17 ------

$x_arr = [];
for ($i = 1; $i != 5; $i++)
    $x_arr[] = str_repeat('x', $i);

function arrayFill($value, $count)
{
    $arr_fill = [];
    for ($i = 0; $i != $count; $i++)
        $arr_fill[] = $value;
    return $arr_fill;
}

$pl_arr = [[1, 2, 3], [4, 5], [6]];
$pl_sum = 0;
foreach ($pl_arr as $line_arr)
    foreach ($line_arr as $pl_num)
        $pl_sum += $pl_num;


$result_arr = [];
for ($i = 0; $i != 3; $i++)
{
    $result_sub_arr = [];
    for ($j = 1; $j != 4; $j++)
        $result_sub_arr[] = $j + 3*$i;
    $result_arr[] = $result_sub_arr;
}

$arrayOfFour = [2, 5, 3, 9];
$result = $arrayOfFour[0] * $arrayOfFour[1] + $arrayOfFour[2] * $arrayOfFour[3];
echo "\n", $result, "\n";

$user = ['name' => 'Edward', 'surname' => 'Korotaev', 'patronymic' => 'Edwardovich'];
echo $user['name'] . ' ' . $user['surname'] . ' ' . $user['patronymic'], "\n";

$date = ['year' => date('2024'), 'month' => date('3'), 'day' => date('16')];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day'], "\n";

$arrayOfLetters = ['a', 'b', 'c', 'd', 'e'];
echo count($arrayOfLetters), "\n";

echo $arrayOfLetters[count($arrayOfLetters) - 1], "\n";
echo $arrayOfLetters[count($arrayOfLetters) - 2], "\n";

// ------ Task 18 ------
function checkSum($num_a, $num_b)
{
    return ($num_a + $num_b > 10);
}
function checkEqual($num_a, $num_b)
{
    return ($num_a == $num_b);
}

$test = rand(0,1);
echo ($test == 0) ? 'верно' : '';
echo "\n";

$age = rand(0, 120);
if ($age < 10 || $age > 99) {
    echo "Число вне диапазона.";
} else {
    $sum = array_sum(str_split($age));
    if ($sum <= 9) {
        echo "Сумма цифр однозначна.";
    } else {
        echo "Сумма цифр двузначна.";
    }
}
echo "\n";


$arrayOfThree = [1, 2, 3];
if (count($arrayOfThree) == 3) {
    echo array_sum($arrayOfThree);
}







