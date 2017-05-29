<?php 

class Nazione{
	 private $id;
	 private $descrizione;
	 private $sigla;
	 

	 public function  setId($v) {
		 $this->id = $v;
	 }
	
	 public function  setDescrizione($v) {
		 $this->descrizione = $v;
	 }
	 
	 public function  setSigla($v) {
		 $this->sigla = $v;
	 }
	 
	 public function getId(){
		 return $this->id;
	 }
	 
	 public function  getDescrizione() {
		 return $this->descrizione;
	 }
	 
	 public function getSigla(){
		 return $this->sigla;
	 }
	 
	 public function save(){
		 NazioneTabella::save($this);
	 }
	 
	 public function modify(){
		 NazioneTabella::update($this);
	 }
	 
	 public function delete(){
		 NazioneTabella::delete($this);
	 }	
 }

?>