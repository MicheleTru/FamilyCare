<?php

class PersonaTabella {

	public static function save($persona){
		$query = sprintf("INSERT INTO persona (nome,cognome,cf,peso,altezza,id_disciplina,id_nazione) VALUES ('%s','%s','%s',%f,%d,%d,%d);",$persona->getNome(),$persona->getCognome(),$persona->getCf(),$persona->getPeso(),$persona->getAltezza(),$persona->getIdDisciplina(),$persona->getIdNazione());
		mysql_query($query);
		if(mysql_affected_rows()!=1){
			print "Errore" . mysql_error();
		}
	}
	
	public static function getPersona($id){
		$query = sprintf("SELECT * FROM persona where id=%d;",$id);
		$result = mysql_query($query);
		if(mysql_affected_rows()!=1){
			print "Errore" . mysql_error();
		}
		$row = mysql_fetch_array($result);
		$persona = new Persona();
		$persona->setId($row["id"]);
		$persona->setNome($row["nome"]);
		$persona->setCognome($row["cognome"]);
		$persona->setCf($row["cf"]);
		$persona->setPeso($row["peso"]);
		$persona->setAltezza($row["altezza"]);
		$persona->setIdDisciplina($row["id_disciplina"]);
		$persona->setIdNazione($row["id_nazione"]);
		return $persona;
	}
	
	public static function update($persona){
		$query = sprintf("UPDATE persona set nome='%s', cognome='%s', cf='%s', peso=%f, altezza=%d, id_disciplina=%d, id_nazione=%d WHERE id=%d;",$persona->getNome(),$persona->getCognome(),$persona->getCf(),$persona->getPeso(),$persona->getAltezza(),$persona->getIdDisciplina(),$persona->getIdNazione(), $persona->getId());
		mysql_query($query);
		if(mysql_affected_rows()!=1){
			print "Errore" . mysql_error();
		}
	}
	
	public static function getAll(){
		$query = sprintf("SELECT * FROM persona;");
		$result = mysql_query($query);
		$persone = array();
		if($result){
			while($row = mysql_fetch_array($result)){
				$persona = new Persona();
				$persona->setId($row["id"]);
				$persona->setNome($row["nome"]);
				$persona->setCognome($row["cognome"]);
				$persona->setCf($row["cf"]);
				$persona->setPeso($row["peso"]);
				$persona->setAltezza($row["altezza"]);
				$persona->setIdDisciplina($row["id_disciplina"]);
				$persona->setIdNazione($row["id_nazione"]);
				$persone[] = $persona;
			}
			return $persone;
		}else{
			return null;
		}
	}
	
	public static function getByIdDisciplina($id_disciplina){
		$query = sprintf("SELECT * FROM persona WHERE id_disciplina=%d;",$id_disciplina);
		$result = mysql_query($query);
		$persone = array();
		if($result){
			while($row = mysql_fetch_array($result)){
				$persona = new Persona();
				$persona->setId($row["id"]);
				$persona->setNome($row["nome"]);
				$persona->setCognome($row["cognome"]);
				$persona->setCf($row["cf"]);
				$persona->setPeso($row["peso"]);
				$persona->setAltezza($row["altezza"]);
				$persona->setIdDisciplina($row["id_disciplina"]);
				$persona->setIdNazione($row["id_nazione"]);
				$persone[] = $persona;
			}
			return $persone;
		}else{
			return null;
		}
	}
		
	public static function getByIdDisciplinaNumero($id_disciplina){
		$query = sprintf("SELECT * FROM persona WHERE id_disciplina=%d;",$id_disciplina);
		$result = mysql_query($query);
		$persone = array();
		$ris = 0;
		if($result){
			while($row = mysql_fetch_array($result)){
				$persona = new Persona();
				$persona->setId($row["id"]);
				$persona->setNome($row["nome"]);
				$persona->setCognome($row["cognome"]);
				$persona->setCf($row["cf"]);
				$persona->setPeso($row["peso"]);
				$persona->setAltezza($row["altezza"]);
				$persona->setIdDisciplina($row["id_disciplina"]);
				$persona->setIdNazione($row["id_nazione"]);
				$persone[] = $persona;
				$ris++;
			}
			return $ris;
		}else{
			return null;
		}
	}
	
	public static function getByIdNazioneNumero($id_nazione){
		$query = sprintf("SELECT * FROM persona WHERE id_nazione=%d;",$id_nazione);
		$result = mysql_query($query);
		$persone = array();
		$ris = 0;
		if($result){
			while($row = mysql_fetch_array($result)){
				$ris++;
			}
			return $ris;
		}else{
			return null;
		}
	}
	
	
	public static function delete($persona){
		$query = sprintf("DELETE FROM persona WHERE id=%d;",$persona->getId());
		mysql_query($query);
		if(mysql_affected_rows()!=1){
			print "Errore" . mysql_error();
		}
	}
	
	
	
}

?>
