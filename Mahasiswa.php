<?php 
//contoh class
    class Mahasiswa{
        public $nim;
        public $nama;
        public $nilai;
        public $mata_kuliah;
        public $kuliah;

        public function __construct($nim, $nama, $nilai, $mata_kuliah, $kuliah){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->nilai = $nilai;
            $this->mata_kuliah = $mata_kuliah;
            $this->kuliah = $kuliah;

        }

        public function gethasil(){
            if ($this->nilai > 65) return "Lulus";
            else return "Tidak Lulus";
        }
    }
?>