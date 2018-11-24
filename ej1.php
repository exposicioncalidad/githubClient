<?php
class Animal{
	public $especie;
	public $raza;

	function __construct ($especie,$raza)
	{
		$this->especie = $especie;
		$this->raza = $raza;

	}

	function fullAnimal(){


		return $this->especie.''.$this->raza;
	}
}

$animal= new Animal('Perro ','Pincher');
$animal2=new Animal ('Caballo ','Percheron');

echo"{$animal->fullAnimal()}";
echo "<br>";
echo"{$animal2->fullAnimal()}";

?>
