<?php

	$num = isset($_GET['num'])?$_GET['num']:0;

	if ($num%10 ==0 || $num %2==0 || $num%5==0)
		echo "O número $num é divisível por 10 ou 5 ou 2";
	else
		echo "Não é divisível";
 ?>