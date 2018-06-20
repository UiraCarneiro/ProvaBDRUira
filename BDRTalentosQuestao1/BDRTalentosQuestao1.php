<?php
//Questão 1:

    for ($numero = 1; $numero <= 100; $numero++) {
        if ($numero%3 == 0 && $numero%5 == 0) echo "FizzBuzz \n";
        else if ($numero%3 == 0) echo "Fizz \n";
        else if ($numero%5 == 0) echo "Buzz \n";
        else echo $numero."\n";
    }
?>
