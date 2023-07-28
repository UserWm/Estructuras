<!-- En este ejercicio estaremos usando el uso del While -->
<!-- Que funciona mientras una condicion este validandose o mejor dicho sea True -->
<?php
echo " En este ejercicio notamos la funcionalidad del While <br>" ;
$x=1;
while($x<=5){
    echo "El bucle va en ".$x;
    echo "<br>";
    $x++;
}

echo " En este ejercicio notamos la funcionalidad del Do While <br>";
$xx=1;
do{
    echo "El bucle va en ".$xx;
    echo "<br>";
    $xx++;
}while($xx>=5)
//notese que condicion no se cumple pero como primero se hace lo que esta dentro del bucle 
//y luego se analiza.
?>