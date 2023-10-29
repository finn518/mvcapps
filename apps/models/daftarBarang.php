<?php


class daftarBarang {
    private $daftar = [];
    private $db = null;

    public function __construct() {
        $this->db = new DB();
        $this->db->connect('mysql','localhost','root', '', 'mvcapp');
        // $this->daftar = [[
        //     'id' => 'B02',
        //     'nama'=> 'Minyak Goreng',
        //     'qty'=> '100',
        // ],
        // [
        //     'id' => 'B03',
        //     'nama'=> 'Gula',
        //     'qty'=> '50',
        // ],
        // [
        //     'id' => 'B04',
        //     'nama'=> 'Kopi',
        //     'qty'=> '500',
        // ]];
    }

    public function getDataAll() {
        // return $this->daftar;
        $stmt = "select * from daftarbarang ";
        $query = $this->db->query( $stmt );

        while ($result = $this->db->fetch_array($query)) {
            $data []= $result; 
        }
        return $data;
    }

    
}
?>