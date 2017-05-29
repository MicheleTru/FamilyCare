<?php

class DisciplinaTabella {

	public static function save($disciplina){
		$query = sprintf("INSERT INTO discipline (descrizione) VALUES ('%s');",$disciplina->getDescrizione());
		mysql_query($query);
		if(mysql_affected_rows()!=1){
			print "Errore" . mysql_error();
		}
	}

	public static function getById($id){
		$query = sprintf("SELECT * FROM discipline where id=%d;",$id);
		$result = mysql_query($query);
		if(mysql_affected_rows()!=1){
			print "Errore" . mysql_error();
		}
		$row = mysql_fetch_array($result);
		$disciplina = new Disciplina();
		$disciplina->setId($row["id"]);
		$disciplina->setDescrizione($row["descrizione"]);
		return $disciplina;
	}

	
	public static function update($disciplina){
		$query = sprintf("UPDATE discipline set descrizione='%s' WHERE id=%d;",$disciplina->getDescrizione(),$disciplina->getId());
		mysql_query($query);
		if(mysql_affected_rows()!=1){
			print "Errore" . mysql_error();
		}
	}

	
	public static function getAll(){
		$query = sprintf("SELECT * FROM discipline;");
		$result = mysql_query($query);
		$discipline = array();
		if($result){
			while($row = mysql_fetch_array($result)){
				$disciplina = new Disciplina();
				$disciplina->setId($row["id"]);
				$disciplina->setDescrizione($row["descrizione"]);
				$discipline[] = $disciplina;
			}
			return $discipline;
		}else{
			return null;
		}
	}

	
	public static function delete($disciplina){
		$query = sprintf("DELETE FROM discipline WHERE id=%d;",$disciplina->getId());
		$persone = PersonaTabella::getAll();
		$var = true;
		foreach($persone as $persona) :
			if($persona->getIdDisciplina()==$disciplina->getId()) :
				$var = false;
			endif;
		endforeach;
		
		if($var == true) :
			mysql_query($query);
		else:
			echo '<script language="javascript">';
			echo 'alert("Impossibile eliminare la disciplina. Ci sono persone che la praticano!")';
			echo '</script>';
		endif;
	}

	
}

?>

