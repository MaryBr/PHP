<?php
	/**
	 * 
	 */
	class Usuario
	{
		public $id;
		public $nome;
		public $email;
		private $senha;
		public $tel;

		public function alteraSenha($senha)
		{
			$this->senha=md5($senha); /* md5 criptografa a senha*/
		}
	
	}
	class Admin extends Usuario
	{
		
		
	}
	/**
	 * 
	 */
	class Gerente extends Usuario
	{
		
		
	}

	/**
	 * 
	 */
	class Vendedor extends Usuario
	{
		
	}

	class Cliente extends Usuario
	{
		public $assinante;
		
		public function exibeNome()
		{
			return 'Nome: '.$this->nome ; /* . = concatenação*/

		}
		
	}

	class Assinatura
	{
		
		private $id;
		private $id_cliente;
		private $titulo;
		private $valor;

		public function __construct( $id =null, $id_cliente=null, $titulo=null, $valor=null)
		{/*o null foi colcado para evitar que ocorra um erro caso alguma das variáveis nao sejam informadas*/

			$this->id=$id;
			$this->id_client=$id_cliente;
			$this->titulo=$titulo;
			$this->valor = $valor;

		}
		public function exibeAssinatura()
		{
			$html = "<p>";
			$html .= "<br>ID: $this->id</br> ";
			$html .= "</p>";

			$html .= "<p>";
			$html .= "<br>ID Cliente: $this->id_client</br> ";
			$html .= "</p>";

			$html .= "<p>";
			$html .= "<br>Titulo: $this->titulo </br> ";
			$html .= "</p>";

			$html .= "<p>";
			$html .= "Valor: ". $this->trataValor($this->valor);/* dentra das aspas duplar nao é preciso concatenar. Fora das aspas duplas, sim.*/
			$html .= "</p>";

			echo $html;
		}
		private function trataValor($valor)
		{
			return "R$".number_format($valor,2,',','.');/* 2 é quantidade de casas após a vírgula. Onde há . (ponto) troca-se por vírgula*/
		}

		public function setId($valor)
		{
			$this->id=$valor;
		}
		public function getId()
		{
			return $this->id;
		}

		public function setIdCliente($valor)
		{
			$this->id_client=$valor;
		}
		public function getIdCliente()
		{
			return $this->id_client;
		}

		public function setTitulo($valor)
		{
			$this->titulo=$valor;
		}
		public function getTitulo()
		{
			return $this->titulo;
		}

		public function setValor($valor)
		{
			$this->valor=$valor;
		}
		public function getValor()
		{
			return $this->valor;
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


	$AssinaturaUsuario = new Assinatura(1, $maria->id, "Ass. Vip", 85.90);

	$murilo = new Admin(); /*objeto*/
	$maria->id =2;
	$murilo->nome= "Murilo";
	$murilo->email = "murilo@email.com";
	$murilo->tel = "56744";
	$murilo->alteraSenha('126');

	var_dump($murilo);

	/*$AssinaturaUsuario-> setId(1);
	$AssinaturaUsuario->setValor(75.9);
	$AssinaturaUsuario->setTitulo("Ass. Vip");
	$AssinaturaUsuario->setIdCliente(4);*/
	//var_dump($AssinaturaUsuario);

	$AssinaturaUsuario->exibeAssinatura();




	

?>