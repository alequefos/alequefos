<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$frase = $_POST['frase'];
$num = $_POST['num'];

for($i=1;$i<=$num;$i++){
    echo "$i -> $frase <br>\n";
}