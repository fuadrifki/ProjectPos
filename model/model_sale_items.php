<?php
	class model_sale_items {
		public $konek;
		
		function __construct() {
			$this->konek  	= new koneksi();				
		}
		
		function dataSelect() {
			$query			= "SELECT * FROM sale_items
							   	ORDER BY id ASC";
				
			$sql			= mysql_query($query);
			
			return $sql;
		}
		
		function dataInsert($id,$product_id, $qty, $price, $subtotal) {
			$query			= "INSERT INTO sale_items (`qty`, `price`, `subtotal`, `product_id`, `sale_id`, `created_at`) VALUES
								( '$qty', '$price', '$subtotal', '$product_id','$id', NOW())
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
			$query			= "SELECT * FROM sale_items
								WHERE id = '$id'
								ORDER BY id ASC";
			
			$sql			= mysql_query($query);
			
			return $sql;
		}
		
		function dataList($id) {
			$query			= "SELECT * FROM sale_items
								WHERE sale_id = '$id'";
			
			$sql			= mysql_query($query);
			
			return $sql;
		}
		
		function total($id) {
			$query			= "SELECT SUM(price) AS total FROM sale_items
								WHERE sale_id = '$id'";
			
			$sql			= mysql_query($query);
			
			return $sql;
		}
		
		function dataValidation($name) {
			$query			= "SELECT * FROM sale_items
								WHERE name = '$name'";
			
			$sql			= mysql_query($query);
			$data 			= mysql_fetch_array($sql);
			$num			= mysql_num_rows($sql);
			
			return $num;
		}
		
		function dataUpdate($id, $name, $price, $category_id, $created_at) {
			$query			= "UPDATE sale_items SET
								id			= '$id',
								name		= '$name',
								price		= '$price',
								category_id	= '$category_id',
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
			$query			= "DELETE FROM sale_items
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