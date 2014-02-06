<?php include('inc/header.html'); ?>
<?php 
	
	if ($_GET['p'] == 'elements') {
		include('inc/elements.html');
	}
	else {
		include('inc/content-home.html');
	}
	
?>
<?php include('inc/footer.html'); ?>