<?php

	$juca = 1.1;
	$chico = 1.5;
	$ano = 0;

	while ($juca <$chico)
	{
		$juca+= 0.03;
		$chico += 0.02;
		$ano++;
	}
	echo "Em $ano anos, Juca será maior do que Chico. Juca terá $juca de altura e Chico terá $chico de altura"

?>