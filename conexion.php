<?php
		class rueda
		{
			public $nombre;
			
			function __construct($nombre)
			{
				$this -> nombre = $nombre;
			}
		}
		
		class moto 
		{
			public $marca;
			public $ruedas = array();
			
			//constructor de copia para moto
			//$that referencia al objet original
			//$this referencia al objeto clonado
			
			function __clone()
			{
				$this -> ruedas['del'] = new rueda($that -> ruedas['del'] -> nombre);
				$this -> ruedas['tras'] = new rueda($that -> ruedas['tras'] -> nombre);
			}
	    }
		
		//Creamos 2 ruedas y una moto
		
		$rueda_del_mich = new rueda("delantera_michelin");
		$rueda_tras_mich = new rueda("trasera_michelin");
		
		$yamaha_R1 = new moto();
		
		$yamaha_R1 -> marca = "YAMAHA R1";
		$yamaha_R1 -> ruedas['del'] = $rueda_del_mich;
		$yamaha_R1 -> ruedas['tras'] = $rueda_tras_mich;
		
		//Clonamos la moto
		
		$yamaha_R1_bis = $yamaha_R1 -> __clone();
		echo "R1".$yamaha_R1_bis -> marca;

//esto es modificado
		
?>
