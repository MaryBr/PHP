<?php 

	$numero = array(1,2,3,4,5,6,7,8,9,10,11,21,13,41,51,16,17,18,19,20);
	$maior=0; 
	$menor=9999999999999;
	$media =0;
	$soma=0;
	foreach ($numero as $key) {
			if ($key> $maior)
				$maior = $key;
			if ($key <$menor)
				$menor=$key;

			$soma+= $key;
			$media = $soma/20;
		
	}
	echo "O maior elemento do vetor é: $maior, o menor $menor.";
	echo "<br>Media: $media";
?>