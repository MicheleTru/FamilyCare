<?php 

class Gruppo{
	 private $id;
	 private $groupname;
	 

	 public function  setId($v) {
		 $this->id = $v;
	 }
	
	 public function  setGroupname($v) {
		 $this->groupname = $v;
	 }
	 
	 
	 public function getId(){
		 return $this->id;
	 }
	 
	 public function  getGroupname() {
		 return $this->groupname;
	 }
	 
	 
	 public function save(){
		 GruppoTabella::save($this);
	 }
	 
	 public function modify(){
		 GruppoTabella::update($this);
	 }
	 
	 public function delete(){
		 GruppoTabella::delete($this);
	 }	
 }

?>
