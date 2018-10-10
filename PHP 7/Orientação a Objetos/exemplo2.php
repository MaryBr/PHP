<?php


	class Assinatura
	{
		
		private $id;
		private $id_cliente;
		private $titulo;
		private $valor;

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

	$AssinaturaUsuario = new Assinatura();
	$AssinaturaUsuario-> setId(1);
	$AssinaturaUsuario->setValor(75.9);
	$AssinaturaUsuario->setTitulo("Ass. Vip");
	$AssinaturaUsuario->setIdCliente(4);
	var_dump($AssinaturaUsuario);



?>