<?php
# Connect on localhost for user root
# with password xxxxxxx to database userloginwebsystem 

$dbc = mysqli_connect("localhost","root","","content_northside") or die (mysqli_connect_error() );

	mysql_connect("localhost", "root", "password") or die(mysql_error());
	mysql_select_db("muratmoviedb") or die(mysql_error());

# $dbc = mysqli_connect("localhost","root","Password","databasename") or die (mysqli_connect_error() );

# localhost kan erstattes med domæne navn - f.eks "danudenx.dk.mysql"


#Display MySQL version and host


#if(mysqli_ping($dbc))
#{ echo 'MYSQL Server' .mysqli_get_server_info($dbc). ' <br> on ' . mysqli_get_host_info($dbc); }


# Set encoding to match PHP script

mysqli_set_charset($dbc, 'utf8'); 
?>


