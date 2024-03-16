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


