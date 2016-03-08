<?php 	require_once 'include/init.php.inc';
		require_once 'include/header.html.inc';
	//Startseite
	//Aufnehmen eines Produktes in die Datenbank
?>

	
	<div>
		
		<h3>Produkte in deinen Bestand aufnehmen:</h3>
		
		<form id="form-create-list" name="create-list" method="POST" target="_self" action="create_list.php" enctype="multipart/form-data">
		
		<table cellspacing="1" cellpadding="0" border="0"
		 id="shell" height="250" width="400">
			<tr height="100">
				<td>
					<table id="navigation" title="Navigation" border="0">
						<tr><td>Produkt<br><br></td></tr>
						<tr><td>Kategorie<br><br></td></tr>
						<tr><td>Ablaufdatum<br><br></td></tr>
						<tr><td>Beschaffungsort<br><br></td></tr>
						<tr><td>Menge<br><br></td></tr>
						<tr><td>Einheit<br><br></td></tr>
						<tr><td>Anzahl<br><br><br><br></td></tr>
						
					</table>
				</td><td>
					<table title="Content" id="content" border="0">
					
						<tr><td><input form="form-create-list" type="text" name="produktname" maxlength="64"  required><br><br></td></tr></td></tr>
						<tr><td>
						<?php	
								//Auswählen der Kategorien von der Datenbank "kategorien"
								$res1="SELECT kategorie,id FROM kategorien order by kategorie";
						?>
						<select form="form-create-list" name="kategorie" value=''>Kategorie</option>; 
						<?php
								foreach ($sql->query($res1) as $row)			//Zeigt alle Einträge von "kategorie" in der Select Box an
								{				
									echo "<option value=$row[kategorie]>$row[kategorie]</option>"; 
								}
								echo "</select>";
						?><br><br></td></tr></td></tr>
						
						<tr><td><input form="form-create-list" type="date" name="ablaufdatum" required><br><br></td></tr></td></tr>
						
						<tr><td>
						<?php
								//Auswählen der Läden von der Datenbank "ort"
								$res2="SELECT laden,id FROM ort order by laden";
						?>
						<select form="form-create-list" name="beschaffungsort" value=''>Beschaffungsort</option>; 
						<?php
								foreach ($sql->query($res2) as $row)			//Zeigt alle Einträge von "laden" in der Select Box an
								{				
									echo "<option value=$row[laden]>$row[laden]</option>"; 
								}
								echo "</select>";
						?><br><br></td></tr></td></tr>
						
						<tr><td><input form="form-create-list" type="number" name="menge" min="0" max="30000" required><br><br></td></tr></td></tr>
						<tr><td><select form="form-create-list" name="einheit">
							<option value="kilogramm">kg</option>
							<option value="gramm">gr</option>
							<option value="liter">l</option>
							<option value="milliliter">ml</option>
							<option value="optional" selected></option>
							</select><br><br></td></tr></td></tr>
						<tr><td><input form="form-create-list" type="number" name="anzahl" min="0" max="300" required><br><br></td></tr></td></tr>
						
						<tr><td><input form="form-create-list" type="submit" value="Produkt aufnehmen"><br><br></td></tr></td></tr>
					</table>
				</td>
			</tr>
		</table>	
		</form>

<?php
	require_once 'include/footer.html.inc';
?>