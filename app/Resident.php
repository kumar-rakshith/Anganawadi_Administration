<?php
/**
 * Created by PhpStorm.
 * User: your name
 * Date: todays date
 * Time: todays time
 */

class Resident extends Main
{
	protected $id;

	public function __construct()
	{
		//$this->id = $_SESSION['admin'];
		parent::__construct();
	}

	// public function loginAdmin($name,$message)
	// {
	// 	try{
	// 		$stmnt=$this->conn->prepare("select name,password from tbl_admin where id=1");
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

	public function get_userinfo($id){
		try {
			$stmt = $this->conn->prepare("SELECT * FROM resident WHERE r_id=:id");
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			return $stmt;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function loginResident($email,$password)
	{
	    try{
	        $stmnt=$this->conn->prepare("select r_id from resident where email=:email AND password=:password");
	        $stmnt->bindParam("email", $email,PDO::PARAM_STR) ;
	        $stmnt->bindParam("password", $password,PDO::PARAM_STR) ;
	        $stmnt->execute();
	        $count=$stmnt->rowCount();
	        $res=$stmnt->fetch(PDO::FETCH_ASSOC);
	        $id = $res['r_id'];
	        if($count){
	            $_SESSION['resident']= $id;
	            return true;
	        }else{
	            return false;
	        }

	    }catch(PDOException $e) {
	        echo $e->getMessage();
      		return false;
	    }

	}
	

}
?>