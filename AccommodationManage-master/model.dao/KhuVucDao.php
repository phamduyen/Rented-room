<?php
	include_once '../model.bean/KhuVucBean.php';
	include_once '../model.dao/db.php';

	class KhuVucDao{
		public function getListItem(){
			$query="SELECT * from khuvuc";
			$db = new db();
			$arr = array();
			$result = $db->init()->query($query);
			while($items = mysqli_fetch_assoc($result)){
				$kv = new KhuVucBean();
				$kv->setIdKhu($items["idKhu"]);
				$kv->setTen($items["Ten"]);
				array_push($arr, $kv);
			}
			return $arr;
		}
		public function getIteamById($id){
			$query="SELECT * from khuvuc where idKhu = '".$id."'";
			$kv = new KhuVucBean();
			$db = new db();
			$result = $db->init()->query($query);
			while($items = mysqli_fetch_assoc($result)){
				
				$kv->setIdKhu($items["idKhu"]);
				$kv->setTen($items["Ten"]);				
			}
			return $kv;
		}
		
		public function addItem(KhuVucBean $khuVucBean) {
			$query = "INSERT INTO khuvuc(idKhu,Ten) values ('" .$khuVucBean->getIdKhu()."','" .$khuVucBean->getTen() ."')";
			$db = new db();
			$result = $db->init()->query($query);
			return $result;
		}
		
		public function updateItem(KhuVucBean $khuVucBean){
			$db = new db();
			$query = "UPDATE khuvuc SET Ten = '".$khuVucBean->getTen()."' WHERE idKhu = '".$khuVucBean->getIdKhu()."'";
			$result = $db->init()->query($query);
			return $result;
		}
		
		public function deteteItem($idKhu){
			$db = new db();
			$query = "DELETE FROM khuvuc WHERE idKhu = '".$idKhu."'";
			$result = $db->init()->query($query);
			return $result;
		}
		
	}
?>