<?php

class daytroBEAN{
    private $idDay,$idChu, $DiaChi, $idKhu;

    public function getidDay() {
        return $this->idDay;
    }
    public function getidChu() {
        return $this->idChu;
    }
    public function getDiaChi() {
        return $this->DiaChi;
    }
    public function getidKhu() {
        return $this->idKhu;
    }

    public function setidDay($idDay) {
        $this->idDay = $idDay;
    }
    public function setidChu($idChu) {
        $this->idChu = $idChu;
    }
    public function setDiaChi($DiaChi) {
        $this->DiaChi = $DiaChi;
    }
    public function setidKhu($idKhu) {
        $this->idKhu = $idKhu;
    }
}
?>