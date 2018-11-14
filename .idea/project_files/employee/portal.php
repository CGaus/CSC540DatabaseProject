<?php
require "../../project_files/database.php";
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Welcome {$_SESSION['username']}";
}
echo "</br>";
echo "</br>";
echo "</br>";
echo "Employee Portal Page";
echo "</br>";
echo "</br>";
echo "<a href='../../project_files/logout.php'>Logout</a>";
?>