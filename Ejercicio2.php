<!--En el siguiente ejercicio trabajamos con estructura de decisión ElseIF. -->
<!-- En este caso trabajaremos un ejercicio similar donde distiga por edad si
es niño adolecente o un adulto, Notese que la condicional lleva un orden. -->
<?php
$nombre="Juan Perez";
$edad="50";// variable a modificar para nota su funcionamiento.

if ($edad <= 7){
echo $nombre." es un niño";
}elseif ($edad >7 and $edad <=18){
    echo $nombre." es un adolecente";
}elseif($edad >18 and $edad <=22){
    echo $nombre. " es un adulto";
}
else {
    echo $nombre." es un chavoruco";
}
?>