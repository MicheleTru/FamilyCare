<?php
	class Nazione{
		private $idNazione;
		private $sigla;
		private $descrizione;
		
		public function getIdNazione(){
			return $this->idNazione;
		}
		
		public function getSigla(){
			return $this->sigla;
		}
		
		public function getDescrizione(){
			return $this->descrizione;
		}
			
		public function setIdNazione($i){
			$this->idNazione=$i;
		}
		
		public function setSigla($n){
			$this->sigla=$n;
		}
		
		public function setDescrizione($c){
			$this->descrizione=$c;
		}
				
		public function save(){
			nazionetabella::save($this);
		}
		
		public function delete(){
			nazionetabella::remove($this);
		}
	}
?>
