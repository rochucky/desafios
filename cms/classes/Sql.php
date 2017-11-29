<?php 

class Sql{

	private $conn;
	public $query;

	function __construct(){
		
		$this->conn = mysqli_connect('localhost','root','','cms');
		if(!$this->conn)
			echo 'Error';
		

	}


	// Executa Select
	/*
		@table 	String 			  - nome da tabela
		@fields Array(val) 		  - campos a serem busscados
		@params Array(key => val) - Campos do where
	*/
	public function select($table,$fields,$params){
		$this->query = 'SELECT ';
		$this->query .= implode(', ', $fields);
		$this->query .= ' FROM ';
		$this->query .= $table;
		$this->query .= ' WHERE ';
		foreach ($params as $field => $value) {
			$where[] = $field." = '".$value."'";
		}
		$this->query .= implode(' AND ', $where);
		// echo $this->query;
		$result = mysqli_query($this->conn, $this->query);
		return $result->fetch_assoc();
	}

	public function select_all($table){
		$result = mysqli_query($this->conn, 'select * from '.$table);
		while ($data = $result->fetch_assoc()){
			$results[] = $data;
		}
		return $results;
	}

}

?>