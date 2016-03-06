<?php 	require_once 'include/init.php.inc';


		require_once 'include/header.html.inc';

    	
    	$lastID=$_GET['ID'];
		$anzahl=$_GET['anzahl'];
		
		require_once 'include/header.html.inc';
    ?>
<div>
	

	<h3>Anzahl bearbeiten</h3>
	
	<ul>
		<li><a href="add_number.php?case=addOne&ID=<?=$lastID?>&anzahl=<?=$anzahl?>">Plus 1</a></li>
		<li><a href="add_number.php?case=addTwo&ID=<?=$lastID?>&lebensmittel=<?=$lebensmittel?>&anzahl=<?=$anzahl?>">Plus 2</a></li>
		<li><a href="add_number.php?case=subOne&ID=<?=$lastID?>&lebensmittel=<?=$lebensmittel?>&anzahl=<?=$anzahl?>">Minus 1</a></li>
		<li><a href="add_number.php?case=subTwo&ID=<?=$lastID?>&lebensmittel=<?=$lebensmittel?>&anzahl=<?=$anzahl?>">Minus 2</a></li>
	</ul>
</div>
	
<?php require_once 'include/footer.html.inc'; ?>