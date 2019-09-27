<?php
	class model_customers {
		public $konek;
		
		function __construct() {
			$this->konek  	= new koneksi();				
		}
		
		function dataSelect() {
			$query			= "SELECT * FROM customers
							   	ORDER BY id ASC";
				
			$sql			= mysql_query($query);
			
			return $sql;
		}
		
		function dataInsert($name, $address) {
			$query			= "INSERT INTO customers VALUES
								('', '$name', '$address', NOW(), NULL, NULL)
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
			$query			= "SELECT * FROM customers
								WHERE id = '$id'
								ORDER BY id ASC";
			
			$sql			= mysql_query($query);
			
			return $sql;
		}
		
		function dataValidation($name) {
			$query			= "SELECT * FROM customers
								WHERE name = '$name'";
			
			$sql			= mysql_query($query);
			$data 			= mysql_fetch_array($sql);
			$num			= mysql_num_rows($sql);
			
			return $num;
		}
		
		function dataUpdate($id, $name, $address, $created_at) {
			$query			= "UPDATE customers SET
								id			= '$id',
								name		= '$name',
								address		= '$address',
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
			$query			= "DELETE FROM customers
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