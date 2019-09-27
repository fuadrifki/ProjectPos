<?php
	class model_sales {
		public $konek;
		
		function __construct() {
			$this->konek  	= new koneksi();				
		}
		
		function dataSelect() {
			$query			= "SELECT * FROM sales
							   	ORDER BY id ASC";
				
			$sql			= mysql_query($query);
			
			return $sql;
		}
		
		function dataInsert($id, $customer_id) {
			$query			= "INSERT INTO sales (`id`, `customer_id`, `created_at`) VALUES 
								('$id', $customer_id, NOW())
								";
			
			$sql			= mysql_query($query);

			if($sql == TRUE) {
				return TRUE;
			} 
			else {
				return FALSE;
			}
		}
	
		function dataDetail($id) {
			$query			= "SELECT * FROM sales
								WHERE id = '$id'
								ORDER BY id ASC";
			
			$sql			= mysql_query($query);
			
			return $sql;
		}
		
		function dataValidation($customer_id) {
			$query			= "SELECT * FROM sales
								WHERE customer_id = '$customer_id'";
			
			$sql			= mysql_query($query);
			$data 			= mysql_fetch_array($sql);
			$num			= mysql_num_rows($sql);
			
			return $num;
		}
		
		function dataDone($id, $customer_id, $total, $created_at) {
			$query			= "UPDATE sales SET
								id			= '$id',
								customer_id	= '$customer_id',
								total		= '$total',
								created_at	= '$created_at',
								updated_at	= NULL
								WHERE id	= '$id'
								";
			
			$sql			= mysql_query($query);
			
			if($sql == TRUE) {
				return TRUE;
			} 
			else {
				return FALSE;
			}
		}
	
		function dataUpdate($id, $customer_id, $total, $created_at) {
			$query			= "UPDATE sales SET
								id			= '$id',
								customer_id	= '$customer_id',
								total		= '$total',
								created_at	= '$created_at',
								updated_at	= NOW(),
								deleted_at	= NULL
								WHERE id	= '$id'
								";
			
			$sql			= mysql_query($query);
			
			if($sql == TRUE) {
				return TRUE;
			} 
			else {
				return FALSE;
			}
		}
	
		function dataDelete($id) {
			$query			= "DELETE FROM sales
								WHERE id = '$id'";
			
			$sql			= mysql_query($query);
			
			if($sql == TRUE) {
				return TRUE;
			} 
			else {
				return FALSE;
			}
		}
	}
?>