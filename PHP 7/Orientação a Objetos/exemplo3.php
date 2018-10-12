<?php


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

	$AssinaturaUsuario = new Assinatura(1, 4, "Ass. Vip", 75);
	/*$AssinaturaUsuario-> setId(1);
	$AssinaturaUsuario->setValor(75.9);
	$AssinaturaUsuario->setTitulo("Ass. Vip");
	$AssinaturaUsuario->setIdCliente(4);*/
	//var_dump($AssinaturaUsuario);

	$AssinaturaUsuario->exibeAssinatura();

?>