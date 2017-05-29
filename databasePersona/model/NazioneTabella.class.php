<?php

class NazioneTabella {

	public static function save($nazione){
		$query = sprintf("INSERT INTO Nazione (sigla,descrizione) VALUES ('%s','%s');",$nazione->getSigla(),$nazione->getDescrizione());
		mysql_query($query);
		if(mysql_affected_rows()!=1){
			print "Errore" . mysql_error();
		}
	}
	
	public static function getById($id){
		$query = sprintf("SELECT * FROM Nazione where id=%d;",$id);
		$result = mysql_query($query);
		if(mysql_affected_rows()!=1){
			print "Errore" . mysql_error();
		}
		$row = mysql_fetch_array($result);
		$nazione = new Nazione();
		$nazione->setId($row["id"]);
		$nazione->setSigla($row["sigla"]);
		$nazione->setDescrizione($row["descrizione"]);
		return $nazione;
	}
	
	public static function update($nazione){
		$query = sprintf("UPDATE Nazione set sigla='%s', descrizione='%s' WHERE id=%d;",$nazione->getSigla(),$nazione->getDescrizione(),$nazione->getId());
		mysql_query($query);
		if(mysql_affected_rows()!=1){
			print "Errore" . mysql_error();
		}
	}
	
	public static function getAll(){
		$query = sprintf("SELECT * FROM Nazione;");
		$result = mysql_query($query);
		$nazioni = array();
		if($result){
			while($row = mysql_fetch_array($result)){
				$nazione = new Nazione();
				$nazione->setId($row["id"]);
				$nazione->setSigla($row["sigla"]);
				$nazione->setDescrizione($row["descrizione"]);
				$nazioni[] = $nazione;
			}
			return $nazioni;
		}else{
			return null;
		}
	}
	
	public static function delete($nazione){
		$query = sprintf("DELETE FROM Nazione WHERE id=%d;",$nazione->getId());
		$persone = PersonaTabella::getAll();
		$var = true;
		foreach($persone as $persona) :
			if($persona->getIdNazione()==$nazione->getId()) :
				$var = false;
			endif;
		endforeach;
		
		if($var == true) :
			mysql_query($query);
		else:
			echo '<script language="javascript">';
			echo 'alert("Impossibile eliminare la nazione.")';
			echo '</script>';
		endif;
	}	

	
	public static function getNumeroPersone($id_nazione){
		$count = 0;
		$persone = PersonaTabella::getAll();
		foreach ($persone as $p):
			if($p->getIdNazione()==$id_nazione){
				$count = $count+1;
			}
		endforeach;
	return $count;
	}
	
	
	
}

?>