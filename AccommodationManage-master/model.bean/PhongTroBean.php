<?php
	class PhongTroBean{
		private $idPhong,$idDay,$moTa,$giaPhong,$dientich,$status;
		
		public function getIdPhong()
		{
			return $this->idPhong;
		}
		
		public function setIdPhong($idPhong)
		{
			$this->idPhong= $idPhong;
		}
		
		public function getIdDay()
		{
			return $this->idDay;
		}
		
		public function setIdDay($idDay)
		{
			$this->idDay= $idDay;
		}
		
		public function getMota()
		{
			return $this->moTa;
		}
		
		public function setMota($mota)
		{
			$this->moTa= $mota;
		}
		
		public function getGiaPhong()
		{
			return $this->giaPhong;
		}
		
		public function setGiaPhong($giaPhong)
		{
			$this->giaPhong= $giaPhong;
		}
		
		public function getDienTich()
		{
			return $this->dientich;
		}
		
		public function setDienTich($dienTich)
		{
			$this->dientich= $dienTich;
		}
		
		public function getStatus()
		{
			return $this->status;
		}
		
		public function setStatus($status)
		{
			$this->status = $status;
		}
		
		
	}
?>