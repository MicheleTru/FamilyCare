<?php

	class UtenteTabella{
		
		public static function save($utente){
			if($utente->getId()){
				$query=sprintf("update utenti set username='%s', password=SHA1('%s') where id=%d;",
								$utente->getUsername(),
								$utente->getPassword(),
								$utente->getId());
			}else{
				$query=sprintf("insert into utenti (username, password) values ('%s', SHA1('%s'));",
								$utente->getUsername(),
								$utente->getPassword());
			}
			mysql_query($query);
			
			if(mysql_affected_rows()==1){
				return true;
			}else{
				return mysql_error();
			}
		}
		
		public static function remove($utente){
			$query=sprintf("delete from utenti where id=%d;",$utente->getId());
			mysql_query($query);
			
			if(mysql_affected_rows()==1){
				return true;
			}else{
				return mysql_error();
			}
		}
		
		public static function getById($id){
			$query=sprintf("select * from utenti where id=%d;",$id);
			$result=mysql_query($query);
			if($result){
				$row=mysql_fetch_array($result);
				$utente=new Utente();
				$utente->setId($row['id']);
				$utente->setUsername($row['username']);
				$utente->setPassword($row['password']);

				return $utente;
			}else{
				return NULL;
			}
		}
		
		public static function getByUsernamePassword($username, $password){
			$query = sprintf("select username from utenti where username='%s' and password=sha1('%s')",$username, $password);
			$result=mysql_query($query);
			if($result){
				$row=mysql_fetch_array($result);
				return $row['username'];
			}else{
				return NULL;
			}
		}
		
		public static function getByUsername($username){
			$query = sprintf ("select username from utenti", $username);
			$result = mysql_query($query);
			if($result){
				$row=mysql_fetch_array($result);
				return $row['username'];
			}else{
				return NULL;
			}
		}
				
		
		public static function getAll(){
			$query=sprintf("select * from utenti order by username;");
			$result=mysql_query($query);
			$utenti=array();
			if($result){
				while($row=mysql_fetch_array($result)){
					$utente=new Utente();
					$utente->setId($row['id']);
					$utente->setUsername($row['username']);
					$utente->setPassword($row['password']);
					$utenti[]=$utente;
				}
				return $utenti;
			}else{
				return NULL;
			}
		}
	}
?>
