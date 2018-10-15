<?php
	
	class siteInfo
	{
		public static $nome = "Meu site";
		public static $descricao = "Site de vendas";
	}
	
	class Util
	{
		
		public static function trataValor($valor)
		{
			return "R$".number_format($valor,2,',','.');/* 2 é quantidade de casas após a vírgula. Onde há . (ponto) troca-se por vírgula*/
		}
	}

	interface IUsuario/*a interface informa quais métodos devem ser implementados*/
	{
		public function alteraSenha($senha);
		public function getNome(); 
		public function getTelefone(); 
	}

	abstract class Usuario implements IUsuario/* como não é criado um objeto, como essa classe só é utilizada como um modelo para criar outras classe que serão utilizadas parta criar objeto, logo podemos chamar essa classe de classe abstrata*/
	{
		public $id;
		public $nome;
		public $email;
		protected $senha;
		public $tel;

		public function alteraSenha($senha)
		{
			$this->senha=md5($senha); /* md5 criptografa a senha*/
		}
		public function getTelefone()
		{
			return $this->tel;
		}
	
		abstract public function getNome(); /*isso força às classes que herdam "Usuário" a implementarem o  metodo getNome, caso contrário acontecerá algum erro.*/
	}
	class Admin extends Usuario implements IUsuario
	{
		public function setSenha($senha)//método
		{
			$senha = $senha.$this->email;
			//Usuario::alteraSenha($senha);
			parent::alteraSenha($senha);/*Parent é a classe "pai". Usando o parent eu não preciso colocar o nome da classe principal.*/
		}
		public function getSenha ()
		{
			return  $this->senha; 
		}
		public function getNome()
		{
			return $this->nome;
		}
		
	}
	
	class Gerente extends Usuario implements IUsuario
	{
		public function getNome()
		{
			return $this->nome;
		}
		
	}

	
	class Vendedor extends Usuario implements IUsuario
	{
		public function getNome()
		{
			return $this->nome;
		}
	}

	class Cliente extends Usuario implements IUsuario
	{
		public $assinante;
		
		public function exibeNome()
		{
			return 'Nome: '.$this->nome ; /* . = concatenação*/

		}
		
		public function getNome()
		{
			return $this->nome;
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
			$html .= "Valor: ". Util::trataValor($this->valor);/* dentra das aspas duplar nao é preciso concatenar. Fora das aspas duplas, sim.*/
			$html .= "</p>";

			echo $html;
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


	$AssinaturaUsuario = new Assinatura(1, $maria->id, "Ass. Vip", 95.90);

	$murilo = new Admin(); /*objeto*/
	$maria->id =2;
	$murilo->nome= "Murilo";
	$murilo->email = "murilo@email.com";
	$murilo->tel = "56744";
	$murilo->setSenha('126');
	echo "Senha".$murilo->getSenha();
	var_dump($murilo);

	/*$AssinaturaUsuario-> setId(1);
	$AssinaturaUsuario->setValor(75.9);
	$AssinaturaUsuario->setTitulo("Ass. Vip");
	$AssinaturaUsuario->setIdCliente(4);*/
	//var_dump($AssinaturaUsuario);

	$AssinaturaUsuario->exibeAssinatura();	

	$vende = new Vendedor();
	$vende->id =3;
	$vende->nome= "Marcos";
	$vende->email = "marcosVendedor@email.com";
	$vende->tel = "56744";
	$vende->alteraSenha = ('56453');
	
	echo "Nome do site: ".siteInfo::$nome;
	echo "<br/>";
	echo "Descrição do site: ".siteInfo::$descricao;


?>