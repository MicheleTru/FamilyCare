<?php
	class nazionetabella{
		
		public static function save($nazione){
			if($nazione->getIdNazione()){
				$query=sprintf("update Nazioni set sigla='%s', descrizione='%s' WHERE id = %d",
								$nazione->getSigla(),
								$nazione->getDescrizione(),
								$nazione->getIdNazione());
			}else{
				$query=sprintf("insert into Nazioni (sigla, descrizione) values ('%s','%s');",
								$nazione->getSigla(),
								$nazione->getDescrizione());
			}
			mysql_query($query);
			
			if(mysql_affected_rows()==1){
				return true;
			}else{
				return mysql_error();
			}
		}
		
		public static function remove($nazione){
			$query=sprintf("delete from Nazioni where idNazione=%d;",$nazione->getIdNazione());
			mysql_query($query);
			
			if(mysql_affected_rows()==1){
				return true;
			}else{
				return mysql_error();
			}
		}
		
		public static function getById($id){
			$query=sprintf("select * from Nazioni where idNazione=%d;",$id);
			$result=mysql_query($query);
			if($result){
				$row=mysql_fetch_array($result);
				$nazione=new Nazione();
				$nazione->setIdNazione($row['idNazione']);
				$nazione->setSigla($row['sigla']);
				$nazione->setDescrizione($row['descrizione']);
				return $nazione;
			}else{
				return NULL;
			}
		}
		
		public static function getAll(){
			$query=sprintf("select * from Nazioni order by descrizione;");
			$result=mysql_query($query);
			$nazioni=array();
			if($result){
				while($row=mysql_fetch_array($result)){
					$nazione=new Nazione();
					$nazione->setIdNazione($row['idNazione']);
					$nazione->setSigla($row['sigla']);
					$nazione->setDescrizione($row['descrizione']);
					$nazioni[]=$nazione;
				}
				return $nazioni;
			}else{
				return NULL;
			}
		}
	}
?>
