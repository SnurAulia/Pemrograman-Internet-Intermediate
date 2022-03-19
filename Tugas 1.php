<?php

class Jam{

    public  $nama, $merk, $warna, $harga;

    public function __construct( $nama = "nama", $merk = "merk", $warna = "warna", $bentuk = "bentuk", $harga = 0) {

        $this->nama = $nama;
        $this->merk = $merk;
        $this->warna = $warna;
        $this->bentuk = $bentuk;
        $this->harga = $harga;

    }

    public function getlabel() {

        return "$this->merk, $this->warna";

    }

    public function getJenisJam() {

        $str = "{$this->nama} │ {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class AksesorisHp{

    public  $merk, $nama, $warna, $harga, $jenis;

    public function __construct( $merk = "merk", $nama = "nama", $warna = "warna", $jenis="jenis", $harga = 0) {

        $this->merk = $merk;
        $this->nama= $nama;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->jenis = $jenis;


    }

    public function getlabel() {

        return "$this->merk, $this->warna";

    }

    public function getJenisAksesorisHp() {

        $str = "{$this->nama} , {$this->getlabel()} , Rp. {$this->harga} ";

        return $str;
    }

}

class JamTangan extends Jam{

    public function getInfoJam() {
        $str = "JamTangan    = {$this->nama} , {$this->getlabel()} , {$this->bentuk} , Rp. {$this->harga} ";
        return $str; 
    }

}

class JamDinding extends Jam{

    public function getInfoJam() {
        $str = "JamDinding = {$this->nama} , {$this->getlabel()} , {$this->bentuk} , Rp. {$this->harga} ";
        return $str; 
    }

}

class Headset extends AksesorisHp {

    public function getInfoAksesorisHp() {
        $str = "Headset = {$this->nama} , {$this->getlabel()} , {$this->jenis}, Rp. {$this->harga} ";
        return $str; 
    }

}

class LensaKamera extends AksesorisHp {

    public function getInfoAksesorisHp() {
        $str = "LensaKamera = {$this->nama} , {$this->getlabel()} , {$this->jenis}, Rp. {$this->harga} ";
        return $str; 
    }

}

class CetakInfoJam {

    public function cetak(Jam $Jam){
        $str = "{$Jam->nama} {$Jam->getlabel()} , Rp. {$Jam->harga} ";
        return $str;
    }

}

class CetakInfoAksesorisHp{

    public function cetak(AksesorisHp $AksesorisHp){
        $str = "{$AksesorisHp->merk} {$AksesorisHp->getlabel()} (Rp. {$AksesorisHp->harga})";
        return $str;
    }

}

$Jam1 = new JamTangan("Jam Tangan Analog", "Alexandre Christie", "Merah", "Lingkaran", 50000);
$Jam2 = new JamTangan("Jam Tangan Digital", "SKMEI", "Hitam", "Persegi", 97000);
$Jam3 = new JamDinding("Jam Dinding LED", "Jh", "Putih", "Lingkaran", 110000 );
$Jam4 = new JamDinding("Jam Dinding Digital", "Seiko", "Silver", "Lingkaran", 75000);

$AksesorisHp1 = new Headset("Oppo", "Headset Bluetooth", "Silver", "Audio", 150000);
$AksesorisHp2 = new Headset("Robot", "Headset Gaming", "Hitam", "Audio", 300000);
$AksesorisHp3 = new LensaKamera("SIRUI", "Anamorphic Lens", "Hitam", "Kamera", 1400000);
$AksesorisHp4 = new LensaKamera("APEXEL", "Macro Lens", "Putih", "Kamera", 5000000);

echo $Jam1->getInfoJam();
echo "<br>";
echo $Jam2->getInfoJam();
echo "<br>";
echo $Jam3->getInfoJam();
echo "<br>";
echo $Jam4->getInfoJam();
echo "<hr>";
echo $AksesorisHp1->getInfoAksesorisHp();
echo "<br>";
echo $AksesorisHp2->getInfoAksesorisHp();
echo "<br>";
echo $AksesorisHp3->getInfoAksesorisHp();
echo "<br>";
echo $AksesorisHp4->getInfoAksesorisHp();
echo "<hr>";


?>