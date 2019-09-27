<?php
	include ("../pos/config/database.php");
	
	include ("../pos/model/model_sistem.php");
	
	class sistem {
			public $sistem;
			
			function __construct() {
				$this->sistem	= new model_sistem();
				
			}
			
			function home() {
				$data			= $this->sistem->dataHome();
				
				include "../pos/view/dashboard.php";
			}

			function login() {
				include "../pos/view/login.php";
			}

			function validasi() {
				session_start();

				$username 		= $_POST['username'];
				$password 		= $_POST['password'];;
				
				$data_valid		= $this->sistem->dataValidasi($username,$password);

				if($data_valid != FALSE) {
					$_SESSION['username'] = $data_valid['username'];
					
					echo "<script> 
						  alert('Proses Login Berhasil!'); 
						  window.location = 'index.php?controller=sistem&method=home';
						  </script>";
					
				} 
				else {
					echo "<script> 
						  alert('Proses Login Gagal! Silakan Coba Lagi!'); 
						  window.location = 'index.php'; 
						  </script>";
				}
				
			}

			function logout() {
				session_start();

				if(isset($_SESSION['username'])) {
					unset($_SESSION);

					session_destroy();
				}
				
				echo "<script> 
					  alert('Proses Logout Berhasil!'); 
					  window.location = 'index.php'; 
					  </script>";
			}
	}
?>