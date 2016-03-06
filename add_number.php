<?php 	require_once 'include/init.php.inc';
	
	//Der ausgewällte Fall löst einen bestimmten case aus
	//Die Anzahl des Prouktes wird um 1 oder 2 erhöht oder verringert
	switch ($_GET['case']) {
	
		case 'addOne':
			$anzahl = (int) $_GET ['anzahl'];
			$anzahl = $anzahl + 1;
			break;
		case 'addTwo':
			$anzahl = (int) $_GET ['anzahl'];
			$anzahl = $anzahl + 2;
			break;
		case 'subOne':
			$anzahl = (int) $_GET ['anzahl'];
			$anzahl = $anzahl - 1;
			break;
		case 'subTwo':
			$anzahl = (int) $_GET ['anzahl'];
			$anzahl = $anzahl - 2;
			break;
		
		default:
			$anzahl = 0;
			break;
	}
	$lastID = $_GET['ID'];
			
	$sql_exec = $sql ->exec ("UPDATE lebensmittel SET anzahl =anzahl+$anzahl WHERE ID = $lastID");

	
	require_once 'include/header.html.inc';
?>

<div>
	
	<h3>Neue Anzahl:</h3>
	<p> Die Anzahl wurde auf <?=$anzahl?> gesetzt!  </p>
	
</div>
<?php require_once 'include/footer.html.inc'; ?>