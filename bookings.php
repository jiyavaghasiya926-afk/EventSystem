<?php
include 'db.php';

$result=mysqli_query(
$conn,
"SELECT * FROM bookings"
);
?>

<!DOCTYPE html>
<html>
<head>

<title>Manage Bookings</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(135deg,#667eea,#764ba2);
min-height:100vh;
font-family:Arial,sans-serif;
padding:30px;
}

.page-title{
text-align:center;
color:white;
font-size:45px;
font-weight:bold;
margin-bottom:30px;
}

.booking-card{
background:white;
padding:25px;
border-radius:20px;
box-shadow:0px 10px 25px rgba(0,0,0,0.3);
}

.table{
border-radius:15px;
overflow:hidden;
}

.table thead{
background:#667eea;
color:white;
}

.table tbody tr:hover{
background:#f5f5f5;
}

.status{
padding:6px 12px;
border-radius:20px;
font-weight:bold;
}

.pending{
background:#ffc107;
color:black;
}

.approved{
background:#28a745;
color:white;
}

.btn-approve{
background:#28a745;
color:white;
padding:6px 12px;
border-radius:8px;
text-decoration:none;
}

.btn-delete{
background:#dc3545;
color:white;
padding:6px 12px;
border-radius:8px;
text-decoration:none;
}

.btn-approve:hover,
.btn-delete:hover{
opacity:0.9;
color:white;
}

</style>

</head>

<body>

<h1 class="page-title">
     Manage Event Bookings
</h1>

<div class="container">

<div class="booking-card">

<table class="table table-bordered table-hover">

<thead>

<tr>

<th>ID</th>
<th>Event Type</th>
<th>Status</th>
<th>Action</th>

</tr>

</thead>

<tbody>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td>
<?php echo $row['id']; ?>
</td>

<td>
<?php echo $row['event_type']; ?>
</td>

<td>

<?php

if($row['status']=="Approved")
{
echo "<span class='status approved'>Approved</span>";
}
else
{
echo "<span class='status pending'>Pending</span>";
}

?>

</td>

<td>

<a
href="approve.php?id=<?php echo $row['id']; ?>"
class="btn-approve">
 Approve

</a>

<a
href="delete.php?id=<?php echo $row['id']; ?>"
class="btn-delete"
onclick="return confirm('Are you sure?')">
 Delete

</a>

</td>

</tr>

<?php
}
?>

</tbody>

</table>

<br>

<a href="dashboard.php"
class="btn btn-primary">
 Back To Dashboard

</a>

</div>

</div>

</body>
</html>