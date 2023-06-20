<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>

	<link rel="shortcut icon" href="<?php echo AST; ?>/img/logo.png" type="image/x-icon">
	<style>
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			margin: 0 100px;
			background-color: #d8dadf;
		}

		.info {
			background-color: #b5e4da;
			padding: 20px;
			margin-top: 10px;
		}
		.btn {
 			 background-color: #1d0b97e9;
 			 border-radius: 4px;
  			color: #ffffff;
  			padding: 5px;
		}	
		
	</style>
</head>

<body>
	<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
</body>

</html>