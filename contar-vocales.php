<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$contar = $_POST['contar'];
$vocales = 0;

for($i=0;$i<strlen($contar);$i++){
    switch($contar[$i]){
        case 'a':
        case "e":
        case "i":
        case "o":
        case "u": $vocales++;
            break;
    }
}
echo "El total de vocales es: $vocales";
