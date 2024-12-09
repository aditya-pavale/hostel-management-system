<?php
include("../db.php");

$q = mysqli_query($conn,
"SELECT * FROM userregistration
 WHERE email='$_POST[email]'
 AND password='$_POST[password]'");

if (mysqli_num_rows($q) == 1) {
    header("Location: ../student_dashboard.php");
} else {
    echo "Invalid Login";
}
?>
