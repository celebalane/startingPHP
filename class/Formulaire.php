<?php

	
	
	class Formulaire{

		private $method;
		private $nom;

		function __construct($nom,$method='post'){  //Methode avec post par defaut
			$this->nom = $nom;
			$this->method = $this->verifMethod($method);   
		}

		private function verifMethod($method){     //Verification de la methode seulement dans la classe, pas besoin à l exterieur
			switch ($method) {
				case 'get':
				case 'Get':	
				case 'GET':
					return 'get';
					break;
				default:
					return 'post';
			}
		}

		public function debut($action){                      //Debut du formulaire
			echo '<form name "'.$this->nom.' method="'.$this->method.'" action="'.$action.'">';
		}

		public function inputText($name,$value=false){      //Input formulaire
			if($value){
				echo '<input type="text" name="'.$name.'" value="'.$value.'"/>';
			}else{
				echo '<input type="text" name="'.$name.'" placeholder="merci de mettre votre '.$name.'"/>';
			}
		}

		public function valid(){                            //Bouton envoi
			echo '<button type="submit">ok</button>';
		}
	}



?>

