<?php 

class Sql{

	private $conn;
	private $userid;
	public $query;

	function __construct(){
		if(!isset($_SESSION['userid'])){
			session_start();
		}
		$this->userid = $_SESSION['userid'];
		$this->conn = mysqli_connect('localhost','root','eucs1234','csm');
		if(!$this->conn)
			echo 'Error';
	}

	// Executa Select
	/*
		@table 	String 			  - nome da tabela
		@fields Array(val) 		  - campos a serem retornados
		@params Array(key => val) - Campos e valores do filtro

		select @fields from @table where @params->key = @params->val
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

	// Retorna todos os registros de uma tabela
	/*
		@table String - nome da tabela
	*/
	public function select_all($table){
		$result = mysqli_query($this->conn, 'select * from '.$table);
		while ($data = $result->fetch_assoc()){
			$results[] = $data;
		}
		return $results;
	}


	// Executa Update
	/*
		@table 	String 			  - nome da tabela
		@data   Array(key => val) - Campos e valores do filtro
		@id     Int               - id do registro a ser atualizado

		update @table set @data->key = @data->val where id = @id
	*/

	public function update($table,$data,$id){
		$this->query = "UPDATE $table SET ";
		foreach($data as $key => $val){
			$fields[] = "$key = '$val'";
		}
		$this->query .= implode(', ', $fields);
		$this->query .= " WHERE id = $id";
		$result = mysqli_query($this->conn, $this->query);
		return($this->query);
	}


	// Executa insert
	/*
		@table 	String 			  - nome da tabela
		@data   Array(key => val) - Campos e valores do filtro

		insert into @table (@data->key) values (@data->val)
	*/

	public function insert($table,$data){
		if($table = 'users'){
			$data['password'] = hash('sha256','123456');
		}

		// Data de criação e usuário que criou
		$data['created'] = date('Y-m-d h:i:s');
		$data['created_by'] = $this->userid;
		foreach($data as $key => $val){
			$fields[] = $key;
			$values[] = "'$val'";
		}
		$this->query = "INSERT INTO $table (";
		$this->query .= implode(',',$fields);
		$this->query .= ') VALUES (';
		$this->query .= implode(',',$values);
		$this->query .= ')';
		$result = mysqli_query($this->conn, $this->query);
		return($this->query);
	}

}

?>