<?php

include("db.php");

$sql="SELECT * FROM `table 10` ORDER BY `table 10`.`COL 3` DESC";

$records = mysqli_query($con,$sql);

?>

<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title img="src">DELL INDIA OUTLET</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
<body>
<h2 align="center" style="color:#006666"><b><u>PREDICTED LOCATIONS & QUANTITY OF AGED PRODUCTS AT 3PL</u></b></h2>

 <div class="panel panel-body">
	 
	 <div class="container">
	 
	     <table class="table table-striped">
		 
		 <tr>
		 
		    <th><u> PRODUCT TITLE</u></th>
			
			<th><u> QUANTITY</u></th>
			
			<th><u> LOCATION</u></th>
			
			
		</tr>
		
		</div>
		<?php
		
		while($rec = mysqli_fetch_assoc($records))
		{
			
			echo "<tr>";
			
			echo "<td>".$rec['COL 2']."</td>";
			
			echo "<td>".$rec['COL 3']."</td>";
			
			echo "<td>".$rec['COL 5']."</td>";
					
            
            echo "</tr>";			
			
	    }		
		?>
</body>
</html>