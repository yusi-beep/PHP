
			<?php
			
			if (!isset($_POST['sub']))
			{
				echo '<form method="POST" action="addorder.php" id="form" >
					<center><p class="price">ПОРЪЧАЙ</p></center>
					<label for="finame">Име:</label>
					<input type="text" id="finame" name="firstname" maxlength="40" placeholder="Име..." required><br>
					
					<label for="lname">Фамилия:</label>
					<input type="text" id="lname" name="lastname" maxlength="40" placeholder="Фамилия..." required><br>
					<label for="mail">Имейл:</label>
					<input type="email" id="mail" name="email" maxlength="150" placeholder="Имейл..." required><br>
					<label for="text">Телефон:</label>
					<input type="number" id="phone" name="tel" maxlength="20" placeholder="Телефонен номер..." required><br>
					<label for="size">Количество:</label>
					<select name="piece"id="size" style=" width: 30%;" required>
						<option value="0">0</option>
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
					<textarea name="address" size="280"  placeholder="Въведете адреса за доставка!" required>

					</textarea><br>
					<input type="submit" name="sub" value="Поръчай"><br><br><br>
				</form>';
			}
			else
			{
				$ftname=$_POST['firstname'];
				$lname=$_POST['lastname'];
				$mail=$_POST['email'];
				$phone=$_POST['tel'];
				$piece=$_POST['piece'];
				$address=$_POST['address'];
			
				$data=$ftname."\t".$lname."\t".$mail."\t".$phone."\t".$piece."\t".$address."\n";
				echo $data;
				$_DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
				if (!file_exists("$_DOCUMENT_ROOT/../poruchki.txt"))
					$f=fopen("$_DOCUMENT_ROOT/../poruchki.txt","w");
				else
					$f=fopen("$_DOCUMENT_ROOT/../poruchki.txt","a");
			
				fwrite($f,$data);
				fclose($f);
			}
			?>

			