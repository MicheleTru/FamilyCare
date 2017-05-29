<?php 

class Disciplina{
	 private $id;
	 private $descrizione;

	 public function  setId($v) {
		 $this->id = $v;
	 }
	
	 public function  setDescrizione($v) {
		 $this->descrizione = $v;
	 }
	 
	 public function getId(){
		 return $this->id;
	 }
	 
	 public function  getDescrizione() {
		 return $this->descrizione;
	 }
	 
	 public function save(){
		 DisciplinaTabella::save($this);
	 }
	 
	 public function modify(){
		 DisciplinaTabella::update($this);
	 }
	 
	 public function delete(){
		 DisciplinaTabella::delete($this);
	 }
	 
/*	 
	 public function save(){
		 PersonaTabella::save($this);
	 }
	 
	 public function modify(){
		 PersonaTabella::update($this);
	 }
	 
	 public function delete(){
		 PersonaTabella::delete($this);
	 }
*/	 	
 }

?>
