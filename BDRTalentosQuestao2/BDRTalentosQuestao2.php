<?php
//Questão 2:
//Na questão 2 achei que seria melhor refatorado se as duas intruções de if 
//fossem transformadas em uma, com o operador lógico "OR".
//
    if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin']) || 
            (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'])) {
        header("Location: http://www.google.com");
        exit();
    }     
?>