<?php
		if (isset($_GET['id']))
				
		{
			$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];	
			if (file_exists("$DOCUMENT_ROOT/../config.php"))
			{include("$DOCUMENT_ROOT/../config.php");
			$id=$_GET['id'];
			$sql="delete from poruchki where id='$id'";
			mysqli_query($conn, $sql);
			}
		}
			
			
		header('location:vread.php');
?>