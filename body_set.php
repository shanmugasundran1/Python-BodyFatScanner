<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Body Fat Scanner | E-Attendance@UM</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  
  <link rel="stylesheet" href="src/css/all.min.css">
  <link rel="stylesheet" href="src/adminlte.min.css">
  <script src="src/adminlte.min.js"></script>
  <script src="src/demo.js"></script>
  
</head>

<body>
  <div class="content-wrapper">
    <div class="card card-primary col-md-12">
      <div class="card-header">
        <h3 class="card-title">Body Analysis Details</h3>
      </div>
	  
	  <div class="card-body border border-secondary  col-md-12">
		<div class="form-group">
			<?php

			$check = 0;

			if (isset($_POST['submit']) != '') {
				
			  $gender = $_POST['gender'];
			  $height = $_POST['height'];
			  $weight = $_POST['weight'];
			  
			  
			  $name1 = $_FILES['frontphoto']['name'];
			  $size1 = $_FILES['frontphoto']['size'];
			  $type1 = $_FILES['frontphoto']['type'];
			  $temp1 = $_FILES['frontphoto']['tmp_name'];
			  $frontphoto = $name1;
			  move_uploaded_file($temp1, $frontphoto);


			  $name2 = $_FILES['sidephoto']['name'];
			  $size2 = $_FILES['sidephoto']['size'];
			  $type2 = $_FILES['sidephoto']['type'];
			  $temp2 = $_FILES['sidephoto']['tmp_name'];
			  $sidephoto = $name2;
			  move_uploaded_file($temp2, $sidephoto);
			  
			  $check = 1;
			  
			}
				if ($check == 1) {
				echo "<img src='" . $frontphoto . "' alt='img' width='200' >";
				echo "<img src='" . $sidephoto . "' alt='img' width='200'>";
				
				echo "<br>";
				echo "<br>";
				$python = shell_exec("Python27\python.exe main.py $height $weight $gender $frontphoto $sidephoto");
				
				echo nl2br ("<b>Scan Results</b>:\r\n" . $python);
				}
			?>
          </div>
        </div>
    </div>
  </div>
</body>

</html>





