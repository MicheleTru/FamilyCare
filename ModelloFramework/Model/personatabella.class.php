<?php
	class PersonaTabella{
		
		public static function save($persona){
			if($persona->getId()){
				$query=sprintf("update Persona set nome='%s', cognome='%s', codiceFiscale='%s', peso=%d, altezza=%f, disciplina=%d, nazione=%d where id=%d;",
								$persona->getNome(),
								$persona->getCognome(),
								$persona->getCodiceFiscale(),
								$persona->getPeso(),
								$persona->getAltezza(),
								$persona->getIdDisciplina(),
								$persona->getIdNazione(),
								$persona->getId());
			}else{
				$query=sprintf("insert into Persona (nome, cognome, codiceFiscale, peso, altezza, disciplina, nazione) values ('%s','%s','%s',%d,%f,%d,%d);",
								$persona->getNome(),
								$persona->getCognome(),
								$persona->getCodiceFiscale(),
								$persona->getPeso(),
								$persona->getAltezza(),
								$persona->getIdDisciplina(),
								$persona->getIdNazione());
			}
			mysql_query($query);
			
			if(mysql_affected_rows()==1){
				return true;
			}else{
				return mysql_error();
			}
		}
		
		public static function remove($persona){
			$query=sprintf("delete from Persona where id=%d;",$persona->getId());
			mysql_query($query);
			
			if(mysql_affected_rows()==1){
				return true;
			}else{
				return mysql_error();
			}
		}
		
		public static function getById($id){
			$query=sprintf("select * from Persona where id=%d;",$id);
			$result=mysql_query($query);
			if($result){
				$row=mysql_fetch_array($result);
				$persona=new Persona();
				$persona->setId($row['id']);
				$persona->setNome($row['nome']);
				$persona->setCognome($row['cognome']);
				$persona->setCodiceFiscale($row['codiceFiscale']);
				$persona->setAltezza($row['altezza']);
				$persona->setPeso($row['peso']);
				$persona->setIdDisciplina($row['disciplina']);
				$persona->setIdNazione($row['nazione']);
				return $persona;
			}else{
				return NULL;
			}
		}
		
		public static function getAll(){
			$query=sprintf("select * from Persona order by cognome;");
			$result=mysql_query($query);
			$persone=array();
			if($result){
				while($row=mysql_fetch_array($result)){
					$persona=new Persona();
					$persona->setId($row['id']);
					$persona->setNome($row['nome']);
					$persona->setCognome($row['cognome']);
					$persona->setCodiceFiscale($row['codiceFiscale']);
					$persona->setAltezza($row['altezza']);
					$persona->setPeso($row['peso']);
					$persona->setIdDisciplina($row['disciplina']);
					$persona->setIdNazione($row['nazione']);
					$persone[]=$persona;
				}
				return $persone;
			}else{
				return NULL;
			}
		}
		
		public static function getByDisciplina($id){
			$query=sprintf("select * from Persona where id=%d;",$id);
			$result=mysql_query($query);
			$persone=array();
			if($result){
				while($row=mysql_fetch_array($result)){
					$persona=new Persona();
					$persona->setId($row['id']);
					$persona->setNome($row['nome']);
					$persona->setCognome($row['cognome']);
					$persona->setCf($row['codiceFiscale']);
					$persona->setAltezza($row['altezza']);
					$persona->setPeso($row['peso']);
					$persona->setIdDisciplina($row['disciplina']);
					$persona->setIdNazione($row['nazione']);
					$persone[]=$persona;
				}
				return $persone;
			}else{
				return NULL;
			}
		}
	}
?>
