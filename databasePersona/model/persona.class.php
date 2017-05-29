<?php 

class Persona{
	 private $id;
	 private $nome;
	 private $cognome;
	 private $cf;
	 private $peso;
	 private $altezza;
	 private $id_disciplina;
	 private $id_nazione;

	
	 public function  setId($v) {
		 $this->id = $v;
	 }

	 public function  setIdDisciplina($v) {
		 $this->id_disciplina = $v;
	 }
	 
	 public function  setIdNazione($v) {
		 $this->id_nazione = $v;
	 }
	 	
	 public function  setNome($v) {
		 $this->nome = $v;
	 }
	 
	 public function  setCognome($v) {
		 $this->cognome = $v;
	 }
	 
	 public function  setCf($v) {
		 $this->cf = $v;
	 }
	 
	 public function  setPeso($v) {
		 $this->peso = $v;
	 }
	 
	 public function  setAltezza($v) {
		 $this->altezza = $v;
	 }
	 
	 public function getId(){
		 return $this->id;
	 }
	 
	 public function getIdDisciplina(){
		 return $this->id_disciplina;
	 }
	 
	 public function getIdNazione(){
		 return $this->id_nazione;
	 }
	 
	 public function getDisciplina(){
		 return DisciplinaTabella::getById($this->id_disciplina);
	 }
	 
	 public function getNazione(){
		 return NazioneTabella::getById($this->id_nazione);
	 }
	 
	 public function  getNome() {
		 return $this->nome;
	 }
	 
	 public function  getCognome() {
		 return $this->cognome;
	 }
	 
	 public function  getCf() {
		 return $this->cf;
	 }
	 
	 public function  getPeso() {
		 return $this->peso;
	 }
	 
	 public function  getAltezza() {
		 return $this->altezza;
	 }
	 
	 public function save(){
		 PersonaTabella::save($this);
	 }
	 
	 public function modify(){
		 PersonaTabella::update($this);
	 }
	 
	 public function delete(){
		 PersonaTabella::delete($this);
	 }
	 	
 }
