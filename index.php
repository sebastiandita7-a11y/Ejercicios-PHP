<?php
// ========= Ejercicio 1:Promedio de edades =======
echo "<h3> Ejercicio 1:Promedio de edades</h3>";
$edad1 = 30;
$edad2 = 28;
$edad3 = 18;

$promedio = ($edad1 + $edad2 + $edad3) / 3; 

echo "La edad promedio entre las tres personas es de: ". $promedio;

?>



<?php
//=========== Ejercicio 2==========
echo "<h3> Ejercicio 2:Ganancia del banco </h3>";
$capital = 3000;
$tasa = 0.02;
$ganancia = $ganancia = ($capital * $tasa);

echo "La ganancia despues de un mes es: ". $ganancia;

?>


<?php  
//=======Ejercicio 3=======
echo "<h3> Ejercicio 3:Sueldo con comisiones </h3>";
$sueldo_base = 2000000;
$venta1 = 150000;
$venta2 = 230000;
$venta3 = 50000;
$Tasa_Comision = 0.10;

$total_ventas = ($venta1 + $venta2 + $venta3);
$comision = ($total_ventas * $Tasa_Comision);
$total_recibido = ($sueldo_base + $comision);

echo "El total recibido del sueldo fijo con comisiones es: ". $total_recibido. "<br>";

echo "las comisiones por las tres ventas son de: ". $comision;
?>