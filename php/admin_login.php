<?php
include("../db.php");

$q = mysqli_query($conn,
"SELECT * FROM admin
 WHERE username='$_POST[username]'
 AND password='$_POST[password]'");

if (mysqli_num_rows($q) == 1) {
    header("Location: ../admin_dashboard.php");
} else {
    echo "Invalid Admin Login";
}
?>
