<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

	 <form method="POST" action="getdata.php" enctype="multipart/form-data">
	 	<input type="file" name="myimage">
	 	<input type="submit" name="submit_image" value="Upload">
	 </form>
	 
	 <?php
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		
		mysql_connect($host, $user, $pass);
		
		mysql_select_db('demo');
	?>
	 
	 
</body>
</html>
