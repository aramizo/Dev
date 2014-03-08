<?php 
	//Classes for the graphical user interface layout
	
	/**
		Class to create a bootstrap's modal box.
		To construct, set the following arguments: "modal title", "modal content" and "modal action".
		To use the complete set (modal box and link), use the method modalSet() ;
		To insert the link that active the modal, use the  method modalLink();
	*/
	class Modal {
	
		private $modalTitle;
		private $modalContent;
		private $modalAction;
		private static $modalsCount = 0;
		
		
		function __construct( $modalTitle, $modalContent, $modalAction ) {
			self::$modalsCount++;
			$this->modalTitle = $modalTitle;
			$this->modalContent = $modalContent;
			$this->modalAction = $modalAction;
		}
		
		public function modalSet() { 
			echo '<h2>Modal '. self::$modalsCount.'</h2>
			<h3>'.$this->modalTitle.'</h3>
			<p>'.$this->modalContent.'</p>
			';		
			$dataBase = new DataBase();
			$dataBase->insertAjaxButton($this->modalAction);
			$dataBase->updateAjaxButton();
			$dataBase->deleteAjaxButton();
		}
		
		public function modalLink() {
		}
	
	
	}
	
	//Classes for the system functions
	class DataBase {
		private $query;
		
		function __construct() {
			echo '<p>Conexão com o Banco de dados!</p>';
		}
		
		public function insertAjaxButton($actionButton) {
			echo '<a href="'.$actionButton.'">Inserir</a> ';
		}
		
		public function updateAjaxButton() {
			echo '<button>Atualizar</button> ';
		}
		
		public function deleteAjaxButton() {
			echo '<button>Deletar</button> ';
		}
	}
	
	//Variables declare and instance
	$projectName = "Qf Project";
	$description = "";
	$keywords = "";
	
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
		<meta name="description" content = "<?php echo $description ?>">
		<meta name="keywords" content="<?php echo $keywords ?>">
		<meta name="author" content="Mobileria Sistemas Ltda.">
		
		<title><?php echo $projectName ?></title>
	</head>
	
	<body>
		<h1><?php echo $projectName ?></h1>
		
		<?php
		
		/*$modal1 = new Modal("Título do Modal" , "Conteúdo do Modal", "link do modal");
		$modal1->modalSet();
		
		echo '<br/>';
		
		$modal2 = new Modal("Título do Segundo Modal" , "Conteúdo do Segundo Modal", "link do Segundo modal");
		$modal2->modalSet();*/
		
		for ($i = 5; $i <= 10; $i++){
			$$i = new Modal("Título do Modal".$i , "Conteúdo do Modal", "link do modal");
			$$i->modalSet();
		}
		
		?>
		
	</body>
</html>