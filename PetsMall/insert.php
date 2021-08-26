<?php
			include ('head.php');
			$_DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
			include ($_DOCUMENT_ROOT.'/../config.php');
				
				
				
			
			if (!isset($_POST['sub']))
			{
				if (isset($mess)) echo $mess;
				echo '<form method="POST" action="insert.php" >
					<center><p class="price">ПОРЪЧАЙ</p></center>
					<label for="finame">Име:</label>
					<input type="text" id="finame" name="firstname" maxlength="40" placeholder="Име..."><br>
					<label for="lname">Фамилия:</label>
					<input type="text" id="lname" name="lastname" maxlength="40" placeholder="Фамилия..."><br>
					<label for="mail">Имейл:</label>
					<input type="text" id="mail" name="email" maxlength="150" placeholder="Имейл..."><br>
					<label for="text">Телефон:</label>
					<input type="number" id="phone"name="tel" maxlength="20" placeholder="Телефонен номер..."><br>
					<label for="size">Количество:</label>
					<select name="piece"id="size" style=" width: 20%;">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select><br>
					<label for=" ">Адрес:</label><br>
					<textarea name="address" size="280"  placeholder="Въведете адреса за доставка!">

					</textarea><br>
					<input type="submit" name="sub" value="Поръчай"><br><br><br>
				</form><br><br>';
					
					echo '<table width="50%" border="1" align="center">
						<tr>
							<td>Номер</td>
							<td>Име</td>
							<td>Фамилия</td>
							<td>Имейл</td>
							<td>Телефон</td>
							<td>Количество</td>
							<td>адрес</td>
						</tr>';
					$sql="select * from ocenki";
					$result=mysqli_query($conn,$sql);
					
					while ($row=mysqli_fetch_assoc($result))
						echo '<tr>
							<td>'.$row['id'].'</td>
							<td>'.$row['firstname'].'</td>
							<td>'.$row['lastname'].'</td>
							<td>'.$row['email'].'</td>
							<td>'.$row['tel'].'</td>
							<td>'.$row['piece'].'</td>
							<td>'.$row['address'].'</td>
							</tr>';
					echo '</table>';
					
					
			}
			else
			{
				
				$ftname=$_POST['firstname'];
				$lname=$_POST['lastname'];
				$mail=$_POST['email'];
				$phone=$_POST['tel'];
				$piece=$_POST['piece'];
				$address=$_POST['address'];
								
								
				$sql="insert into poruchki values('','$firstname','$lastname','$email','tel','piece','address')";
				mysqli_query($conn,$sql);
				$mess="Въвеждането е успешно!";
				header('Location:ins.php');
			}
			
			
			
			
			include ('foot.php');
?>