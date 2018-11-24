<html>
<head>
	<title>ejercicio 1 </title>

</head>
<BR>
<CENTER><EM><H1><EM><B>FUNCIONES DE MANEJO DE ARREGLO<B></EM> </H1></CENTER>
<body bgcolor="#303030">
	<body text="#ffffff">
	<body leftmargin="200">



		<hr size="5" color="FFFFFF" width="45%" align="left">


<?php

$nombres = array("yina3",   "natalia2",   "juan0",   "sebastian1");
sort($nombres);
foreach ($nombres as $clave => $valor) {
    echo "nombres[" . $clave . "] = " . $valor . "\n";
    echo "<br />";
}

?>



         <hr size="5" color="FFFFFF" width="45%" align="left">


         <?php
 $nombres = array("yina3", "natalia2", "juan0", "sebastian1");
 rsort($nombres);
 foreach ($nombres as $key => $val) {
    echo "$key = $val\n";
    echo "<br />";
}
?>

    <hr size="5" color="FFFFFF" width="45%" align="left">

  

    <?php
    
$entrada = array("1" => "paola", "natalia", "2" =>   "paola", "sebastian", "natalia");
$resultado = array_unique($entrada);
print_r($resultado);

?>



</body>

</html>







