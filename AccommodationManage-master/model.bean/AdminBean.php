<?php
	class AdminBean{
		private $idAD,$password,$hoTen,$sdt,$email,$status;
		
		public function getIDAD(){
			return $this->idAD;
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
		
		public function setIDAD($idAD){
			$this->idAD = $idAD;
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