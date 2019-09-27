<?php
	class model_categories {
		public $konek;
		
		function __construct() {
			$this->konek  	= new koneksi();				
		}
		
		function dataSelect() {
			$query			= "SELECT * FROM categories
							   	ORDER BY id ASC";
				
			$sql			= mysql_query($query);
			
			return $sql;
		}
		
		function dataInsert($categories) {
			$query			= "INSERT INTO categories VALUES
								('', '$categories', NOW(), NULL, NULL)
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
			$query			= "SELECT * FROM categories
								WHERE id = '$id'
								ORDER BY id ASC";
			
			$sql			= mysql_query($query);
			
			return $sql;
		}
		
		function dataValidation($categories) {
			$query			= "SELECT * FROM categories
								WHERE name = '$categories'";
			
			$sql			= mysql_query($query);
			$data 			= mysql_fetch_array($sql);
			$num			= mysql_num_rows($sql);
			
			return $num;
		}
		
		function dataUpdate($id, $name, $created_at) {
			$query			= "UPDATE categories SET
								id			= '$id',
								name		= '$name',
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
			$query			= "DELETE FROM categories
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