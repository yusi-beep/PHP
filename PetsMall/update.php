<?php
		if (isset($_GET['id']))				
		{
			include ('head.php');
			$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
			if (file_exists("$DOCUMENT_ROOT/../config.php"))
				{include("$DOCUMENT_ROOT/../config.php");
					if (!isset($_POST['sub']))
					{
						$id=$_GET['id'];
						$sql="select * from poruchki where id='$id'";
						$result=mysqli_query($conn, $sql);
						$row=mysqli_fetch_assoc($result);
						echo '
						<form method="POST" action="update.php?id='.$id.'">
						Име:<input type="text" name="firstname" value="'.$row['firstname'].'" required><br>
						Фамилия:<input type="text" name="lastname" value="'.$row['lastname'].'" required><br>
						Имейл:<input type="email" name="email" value="'.$row['email'].'" required><br>
						Телефон:<input type="text" name="tel" value="'.$row['tel'].'" required><br>
						Количество:<input type="text" name="piece" value="'.$row['piece'].'" required>
						Адрес:<input type="text" name="address" value="'.$row['address'].'" required>
						<input type="submit" name="sub" value="Поръчай">
						</form>';						
					}
					else
					{
						$id=$_GET['id'];						
						$fname=$_POST['firstname'];
						$lname=$_POST['lastname'];
						$mail=$_POST['email'];
						$phone=$_POST['tel'];
						$piece=$_POST['piece'];
						$address=$_POST['address'];
						$sql="update poruchki set firstname='$fname',lastname='$lname',email='$mail',tel='$phone',piece='$piece',address='$address' where id='$id'";						
						if (mysqli_query($conn, $sql)) 
						{ echo "Информацията е записана успешно!";
						} else 
						  echo "Грешка: " . $sql . "<br>" . mysqli_error($conn);
					}						
				} 	else	echo 'Няма връзка с базата!';
		include ('foot.php');
		}
		else					
		header('location:vread.php');
?>