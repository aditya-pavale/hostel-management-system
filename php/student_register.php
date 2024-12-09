<?php
include("../db.php");

mysqli_query($conn,
"INSERT INTO userregistration
(regNo, firstName, lastName, gender, email, password)
VALUES
('$_POST[regNo]','$_POST[firstName]','$_POST[lastName]',
 '$_POST[gender]','$_POST[email]','$_POST[password]')");

header("Location: ../login.html");
?>
