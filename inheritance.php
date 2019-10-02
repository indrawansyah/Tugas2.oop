<?php 

class Produk {
	public  $judul,
			$penulis,
			$penerbit,
			$harga, 
			$jmlHalaman,
			$waktumain,
			$tipe;


		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktumain = 0, $tipe ="Game" ) {
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jmlHalaman = $jmlHalaman;
			$this->waktumain = $waktumain;
			$this->tipe = $tipe;
	
	}


	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public 	function getInfoProduk(){
		$str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";

		return $str;

	}

}

class Komik extends Produk {
	public function getInfoProduk(){
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman. ";	
		return $str;
	}

}


class CetakInfoProduk {
	public function cetak ( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new Komik("Naruto", "Masashi Kishimoto","Shonen Jump", 30000, 100, 0, "Komik", "Game");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer",250000, 0, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

