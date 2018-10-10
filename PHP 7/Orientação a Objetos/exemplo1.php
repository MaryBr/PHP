<?php

	class Cliente
	{
		public $nome;
		public $id;
		public $email;
		private $senha;
		public $tel;
		public $assinante;
		
		public function exibeNome()
		{
			return 'Nome: '.$this->nome ; /* . = concatenação*/

		}
		public function alteraSenha($senha)
		{
			$this->senha=md5($senha); /* md5 criptografa a senha*/
		}
	}
	$maria = new Cliente(); /*objeto*/
	$maria->nome= "maria";
	$maria->email = "email@email.com";
	//$maria->senha = "123456";
	$maria->alteraSenha('123456');
	$maria->assinante = true;
	$maria->tel = "5643354144";
	$maria->id =1;
	echo $maria->exibeNome();

	var_dump($maria) /*mostra as propriedades do objeto*/
?>