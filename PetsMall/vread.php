<?php
			include ('head.php');
				
				$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];	
				if (file_exists("$DOCUMENT_ROOT/../config.php"))
				{include("$DOCUMENT_ROOT/../config.php");
			
					echo '<table width="85%" align="center" border="2">
							<tr align="center" bgcolor="silver">
							<td>Номер</td>
							<td>Име</td>
							<td>Фамилия</td>
							<td>Имейл</td>
							<td>Телефон</td>
							<td>Количество</td>
							<td>Aдрес</td>
							<td>Изтриване</td>
							<td>Редактиране</td>
							</tr>';
			
					$sql="select * from poruchki";
				
					$result=mysqli_query($conn, $sql);
					while ($row=mysqli_fetch_assoc($result))
					{
						echo '<tr align="center">
						<td>'.$row['id'].'</td>';
						echo	'<td>'.$row['firstname'].'</td>';
						echo	'<td>'.$row['lastname'].'</td>';
						echo	'<td>'.$row['email'].'</td>';
						echo	'<td>'.$row['tel'].'</td>';
						echo	'<td>'.$row['piece'].'</td>';
						echo	'<td>'.$row['address'].'</td>';
						echo '<td><a href="delorder.php?id='.$row['id'].'">Изтриване</a></td>';
						echo '<td><a href="update.php?id='.$row['id'].'">Редактиране</a></td></tr>';
					}
					echo '</table>';
						
				}
				else echo "Няма връзка с базата!";
						
			include ('foot.php');
?>