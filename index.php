<html>
<head>
	<title>clase2 programacion3</title>
</head>
<body>


<br>
 <?PHP

   //include "alumno.php"; // puede repetir. Se usa para archivo que se pagan varias veces.
   //include_once "alumno.php";// solo una pega vez.
   require "alumno.php";
   //require_once
   include "mascota.php";

   echo("<h1>  Hola! </h1>");

   // variables
   $nombre = "pabigo";
   echo $nombre;

   // Ejemplos de concatenacion
   //1
   echo("<h1>  $nombre </h1>");
   //2
   echo("<h1>".$nombre."</h1>");
   //3
 	echo('<h1>  $nombre </h1>');

	echo "<br>";
 	// if
  	$numero  = 25;
  	if($numero>18){
  		printf("Es mayor de edad");
  	}else{
  		printf("Es menor de edad");
  	}	
  	echo "<br>";

  	//Array
  	$arrayNuevo = array(1, 2, 3,5);

  	
  	// for each
  	$arrayNuevo[]=66;	
  	$arrayNuevo[2]=55;	
  	foreach ($arrayNuevo as $num) {
  		echo $num."<br>";
  	}
  	echo "<br>";



    $arrayNuevo["apellido"] = "aaaaa";
  	$arrayNuevo["2"] = "2";



  	$arrayProducto = array("pizza" => 80, "paty" => 40, "coca" => 30 );
  	echo "valor del array: arrayProducto";
  	echo $arrayProducto ["pizza"]; // retorna el valor segun el indice

  	echo "<br>";


  	// funcion var_dump devuelve los valores del array 
  	echo "<br>";
  	echo "var_dump:";
  	var_dump($arrayProducto);
  	echo "<br>";
  	echo "<br>";
  	echo "<br>";

  	// funcion var_dump devuelve los valores del array 
  	echo "<br>";
  	echo "var_dump:arrayNuevo";
  	echo "<br>";
  	var_dump($arrayNuevo);
  	echo "<br>";
  	echo "<br>";


  	//Objetos

  	$miobjeto = new stdclass();
  	$miobjeto->nombre = "Pablo";
  //	$arrayDeObjetos->apellido = "igo";
  	$miobjeto->arrayProducto = $arrayProducto;
  	var_dump($miobjeto);
  	echo "<br>";
  	echo "<br>";

	$arrayDeObjetos = array();
	$arrayDeObjetos["nombre"] = "pablo";
	$arrayDeObjetos["apellido"] = "igo";
	$arrayDeObjetos["productos"] = $arrayProducto;
	var_dump($arrayDeObjetos);
  	echo "<br>";
  	echo "<br>";

  	// clases


	$nuevoALumno = new alumno();
	$nuevoALumno->cargarValor("pablo", "igo");	
	alumno::mostrarAlumno($nuevoALumno);  // llamar un metodo estatico sin instanciar
	//$nuevoALumno->mostrarAlumno($nuevoALumno);

?>

</body>
</html>