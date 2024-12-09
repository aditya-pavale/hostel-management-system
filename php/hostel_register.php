<?php
include("../db.php");

mysqli_query($conn,
"INSERT INTO registration
(regno, firstName, lastName, contactno, email, gender,
 course, room, stayfrom, duration, address, city, state, pincode)
VALUES
('$_POST[regno]','$_POST[firstName]','$_POST[lastName]',
 '$_POST[contactno]','$_POST[email]','$_POST[gender]',
 '$_POST[course]','$_POST[room]','$_POST[stayfrom]',
 '$_POST[duration]','$_POST[address]','$_POST[city]',
 '$_POST[state]','$_POST[pincode]')");

echo "Hostel Registration Successful";
?>
