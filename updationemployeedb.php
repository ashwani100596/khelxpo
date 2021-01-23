<!DOCTYPE html>
<html lang="en">
<head>
  <title>Updation employee form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
    <body>
    	<?php

    	$a= $_GET["id"];
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "khelxpo";

		// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$sql = "SELECT * FROM employee where ID='$a'";
$result = $conn->query($sql);
$row = $result->fetch_assoc()
?>

    	<div class="container">
    	<h1>Updation employee Form</h1>
    	 <form method="post" action="updateemployeedb.php">
    	<div class="form-row">
    		<div class="form-group col-md-6">
	        <label for="Name">1.Applicant Name:</label>
	        <input type="hidden" name="id" value="<?php echo $a; ?>">
	    	<input type="text" value="<?php echo $row["firstname"]; ?>" class="form-control"  placeholder="first name" name="firstname" required>
	    	</div>
	    <div class="form-group col-md-6">
	    	<label for="Name">Last Name</label>
	    	<input type="text" value="<?php echo $row["lastname"]; ?>" name="lastname" class="form-control"  placeholder=" last name" required>
	    </div>
	    <div class="form-group col-md-6">
	    	<label for="Name">2.Father's Name</label>
	    	<input type="text" value="<?php echo $row["fatherfirstname"]; ?>"  name="father_sfirstname" class="form-control"  placeholder="first name" required>
	    </div>
	    <div class="form-group col-md-6">
	    	<label for="Name">Father's Last Name</label>
	    	<input type="text" value="<?php echo $row["fatherlastname"]; ?>" name="father_lastname" class="form-control"  placeholder="last name" required>
	    </div>
	    </div>
	    <div class="form-group">
	    	<label for="address">3.Address</label>
	    	<input type="text" value="<?php echo $row["address"]; ?>"  name="address" class="form-control"  placeholder="address" required>
	    </div>
	    <div class="form-row">
	    <div class="form-group col-md-4">
	    	<label for="Pincode">4.Pincode</label>
	    	<input type="number" value="<?php echo $row["pincode"]; ?>" name="pincode" class="form-control"  placeholder="Pincode" required>
	    </div>
	    <div class="form-group col-md-4">
	    	<label for="District">5.District</label>
	    	<input type="District" value="<?php echo $row["district"]; ?>" name="district" class="form-control" 
	    	placeholder="District Name" required>
	    </div>
	    <div class="form-group col-md-4">
	    	<label for="DOB">6.DOB</label>
	    	<input type="date" value="<?php echo $row["DOB"]; ?>" name="DOB" class="form-control" id="DOB" required>
	    </div>
	    <div class="form-group col-md-2">
	    	<label for="Age">7.Age</label>
	    	<input type="number" value="<?php echo $row["age"]; ?>" name="age" class="form-control" placeholder="Age" required>
	    </div>
	    <div class="form-group col-md-2">
	    	<label for="Aadhar">8.Aadhar No</label>
	    	<input type="number" value="<?php echo $row["aadharno"]; ?>" name="aadharno" class="form-control" id="Aadhar" placeholder="Aadhar No" required>
	    </div>
	    <div class="form-group col-md-2">
	    	<label for="Mobile No.">9.Mobile No.</label>
	    	<input type="number" value="<?php echo $row["mobileno"]; ?>" name="mobileno"  class="form-control" id="Mobile" placeholder="Mobile No" required>
	    </div>
	    <div class="form-group col-md-2">
	    	<label for="Whatsapp">10.Alternate No.</label>
	    	<input type="number" value="<?php echo $row["alternateno"]; ?>" name="alternateno"  class="form-control" id="Alternateno" placeholder="Alternate No">
	    </div>
	</div>
	    <div class="form-group">
	    	<label for="email">11.E-mail</label>
	    	<input type="email" value="<?php echo $row["email"]; ?>" class="form-control" name="email" placeholder="your email">
	    </div>
	    <div class="form-row">
	    <div class="form-group col-md-6">
	    	<label for="gender">12.Gender:</label>
	    	<input type="radio" name="gender" value="male" required> <?php echo ($row['gender']=='male'?'checked':''); ?>>male
	    	<input type="radio" name="gender" value="female" required><?php echo ($row['gender']=='female'?'checked':''); ?>>female
	    </div>
	    	<button type="submit" class="btn btn-primary">Submit</button>
	    </div>
		</form>
		</div>
	</body>
</html>