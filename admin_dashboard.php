<?php
include("db.php");
$data = mysqli_query($conn, "SELECT * FROM registration");
?>

<h2>Admin Dashboard</h2>
<table border="1">
<tr><th>Reg No</th><th>Name</th><th>Room</th><th>Course</th></tr>

<?php while($r = mysqli_fetch_assoc($data)) { ?>
<tr>
<td><?= $r['regno'] ?></td>
<td><?= $r['firstName'] ?></td>
<td><?= $r['room'] ?></td>
<td><?= $r['course'] ?></td>
</tr>
<?php } ?>
</table>
