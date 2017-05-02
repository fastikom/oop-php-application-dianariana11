<?php 

class crud{
	// properties
	var $host = "localhost";
	var $username = "root";
	var $pass = "";
	var $db = "buku";

		//constructor adalah method atau fungsi yang otomatis dilakukan saat instansiasi dilakukan
	function __construct(){ 
		mysql_connect($this->host, $this->username, $this->pass); // Menyambungkan ke server
		mysql_select_db($this->db); // Memilih database
	}

	function tampil_data(){ //Fungsi yang digunakan untuk menampilkan data
		$data = mysql_query("select * from buku"); //menampilkan semua data yang berada pada tabel buku
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($judul,$pengarang,$penerbit,$tahunterbit){  //Fungsi yang digunakan untuk menginputkan data
		mysql_query("insert into buku values('','$judul','$pengarang','$penerbit','$tahunterbit')");
	}
	function edit($id){  //Fungsi yang digunakan untuk mengedit data
		$data = mysql_query("select * from buku where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
function update($id, $judul,$pengarang,$penerbit,$tahunterbit){  //Fungsi yang digunakan agar data dapat di update
		mysql_query("update buku set judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahunterbit='$tahunterbit' where id='$id'");
	}
	
	function hapus($id){  //Fungsi yang digunakan untuk menghapus data
		mysql_query("delete from buku where id='$id'");  
	}
	
} 

?>