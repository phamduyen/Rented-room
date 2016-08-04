<?php
include_once '../model.dao/db.php';
include_once '../model.bean/DangKiPhongBEAN.php';
class DangKyPhongDAO{
    public function getListItem(){
        $query="SELECT * from dangkiphong order by NgayDK";
        $db = new db();
        $arr = array();
        $result = $db->init()->query($query);
        while($items = mysqli_fetch_assoc($result)){
            $cat = new DangKyPhongBEAN();
            $cat->setidDK($items["idDK"]);
            $cat->setidPhong($items["idPhong"]);
            $cat->setNguoiThue($items["NguoiThue"]);
            $cat->setSDT($items["SDT"]);
            $cat->setNgayDK($items["NgayDK"]);
            $cat->setQueQuan($items["QueQuan"]);
            $cat->setCongViec($items["CongViec"]);
            $cat->setStatus($items["Status"]);
            array_push($arr, $cat);
        }
        return $arr;
    }

    public function getItemById($idDK) {
        $query = "SELECT * FROM dangkiphong where idDK = '".$idDK."'";
        $db = new db();
        $result = $db->init()->query($query);
        $items = mysqli_fetch_row($result);
        $cat = new DangKyPhongBEAN();
        $cat->setidDK($items[0]);
        $cat->setidPhong($items[1]);
        $cat->setNguoiThue($items[2]);
        $cat->setSDT($items[3]);
        $cat->setNgayDK($items[4]);
        $cat->setQueQuan($items[5]);
        $cat->setCongViec($items[6]);
        $cat->setStatus($items[7]);
        return $cat;
    }
    public function getItemByIdChu($id) {
    	$query = "SELECT * FROM dangkiphong join phongtro on dangkiphong.idPhong = phongtro.idPhong join daytro on daytro.idDay = phongtro.idDay where idChu = '".$id."'";
    	$db = new db();
    	$arr = array();
    	$result = $db->init()->query($query);
    	while($items = mysqli_fetch_row($result)){
	    	$cat = new DangKyPhongBEAN();
	    	$cat->setidDK($items[0]);
	    	$cat->setidPhong($items[1]);
	    	$cat->setNguoiThue($items[2]);
	    	$cat->setSDT($items[3]);
	    	$cat->setNgayDK($items[4]);
	    	$cat->setQueQuan($items[5]);
	    	$cat->setCongViec($items[6]);
	    	$cat->setStatus($items[7]);
	    	array_push($arr, $cat);
    	}
    	return $arr;
    }

    public function addItem(DangKyPhongBEAN $dangKyPhongBEAN) {
        $query = "INSERT INTO dangkiphong(idDK, idPhong, NguoiThue, SDT, NgayDK, QueQuan, CongViec, Status) values ('" .$dangKyPhongBEAN->getidDK()."','" .$dangKyPhongBEAN->getidPhong()."','".$dangKyPhongBEAN->getNguoiThue()."','".$dangKyPhongBEAN->getSDT()."','".$dangKyPhongBEAN->getNgayDK()."','".$dangKyPhongBEAN->getQueQuan()."','".$dangKyPhongBEAN->getCongViec()."','".$dangKyPhongBEAN->getStatus()."')";
        $db = new db();
        $result = $db->init()->query($query);
        return $result;
    }

    public function updateItem(DangKyPhongBEAN $dangKyPhongBEAN){
        $db = new db();
        $query = "UPDATE dangkiphong SET idPhong = '".$dangKyPhongBEAN->setidPhong()."'".
         " ,NguoiThue = '".$dangKyPhongBEAN->getNguoiThue()."'".
         ", SDT = '".$dangKyPhongBEAN->getSDT()."'".
         ",NgayDK = '".$dangKyPhongBEAN->getNgayDK()."'".
         ",QueQuan = '".$dangKyPhongBEAN->getQueQuan()."'".
         ",CongViec = '".$dangKyPhongBEAN->getCongViec()."'".
         ",Status = '".$dangKyPhongBEAN->getStatus()."'".
         "WHERE idDK = '".$dangKyPhongBEAN->getidDK()."'";
        $result = $db->init()->query($query);
        return $result;
    }

    public  function  updateStatusByID($idDK){
    	$db = new db();
    	$query = "UPDATE dangkiphong SET Status = '1' where idDK ='".$idDK." '";
    	$result = $db->init()->query($query);
    	return $result;
    }
    public function deteteItem($idPhong){
        $db = new db();
        $query = "DELETE FROM dangkiphong WHERE idPhong = '".$idPhong."'";
        $result = $db->init()->query($query);
        return $result;
    }
    public function deteteItemById($idDK){
    	$db = new db();
    	$query = "DELETE FROM dangkiphong WHERE idDK = '".$idDK."'";
    	$result = $db->init()->query($query);
    	return $result;
    }
    
    public function deteteItemStatus($idPhong){
    	$db = new db();
    	$query = "DELETE FROM dangkiphong WHERE idPhong = '".$idPhong."'and Status =0 ";
    	$result = $db->init()->query($query);
    	return $result;
    }
}
?>