<?php
class connection{
	protected $connection;
	protected $servname = "localhost";
	protected $username = "root";
	protected $password = "";
	
public function conect(){
	$this->connection = new mysqli($this->servname,$this->username,$this->password);
	$this->connection->set_charset("utf8");
	return $this->connection;
}
public function disconect(){
	mysqli_close($this->connection);
}
}
?>