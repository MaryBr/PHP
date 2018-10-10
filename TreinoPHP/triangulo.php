<!DOCTYPE html>
<html>
	<head>
		<title>Triangulo PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$a =isset($_GET["a"])?$_GET["a"]:0;
			$b =isset($_GET["b"])?$_GET["b"]:0;
			$c =isset($_GET["c"])?$_GET["c"]:0;

			if(($a>0 && $b>0)&& $c>0)
			{
				if (($a==$b ||$b==$c) || $a==$c) {
					echo "O triangulo é isósceles";
				}
				elseif ($a==$b && $b==$c) {
					echo "O triângulo é equilátero";
				}
				elseif (($a!=$b && $b!=$c)&& $a!=$c) {
					echo "O triângulo é escaleno";
				}
			}
			else
				echo "Os valores informados não formam um triângulo.";

		?>
		<a href="triangulo.html"><em>Voltar</em></a>
	</body>
</html>