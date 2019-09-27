<?php
	class model_products {
		public $konek;
		
		function __construct() {
			$this->konek  	= new koneksi();				
		}
		
		function dataSelect() {
			$query			= "SELECT * FROM products
							   	ORDER BY id ASC";
				
			$sql			= mysql_query($query);
			
			return $sql;
		}
		
		function dataInsert($name, $price, $category_id) {
			$query			= "INSERT INTO products VALUES
								('', '$name', $price, $category_id, NOW(), NULL, NULL)
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
			$query			= "SELECT * FROM products
								WHERE id = '$id'
								ORDER BY id ASC";
			
			$sql			= mysql_query($query);
			
			return $sql;
		}
		
		function dataValidation($name) {
			$query			= "SELECT * FROM products
								WHERE name = '$name'";
			
			$sql			= mysql_query($query);
			$data 			= mysql_fetch_array($sql);
			$num			= mysql_num_rows($sql);
			
			return $num;
		}
		
		function dataUpdate($id, $name, $price, $category_id, $created_at) {
			$query			= "UPDATE products SET
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
			$query			= "DELETE FROM products
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