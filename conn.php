
<?php
if(isset($_POST['submit'])){
 
    $fname = $_POST['fname'];
    $passhash = $_POST['passhash'];
    $email = $_POST['email'];

}
//database info.....
$servername = "localhost";
$username = "root";
$password = "root@123";
$database = "test";
// Create connection.......
$conn =  mysqli_connect($servername, $username, $password, $database);

// Check connection.......
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



     

$sql = "INSERT INTO userdata (fname, passhash, email)
VALUES ('$fname' , '$passhash' , '$email')";





$rs = mysqli_query($conn, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
    
mysqli_close($conn);
?>

