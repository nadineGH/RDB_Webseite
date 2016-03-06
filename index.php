<?php 	require_once 'include/init.php.inc';
		require_once 'include/header.html.inc';
	//Startseite
	//Aufnehmen eines Produktes in die Datenbank
?>

	
	<div>
		
		<h3>Nehme Produkte in deinen Bestand auf:</h3>
		
		<form id="form-create-list" name="create-list" method="POST" target="_self" action="create_list.php"></form>
		
		<table cellspacing="1" cellpadding="0" border="0"
		 id="shell" height="250" width="400">
			<tr height="100">
				<td>
					<table id="navigation" title="Navigation" border="0">
						<tr><td>Produkt<br><br></td></tr>
						<tr><td>Kategorie<br><br></td></tr>
						<tr><td>Ablaufdatum<br><br><br><br></td></tr>
						<tr><td>Beschaffungsort: <br>A = Aldi, P = Penny, L= Lidl, E = Edeka, R = Rewe, W = Wochenmarkt <br><br></td></tr>
						<tr><td>Menge<br><br></td></tr>
						<tr><td>Einheit<br><br></td></tr>
						<tr><td>Anzahl<br><br><br></td></tr>
						
					</table>
				</td><td>
					<table title="Content" id="content" border="0">
						<tr><td><br><input form="form-create-list" type="text" name="produktname" maxlength="64"  required><br><br></td></tr></td></tr>
						<tr><td><select form="form-create-list" name="kategorie">
							<option value="fleisch">Fleisch</option>
							<option value="fisch">Fisch</option>
							<option value="gemuese">Gemüse</option>
							<option value="obst">Obst</option>
							<option value="getreide">Getreide</option>
							<option value="milch">Milch</option>
							<option value="suesswaren">Süßwaren</option>
							<option value="konserven">Konserven</option>
							<option value="saucen">Saucen</option>
							<option value="backwaren">Backwaren</option>
							<option value="getraenke">Getränke</option>
							<option value="alkohol">Alkohol</option>
							<option value="waehlen" selected>Bitte wählen</option>
						</select><br><br></td></tr></td></tr>
						<tr><td><input form="form-create-list" type="date" name="ablaufdatum" required><br><br></td></tr></td></tr>
						<tr><td><br><input form="form-create-list" type="text" name="beschaffungsort" maxlength="64"  required><br><br><br><br></td></tr></td></tr>
						<tr><td><input form="form-create-list" type="number" name="menge" min="0" max="30000" required><br><br></td></tr></td></tr>
						<tr><td><select form="form-create-list" name="einheit">
							<option value="kilogramm">kg</option>
							<option value="gramm">gr</option>
							<option value="liter">l</option>
							<option value="milliliter">ml</option>
							<option value="optional" selected>Optional</option>
							</select><br><br></td></tr></td></tr>
						<tr><td><input form="form-create-list" type="number" name="anzahl" min="0" max="300" required><br><br></td></tr></td></tr>
						
						<tr><td><input form="form-create-list" type="submit" value="Produkt aufnehmen"><br><br></td></tr></td></tr>
					</table>
				</td>
			</tr>
		</table>		

<?php
	require_once 'include/footer.html.inc';
?>