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

<!-- connect to database-->
<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("muratmoviedb") or die(mysql_error());
?>
</body>
</html>
