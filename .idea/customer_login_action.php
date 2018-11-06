<html>
<body>

<?php

$servername = "den1.mysql4.gear.host";
$username = "csc540";
$password = "Ab04e~sXWF!d";
$dbname = "csc540";

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
    echo "<a href='customer_login.html'> Back</a>";
} else {
    echo "Success!";
}

$conn->close();

?>

</body>
</html>