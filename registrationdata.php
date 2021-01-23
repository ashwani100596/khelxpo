<!DOCTYPE html>
<html>
<head>
	<title>registration data</title>
</head>
<body>
		<?php
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
	$sql = "SELECT * FROM registartion";
$result = $conn->query($sql);
// var_dump($result);
//$a={id->'1','2','','3'}
// if ($result->num_rows > 0) {
//     // output data of each row
    
// } else {
//     echo "0 results";
// }
$conn->close();
?> 

	 
	<table border="1" cellpadding="1" cellspacing="2">
		<tr>
			<th>first name</th>
			<th>last name</th>
			<th>father's first name</th>
			<th>father's last name</th>
			<th>address</th>
			<th>pincode</th>
			<th>district</th>
			<th>DOB</th>
			<th>age group</th>
			<th>aadhar no</th>
			<th>mobile no</th>
			<th>whatsapp no</th>
			<th>email</th>
			<th>gender</th>
			<th>event type</th>
		</tr>
		<?php 
while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["ID"]. " - Name: " . . " " . $row["lastname"]. "<br>";
    
		 ?>
		<tr>
			<td> <?php echo $row["firstname"]; ?> </td>
			<td> <?php echo $row["lastname"]; ?> </td>
			<td> <?php echo $row["fatherfirstname"]; ?> </td>
			<td> <?php echo $row["fatherlastname"] ?> </td>
			<td> <?php echo $row["address"] ?> </td>
			<td> <?php echo $row["pincode"] ?> </td>
			<td> <?php echo $row["district"] ?> </td>
			<td> <?php echo $row["DOB"] ?> </td>
			<td> <?php echo $row["agegroup"] ?> </td>
			<td> <?php echo $row["aadharno"] ?> </td>
			<td> <?php echo $row["mobileno"] ?> </td>
			<td> <?php echo $row["whatsappno"] ?> </td>
			<td> <?php echo $row["emailID"] ?> </td>
			<td> <?php echo $row["gender"] ?> </td>
			<td> <?php echo $row["selectyourevent"] ?> </td>
			<td> <a href="updation.php?id=<?php echo $row["ID"];  ?>"  class="nav-link" ><button>edit</button></a> </td>
			<td> <a href="deleteregistrationdb.php?id=<?php echo $row["ID"];  ?>"  class="nav-link" ><button>delete</button></a> </td>
		</tr>
      <?php } ?>
	</table>

</body>
</html>