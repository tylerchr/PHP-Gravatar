<?php
	
	// Get an email address from the sample.php?email= URL parameter
	$email = $_GET['email'];
	require('Gravatar.class.php');
	$grav = new Gravatar($email);
	$grav->size = 128;

?>

<html>
	<head>
		<title>Gravatar for <?php echo $grav->email; ?></title>
	</head>
	<body>
		<?php
			if ($grav->gravatarExists()) {
				echo '<img src="' . $grav . '" alt="" />';
			} else {
				echo 'No Gravatar exists for this email address';	
			}
		?>
		
	</body>
</html>