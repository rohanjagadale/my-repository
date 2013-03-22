<?php class Connection{

	private $host = '192.168.1.2';
	private $database = 'exit_interview';
	private $username = 'root';
	private $password = ''; 
	
	
	 /* private $host = 'localhost';
	//private $host = '116.72.253.58';
	private $database = 'zubidubi_exit_interview';
	private $username = 'zubidubi_root';
	private $password = 'root123';  */  

	private $link;
private $result;
public $sql;
function __construct($database=''){
if (!empty($database)){ $this->database = $database; }
$this->link = mysql_connect($this->host,$this->username,$this->password);
mysql_select_db($this->database, $this->link);
return $this->link;  // returns false if connection could not be made.
}
function query($sql){
if (!empty($sql)){
$this->sql = $sql;
$this->result = mysql_query($sql);
return $this->result;
}else{
return false;
}
}
function __destruct(){
//mysql_close($this->link);
}
function close(){
mysql_close($this->link);
}}

function clean_data($data){
return mysql_real_escape_string(trim($data));
}
?>
