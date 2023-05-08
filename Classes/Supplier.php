<?php
     require_once 'Crud/Crud.php';

    class Supplier extends Crud{
        private $id_supplier,
                $nama_supplier,
                $no_hp,
                $alamat,
                $id_pembelian;

        public function __construct($id_supplier = null, $nama_supplier = null, $no_hp = null, $alamat = null, $id_pembelian = null)
        {
            parent::__construct('supplier');
            $this->id_supplier = $id_supplier;
            $this->nama_supplier = $nama_supplier;
            $this->no_hp = $no_hp;
            $this->alamat = $alamat;
            $this->id_pembelian = $id_pembelian;
        }

        public function store($id_supplier, $nama_supplier, $no_hp, $alamat, $id_pembelian)
        {
            global $connect;
            $query = "INSERT INTO supplier (id_supplier, nama_supplier, no_hp, alamat, id_pembelian) 
                      VALUES ('$id_supplier', '$nama_supplier', '$no_hp', '$alamat', '$id_pembelian');;
            ";

            mysqli_query($connect, $query);
        }

        public function fetchSingle($id_supplier)
        {
            global $connect;
            $query = "SELECT * FROM supplier WHERE id_supplier = '$id_supplier' LIMIT 1;";

            mysqli_query($connect, $query);
        }

        public function update($id_supplier, $nama_supplier, $no_hp, $alamat, $id_pembelian)
        {
            global $connect;
            $query = "UPDATE supplier 
                      SET 
                        nama_supplier = '$nama_supplier', 
                        no_hp = '$no_hp', 
                        alamat = '$alamat',
                        id_pembelian = '$id_pembelian',
                      WHERE id_supplier = '$id_supplier';
            ";
            mysqli_query($connect, $query);
        }

        public function delete($id_supplier)
        {
            global $connect;
            $query = "DELETE FROM supplier
                      WHERE id_supplier = '$id_supplier'    
            ";
            
            mysqli_query($connect, $query);
        }
    }