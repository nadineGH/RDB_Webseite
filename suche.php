<?php 	require_once 'include/init.php.inc';
		require_once 'include/header.html.inc';
		//Produktsuche
		//löschen und ändern
		
?>
<?php
echo "<form action='{$_SERVER['PHP_SELF']}' method='post'>";
?>
<h2>Produktsuche</h2>
<b>Name des Produktes:</b>
<br><input name="produktname" type="text" maxlength="255" size="28" /></td>

<br><br><input type="submit" name="suche" value="Suche" /> <input type="reset" value="Reset" />
<input type="hidden" name="sent" value="1">
</form>
<br><br>

<table border="1" cellspacing="0" cellpadding="2" >
    <thead>
    	<tr>
			<th> ID </th>
    		<th> Produkt </th>
    		<th> Kategorie </th>
    		<th> Ablaufdatum </th>
			<th> Beschaffungsort </th>
			<th> Menge </th>
			<th> Einheit </th>
			<th> Anzahl </th>
    		<th> Aktion </th>
			<th> Aktion </th>
    	</tr>
    </thead>
<?php

	//Wurde das Suchformular ausgefuellt
	$sent = isset($_POST['sent']) ? $_POST['sent'] : '';
	$produktsuche = isset($_POST['produktname']) ? $_POST['produktname'] : '';
	
	if($sent and $produktsuche)
	{
		echo "<h2>Suchergebnis:</h2>";
		//Vergleich von dem eingegebenen Produktnamen mit den Einträgen der Datenbank
		$sqll = 'SELECT *				
			FROM lebensmittel, Beschaffungsort
			WHERE lebensmittel.produktname LIKE \'%'.$_POST['produktname'].'%\' AND lebensmittel.beschaffungsort = Beschaffungsort.beschaffungsort ORDER BY produktname ASC';
	
	
		$erg = $sql ->query($sqll);
		$erg->execute();
		for($i=0; $row = $erg->fetch(); $i++)
		{
			?>
			<tbody>
			<tr class="record">
				<td><?php echo $row['ID']; ?></td>
				<td><?php echo $row['produktname']; ?></td>
				<td><?php echo $row['kategorie']; ?></td>
				<td><?php echo $row['ablaufdatum']; ?></td>
				<td><?php echo $row['laden']; ?></td>
				<td><?php echo $row['menge']; ?></td>
				<td><?php echo $row['einheit']; ?></td>
				<td><?php echo $row['anzahl']; ?></td>
				<td><a href="delete.php?ID=<?php echo $row['ID']; ?>"> l&ouml;schen </a></td>
				<td><a href="update.php?ID=<?php echo $row['ID']; ?>&anzahl=<?php echo $row['anzahl'];?>"> &auml;ndern </a></td>
			</tr>
			<?php
    	}
	}
    	?>
		
			</tbody>
</table>

	
<?php
	require_once 'include/footer.html.inc';
?>