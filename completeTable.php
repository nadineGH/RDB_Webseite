<?php 	require_once 'include/init.php.inc';
		require_once 'include/header.html.inc';
		//Komplette Datenbank
		//löschen und Anzahl verändern möglich
?>
<h2>Lösche die Produkte oder ändere die Anzahl</h2>
    
	<table cellspacing="5" cellpadding="10" border="1" height="5" width="10">
    <thead>
    	<tr>
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
    <tbody>
    	<?php
			//Datenbankeinträge abrufen
    		$result = $sql->prepare("SELECT * FROM lebensmittel ORDER BY id ASC");
    		$result->execute();
    		for($i=0; $row = $result->fetch(); $i++){
    	?>
    	<tr class="record">
    		<td><?php echo $row['produktname']; ?></td>
    		<td><?php echo $row['kategorie']; ?></td>
			<td><?php echo $row['ablaufdatum']; ?></td>
			<td><?php echo $row['beschaffungsort']; ?></td>
			<td><?php echo $row['menge']; ?></td>
			<td><?php echo $row['einheit']; ?></td>
			<td><?php echo $row['anzahl']; ?></td>
    		<td><a href="delete.php?ID=<?php echo $row['ID']; ?>"> l&ouml;schen </a></td>
			<td><a href="update.php?ID=<?php echo $row['ID']; ?>&anzahl=<?php echo $row['anzahl'];?>"> &auml;ndern </a></td>
    	</tr>
    	<?php
    		}
    	?>
    </tbody>
    </table>


<?php require_once 'include/footer.html.inc'; ?>