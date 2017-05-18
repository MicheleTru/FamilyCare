<?php
	class Allegatotabella{
		
		public static function save($allegato){
			if ($allegato->getIdAllegato()){
				$query=sprintf("update Allegati set descrizione='%s' where idDisciplina=%d;",
								$allegato->getDescrizione(),
								$allegato->getIdDisciplina());
			}else{
				$query=sprintf("insert into Allegati (descrizione) values ('%s');",
								$allegato->getDescrizione());
			}
			mysql_query($query);
			
			if(mysql_affected_rows()==1){
				return true;
			}else{
				return mysql_error();
			}
		}
		
		public static function remove($allegato){
			$query=sprintf("delete from Allegati where idAllegato=%d;",$allegato->getIdAllegato());
			mysql_query($query);
			
			if(mysql_affected_rows()==1){
				return true;
			}else{
				return mysql_error();
			}
		}
		
		public static function getById($id){
			$query=sprintf("select * from Allegati where idAllegato=%d;",$id);
			$result=mysql_query($query);
			if($result){
				$row=mysql_fetch_array($result);
				$allegato=new Allegato();
				$allegato->setIdAllegato($row['idAllegato']);
				$allegato->setDescrizione($row['descrizione']);

				return $allegato;
			}else{
				return NULL;
			}
		}
		
		public static function getAll(){
			$query=sprintf("select * from Allegati;");
			$result=mysql_query($query);
			$allegati=array();
			if($result){
				while($row=mysql_fetch_array($result)){
					$allegato=new Allegato();
					$allegato->setIdAllegato($row['idAllegato']);
					$allegato->setDescrizione($row['descrizione']);
					$allegati[]=$allegato;
				}
				return $allegati;
			}else{
				return NULL;
			}
		}
	}
?>
