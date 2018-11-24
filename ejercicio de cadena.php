<html>
<head>
	<title>ejercicio 1 </title>

</head>
<BR>
<CENTER><EM><H1><EM><B>FUNCIONES DE CADENA<B></EM> </H1></CENTER>
<body bgcolor="#303030">
	<body text="#A0A0A0">
	<body leftmargin="200">



		<hr size="5" color="FFFFFF" width="45%" align="left">


<?php 
$texto = "Yina Paola Gonzalez.";
echo str_replace("gonzalez", "natalia", $texto);
echo "<br />";
echo $texto;
?>




<hr size="5" color="FFFFFF" width="45%" align="left">



<?php 
$cadena = "EstO Es un traBAjo de algoRTImo";
echo strtolower($cadena);
echo "<br />";
echo strtoupper($cadena);
echo "<br />";
?>



<hr size="5" color="FFFFFF" width="45%" align="left">



<?php 
$cadena = 'algoritmo';
$miArray = count_chars ( $cadena, 1);
foreach ($miArray as $indiceNum => $veces) {
   echo 'lectra: '.chr($indiceNum).' , encontrada '.  $veces.' veces<br/>';
   echo "<br />";

}
?>




 </body>

</html>