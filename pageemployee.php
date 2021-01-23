<?php 
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
echo $a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n;
 ?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khelxpo";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO employee (firstname, lastname, fatherfirstname, fatherlastname, address, pincode, district, DOB, age, aadharno, mobileno, alternateno, email, gender)
VALUES ('$a', '$b', '$c', '$d', '$e','$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n')";

if (mysqli_query($conn, $sql)) {
    //cho "New record created successfully";

     header("Location: /khelxo/successfull.html");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>