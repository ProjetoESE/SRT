<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Unconfirmed email</title>
	<meta name="viewport" content="width=device-width">
	<style>
		body{
			background-color: #b2bec3;
			margin: auto 10%;
			font-family: 'Arial', sans-serif;
		}
		h1{
			text-align: center;
			padding: 10px;
			border-radius: 10px;
			background-color: #d63031;
			color: white;
			font-size: 1.3em;

		}
		a{
			font-size: 1.4em;
			text-decoration: none;
			padding: 15px;
			background-color: #00b894;
			color: white;
			border-radius: 4px;
		}
	</style>
</head>
<body>
	<h1>Unconfirmed email</h1>
	<p style="text-align: center;">Please,  <?=$this->input->get('email')?>, access your inbox or span box to confirm your email.</p>
	<a href="<?=base_url()?>">return</a>
</body>
</html>