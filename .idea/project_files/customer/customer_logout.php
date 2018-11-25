<?php
require "../../project_files/database.php";
session_start();
session_destroy();
header('Location: customer_portal.php');
?>