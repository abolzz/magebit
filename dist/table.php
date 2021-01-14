<?php
	include 'autoloader.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data table</title>
</head>
<body>
	<table>
		<?php 
			$testObj = new Test();
			if(isset($_GET['sort'])) {
			  if ($_GET['sort']){
			    $testObj->getEmails(1);
			  }
			} else {
			  	$testObj->getEmails(0);
			}
		?>
	</table>
	<br>
	<!-- would need another solution if there were huge amounts of data to prevent the page from reloading -->
	<a href="table.php?sort=1" class="btn">Sort by name</a>
</body>
</html>