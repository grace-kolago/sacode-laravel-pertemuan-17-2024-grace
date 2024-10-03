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
        echo '<br>';



    }

    public function stop()
       {
            echo 'Mobil dimatikan';
       }
    

}

class Kendaraan extends Mobil{
    public $jenis;

    public function bergerak()
    {
        echo 'Kendaraan sedang bergerak';
    }
}
// objek

$mobil = new Mobil();
$kendaraan = new Kendaraan ();
$mobil->merek = 'Avanza';
$mobil->model = 'Nova';
$mobil->tahun = 2023;
$mobil->warna = 'Putih';

// Panggil Method

$ket = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero animi debitis sequi non inventore hic quos neque officia ducimus exercitationem.';

$mobil->cek('Grace',$ket);
$kendaraan->merek = 'BMW';
echo $kendaraan-> merek ;
$kendaraan->cek('Ghe','');