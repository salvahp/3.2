<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Uploadsiden</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
	<p>Vælg billede du vil uploade:</p>
	<input type="file" name="fileToUpload" id="fileToUpload">

	
	<input type="submit" value="Upload Image" name="submit">
</form>
<!-- /form upload.php -->



<?php
//forbind til database
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("imagedatabase") or die(mysql_error());

//fil oplysninger 
//$file = $_FILES['fileToUpload']['tmp_name'];

if(isset($_FILES['fileToUpload'])){
    echo $_FILES['fileToUpload']['tmp_name'];
}



if (!isset($file))
	echo "Please select an image.";
	else{
		$image = addslashes(file_get_content($_FILES['fileToUpload']['tmp_name']));
		$image_name = addslashes($_FILES['fileToUpload']['name']);
		//image size bruges kun til at tjekke om det er en billedfil
		$image_size = getimagesize($_FILES['fileToUpload']['tmp_name']);
		
		if ($image_size==FALSE)
			echo "Det var ikke et billede.";
		else {
			if (!$insert = mysql_query("INSERT INTO image VALUES ('','$image_name','$image')"))
			echo "Problemer med upload af billede.";
			
			else
			{
				$lastid = mysql_insert_id();
				echo "Image uploaded. <p />Your image:<p /><img src='getuploadedimage.php?id=$lastid'";
			}

		}
		}
?>
</body>
</html>
