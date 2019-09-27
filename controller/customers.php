<?php
	include ("../pos/config/database.php");
	
	include ("../pos/model/model_customers.php");
	
	class customers {
			public $customers;
			
			function __construct() {
				$this->customers		= new model_customers();
				
			}

			function select() {
				$data_customers			= $this->customers->dataSelect();
				
				include "../pos/view/dashboard.php";
			}
		
			function insert() {

				include "../pos/view/dashboard.php";
			}
		
			function insert_data() {
				$name			= $_POST['name'];
				$address		= $_POST['address'];
				
				$data_name				= $this->customers->dataValidation($name);
				
				if($data_name < 1){
					$data_customers	= $this->customers->dataInsert($name, $address);

					if($data_customers == TRUE) {
						echo "<script> 
							alert('Proses Insert Berhasil!'); 
							window.location = 'index.php?controller=customers&method=select';
							</script>";
					} 
					else {
						echo "<script> 
							alert('Proses Insert Gagal!');
							window.location = 'index.php?controller=customers&method=insert';  
							</script>";
					}
				}else{
					echo "<script> 
							alert('Nama Pelanggan sudah ada!');
							window.location = 'index.php?controller=customers&method=insert';  
							</script>";
				}
			}
		
			function update() {
				$id			= $_GET['id'];
				
				$data_customers			= $this->customers->dataDetail($id);
				
				include "../pos/view/dashboard.php";
			}
		
			function update_data() {
				$id				= $_POST['id'];
				$name			= $_POST['name'];
				$address		= $_POST['address'];
				$created_at		= $_POST['created_at'];
				
				$data_customers			= $this->customers->dataUpdate($id, $name, $address, $created_at);
				
				if($data_customers == TRUE) {
					echo "<script> 
						alert('Proses Update Berhasil!');  
						window.location = 'index.php?controller=customers&method=select';
						</script>";
				
				} 
				else {
					echo "<script> 
						alert('Proses Update Gagal!'); 
						window.location = 'index.php?controller=customers&method=update&id='.$id;
						</script>";
				}
			}
		
			function delete() {
				$id			= $_GET['id'];
				
				$data_customers			= $this->customers->dataDelete($id);

				if($data_customers == TRUE) {
					echo "<script> 
						alert('Proses Delete Berhasil!');  
						window.location = 'index.php?controller=customers&method=select';
						</script>";
				
				} 
				else {
					echo "<script>  
						alert('Proses Delete Gagal!'); 
						window.location = 'index.php?controller=customers&method=select';
						</script>";
				}
			}
	}
?>