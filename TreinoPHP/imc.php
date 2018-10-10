<?php 


	class IMC
	{
		public $peso;
		public $altura;

		function __construct($p, $a)
		{
			$this->peso=$p;
			$this->altura=$a;
		}
		
		function setPeso($p)
		{
			$this->peso=$p;
		}
		function setAltura ($a)
		{
			$this->altura=$a;
		}
		function calculo_imc()
		{
			$imc;
			$imc= $peso/pow($altura, 2);

			if($imc<20)
				echo "Abaixo do peso";
			if($imc>=20 && $imc<25)
				echo "Peso normal";
			if ($imc>=25 && $imc<30) {
				echo "Excesso de peso";
			}
			if ($imc>=30 &&$imc<35) {
				echo "Obesidade";
			}
			if ($imc>=35) {
				echo "Obesidade Morbida";
			}
		}

	}
	$calculo = new IMC(60, 160);
	$calculo-> peso = 60;
	$calculo-> altura=1.60;
	$calculo->calculo_imc();


 ?>