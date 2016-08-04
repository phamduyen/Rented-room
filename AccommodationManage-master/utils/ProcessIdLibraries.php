<?php 

	include_once '../model.dao/db.php';
	
	class ProcessIdLibraries{
		public function  getID($nameOfFieldId, $nameOfTable,$numberSub){
			$db = new db();
			//cat so tu id, cat tu vi tri so 2
			$query = "SELECT MAX(cast(SUBSTRING(".$nameOfFieldId.",".($numberSub+1).",length(".$nameOfFieldId.")-".$numberSub.")as UNSIGNED)) as iD ".
					"FROM  ".$nameOfTable." ";
			$result = $db->init()->query($query);
			$items = mysqli_fetch_row($result);
			$id = $items[0];
			return $id;
		}
	}
?>