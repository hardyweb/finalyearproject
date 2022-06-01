<?php



echo "<h1>Ini adalah Projek Akhir Tahun  </h1>";

class Pekerja {


	function pekerja(){
	
		$this->nama ="hardy";
		$this->jantina= "lelaki";
		
	}
}


$pekerja = new Pekerja();

echo $pekerja->nama.'<br/>';
echo $pekerja->jantina;


echo "Hai encik".$pekerja->nama;




?>
