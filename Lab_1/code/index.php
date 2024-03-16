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


