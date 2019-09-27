<?php
	// CLASS MODEL SISTEM
	class model_sistem {
		// PROPERTY
		// DIGUNAKAN UNTUK MENJADI OBJEK SAAT INSTANSIASI DI SINI
			public $konek;
		
		// METHOD
		// FUNCTION __CONSTRUCT UNTUK MENANGANI INSTANSIASI CLASS DARI MODEL 
			function __construct() {
				// INSTANSIASI CLASS KONEKSI 
				$this->konek  	= new koneksi();				
			}
			
		// QUERY UNTUK MENAMPILKAN DATA (SELECT)
			function dataHome() {
				// SQL		
				$sql		= "SELAMAT DATANG DI SISTEM INFORMASI Point Of Sales (POS)";
				
				return $sql;
			}

		// QUERY UNTUK MELAKUKAN VALIDASI LOGIN
			function dataValidasi($username,$password) {
				// SQL		
				$query 		= "SELECT * FROM user
							   WHERE username = '$username'
							   AND password = '$password'
							   ";
							   
				$sql		= mysql_query($query);
				$data 		= mysql_fetch_array($sql);
				$num		= mysql_num_rows($sql);

				// CEK 
				if($num > 0) {
					return $data;
				}
				else {
					return FALSE;
				}

			}
	}
?>