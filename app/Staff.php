<?php
/**
 * Created by PhpStorm.
 * User: your name
 * Date: todays date
 * Time: todays time
 */

class Staff extends Main
{
	protected $id;

	public function __construct()
	{
		//$this->id = $_SESSION['admin'];
		parent::__construct();
	}

	public function get_userinfo($id){
		try {
			$stmt = $this->conn->prepare("SELECT * FROM tbl_staff WHERE staff_id=:id");	
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			return $stmt;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function loginStaff($email,$password)
	{
	    try{
	        $stmnt=$this->conn->prepare("select staff_id from tbl_staff where email=:email AND password=:password");
	        $stmnt->bindParam("email", $email,PDO::PARAM_STR) ;
	        $stmnt->bindParam("password", $password,PDO::PARAM_STR) ;
	        $stmnt->execute();
	        $count=$stmnt->rowCount();
	        $res=$stmnt->fetch(PDO::FETCH_ASSOC);
	        $id = $res['staff_id'];
	        if($count){
	            $_SESSION['staff']= $id;
	            return true;
	        }else{
	            return false;
	        }

	    }catch(PDOException $e) {
	        echo $e->getMessage();
      		return false;
	    }

	}
	
	// public function loginUser($name,$message)
	// {
	// 	try{
	// 		$stmnt=$this->conn->prepare("Query statement");
	// 		$stmnt->bindParam("name", $name,PDO::PARAM_STR) ;
	// 		$stmnt->bindParam("password", $password,PDO::PARAM_STR) ;
	// 		$stmnt->execute();
	// 		$count=$stmnt->rowCount();
	// 		$res=$stmnt->fetch(PDO::FETCH_ASSOC);
	// 		$id = $res['id'];
	// 		if($count){
	// 			$_SESSION['admin']= $id;
	// 			return true;
	// 		}else{
	// 			return false;
	// 		}

	// 	}catch(PDOException $e) {
	// 		echo $e->getMessage();
	// 		return false;
	// 	}

	// }

}
?>