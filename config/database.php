<?php
	// Buat class koneksi
	class koneksi 
	{
		// Property
		public $hostname 	= "localhost"; 
		public $username 	= "root";
		public $password 	= "";
		public $database 	= "pos";
		
		// Method
		public function __construct()
		{
			// Cek koneksi ke host
			$cek_host		= mysql_connect($this->hostname, $this->username, $this->password);
			
			// Cek koneksi dengan database
			$cek_database	= mysql_select_db($this->database, $cek_host);
			
			// Verifikasi cek koneksi
			if(($cek_host == TRUE) && ($cek_database == TRUE))
			{
				return TRUE;
			} 
			else {
				return FALSE;
			}
		}
	}
?>