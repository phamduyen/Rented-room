<?php
	include_once '../model.bean/PhongTroBean.php';
	include_once '../model.dao/db.php';

	class PhongTroDao{
		public function getListItem(){
			$query="SELECT * from phongtro";
			$db = new db();
			$arr = array();
			$result = $db->init()->query($query);
			while($items = mysqli_fetch_assoc($result)){
				$phongtro = new PhongTroBean();
				$phongtro->setIdPhong($items["idPhong"]);
				$phongtro->setIdDay($items["idDay"]);
				$phongtro->setDienTich($items["DienTich"]);
				$phongtro->setMota($items["Mota"]);
				$phongtro->setGiaPhong($items["GiaPhong"]);
				$phongtro->setStatus($items["Status"]);
				array_push($arr, $phongtro);
			}
			return $arr;
		}
		public function getListItemByIdChu($idChu){
			$query="SELECT * from phongtro join daytro on daytro.idDay = phongtro.idDay where daytro.idChu = '".$idChu."'";
			$db = new db();
			$arr = array();
			$result = $db->init()->query($query);
			while($items = mysqli_fetch_assoc($result)){
				$phongtro = new PhongTroBean();
				$phongtro->setIdPhong($items["idPhong"]);
				$phongtro->setIdDay($items["idDay"]);
				$phongtro->setDienTich($items["DienTich"]);
				$phongtro->setMota($items["Mota"]);
				$phongtro->setGiaPhong($items["GiaPhong"]);
				$phongtro->setStatus($items["Status"]);
				array_push($arr, $phongtro);
			}
			return $arr;
		}
		
		public function getListItemByIdDay($idDay){
			$query="SELECT * from phongtro where idDay = '".$idDay."'";
			$db = new db();
			$arr = array();
			$result = $db->init()->query($query);
			while($items = mysqli_fetch_assoc($result)){
				$phongtro = new PhongTroBean();
				$phongtro->setIdPhong($items["idPhong"]);
				$phongtro->setIdDay($items["idDay"]);
				$phongtro->setDienTich($items["DienTich"]);
				$phongtro->setMota($items["Mota"]);
				$phongtro->setGiaPhong($items["GiaPhong"]);
				$phongtro->setStatus($items["Status"]);
				array_push($arr, $phongtro);
			}
			return $arr;
		}
		
		
		public function TimKiem($idKhu,$giaValue,$dienTichValue){
			$Gia1 = "  GiaPhong < 500000 ";
			$Gia2 = " GiaPhong > 500000 && GiaPhong < 1000000 ";
			$Gia3 ="  GiaPhong>1000000";
			$S1= " DienTich > 15 && DienTich <20 ";
			$S2= "  DienTich > 20 && DienTich <25 ";
			$S3= " DienTich > 25 ";
			$join = "Select*from phongtro join daytro on phongtro.idDay = daytro.idDay where ";

			switch ($giaValue){
				case 1 : $queryGia = $Gia1; break;
				case 2 : $queryGia = $Gia2; break;
				case 3 : $queryGia = $Gia3; break;
				case "": $queryGia ="";break;
			}
			switch ($dienTichValue){
				case 1 : $queryS = $S1; break;
				case 2 : $queryS = $S2; break;
				case 3 : $queryS = $S3; break;
				case "": $queryS ="";break;
			}
			if ($idKhu ==""){$queryKhu == "";}else $queryKhu = ".daytro.idKhu='".$idKhu."'";
			/* if($queryKhu!="" && $queryGia!="" && $queryS!="")$query = $join.$queryKhu."and".$queryGia."and".$queryS;
			 else if ( $queryGia!=""&&$queryS !="")$query =$join.$queryGia."and".$queryS;
			 	else if ($queryS!="")$query = $join.$queryS;
			 */
			if($queryKhu!="" && $queryGia!="" && $queryS!="")$query = $join.$queryKhu."and".$queryGia."and".$queryS;
				if ($queryKhu=="")
				{
					if ($queryGia=="")
					{
						if ($queryS=="");
						else  $query= $join.$queryS;
					}
					else {
						if ($queryS=="")$query = $join.$queryGia;
						else  $query= $join.$queryGia."and".$queryS;
					}
				}
				else {
					if ($queryGia=="")
					{
						if ($queryS=="")$query = $join.$queryKhu;
						else  $query= $join.$queryKhu."and".$queryS;
					}
					else {
						if ($queryS=="") $query = $join.$queryKhu."and".$queryGia;
						else  $query = $join.$queryKhu."and".$queryGia."and".$queryS;
					}
				}
			
			echo $query;
			$db = new db();
			$arr = array();
			$result = $db->init()->query($query);
			while($items = mysqli_fetch_assoc($result)){
				$phongtro = new PhongTroBean();
				$phongtro->setIdPhong($items["idPhong"]);
				$phongtro->setIdDay($items["idDay"]);
				$phongtro->setDienTich($items["DienTich"]);
				$phongtro->setMota($items["Mota"]);
				$phongtro->setGiaPhong($items["GiaPhong"]);
				$phongtro->setStatus($items["Status"]);
				array_push($arr, $phongtro);
			}
			return $arr;
		}
		public function addItem(PhongTroBean $phongTroBean) {
			$query = "INSERT INTO phongtro(idPhong,idDay,Mota,GiaPhong,DienTich,Status) values ('" .$phongTroBean->getIdPhong()."','" .$phongTroBean->getIdDay()."','".$phongTroBean->getMota()."','".$phongTroBean->getGiaPhong()."','".$phongTroBean->getDienTich()."',".$phongTroBean->getStatus().")";
			echo $query;
			$db = new db();
			$result = $db->init()->query($query);
			return $result;
		}
		
		public function updateItem(PhongTroBean $phongtroBean){
			$db = new db();
			$query = "UPDATE phongtro SET idDay = '".$phongtroBean->getIdDay()."',MoTa = '".$phongtroBean->getMota()."',GiaPhong=".$phongtroBean->getGiaPhong().",DienTich = ".$phongtroBean->getDienTich().",Status = ".$phongtroBean->getStatus()." WHERE idPhong = '".$phongtroBean->getIdPhong()."'";
			$result = $db->init()->query($query);
			return $result;
		}
		
		public function updateStatusById($idPhong,$Status){
			$db = new db();
			$query = "UPDATE phongtro SET Status='.$Status.' where idPhong ='".$idPhong."'";
			echo $query;
			$result = $db->init()->query($query);
			return $result;
		}
		
		public function deteteItem($idPhong){
			$db = new db();
			$query = "DELETE FROM phongtro WHERE idPhong = '".$idPhong."'";
			$result = $db->init()->query($query);
			return $result;
		}
		
		public function deteteItemByIdDay($idDay){
			$db = new db();
			$query = "DELETE FROM phongtro WHERE idDay = '".$idDay."'";
			$result = $db->init()->query($query);
			return $result;
		}
	}
?>