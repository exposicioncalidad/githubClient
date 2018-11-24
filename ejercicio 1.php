<html>
<head>
	<title>ejercicio 1 </title>

</head>

<body bgcolor="#303030">
	<body text="#A0A0A0">
	<body leftmargin="200">

		<hr size="9" color="FFFFFF" width="30%" align="left">


<?php

    echo"iniciando con php";

       $x=9;
       $z=10;

       $sumar=$x+$z;
       echo"<br>";

      if($sumar==19){

      ?>
      <font face"Tahoma">
      	<font size="5">
      		<?php

      		echo"suma incorreta $sumar";

      		}
      		else{
      			echo "suma incorreta $sumar";


      		}
      		echo"<br>";
      		 for($i=0;$i<=10;$i++){

      		 	echo"<br>";

      		 	echo"$i";


      		 }

      		 $resultado=suma(10,10);

      		 echo"<br>";

      		 echo "$resultado";


      		 function suma($x,$y){


      		 	$z=$x+$y;
      		 	return $z;

      		 }

      		 function variables(){

      		 $x=200;

      		 }
      		 variables();

      		 echo"<br>";
      		 echo"variable global $x";

      		 echo"<br>";
      		 echo"el resultado de la suma $resultado";


      		?>

      		<?php

      		 for($i=0;$i<=255;$i++){
      		 	$asc=chr($i);
      		 	echo"<br>";
      		 echo"ASCII $i  $asc";

      		  }

      		  $scand="estudiando php";
      		  echo (strtoupper($cad));

      		  ?>

      		  <hr size="10" color="FFFFFF" width="30%" align="left">


 </body>

</html>
