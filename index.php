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
        <h3 class="card-title">Submit Details</h3>
      </div>
      <form enctype="multipart/form-data" action="body_set.php" name="form" method="post">
        <div class="card-body border border-secondary  col-md-12">
		
          <div class="form-group">
            <label for="exampleInputEmail1">Gender</label>
                <select class="form-control" name="gender" required>
				  <option value="Male">Male</option>
				  <option value="Female">Female</option>
                </select>
          </div>
		  
          <div class="form-group">
            <label for="exampleInputPassword1">Height</label>
            <input type="number" name="height" class="form-control" id="exampleInputEmail1" placeholder="Subject" required>
          </div>
		  
		  <div class="form-group">
            <label for="exampleInputPassword1">Weight</label>
            <input type="number" name="weight" class="form-control" id="exampleInputEmail1" placeholder="Subject" required>
          </div>
		  
		  
          <div class="form-group">
            <label for="exampleInputFile">Photo (Front View)</label>
            <div class="input-group mt-1">
              <div class="custom-file">
                <input type="file" name="frontphoto" class="custom-file-input" class="customFile" required>
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>
            </div>
          </div>
		  
		  <div class="form-group">
            <label for="exampleInputFile">Photo (Side View)</label>
            <div class="input-group mt-1">
              <div class="custom-file">
                <input type="file" name="sidephoto" class="custom-file-input" class="customFile" required>
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>
            </div>
          </div>

        </div>
        <div class="card-footer">
          <input type="submit" value="SUBMIT" name="submit" class="btn btn-danger">
        </div>
      </form>
    </div>
  </div>
</body>

</html>