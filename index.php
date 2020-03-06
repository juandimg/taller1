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



echo ("<br><br>Ejercicio 4 <br>");



$sdevengado=0;
$hTrabajadas=36;
$vHora=20000;
$vExtras=25000;
$hExtras=$hTrabajadas-40;
$sdevengadoe=$hTrabajadas*$vExtras;





if($hTrabajadas <=40){
    $sdevengado=$vHora*$hTrabajadas;
    echo("Numero de horas trabajadas: ".$hTrabajadas."<br> Sueldo recibido: ".$sdevengado);

    
}else {
    echo("Numero de horas trabajadas Extras: ".$hExtras."<br> Sueldo recibido: ".$sdevengadoe);
}


echo ("<br><br>Ejercicio 5 <br>");

$persona1=Juan Diego;
$persona2=Maria;
$persona3=Luis;
$persona4=Karen;
$persona5=Felipe;
$telefono1=3125896478;
$telefono2=3112056336;
$telefono3=3155569876;
$telefono4=3225896332;
$telefono5=3135598763;
$direccion1=calle65#32;
$direccion2=calle49#66;
$direccion3=calle56#57;
$direccion4=calle36#28;
$direccion5=calle62#55;
$salario1=1500000;
$salario2=3000000;
$salario3=2600000;
$salario4=3200000;
$salario5=1550000;
$totalsalario=$salario1+$salario2+$salario3+$salario4+$salario5;



































?>