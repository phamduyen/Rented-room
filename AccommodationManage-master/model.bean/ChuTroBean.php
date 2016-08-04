<?php
class ChuTroBean{
	private $idChu,$password,$hoTen,$sdt,$diaChi,$email,$status;

	public function getIdChu(){
		return $this->idChu;
	}
	public function getPassword(){
		return $this->password;
	}
	public function getHoTen(){
		return $this->hoTen;
	}
	public  function  getSdt(){
		return $this->sdt;
	}
	public  function  getEmail(){
		return $this->email;
	}
	public  function  getStatus(){
		return $this->status;
	}

	public  function  getDiaChi(){
		return $this->diaChi;
	}
	
	public function setDiaChi($diaChi){
		$this->diaChi = $diaChi;
	}
	public function setIdChu($idChu){
		$this->idChu = $idChu;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function setHoten($hoTen){
		$this->hoTen = $hoTen;
	}

	public function setSdt($sdt){
		$this->sdt = $sdt;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setStatus($status){
		$this->status = $status;
	}
}
	?>