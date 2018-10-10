<?php

class Calculadora
{
	
	function calculo()
	{
		if(isset($_POST["resultado"]))
		{
				$num1 = $_POST["num1"];
				$num2 = $_POST["num2"];
				$op = $_POST["operador"];
				
				$result=0;
		
				switch ($op) {
					case '+':
						$result=$num1 + $num2;
						return $result;
						
						
					case '-':
						$result=$num1 - $num2;
						return $result;
					
						break;
					case '*':
						$result=$num1 * $num2;
						return $result;
				
						break;
					case '/':
						if ($num2==0) {
							/* "Não existe divisão por zero.";*/
							return -1;
						}
						$result=$num1 /$num2;
						return $result;
						break;
				}
			}
	}
}

	 # Instancia a classe CALCULADORA()
        $calcular = new Calculadora();

        # Executa a função
         $var= $calcular->calculo();
         echo "O resultado da operação é: $var.";

?>