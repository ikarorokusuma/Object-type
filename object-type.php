<?php 

class Buku{

	public $judul;
	public $harga;
	public $jenis;

	public function __construct( $judul="judul", $harga="0", $jenis="jenis" ){
	 	$this->judul = $judul;
	 	$this->harga = $harga;
	 	$this->jenis = $jenis; 
	 }	
	 public function say(){
	 	return " Harga : $this->harga | Tipe : $this->jenis";
	 }
}
	class cetakInfoBuku{
		public function cetak($Buku){
			$str = "Judul : {$Buku->judul} | {$Buku->say()} ";
			return $str;
		}
	}
	 $buku1 = new Buku("Edensor", "10.000", "Novel");
	 $buku2 = new Buku("Doraemon", "20.000","Komik");

	 echo "Info Buku 1 : "."<br>" . $buku1->say();
	 echo "<br>";
	 echo "Info Buku 2 : "."<br>" . $buku2->say();
	 echo "<br>";
	 echo "<br>";
	
	 $infoBuku = new cetakInfoBuku();
	 echo $infoBuku -> cetak($buku1);
 ?>