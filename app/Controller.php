<?php
/**
 * Created by PhpStorm.
 * User: your name
 * Date: todays date
 * Time: todays time
 */

class Controller extends Main
{
	public function check_valid_resident($email){
		try {

			$stmt = $this->conn->prepare("SELECT * FROM resident WHERE email LIKE '".$email."'");
			$stmt->execute();
			$editRow = $stmt->fetch(PDO::FETCH_ASSOC);
			return $editRow;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function update_otp_resident($id,$otp,$current_time){
		try {
			$stmt = $this->conn->prepare("UPDATE resident SET otp=:otp,update_timestamp=:update_timestamp where r_id=:id");
			$stmt->bindparam(":otp", $otp);
			$stmt->bindparam(":update_timestamp", $current_time);
			$stmt->bindparam(":id", $id);
			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function reset_otp_resident($id){
		try {
			$stmt = $this->conn->prepare("UPDATE resident SET otp='0' where r_id=:id");
			$stmt->bindparam(":id", $id);
			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function update_password_resident($id,$password){
		try {
			$stmt = $this->conn->prepare("UPDATE resident SET password=:password where r_id=:id");
			$stmt->bindparam(":password", $password);
			$stmt->bindparam(":id", $id);
			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}


	//Admin Forgot Password
	public function check_valid_admin($email){
		try {

			$stmt = $this->conn->prepare("SELECT * FROM tbl_admin WHERE email LIKE '".$email."'");
			$stmt->execute();
			$editRow = $stmt->fetch(PDO::FETCH_ASSOC);
			return $editRow;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function update_otp_admin($id,$otp,$current_time){
		try {
			$stmt = $this->conn->prepare("UPDATE tbl_admin SET otp=:otp,update_timestamp=:update_timestamp where id=:id");
			$stmt->bindparam(":otp", $otp);
			$stmt->bindparam(":update_timestamp", $current_time);
			$stmt->bindparam(":id", $id);
			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function reset_otp_admin($id){
		try {
			$stmt = $this->conn->prepare("UPDATE tbl_admin SET otp='0' where id=:id");
			$stmt->bindparam(":id", $id);
			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function update_password_admin($id,$password){
		try {
			$stmt = $this->conn->prepare("UPDATE tbl_admin SET password=:password where id=:id");
			$stmt->bindparam(":password", $password);
			$stmt->bindparam(":id", $id);
			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}


	//Staff Forgot Password
	public function check_valid_staff($email){
		try {

			$stmt = $this->conn->prepare("SELECT * FROM tbl_staff WHERE email LIKE '".$email."'");
			$stmt->execute();
			$editRow = $stmt->fetch(PDO::FETCH_ASSOC);
			return $editRow;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function update_otp_staff($id,$otp,$current_time){
		try {
			$stmt = $this->conn->prepare("UPDATE tbl_staff SET otp=:otp,update_timestamp=:update_timestamp where staff_id=:id");
			$stmt->bindparam(":otp", $otp);
			$stmt->bindparam(":update_timestamp", $current_time);
			$stmt->bindparam(":id", $id);
			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function reset_otp_staff($id){
		try {
			$stmt = $this->conn->prepare("UPDATE tbl_staff SET otp='0' where staff_id=:id");
			$stmt->bindparam(":id", $id);
			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function update_password_staff($id,$password){
		try {
			$stmt = $this->conn->prepare("UPDATE tbl_staff SET password=:password where staff_id=:id");
			$stmt->bindparam(":password", $password);
			$stmt->bindparam(":id", $id);
			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}
}