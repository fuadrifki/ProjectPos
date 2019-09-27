<?php
	include ("../pos/config/database.php");
	
	include ("../pos/model/model_categories.php");
	
	class categories {
			public $categories;
			
			function __construct() {
				$this->categories		= new model_categories();
				
			}

			function select() {
				$data_categories			= $this->categories->dataSelect();
				
				include "../pos/view/dashboard.php";
			}
		
			function insert() {
				include "../pos/view/dashboard.php";
			}
		
			function insert_data() {
				$categories		= $_POST['categories'];
				
				$data_name				= $this->categories->dataValidation($categories);
				
				if($data_name < 1){
					$data_categories	= $this->categories->dataInsert($categories);

					if($data_categories == TRUE) {
						echo "<script> 
							alert('Proses Insert Berhasil!'); 
							window.location = 'index.php?controller=categories&method=select';
							</script>";
					
					} 
					else {
						echo "<script> 
							alert('Proses Insert Gagal!');
							window.location = 'index.php?controller=categories&method=insert';  
							</script>";
					}
				}else{
					echo "<script> 
							alert('Nama Kategori Produk sudah ada!');
							window.location = 'index.php?controller=categories&method=insert';  
							</script>";
				}
			}
		
			function update() {
				$id			= $_GET['id'];
				
				$data_categories			= $this->categories->dataDetail($id);
				
				include "../pos/view/dashboard.php";
			}
		
			function update_data() {
				$id				= $_POST['id'];
				$name			= $_POST['categories'];
				$created_at		= $_POST['created_at'];
				
				$data_categories			= $this->categories->dataUpdate($id, $name, $created_at);
				
				if($data_categories == TRUE) {
					echo "<script> 
						alert('Proses Update Berhasil!');  
						window.location = 'index.php?controller=categories&method=select';
						</script>";
				
				} 
				else {
					echo "<script> 
						alert('Proses Update Gagal!'); 
						window.location = 'index.php?controller=categories&method=update&id='.$id;
						</script>";
				}
			}
		
			function delete() {
				$id			= $_GET['id'];
				
				$data_categories			= $this->categories->dataDelete($id);

				if($data_categories == TRUE) {
					echo "<script> 
						alert('Proses Delete Berhasil!');  
						window.location = 'index.php?controller=categories&method=select';
						</script>";
				
				} 
				else {
					echo "<script>  
						alert('Proses Delete Gagal!'); 
						window.location = 'index.php?controller=categories&method=select';
						</script>";
				}
			}
	}
?>