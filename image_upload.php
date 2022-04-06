<!DOCTYPE
<html>
	<head>
	<title>image upload</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"> </script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0beta.3/css/bootstrap.min.css" integrity="sha384Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJg13dy" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNehl5eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
	crossorigin="anonymous"></script>
	
	</head>
	
	<body>
		<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="userfile[]" value="" multiple="">
		<input type="submit" name="submit" value="Upload">
		</form>
	</body>

	<?php

	$mysqli = new mysqli('localhost','root','','products') or die($mysqli->connect_error);
	$table = 'products';
	$
	$
	$

$phpFileUploadErrors = array (
0 => 'There is no error, the file uploaded with success',
1 => 'The uploaded file exceeds the upload max filesize directive in php.ini',
2 => 'The uploaded file exceeds the MAX FILE SIZE directive that was specified in the HTML form',
3 => 'The uploaded file was only partially uploaded',
4 => 'No file was uploaded',
6 => 'Missing a temporary folder',
7 => 'Failed to write file to disk.',
8 => 'A PHP extension stopped the file upload.',
);