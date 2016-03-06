
<?php 	require_once 'include/init.php.inc';

		require_once 'include/header.html.inc';

    	
    	$id=$_GET['ID'];	//Übertragung der ID
    	$result = $sql->prepare("DELETE FROM lebensmittel WHERE ID = :ausgewId"); //Ausgewählte Spalte löschen
    	$result->bindParam(':ausgewId', $id);	//Parameter verbinden
    	$result->execute();
    	
		require_once 'include/header.html.inc';
?>
<div>
<h2>Aktualisierung</h2>
<p>Das Produkt wurde aus deinem Bestand entfernt.</p>

</div>
	
<?php require_once 'include/footer.html.inc'; ?>