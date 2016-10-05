<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$frase = $_POST['frase'];
$vocal = 0;

for($i=0;$i<strlen($frase);$i++){
    switch($frase[$i]){
        case 'a':
        case "e":
        case "i":
        case "o":
        case "u": $vocal++;
            break;
    
}
}
for($i=1;$i<=$vocal;$i++){
        echo "$frase <br>\n";
}