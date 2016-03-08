<?php 	require_once 'include/init.php.inc';

	//Hinzufügen des Produktes zur Datenbank
	//Prepare the Query
	$query = $sql->prepare("INSERT INTO `lebensmittel`(`produktname`, `kategorie`, `ablaufdatum`, `beschaffungsort`, `menge`, `einheit`, `anzahl`) VALUES (:produktname, :kategorie, :ablaufdatum, :beschaffungsort, :menge, :einheit, :anzahl)");

	//Fill the data-array for prepared query
	$data = Array(
		':produktname' => $_POST['produktname'],
		':kategorie' => $_POST['kategorie'],
		':ablaufdatum' => $_POST['ablaufdatum'],
		':beschaffungsort' => $_POST['beschaffungsort'],
		':menge' => $_POST['menge'],
		':einheit' => $_POST['einheit'],
		':anzahl' => $_POST['anzahl']
	);
	 
	$query->execute($data);

	//Die letzte ID wird ausgewählt
	$lastID = $sql->lastInsertId();
	


	//Das neue Produkt
	$lebensmittel = $sql->query("SELECT * FROM `lebensmittel` WHERE `ID` = $lastID")->fetchAll();	
		
	
	require_once 'include/header.html.inc';
?>
<div>
	<h2>Schritt 1</h2>
	<h3>Du hast folgendes Produkt erstellt:</h3>
	<?=html_table_from_array($lebensmittel)?>
	
</div>
<?php require_once 'include/footer.html.inc'; ?>