<?php

class Personnage{

		private $nom;
		public $pv = 100;
		public $atk = 20;
		public $cri = 'Haaaaaaaaaaaaaaaaaaaaaaaaah!';

		public function setNom($nom){  //Ecriture
			$this->nom = $nom;
		}

		public function getNom(){       //Lecture
			return $this->nom;
		}

		public function regenere($pv=100){
			$this->pv += $pv;
		}

		public function attack($perso){
			$this->crier();
			$perso->pv -= $this->atk;
		}

		private function crier(){
			return $this->cri;
		}
		
	}
