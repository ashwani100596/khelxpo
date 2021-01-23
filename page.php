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
$l=$_POST["whatsappno"];
$m=$_POST["email"];
$n=$_POST["gender"];
$o=$_POST["eventtype"];
echo $a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o;
 ?>


<?php
$servername = "107.180.50.213:3306";
$username = "anyone";
$password = "anyone8719";
$dbname = "khelxpodatabase";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO registration (firstname, lastname, fatherfirstname, fatherlastname, address, pincode, district, DOB, agegroup, aadharno, mobileno, whatsappno, emailID, gender, selectyourevent)
VALUES ('$a', '$b', '$c', '$d', '$e','$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o')";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
    
    header("Location: /khelxo/successfull.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

