<?php
	include ("../pos/config/database.php");
	
	include ("../pos/model/model_products.php");
	include ("../pos/model/model_categories.php");
	
	class products {
			public $products;
			public $categories;
			
			function __construct() {
				$this->products		= new model_products();
				$this->categories	= new model_categories();
				
			}

			function select() {
				$data_products			= $this->products->dataSelect();
				$data_categories		= $this->categories->dataSelect();
				
				include "../pos/view/dashboard.php";
			}
		
			function insert() {
				$data_categories		= $this->categories->dataSelect();

				include "../pos/view/dashboard.php";
			}
		
			function insert_data() {
				$name			= $_POST['name'];
				$price			= $_POST['price'];
				$category_id	= $_POST['category_id'];
				
				$data_name				= $this->products->dataValidation($name);
				
				if($data_name < 1){
					$data_products	= $this->products->dataInsert($name, $price, $category_id);

					if($data_products == TRUE) {
						echo "<script> 
							alert('Proses Insert Berhasil!'); 
							window.location = 'index.php?controller=products&method=select';
							</script>";
					
					} 
					else {
						echo "<script> 
							alert('Proses Insert Gagal!');
							window.location = 'index.php?controller=products&method=insert';  
							</script>";
					}
				}else{
					echo "<script> 
							alert('Nama Produk sudah ada!');
							window.location = 'index.php?controller=products&method=insert';  
							</script>";
				}
			}
		
			function update() {
				$id			= $_GET['id'];
				
				$data_products			= $this->products->dataDetail($id);
				$data_categories		= $this->categories->dataSelect();
				
				include "../pos/view/dashboard.php";
			}
		
			function update_data() {
				$id				= $_POST['id'];
				$name			= $_POST['products'];
				$price			= $_POST['price'];
				$category_id	= $_POST['category_id'];
				$created_at		= $_POST['created_at'];
				
				$data_products			= $this->products->dataUpdate($id, $name, $price, $category_id, $created_at);
				
				if($data_products == TRUE) {
					echo "<script> 
						alert('Proses Update Berhasil!');  
						window.location = 'index.php?controller=products&method=select';
						</script>";
				
				} 
				else {
					echo "<script> 
						alert('Proses Update Gagal!'); 
						window.location = 'index.php?controller=products&method=update&id='.$id;
						</script>";
				}
			}
		
			function delete() {
				$id			= $_GET['id'];
				
				$data_products			= $this->products->dataDelete($id);

				if($data_products == TRUE) {
					echo "<script> 
						alert('Proses Delete Berhasil!');  
						window.location = 'index.php?controller=products&method=select';
						</script>";
				
				} 
				else {
					echo "<script>  
						alert('Proses Delete Gagal!'); 
						window.location = 'index.php?controller=products&method=select';
						</script>";
				}
			}
	}
?>