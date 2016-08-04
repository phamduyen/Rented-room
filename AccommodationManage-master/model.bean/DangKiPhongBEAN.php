<?php

class DangKyPhongBean{
    private $idDK,$idPhong, $NguoiThue, $SDT, $NgayDK, $QueQuan, $CongViec, $Status;

    public function getidDK() {
        return $this->idDK;
    }
    public function getidPhong() {
        return $this->idPhong;
    }
    public function getNguoiThue() {
        return $this->NguoiThue;
    }
    public function getSDT() {
        return $this->SDT;
    }
    public function getNgayDK() {
        return $this->NgayDK;
    }
    public function getQueQuan() {
        return $this->QueQuan;
    }
    public function getCongViec() {
        return $this->CongViec;
    }
    public function getStatus() {
        return $this->Status;
    }

    public function setidDK($idDK) {
        $this->idDK=$idDK;
    }
    public function setidPhong($idPhong) {
        $this->idPhong=$idPhong;
    }
    public function setNguoiThue($NguoiThue) {
        $this->NguoiThue=$NguoiThue;
    }
    public function setSDT($SDT) {
        $this->SDT=$SDT;
    }
    public function setNgayDK($NgayDK) {
        $this->NgayDK=$NgayDK;
    }
    public function setQueQuan($QueQuan) {
        $this->QueQuan=$QueQuan;
    }
    public function setCongViec($CongViec) {
        $this->CongViec=$CongViec;
    }
    public function setStatus($Status) {
        $this->Status=$Status;
    }
}
?>