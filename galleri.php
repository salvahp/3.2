<!-- Php som giver de informationer headeren kalder efter -->
<?php 
	$thisPage="Galleri";
	$title ="Campus Bindslevs Plads - Galleri";
	$metakeywords ="Kampagneside, Galleri, billeder, tegninger, Campus Bindslevs Plads, Silkeborg, Kultur, Aarhus17, FabLab, Rethink Læring, Projekt Ny Læring, Silkeborg kommune";
	$metadescription ="Kampagneside for Campus Bindslevs Plads, se vores galleri og find billeder af projektet og bygningen samt hold dig opdateret på det nye fælles byrum og laboratorium til læring, kreativitet og kultur.";
	include "inc/header.php";?><head>
<link rel="stylesheet" href="css/lightbox.css"><!-- css til galleri input -->
</head>
<!-- banner -->


<div class="banner-1"> </div>
<!-- //banner --> 
<!-- galleri -->
<div class="services">
<div class="container">
	<div class="services-main">
		<div class="services-top animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h3>Galleri</h3>
			<div class="other-serv animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<!-- php som opretter database forbindelsen -->
			<?php 
        include('inc/dbconnect.php');
        #$dbc=mysqli_connect("localhost","root","password");
		#mysqli_select_db($dbc,"databaseimage");
		
        #------ HER STARTER 1. galleri 
		#query1  bliver brugt til at hente h3 inhold
		$query1= mysqli_query($dbc, "SELECT `image`.`filename`, `image`.`description`, `project`.`projectname` FROM project
		INNER JOIN image ON `image`.`project_id` = `project`.`project_id`
		WHERE projectname='byggeri'");
		#----- Vi bruger DML til at hente data fra databasen, det bliver skrevet ud i variabler som vi kan echo.
		$row = mysqli_fetch_assoc($query1);
		$filename1 = $row['filename'];
		$projectname1 = $row['projectname'];
		echo "<h3>".$projectname1."</h3>";
		
		
		$query= mysqli_query($dbc, "SELECT `image`.`filename`, `image`.`description`, `project`.`projectname` FROM project
		INNER JOIN image ON `image`.`project_id` = `project`.`project_id`
		WHERE projectname='byggeri'");
						
		    while($row = mysqli_fetch_assoc($query))
	        {
	            $filename = $row['filename'];
	            $projectname = $row['projectname'];
				$description = $row['description'];
				
			       	echo "
					<!--thumb image i img -->
					<a class='col-md-3 main-serv-grid minh' href='images/gallery/".$filename."' data-lightbox='image-1' data-title='".$description."'>
					<img src='images/gallery/thumb/".$filename."'><p>".$description."</p>
					</a>";
					
					
	        }
	  ?>
				<div class="clearfix"> </div>
				<div class="other-serv animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">		
				
		<?php		
		#------ HER STARTER 2. galleri 
		#query2  bliver brugt til at hente h3 inhold
		$query2= mysqli_query($dbc, "SELECT `image`.`filename`, `image`.`description`, `project`.`projectname` FROM project
		INNER JOIN image ON `image`.`project_id` = `project`.`project_id`
		WHERE projectname='projekter'");
		
		$row = mysqli_fetch_assoc($query2);
		$filename2 = $row['filename'];
		$projectname2 = $row['projectname'];
		echo "<h3>".$projectname2."</h3>";
		
		
		$query3= mysqli_query($dbc, "SELECT `image`.`filename`, `image`.`description`, `project`.`projectname` FROM project
		INNER JOIN image ON `image`.`project_id` = `project`.`project_id`
		WHERE projectname='projekter'");
						
		    while($row = mysqli_fetch_assoc($query3))
	        {
	            $filename3 = $row['filename'];
	            $projectname3 = $row['projectname'];
				$description3 = $row['description'];
				
			       	echo "
					<!--thumb image i img -->
					<a class='col-md-3 main-serv-grid minh' href='images/gallery/".$filename3."' data-lightbox='image-1' data-title='".$description3."'>
					<img src='images/gallery/thumb/".$filename3."'><p>".$description3."</p>
					</a>";
					
					
	        }
	  ?>
				
					<div class="clearfix"> </div>
					<div class="other-serv animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
		<?php				
		
		#------ HER STARTER 3. galleri 
		#query4  bliver brugt til at hente h3 inhold
		$query4= mysqli_query($dbc, "SELECT `image`.`filename`, `image`.`description`, `project`.`projectname` FROM project
		INNER JOIN image ON `image`.`project_id` = `project`.`project_id`
		WHERE projectname='tegninger'");
		
		$row = mysqli_fetch_assoc($query4);
		$filename4 = $row['filename'];
		$projectname4 = $row['projectname'];
		echo "<h3>".$projectname4."</h3>";
		
		
		$query5= mysqli_query($dbc, "SELECT `image`.`filename`, `image`.`description`, `project`.`projectname` FROM project
		INNER JOIN image ON `image`.`project_id` = `project`.`project_id`
		WHERE projectname='tegninger'");
						
		    while($row = mysqli_fetch_assoc($query5))
	        {
	            $filename5 = $row['filename'];
	            $projectname5 = $row['projectname'];
				$description5 = $row['description'];
				
			       	echo "
					<!--thumb image i img -->
					<a class='col-md-3 main-serv-grid minh' href='images/gallery/".$filename5."' data-lightbox='image-1' data-title='".$description5."'>
					<img src='images/gallery/thumb/".$filename5."'><p>".$description5."</p>
					</a>";
					
					
	        }
	  ?>
	  <div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<script src="js/lightbox-plus-jquery.min.js"></script> 
<!-- //galleri-->
<?php include "inc/footer.php";?>
