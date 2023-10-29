<?php

class barang {

    private $id;
    private $name;
    private $qty;

    public function __construct() {
        $this->id = "B01";
        $this->name = "Beras";
        $this->qty = "100";
    }

    public function getData() {
        return "Data yang diminta dari model barang : $this->name, $this->id, $this->qty";
    }

    public function getDataOne() {
        $data = [
            'id'=>$this->id,
            'nama'=>$this->name,
            'qty'=>$this->qty,
        ];
        return $data;

    }


}
?>