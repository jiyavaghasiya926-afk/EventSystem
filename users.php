<?php
include 'db.php';

$result=mysqli_query($conn,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>

<title>Manage Users</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(135deg,#11998e,#38ef7d);
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

.user-card{
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
background:#11998e;
color:white;
}

.table tbody tr:hover{
background:#f5f5f5;
}

.delete-btn{
background:#dc3545;
color:white;
padding:8px 15px;
border-radius:8px;
text-decoration:none;
font-weight:bold;
}

.delete-btn:hover{
background:#bb2d3b;
color:white;
}

.dashboard-btn{
border-radius:30px;
padding:10px 25px;
font-weight:bold;
}

</style>

</head>

<body>

<h1 class="page-title">
 Manage Users
</h1>

<div class="container">

<div class="user-card">

<table class="table table-bordered table-hover">

<thead>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Action</th>
</tr>

</thead>

<tbody>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td>

<a
href="delete_user.php?id=<?php echo $row['id']; ?>"
class="delete-btn"
onclick="return confirm('Are you sure you want to delete this user?')">

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
class="btn btn-primary dashboard-btn">

Back To Dashboard

</a>

</div>

</div>

</body>
</html>