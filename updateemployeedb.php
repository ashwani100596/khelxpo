<?php 
$id=$_POST["id"];
$a=$_POST["firstname"];
$b=$_POST["lastname"];
$c=$_POST["father_sfirstname"];
$d=$_POST["father_lastname"];
$e=$_POST["address"];
$f=$_POST["pincode"];
$g=$_POST["district"];
$h=$_POST["DOB"];
$i=$_POST["age"];
$j=$_POST["aadharno"];
$k=$_POST["mobileno"];
$l=$_POST["alternateno"];
$m=$_POST["email"];
$n=$_POST["gender"];
echo $id."",$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n;
 ?>

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

$sql = "UPDATE employee SET firstname='$a', lastname='$b', fatherfirstname='$c', fatherlastname='$d', address='$e', pincode='$f', district='$g', DOB='$h', age='$i', aadharno='$j', mobileno='$k', alternateno='$l', email='$m', gender='$n' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header("Location: employeedata.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>