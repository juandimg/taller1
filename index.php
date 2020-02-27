<?php

echo("Taller elaborado por Juan Diego Montes <br>");
echo("punto 1");

$numero1=10;
$numero2=25;

$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;

echo("<br>La suma de: ".$numero1."+".$numero2."=".$suma);

echo("<br>La resta de: ".$numero1."-".$numero2."=".$resta);

echo("<br>La multiplicacion de: ".$numero1."*".$numero2."=".$multiplicacion);

echo("<br>La division de: ".$numero1."/".$numero2."=".$division );


echo("<br><br>punto 2");

echo ("<br><br>Ejercicio 2 <br>");
$altura=1.78;
$peso=85;
$imc=$peso/($altura*$altura);

echo("Señor Usuario su Estatura es de :".$altura."m y su peso es de:".$peso."kg");



if($imc<= 18.4) {
echo("<br>  Su indice de masa corporal es de.$imc por lo tanto tienes insuficiencia de peso");
}else if($imc >= 18.5 && $imc <= 24.9   ){
    echo("<br>  Su indice de masa corporal es de$imc por lo tanto su Peso Normal"); 
}else if($imc >= 25 && $imc <= 29.9   ){
    echo("<br>  Su indice de masa corporal es de $imc por lo tanto tienes sobrepeso");  
}else if($imc >= 30 && $imc <= 34.9   ){
    echo("<br>  Su indice de masa corporal es de $imc por lo tanto tienes obesidad 1");  
}else if($imc >= 35 && $imc <= 39.9   ){
    echo("<br>  Su indice de masa corporal es de $imc por lo tanto tienes obesidad 2");  
}else {
    echo("<br>  Su indice de masa corporal es de $imc por lo tanto tienes obesidad 3");  
}


echo ("<br><br>Ejercicio 3 <br>");

$cantidadZapatos = 5;
$valorZapatos = 150000;
$totalCompra = $cantidadZapatos*$valorZapatos;
$vdescuento =0;
$descuento = 0 ;
$valorPagar =$totalCompra-$vdescuento;


if ($cantidadZapatos==3){
    $vdescuento = $totalCompra * 0.10;
    $descuento = 10;
}else if($cantidadZapatos>3 && $cantidadZapatos<=5){
    $vdescuento = $totalCompra * 0.20;
    $descuento = 20;
}else if($cantidadZapatos >5){
    $vdescuento = $totalCompra * 0.40;
    $descuento = 40;
}
echo("Cantidad Vendida: ".$cantidadZapatos."<br> Valor zapatos: ".$valorZapatos."<br> Costo Neto: ".$totalCompra.
"<br> Descuento es: ".$descuento."%<br> Valor del Descuento:".$vdescuento."<br> Valor a Pagar es:".$valorPagar);



















?>