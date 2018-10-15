<?php

	class Util
	{
		
		public static function trataValor($valor)
		{
			return "R$".number_format($valor,2,',','.');/* 2 é quantidade de casas após a vírgula. Onde há . (ponto) troca-se por vírgula*/
		}
	}
?>