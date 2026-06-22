<?php
session_start();
include 'db.php';

$user_id=$_SESSION['user_id'];

$sql="SELECT * FROM bookings WHERE user_id='$user_id'";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>

<title>My Bookings</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(135deg,#667eea,#764ba2);
min-height:100vh;
font-family:Arial,sans-serif;
padding:20px;
}

.page-title{
text-align:center;
color:white;
font-size:45px;
font-weight:bold;
margin-top:20px;
}

.page-subtitle{
text-align:center;
color:white;
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

.status-pending{
background:#ffc107;
color:black;
padding:5px 10px;
border-radius:20px;
font-weight:bold;
}

.status-approved{
background:#28a745;
color:white;
padding:5px 10px;
border-radius:20px;
font-weight:bold;
}

.status-completed{
background:#17a2b8;
color:white;
padding:5px 10px;
border-radius:20px;
font-weight:bold;
}

.btn-custom{
border-radius:30px;
padding:10px 25px;
font-weight:bold;
}

</style>

</head>

<body>

<h1 class="page-title">
 My Event Bookings
</h1>

<p class="page-subtitle">
Track all your event bookings here
</p>

<div class="container">

<div class="booking-card">

<div class="mb-3">

<a href="booking.php"
class="btn btn-success btn-custom">
 New Booking
</a>

<a href="dashboard.php"
class="btn btn-primary btn-custom">
Dashboard
</a>

</div>

<table class="table table-bordered table-hover">

<thead>

<tr>
<th>ID</th>
<th>Event</th>
<th>Date</th>
<th>Package</th>
<th>Status</th>
</tr>

</thead>

<tbody>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['event_type']; ?></td>

<td><?php echo $row['event_date']; ?></td>

<td><?php echo $row['package_name']; ?></td>

<td>

<?php

if($row['status']=="Pending")
{
echo "<span class='status-pending'>Pending</span>";
}
elseif($row['status']=="Approved")
{
echo "<span class='status-approved'>Approved</span>";
}
elseif($row['status']=="Completed")
{
echo "<span class='status-completed'>Completed</span>";
}
else
{
echo $row['status'];
}

?>

</td>

</tr>

<?php
}
?>

</tbody>

</table>

</div>

</div>

</body>
</html>