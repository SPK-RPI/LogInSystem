<?php
// Start the session
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "srikant786";
$dbname = "test";
$newuser=$_POST["user"];
$paw= $_POST["pass"];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT username, password FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
    if($newuser==$row["username"]&&$paw==$row["password"]){
        
       
        //echo"akdjka".$_SESSION["user"] ;
         header('Location: home.php');
         //session_unset(); 
         $_SESSION["user"]==$row["username"];
         // destroy the session 
         //session_destroy();
        exit;
    }
    else{

        header('Location: login.html');
        exit;

    }
    }
} else {
    echo "0 results";
}
$conn->close();
?>