<?php
require_once(LIB_PATH.DS.'database.php');
class Autonumber {
	protected static  $tblname = "tblauto";

	function dbfields () {
		global $mydb;
		return $mydb->getfieldsononetable(self::$tblname);

	}
 
	function single_autonumber($autokey=""){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname." 
			WHERE  AUTOKEY= '{$autokey}' LIMIT 1");
		$cur = $mydb->loadSingleResult();
		return $cur;
	}
	 
	function set_autonumber($id=""){
			global $mydb;
			$mydb->setQuery("SELECT concat(`autostart`, `autoend`) AS 'AUTO' FROM ".self::$tblname." 
				Where autocode= '{$id}' LIMIT 1");
			$cur = $mydb->loadSingleResult();
			return $cur;
	}

	function stud_autonumber(){
			global $mydb;
			$mydb->setQuery("SELECT concat(`autostart`,`autoend`) AS 'AUTO' FROM ".self::$tblname." 
				Where ID= 3 LIMIT 1");
			$cur = $mydb->loadSingleResult();
			return $cur;
	}

	public function auto_update($id="") {
	  global $mydb;
		$sql = "UPDATE ".self::$tblname." SET ";
		$sql .= "autoend = autoend + incrementvalue";
		$sql .= " WHERE autocode='{$id}'"; 
	 	if(!$mydb->setQuery($sql))  return false; 	
		
	}


	/*---Instantiation of Object dynamically---*/
	static function instantiate($record) {
		$object = new self;

		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		} 
		return $object;
	}
	
	
	/*--Cleaning the raw data before submitting to Database--*/
	private function has_attribute($attribute) {
	  // We don't care about the value, we just want to know if the key exists
	  // Will return true or false
	  return array_key_exists($attribute, $this->attributes());
	}

	protected function attributes() { 
		// return an array of attribute names and their values
	  global $mydb;
	  $attributes = array();
	  foreach($this->dbfields() as $field) {
	    if(property_exists($this, $field)) {
			$attributes[$field] = $this->$field;
		}
	  }
	  return $attributes;
	}
	
	protected function sanitized_attributes() {
	  global $mydb;
	  $clean_attributes = array();
	  // sanitize the values before submitting
	  // Note: does not alter the actual value of each attribute
	  foreach($this->attributes() as $key => $value){
	    $clean_attributes[$key] = $mydb->escape_value($value);
	  }
	  return $clean_attributes;
	}
	
	
	/*--Create,Update and Delete methods--*/
	public function save() {
	  // A new record won't have an id yet.
	  return isset($this->id) ? $this->update() : $this->create();
	}
	
	public function create() {
		global $mydb;
		// Don't forget your SQL syntax and good habits:
		// - INSERT INTO table (key, key) VALUES ('value', 'value')
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		$attributes = $this->sanitized_attributes();
		$sql = "INSERT INTO ".self::$tblname." (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')"; 
	
	 if($mydb->InsertThis($sql)) {
	    $this->id = $mydb->insert_id();
	    return true;
	  } else {
	    return false;
	  }
	}

	public function update($id="") {
	  global $mydb;
		$attributes = $this->sanitized_attributes();
		$attribute_pairs = array();
		foreach($attributes as $key => $value) {
		  $attribute_pairs[] = "{$key}='{$value}'";
		}
		$sql = "UPDATE ".self::$tblname." SET ";
		$sql .= join(", ", $attribute_pairs);
		$sql .= " WHERE ID='{$id}'"; 
	 	if(!$mydb->InsertThis($sql)) return false; 	
		
	}
 
	public function studauto_update() {
	  global $mydb;
		$sql = "UPDATE ".self::$tblname." SET ";
		$sql .= "autoend = autoend + incrementvalue";
		$sql .= " WHERE ID=3"; 
	 	if(!$mydb->InsertThis($sql))  return false; 	
		
	}
	public function delete($id="") {
		global $mydb;
		  $sql = "DELETE FROM ".self::$tblname;
		  $sql .= " WHERE ID='{$id}'";
		  $sql .= " LIMIT 1 ";  
		if(!$mydb->InsertThis($sql)) return false; 	
	
	}	


}
?>