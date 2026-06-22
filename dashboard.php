<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>
Welcome
<?php echo $_SESSION['name']; ?>
</h2>

<a href="booking.php"
class="btn btn-success">

Book Event

</a>

<a href="view_booking.php"
class="btn btn-info">

My Bookings

</a>

<a href="../logout.php"
class="btn btn-danger">

Logout

</a>

</div>

</body>
</html>