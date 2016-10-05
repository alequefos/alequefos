<?php
$nota_numerica= $POST['notas'];

if ($nota_numerica < 5) {
    echo "INSUFICIENTE";
}elseif ($nota_numerica <6) {
    echo "SUFICIENTE";
}elseif ($nota_numerica <7) {
    echo "BIEN";
}elseif ($nota_numerica <8) {
    echo "NOTABLE";
}elseif ($nota_numerica <9) {
    echo "NOTABLE";
}elseif ($nota_numerica <10) {
    echo "SOBRESALIENTE";
}elseif ($nota_numerica ==10) {
    echo "MATRICULA";
}

