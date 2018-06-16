
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$newuser=$_POST["user"];
$paw= $_POST["pass"];
$rpaw=$_POST["rpass"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (username,password) VALUES ('$newuser','$paw')";
if($paw!=$rpaw){
    echo'<script>alert("Passwords are not maching.....");</script>';
    echo'<script>window.open("register.html",name="_parent");</script>';
exit;
}
if($newuser==""||$paw==""||$rpaw==""){

    echo'<script>alert("Please enter your credentials");</script>';
    echo'<script>window.open("register.html",name="_parent");</script>';
exit;
}


if ($conn->query($sql) === TRUE) {
    echo'<script>alert("You are now registered.....");</script>';
    echo'<script>window.open("login.html",name="_parent");</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>
