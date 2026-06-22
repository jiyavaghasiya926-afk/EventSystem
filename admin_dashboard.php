<?php
session_start();

if(!isset($_SESSION['admin'])){
header("Location:login.php");
}
?>

<h1>Admin Dashboard</h1>

<a href="bookings.php">
Manage Bookings
</a>

<br><br>

<a href="logout.php">
Logout
</a>