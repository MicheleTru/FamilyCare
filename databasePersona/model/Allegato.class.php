<?php

class Allegato{
	private $id;
	private $descrizione;
	private $nomefileorigine;
	private $nomefiledestinazione;
	
	private $uploadedFile;
	
	public function  setId($v) {
		$this->id = $v;
	}
	
	public function  setDescrizione($v) {
		$this->descrizione = $v;
	}
	
	public function  setNomeFileOrigine($v) {
		$this->nomefileorigine = $v;
	}
	
	public function  setNomeFileDestinazione($v) {
		$this->nomefiledestinazione = $v;
	}
	
	public function  setUploadedFile($file) {
		$this->uploadedFile = $file;
	}
	
	
	public function getId(){
		return $this->id;
	}
	
	public function  getDescrizione() {
		return $this->descrizione;
	}
	
	public function  getNomeFileOrigine() {
		return $this->nomefileorigine;
	}
	
	public function  getNomeFileDestinazione() {
		return $this->nomefiledestinazione;
	}
	
	
	public function save(){
		if ($this->uploadedFile){
			$uploaddir = '/home/mburani/public_html/databasePersona/files/';
			$uploadfile = $uploaddir . basename($this->uploadedFile['name']);
			if (move_uploaded_file($this->uploadedFile['tmp_name'], $uploadfile)) {
				$this->setNomeFileOrigine($this->uploadedFile['name']);
				$this->setNomeFileDestinazione($uploadfile);
			}
		}
		AllegatoTabella::save($this);
	}
	
	public function update(){
		AllegatoTabella::update($this);
	}
	
	public function delete(){
		$nf =  $this->getNomeFileDestinazione();
		if (AllegatoTabella::delete($this)){
			if (is_file($nf)){
				unlink($nf);
			}
		}
	}
}
