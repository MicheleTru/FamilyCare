<?php
	class Allegato{
		private $idAllegato;
		private $descrizione;
		private $nomeFileOrigine;
		private $nomeFileDestinazione;
		private $uploadedFile;
		
		public function getIdAllegato(){
			return $this->idAllegato;
		}
		
		public function getDescrizione(){
			return $this->descrizione;
		}
		
		public function getNomeFileOrigine(){
			return $this->nomeFileOrigine;
		}
		
		public function getNomeFileDestinazione(){
			return $this->nomeFileDestinazione;
		}
		
		public function getUploadedFile(){
			return $this->uploadedFile;
		}
		
		public function setIdAllegato($c){
			$this->idAllegato = $c;
		}
		
		public function setDescrizione($c){
			$this->descrizione = $c;
		}
		
		public function setNomeFileOrigine($c){
			$this->nomeFileOrigine = $c;
		}
		
		public function setNomeFileDestinazione($c){
			$this->nomeFileDestinazione = $c;
		}
		
		public function setUploadedFile($c){
			$this->uploadedFile = $c;
		}
		
		public function save(){
			if ($this -> uploadedFile){
				$uploaddir = '/home/giommil/marzo/ModelloFramework/Files/';
				$uploadfile = $uploaddir . basename($this->uploadedFile['name']);
				if (move_uploaded_file($this->uploadedFile['tmp_name'], $uploadfile)){
					$this->setNomeFileOrigine($this->uploadedFile['name']);
					$this->setNomeFileDestinazione($uploadfile);
				}
			}
			Allegatotabella::save($this);
		}
		
		public function update(){
			$nf = $this->getNomeFileDestinazione();
			Allegatotabella::update($this);
			if (is_file($nf)){
				unlink ($nf);
			}
		}
		
		public function delete(){
			$nf = $this->getNomeFileDestinazione();
			if (Allegatotabella::delete($this)){
				if (is_file($nf)){
					unlink($nf);
				}
			}
		}
	}
?>
