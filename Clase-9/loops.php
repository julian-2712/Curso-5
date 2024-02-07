<?php

$age = readline("Insert here your age: ");

if ($age >= 18) {
    echo "You are over 18.\n";
} elseif ($age < 18 && $age >= 1) {
    echo "You are not over 18.\n";
} else {
    echo "Wrong age inserted.\n";
}


$loginInput = readline("Would you like to log in? (y/n): \n");
$login = strtolower($loginInput) === 'y' ? true : false;

switch ($login) {
    case true:
        echo "Welcome!\n";
        break;
    case false:
        echo "You didn't log in.\n";
        break;

    default:
        echo "Log in, please.\n";
        break;
}


$numbers = [1,2,3,4,5];
foreach ($numbers as $index => $value) {
     echo "{$index} => {$value}";
     echo "\n";
} 

$a = 1;
while ($a <= 10) {
    echo "The number is: " . $a ."\n";
    $a++;
}

// We will use this one when we want to go through the loop at least once
$b = 7;
do {
    echo "The number is: " . $b ."\n";
    $b++;
} while ($b <= 10);

for ($i = 0; $i < 10; $i++) { 
    echo "Your number is: " . $i ."\n";
}