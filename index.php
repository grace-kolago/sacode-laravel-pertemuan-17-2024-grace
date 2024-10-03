<?php

class Mobil {

    // Property
    public $merek;
    public $model;
    public $tahun;
    public $warna;

    // Method
    public function stat()
        {
            echo 'Mobil dinyalakan ';
        }
    public function cek($nama,$ket)
    {
        echo 'Merek : '. $this->merek.'<br>';
        echo 'Model : '. $this->model.'<br>';
        echo 'Tahun : '. $this->tahun.'<br>';
        echo 'Warna : '. $this->warna.'<br>';
        echo 'Pemilik : '. $nama.'<br>';
        echo 'Keterangan : '. $ket.'<br>';



    }

    public function stop()
       {
            echo 'Mobil dimatikan';
       }
    

}

// objek

$mobil = new Mobil();
$mobil->merek = 'Avanza';
$mobil->model = 'Nova';
$mobil->tahun = 2023;
$mobil->warna = 'Putih';

// Panggil Method

$ket = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi debitis sequi non inventore hic quos neque officia ducimus exercitationem.';

$mobil->cek('Grace',$ket);