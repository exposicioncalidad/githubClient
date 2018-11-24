<html>
<head>
	<title>ejercicio 1 </title>

</head>
<BR>
<CENTER><EM><H1><EM><B>FUNCIONES DE split<B></EM> </H1></CENTER>
<body bgcolor="#303030">
	<body text="#A0A0A0">
	<body leftmargin="200">



		<hr size="5" color="FFFFFF" width="45%" align="left">
<?php

   $ip = "yina.paola.gonzalez.rodriguez"; // some IP address
   $iparr = split ("\.", $ip); 
   
   print "$iparr[0] <br />";
   print "$iparr[1] <br />" ;
   print "$iparr[2] <br />"  ;
   print "$iparr[3] <br />"  ;

?>

</body>

</html>