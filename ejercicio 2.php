<html>
<head>
	<title>operaciones con tabla </title>

<body bgcolor="#303030">
	<body text="#fffff">
	<body leftmargin="60">
	<font face"Tahoma">
    <font size="3">
    <body leftmargin="200">
    </head>

    <table border="1">
    	<caption> funciones predeterminadas PHP</caption>
    	<colgroup>

    	<col/>
    	<col/>
    	<col/>

        </colgroup>

        <thead>
        	<tr>
        		<th scope="col">funciones</th>
        		<th scope="col">matematicas</th>
        		<th scope="col">cadena</th>

        	</tr>

        </thead>
        <tfoot>
        	<tr>
        		<th scope="row">curso de PHP</th>

        		</tr>

        </tfoot>
        <tfoot>
        	<tr>
        		<th scope="row">printf()</th>
        		<td></td>
        		<td>x</td>
        	</tr>

        	<th scope="row">printf()</th>
        	<td></td>
            <td>x</td>
           </tr>

           <th scope="row">strtolower()</th>
        	<td></td>
            <td>x</td>
           </tr>

           <th scope="row">substr()</th>
        	<td></td>
            <td>x</td>
            </tr>

             <th scope="row">bcadd</th>
        	<td>x</td>
            <td></td>
            </tr>

            <th scope="row">bcmod</th>
        	<td>x</td>
            <td></td>

            </tr>

      </tfoot>
    </table>


            <?php
            $string="35.75 segundos";

            printf("%b en binario....<br>", $string);
            printf("%c segun Asccii....<br>", $string);
            printf("%d la parte entera....<br>", $string);
            printf("%1.1f decimalcon coma flotante redondeada....<br>", $string);
            printf("%o en base ocho....<br>", $string);
            printf("%s en string ....<br>", $string);

            echo"<br>";

             printf("%s en string ....<br>", $string);

             $matricula="AXH-56";
             echo"$matricula<br>";
             echo substr($matricula,3);
             echo"<br>";
             echo substr($matricula,0,3);



            ?>









      
