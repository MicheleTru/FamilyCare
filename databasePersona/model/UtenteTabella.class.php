<?php

class UtenteTabella {

	public static function save($utente){
		$query = sprintf("INSERT INTO utenti (username,password) VALUES ('%s','%s');",$utente->getUsername(),sha1($utente->getpassword()));
		mysql_query($query);
		if(mysql_affected_rows()!=1){
			print "Errore" . mysql_error();
		}
	}
	
	public static function getById($id){
		$query = sprintf("SELECT * FROM utenti where id=%d;",$id);
		$result = mysql_query($query);
		if(mysql_affected_rows()!=1){
			print "Errore" . mysql_error();
		}
		$row = mysql_fetch_array($result);
		$utente = new Utente();
		$utente->setId($row["id"]);
		$utente->setUsername($row["username"]);
		$utente->setPassword($row["password"]);
		return $utente;
	}
	
	public static function getByUsernameAndPassword($username,$password){
		$query = sprintf("SELECT * FROM utenti where username='%s' and password='%s';",$username,sha1($password));
		print ($query);
		$result = mysql_query($query);
		if(mysql_affected_rows()!=1){
			return NULL;
		}
		$row = mysql_fetch_array($result);
		$utente = new Utente();
		$utente->setId($row["id"]);
		$utente->setUsername($row["username"]);
		$utente->setPassword($row["password"]);
		return $utente;
	}
	
	
	
	public static function update($utente){
		$query = sprintf("UPDATE utenti set username='%s', password='%s' WHERE id=%d;",$utente->getUsername(),sha1($utente->getPassword()),$utente->getId());
		mysql_query($query);
		if(mysql_affected_rows()!=1){
			print "Errore" . mysql_error();
		}
	}
	
	public static function getAll(){
		$query = sprintf("SELECT * FROM utenti;");
		$result = mysql_query($query);
		$utenti = array();
		if($result){
			while($row = mysql_fetch_array($result)){
				$utente = new Utente();
				$utente->setId($row["id"]);
				$utente->setUsername($row["username"]);
				$utente->setPassword($row["password"]);
				$utenti[] = $utente;
			}
			return $utenti;
		}else{
			return null;
		}
	}
	
	public static function delete($utente){
		$query = sprintf("DELETE FROM utenti WHERE id=%d;",$utente->getId());
		mysql_query($query);
	}	
}

?>
