<?php
	include ("../pos/config/database.php");
	
	include ("../pos/model/model_sales.php");
	include ("../pos/model/model_customers.php");
	include ("../pos/model/model_products.php");
	include ("../pos/model/model_sale_items.php");
	
	class sales {
			public $sales;
			public $customers;
			public $products;
			
			function __construct() {
				$this->sales		= new model_sales();
				$this->customers	= new model_customers();
				$this->products		= new model_products();
				$this->sale_items	= new model_sale_items();
				
			}

			function select() {
				$data_sales			= $this->sales->dataSelect();
				$data_customers		= $this->customers->dataSelect();
				$data_products		= $this->products->dataSelect();
				
				include "../pos/view/dashboard.php";
			}
		
			function insert() {
				$data_customers		= $this->customers->dataSelect();

				include "../pos/view/dashboard.php";
			}
		
			function insert_data() {
				$id				= $_POST['id'];
				$customer_id	= $_POST['customer_id'];
				
				$data_sales	= $this->sales->dataInsert($id, $customer_id);

				if($data_sales == TRUE) {
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
						window.location = 'index.php?controller=sales&method=insert';
						</script>";
				}
			}
		
			function detail_sales() {
				$id			= $_GET['id'];

				$data_customers		= $this->customers->dataDetail($id);
				$detail_sales		= $this->sales->dataDetail($id);
				$data_sales			= $this->sales->dataSelect();
				$data_products		= $this->products->dataSelect();
				$data_sale_items	= $this->sale_items->dataList($id);
				$total				= $this->sale_items->total($id);

				include "../pos/view/dashboard.php";
			}
		
			function info() {
				$id			= $_GET['id'];

				$data_customers		= $this->customers->dataDetail($id);
				$detail_sales		= $this->sales->dataDetail($id);
				$data_sales			= $this->sales->dataSelect();
				$data_products		= $this->products->dataSelect();
				$data_sale_items	= $this->sale_items->dataList($id);
				$total				= $this->sale_items->total($id);

				include "../pos/view/dashboard.php";
			}
		
			function done() {
				$id				= $_POST['id'];
				$customer_id	= $_POST['customer_id'];
				$total			= $_POST['total'];
				$created_at		= $_POST['created_at'];
				
				$data_sales			= $this->sales->dataDone($id, $customer_id, $total, $created_at);
				
				if($data_sales == TRUE) {
					echo "<script> 
						alert('Proses Simpan Berhasil!');  
						window.location = 'index.php?controller=sales&method=select';
						</script>";
				
				} 
				else {
					?>
					<script language="javascript"> 
						alert('Proses Simpan Gagal!');
						document.location.href="index.php?controller=sales&method=detail_sales&id=<?php echo $id; ?>";
						</script>
					<?php
				}
			}
		
			function update() {
				$id			= $_GET['id'];

				$data_customers		= $this->customers->dataDetail($id);
				$detail_sales		= $this->sales->dataDetail($id);
				$data_sales			= $this->sales->dataSelect();
				$data_products		= $this->products->dataSelect();
				$data_sale_items	= $this->sale_items->dataList($id);
				$total				= $this->sale_items->total($id);

				include "../pos/view/dashboard.php";
			}
		
			function update_data() {
				$id				= $_POST['id'];
				$customer_id	= $_POST['customer_id'];
				$total			= $_POST['total'];
				$created_at		= $_POST['created_at'];
				
				$data_sales			= $this->sales->dataUpdate($id, $customer_id, $total, $created_at);
				
				if($data_sales == TRUE) {
					echo "<script> 
						alert('Proses Simpan Berhasil!');  
						window.location = 'index.php?controller=sales&method=select';
						</script>";
				
				} 
				else {
					?>
					<script language="javascript"> 
						alert('Proses Simpan Gagal!');
						document.location.href="index.php?controller=sales&method=detail_sales&id=<?php echo $id; ?>";
						</script>
					<?php
				}
			}
		
			function delete() {
				$id			= $_GET['id'];
				
				$data_sales			= $this->sales->dataDelete($id);

				if($data_sales == TRUE) {
					echo "<script> 
						alert('Proses Delete Berhasil!');  
						window.location = 'index.php?controller=sales&method=select';
						</script>";
				
				} 
				else {
					echo "<script>  
						alert('Proses Delete Gagal!'); 
						window.location = 'index.php?controller=sales&method=select';
						</script>";
				}
			}
			
			function delete_detail() {
				$id_sales	= $_GET['id_sales'];
				$id			= $_GET['id'];
				
				$data_sales			= $this->sale_items->dataDelete($id);

				if($data_sales == TRUE) {
					?>
					<script language="javascript"> 
						alert('Product Berhasil di Hapus!');
						document.location.href="index.php?controller=sales&method=detail_sales&id=<?php echo $id_sales; ?>";
						</script>
					<?php
				} 
				else {
					?>
					<script language="javascript"> 
						alert('Product Gagal di Hapus!');
						document.location.href="index.php?controller=sales&method=detail_sales&id=<?php echo $id; ?>";
						</script>
					<?php
				}
			}
	}
?>