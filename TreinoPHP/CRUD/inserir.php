<?php


?>
<meta charset="utf-8">
<form name="dadosPessoa" method="POST" action = "conexao.php"> 

	<table border="1">
		<tbody>
			<tr>
				<td>Nome: </td>
				<td><input type="text" name="nome"></td>
			</tr>
			<tr>
				<td>Nascimento: </td>
				<td><input type="date" name="nascimento"></td>
			</tr>
			<tr>
				<td>Telefone: </td>
				<td><input type="text" name="telefone"></td>
			</tr>
			<tr>
				<td>Endereço: </td>
				<td><input type="text" name="endereco"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="acao" value="inserir"></td>
				<td><input type="submit" name="enviar" value="enviar"></td>
				
			</tr>
		</tbody>
		
	</table>

</form>
