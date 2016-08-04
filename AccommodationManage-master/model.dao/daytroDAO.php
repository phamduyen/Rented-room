<?php
include_once '../model.dao/db.php';
include_once '../model.bean/daytroBEAN.php';
include_once '../model.bean/PhongTroBean.php';
class daytroDAO{
    public function getListItem(){
        $query="SELECT * from daytro";
        $db = new db();
        $arr = array();
        $result = $db->init()->query($query);
        while($items = mysqli_fetch_assoc($result)){
            $cat = new daytroBEAN();
            $cat->setidDay($items["idDay"]);
            $cat->setidChu($items["idChu"]);
            $cat->setDiaChi($items["DiaChi"]);
            $cat->setidKhu($items["idKhu"]);
            array_push($arr, $cat);
        }
        return $arr;
    }
    

    public function getListItemByIdChu($idChu){
    	$query="SELECT * from daytro where idChu = '".$idChu."'";
    	$db = new db();
    	$arr = array();
    	$result = $db->init()->query($query);
    	while($items = mysqli_fetch_assoc($result)){
    		$cat = new daytroBEAN();
    		$cat->setidDay($items["idDay"]);
    		$cat->setidChu($items["idChu"]);
    		$cat->setDiaChi($items["DiaChi"]);
    		$cat->setidKhu($items["idKhu"]);
    		array_push($arr, $cat);
    	}
    	return $arr;
    }
    public function getItemById($idDay) {
        $query = "SELECT * FROM daytro where idDay = '".$idDay."'";
        $db = new db();
        $result = $db->init()->query($query);
        $items = mysqli_fetch_row($result);
        $cat = new daytroBEAN();
        $cat->setidDay($items[0]);
        $cat->setidChu($items[1]);
        $cat->setDiaChi($items[2]);
        $cat->setidKhu($items[3]);
        return $cat;
    }
    public function count($id) {
    	$query = "SELECT Count(Status) FROM phongtro where idDay = '".$id."' and Status =  0";
    	$db = new db();
    	
    	$result = $db->init()->query($query);
    	$items = mysqli_fetch_row($result);
    	$count = $items[0];
    	return $count ;
    }

    public function addItem(daytroBEAN $daytroBEAN) {
        $query = "INSERT INTO daytro(idDay, idChu, DiaChi, idKhu) values ('" .$daytroBEAN->getidDay()."','" .$daytroBEAN->getidChu()."','".$daytroBEAN->getDiaChi()."','".$daytroBEAN->getidKhu()."')";
        echo $query;
        $db = new db();
        $result = $db->init()->query($query);
        return $result;
    }

    public function updateItem(daytroBEAN $daytroBEAN){
        $db = new db();
        $query = "UPDATE daytro SET  DiaChi = '".$daytroBEAN->getDiaChi()."'".
            ", idKhu = '".$daytroBEAN->getidKhu()."'".
            "WHERE idDay = '".$daytroBEAN->getidDay()."'";
        $result = $db->init()->query($query);
        return $result;
    }

    public function deteteItem($idDay){
        $db = new db();
        $query = "DELETE FROM daytro WHERE idDay = '".$idDay."'";
        $result = $db->init()->query($query);
        return $result;
    }
}
?>