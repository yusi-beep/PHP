<?php
			include("head.php");
			
			

			if (!isset($_POST['sub']))
			{
				echo '
					
				<form method="POST" action="addorder.php">
						Име:<input type="text" name="firstname" required><br>
						
						Фамилия:<input type="text" name="lastname" required><br>
						Имейл:<input type="email" name="email" required><br>
						Телефон:<input type="text" name="tel" required><br>
						Количество:<input type="text" name="piece" required>
						Адрес:<input type="text" name="address" required>
						<input type="submit" name="sub" value="Поръчай">
						</form>';
			}
			else
			{
			
			
				$fname=$_POST['firstname'];
				$lname=$_POST['lastname'];
				$mail=$_POST['email'];
				$phone=$_POST['tel'];
				$piece=$_POST['piece'];
				$address=$_POST['address'];

				
				
				
				$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];			
				include("$DOCUMENT_ROOT/../config.php");
				
				
							
				$sql="insert into poruchki values('','$fname','$lname','$mail','$phone','$piece','$address')";
				if (mysqli_query($conn, $sql)) {
				  echo "Информацията е записана успешно!";
				} else 
				  echo "Грешка: " . $sql . "<br>" . mysqli_error($conn);
			}
			
			
			
			
			include("foot.php");
		
		?>