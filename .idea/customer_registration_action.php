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
$registerUsername = $_POST['username'];
$registerFirstName = $_POST['first_name'];
$registerLastName = $_POST['last_name'];
$registerStreetAddress = $_POST['address'];
$registerCity = $_POST['city'];
$registerState = $_POST['state'];
$registerZip = $_POST['zipcode'];
$registerpword = $_POST['password'];
$registerCpword= $_POST['Cpassword'];
$namevalid = FALSE;
$passwordvalid = FALSE;
$namechecker = $conn->query("Select ID FROM login WHERE username = '$registerUsername'");

// Check if username is valid
if ($registerUsername != "" and $namechecker->num_rows == 0) {
    $namevalid = TRUE;
} else {
    echo "Invalid username<br>";
    $namevalid = FALSE;
}

// Check if password and confirmation match each other
if ($registerpword != "" and $registerpword == $registerCpword) {
    $passwordvalid = TRUE;
} else {
    echo "Password does not match<br>";
    $passwordvalid = FALSE;
}

//If username and password are valid the values will be sent to the login table
if ($namevalid == TRUE and $passwordvalid == TRUE) {
    $conn->query("INSERT INTO login (username, password) VALUES ('$registerUsername', '$registerpword')");
    echo "New record created successfully.<br>
			<a href='customer_login.html'>Return to login page</a>";
} else {
    echo "Registration unable to be completed, try again.<br>
				<a href='customer_registration.html'>Return to registration page</a>";
}

$conn->close();

?>

</body>
</html>