<?php 
     if($_POST){
     	foreach ($_POST as $clave => $valor) {
     		
     		echo "El valor de $clave es: $valor <br/> \n";

     		//calcula los datos que pasa por el formulario y se catura con POST
     	}
     }
 ?>

 <?php 
     $alimentos = array("Frutas"=>array("Mango","Banano","Manzana","Naranja"),
        "Verdura"=> array("Tomate","Zanahoria","Lechuga"));
     echo ($alimentos["Verdura"][0]);

     while (list ($clave1)=each($alimentos)) {
     	echo "$clave1 <br>";

     	while (list($clave2,$valor)=each($alimentos["$clave1"]))
     	 {
     	    echo "-$valor<br>";	
     	 }
     }
  ?>