<?php
	include ("../pos/config/database.php");
	
	include ("../pos/model/model_sale_items.php");
	include ("../pos/model/model_categories.php");
	
	class sale_items {
			public $sale_items;
			public $categories;
			
			function __construct() {
				$this->sale_items	= new model_sale_items();
				$this->categories	= new model_categories();
				
			}

			function select() {
				$data_sale_items		= $this->sale_items->dataSelect();
				$data_categories		= $this->categories->dataSelect();
				
				include "../pos/view/dashboard.php";
			}
		
			function insert() {
				$data_categories		= $this->categories->dataSelect();

				include "../pos/view/dashboard.php";
			}
		
			function insert_data() {
				
				$id		= $_POST['id'];
				$product_id		= $_POST['product_id'];
				$qty			= $_POST['qty'];
				$price			= $_POST['price'];
				$subtotal		= $qty * $price;
				
				
					$data_sale_items	= $this->sale_items->dataInsert($id,$product_id, $qty, $price, $subtotal);

					if($data_sale_items == TRUE) {
						?>
						<script language="javascript"> 
							alert('Proses Insert Berhasil!');
							document.location.href="index.php?controller=sales&method=detail_sales&id=<?php echo $id; ?>";
							</script>
						<?php
					} 
					else {
						echo "<script> 
							alert('Proses Insert Gagal!');
							window.location = 'index.php?controller=sale_items&method=insert';  
							</script>";
					}
			}
		
			function update() {
				$id			= $_GET['id'];
				
				$data_sale_items		= $this->sale_items->dataDetail($id);
				$data_categories		= $this->categories->dataSelect();
				
				include "../pos/view/dashboard.php";
			}
		
			function update_data() {
				$id				= $_POST['id'];
				$name			= $_POST['sale_items'];
				$price			= $_POST['price'];
				$category_id	= $_POST['category_id'];
				$created_at		= $_POST['created_at'];
				
				$data_sale_items			= $this->sale_items->dataUpdate($id, $name, $price, $category_id, $created_at);
				
				if($data_sale_items == TRUE) {
					echo "<script> 
						alert('Proses Update Berhasil!');  
						window.location = 'index.php?controller=sale_items&method=select';
						</script>";
				
				} 
				else {
					echo "<script> 
						alert('Proses Update Gagal!'); 
						window.location = 'index.php?controller=sale_items&method=update&id='.$id;
						</script>";
				}
			}
		
			function delete() {
				$id			= $_GET['id'];
				
				$data_sale_items			= $this->sale_items->dataDelete($id);

				if($data_sale_items == TRUE) {
					echo "<script> 
						alert('Proses Delete Berhasil!');  
						window.location = 'index.php?controller=sale_items&method=select';
						</script>";
				
				} 
				else {
					echo "<script>  
						alert('Proses Delete Gagal!'); 
						window.location = 'index.php?controller=sale_items&method=select';
						</script>";
				}
			}
			
	}
?>