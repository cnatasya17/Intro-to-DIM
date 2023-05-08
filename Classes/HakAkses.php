<?php
     require_once 'Crud/Crud.php';

    class HakAkses extends Crud{
        private $id_akses,
                $nama_akses,
                $keterangan;
        
        public function __construct($id_akses = null, $nama_akses = null, $keterangan = null)
        {
            parent::__construct('hak_akses');
            $this->id_akses = $id_akses;
            $this->nama_akses = $nama_akses;
            $this->keterangan = $keterangan;
        }

        public function store($id_akses, $nama_akses, $keterangan)
        {
            global $connect;
            $query = "INSERT INTO hak_akses (id_akses, nama_akses, keterangan) 
                      VALUES ('$id_akses', '$nama_akses', '$keterangan');
            ";

            mysqli_query($connect, $query);
        }

        public function fetchSingle($id_akses)
        {
            global $connect;
            $query = "SELECT * FROM hak_akses WHERE id_barang = '$id_akses' LIMIT 1;";

            mysqli_query($connect, $query);
        }

        public function update($id_akses, $nama_akses, $keterangan)
        {
            global $connect;
            $query = "UPDATE hak_akses
                      SET 
                        nama_akses = '$nama_akses', 
                        keterangan = '$keterangan' 
                    WHERE id_akses = $id_akses
            ";
            mysqli_query($connect, $query);
        }

        public function delete($id_akses)
        {
            global $connect;
            $query = "DELETE FROM hak_akses
                      WHERE id_akses = '$id_akses'    
            ";
            
            mysqli_query($connect, $query);
        }
    }