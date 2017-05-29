<?php
	class Persona{
		private $id;
		private $nome;
		private $cognome;
		private $codiceFiscale;
		private $peso;
		private $altezza;
		private $disciplina;
		private $nazione;
		
		public function getId(){
			return $this->id;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function getCognome(){
			return $this->cognome;
		}
		
		public function getCodiceFiscale(){
			return $this->codiceFiscale;
		}
		
		public function getPeso(){
			return $this->peso;
		}
		
		public function getAltezza(){
			return $this->altezza;
		}
		
		public function getIdDisciplina(){
			return $this->disciplina;
		}
		
		public function getIdNazione(){
			return $this->nazione;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		
		public function setNome($n){
			$this->nome=$n;
		}
		
		public function setCognome($c){
			$this->cognome=$c;
		}
		
		public function setCodiceFiscale($cf){
			$this->codiceFiscale=$cf;
		}
		
		public function setPeso($p){
			$this->peso=$p;
		}
		
		public function setAltezza($a){
			$this->altezza=$a;
		}
	
		public function setIdDisciplina($di){
			$this->disciplina=$di;	
		}
		
		public function setIdNazione($na){
			$this->nazione=$na;
		}
				
		public function save(){
			PersonaTabella::save($this);
		}
		
		public function delete(){
			PersonaTabella::remove($this);
		}
		
		public function getDisciplina(){
			return DisciplinaTabella::getById($this->getIdDisciplina());
		}
		
		public function getNazione(){
			return nazionetabella::getById($this->getIdNazione());
		}
	}
?>

