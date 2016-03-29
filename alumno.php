	<?PHP


	class alumno
	{
		public $nombre;
		public $apellido;		

		private function mostrar (){
			echo "<br>";
			echo "nombre y apellido";
			echo "<br>";
			echo $this->nombre;
			echo "<br>";
			echo $this->apellido;
			echo "<br>";
		}

		function cargarValor($name, $ape){			
			$this->nombre = $name;
			$this->apellido = $ape;
		}


		public static function mostrarAlumno($unALumno)
		{
			$unALumno->mostrar();
		}
	}  	

	?>

