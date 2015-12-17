<?php
/*try {
	$db=new PDO('mysql:host=localhost;dbname=a1registration','root','');
}catch(PDOException $e){
	print 'Errors !'.$e->getMessage().'<br/>';
	die();
} 

$dbsh=$db->prepare("select * from clients");
$dbsh->execute();
$alldata=$dbsh->fetchObject();	
print_r($alldata);
exit;*/

class Dbconnection extends PDO
{
	
	public function __construct(){
		parent::__construct("mysql:host=localhost;dbname=a1registration",'root',''); 
		$this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}
	public function seleObject(){
			$sql = "SELECT * FROM clients";
			$stmt = $this->prepare($sql);
            $stmt->execute();
			$stmt=$stmt->fetchObject();
			return $stmt;
	}
}
$db=new Dbconnection();
$data=$db->seleObject();
print_r($data);
?>