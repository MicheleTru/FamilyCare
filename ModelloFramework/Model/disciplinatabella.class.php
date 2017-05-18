<?php
	class DisciplinaTabella{
		
		public static function save($disciplina){
			if($disciplina->getIdDisciplina()){
				$query=sprintf("update Discipline set descrizione='%s' where idDisciplina=%d;",
								$disciplina->getDescrizione(),
								$disciplina->getIdDisciplina());
			}else{
				$query=sprintf("insert into Discipline (descrizione) values ('%s');",
								$disciplina->getDescrizione());
			}
			mysql_query($query);
			
			if(mysql_affected_rows()==1){
				return true;
			}else{
				return mysql_error();
			}
		}
		
		public static function remove($disciplina){
			$query=sprintf("delete from Discipline where idDisciplina=%d;",$disciplina->getIdDisciplina());
			mysql_query($query);
			
			if(mysql_affected_rows()==1){
				return true;
			}else{
				return mysql_error();
			}
		}
		
		public static function getById($id){
			$query=sprintf("select * from Discipline where idDisciplina=%d;",$id);
			$result=mysql_query($query);
			if($result){
				$row=mysql_fetch_array($result);
				$disciplina=new Disciplina();
				$disciplina->setIdDisciplina($row['idDisciplina']);
				$disciplina->setDescrizione($row['descrizione']);

				return $disciplina;
			}else{
				return NULL;
			}
		}
		
		public static function getAll(){
			$query=sprintf("select * from Discipline;");
			$result=mysql_query($query);
			$discipline=array();
			if($result){
				while($row=mysql_fetch_array($result)){
					$disciplina=new Disciplina();
					$disciplina->setIdDisciplina($row['idDisciplina']);
					$disciplina->setDescrizione($row['descrizione']);
					$discipline[]=$disciplina;
				}
				return $discipline;
			}else{
				return NULL;
			}
		}
	}
?>
