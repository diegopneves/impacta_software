<?php


	class sistemaController
	{
		
		public function index(){
			$url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
			$slug = explode('/',$url)[0];

			if(file_exists('views/'.$slug.'.php')){
				include('views/'.$slug.'.php');
			}else{
				die('Não existe a página que você procura!');
			}


		}
	}

?>

