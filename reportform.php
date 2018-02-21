<!DOCTYPE html>
<html>
<head>
	<title>Report Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		body{
			background-image:url(yale.jpg);
			background-repeat: no-repeat;
			color: blue;



		}
		h3{
			color: red;
		}
		h4{
			color: blue;
		}


	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Report Form</a></li>
        <li><a href="page1.php">Home</a></li>
          </ul>
  </div>
</nav>
	<center><div>
<form method="GET">
	<label>ENGLISH</label><br>
<input type="number" name="english"><br>
<label>KISWAHILI</label><br>
<input type="number" name="kiswahili"><br>
<label>MATHEMATICS</label><br>
<input type="number" name="mathematics"><br>
<label>SCIENCE</label><br>
<input type="number" name="science"><br>
<label>C.R.E</label><br>
<input type="number" name="cre"><br>
<label>SOCIAL STUDIES</label><br>
<input type="number" name="socialstudies"><br>
<label>MUSIC</label><br>
<input type="number" name="music"><br>



<button class="btn btn-success">SUBMIT</button>
<button class="btn btn-danger" reset>RESET</button>


</form>


<?php
$jones1=$_GET['english'];
$jones2=$_GET['kiswahili'];
$jones3=$_GET['mathematics'];
$jones4=$_GET['science'];
$jones5=$_GET['cre'];
$jones6=$_GET['socialstudies'];
$jones7=$_GET['music'];
	$total=$jones1+$jones2+$jones3+$jones4+$jones5+$jones6+$jones7;
	echo "<h4>Total is </h4>" . $total;
	echo "<br>";
	$average=($total/7);
	echo "<h4>Average is</h4> " . $average;
echo "<br>";	
		
		if ($average>=0 && $average<=20) {
			echo "<h3>FAIL</h3>";

			# code...
		}elseif ($average>20 && $average<=40 ) {
			echo "<h3>Your grade is D</h3>";
			# code...
		}
		elseif ($average>40 && $average<=60 ) {
			echo "<h3>Your grade is C</h3>";
			# code...
		}
		elseif ($average>60 && $average<=80 ) {
			echo " <h3>Your grade is B</h3>";
			# code...
		}
		elseif ($average>80 && $average<=100 ) {
			echo "<h3>Your grade is A</h3>";
			# code...
		}
		else{
			echo "<h3>WACHA BANGI</h3>";
		}

	







 ?>
</div></center>
</body>
</html>