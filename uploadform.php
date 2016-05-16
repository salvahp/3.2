<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Uploadsiden</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
	Select image to upload:
	<input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" value="Upload Image" name="submit">
</form>
<?php
//frbind til database
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("muratmoviedb") or die(mysql_error());

//fil oplysninger 
$file = $_FILES['fileToUpload']['tmp_name'];

if (!isset($file))
	echo "Please select an image.";
	else{
		$image = addslashes(file_get_content($_FILES['fileToUpload']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		$image_size = getimagesize($_FILES['image']['tmp_name']);
		
		if ($image_size==FALSE)
			echo "Det var ikke et billede.";
		else {
			$insert = mysql_query('INSERT INTO 
			https://www.youtube.com/watch?v=pMLc4IXmYfg 
Det er her jeg er nået til ');
// Fortsæt i youtube videoen
		}
		}
?>
</body>
</html>
