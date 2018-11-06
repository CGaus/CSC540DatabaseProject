<html>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "small";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$pword = $_POST['password'];
$loginchecker = $conn->query("Select ID FROM login WHERE username = '$username' and password ='$pword'");

//checks if login information is present in customer database
if ($loginchecker->num_rows == 0){
    echo "Invalid login information. <br>";
    echo "<a href='540HW1login.html'> Back</a>";
} else {}

$conn->close();

?>

</body>
</html>