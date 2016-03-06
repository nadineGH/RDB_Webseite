<?php 	require_once 'include/init.php.inc';
		require_once 'include/header.html.inc';
		//Übersicht über den Bestand
		//Auflistung in einer Tabelle
?>
<div>
<h2>Bestand</h2>
<p>Übersicht aller Produkte, die sich in deinem Bestand befinden</p>


	
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
    	</tr>
    </thead>
<?php
	//Für jedes Produkt wird eine Zeile erstellt
	//Die ganze Datenbank wird durchlaufen
	foreach($sql->query('SELECT lebensmittel.produktname, lebensmittel.kategorie, lebensmittel.ablaufdatum, Beschaffungsort.laden, lebensmittel.menge, 
	lebensmittel.einheit, lebensmittel.anzahl FROM lebensmittel, Beschaffungsort WHERE lebensmittel.beschaffungsort = Beschaffungsort.beschaffungsort') as $row) 
	{
		echo "<tr>";
		echo "<td>". $row['produktname'] . "</td>";
		echo "<td>". $row['kategorie'] . "</td>";
		echo "<td>". $row['ablaufdatum'] . "</td>";
		echo "<td>". $row['laden'] . "</td>";
		echo "<td>". $row['menge'] .'<br>'. "</td>";
		echo "<td>". $row['einheit'] . "</td>";
		echo "<td>". $row['anzahl'] . "</td>";
		}
	echo "</table>";
?>
<?php
	require_once 'include/footer.html.inc';
?>