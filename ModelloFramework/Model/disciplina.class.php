<?php
	class Disciplina{
		private $idDisciplina;
		private $descrizione;
		
		public function getIdDisciplina(){
			return $this->idDisciplina;
		}
		
		public function getDescrizione(){
			return $this->descrizione;
		}
		
		public function setIdDisciplina($id){
			$this->idDisciplina=$id;
		}
		
		public function setDescrizione($d){
			$this->descrizione=$d;
		}
				
		public function save(){
			DisciplinaTabella::save($this);
		}
		
		public function delete(){
			DisciplinaTabella::remove($this);
		}
		
		public function getPersone(){
			PersonaTabella::getByDisciplina($id);
		}
	}
?>

