<!DOCTYPE html>
<html>
<head>

<title>Elite Event Management System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(135deg,#667eea,#764ba2);
font-family:Arial,sans-serif;
}

.navbar{
box-shadow:0 5px 15px rgba(0,0,0,0.3);
}

.hero{
padding:80px 20px;
text-align:center;
color:white;
}

.hero h1{
font-size:60px;
font-weight:bold;
}

.hero p{
font-size:22px;
margin-top:15px;
}

.card{
border:none;
border-radius:20px;
box-shadow:0px 10px 20px rgba(0,0,0,0.2);
transition:0.3s;
}

.card:hover{
transform:translateY(-10px);
}

.section-title{
color:white;
font-weight:bold;
margin-bottom:30px;
}

.package-normal{
background:#d1ecf1;
}

.package-silver{
background:#e2e3e5;
}

.package-gold{
background:#fff3cd;
}

.package-premium{
background:#f8d7da;
}

footer{
margin-top:50px;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand fw-bold">
 Elite Events
</a>

<button class="navbar-toggler"
data-bs-toggle="collapse"
data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse"
id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="index.php">
Home
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="booking.php">
Booking
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="view_booking.php">
My Booking
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="bookings.php">
Bookings
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="gallery.php">
Gallery
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="payment.php">
Payment
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="admingallery.php">
Admin Gallery
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="contact.php">
Contact Us
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="help.php">
Help
</a>
</li>

<li class="nav-item">
<a class="btn btn-light me-2"
href="login.php">

Login

</a>
</li>

<li class="nav-item">
<a class="btn btn-warning"
href="register.php">

Register

</a>
</li>

</ul>

</div>

</div>

</nav>

<div class="hero">

<h1>
 Elite Event Management
</h1>

<p>
Wedding • Birthday • Anniversary • Corporate Events
</p>

<a href="booking.php"
class="btn btn-warning btn-lg">

 Book Now

</a>

</div>

<div class="container">

<h2 class="text-center section-title">
 Our Services
</h2>

<div class="row">

<div class="col-md-3 mb-4">

<div class="card p-4 text-center">

<h4> Wedding</h4>

<p>
Complete Marriage Planning
</p>

</div>

</div>

<div class="col-md-3 mb-4">

<div class="card p-4 text-center">

<h4> Birthday</h4>

<p>
Birthday Decorations
</p>

</div>

</div>

<div class="col-md-3 mb-4">

<div class="card p-4 text-center">

<h4> Anniversary</h4>

<p>
Special Anniversary Events
</p>

</div>

</div>

<div class="col-md-3 mb-4">

<div class="card p-4 text-center">

<h4> Corporate</h4>

<p>
Business Conferences
</p>

</div>

</div>

</div>

<h2 class="text-center section-title mt-5">
 Event Packages
</h2>

<div class="row">

<div class="col-md-3 mb-4">

<div class="card package-normal text-center p-4">

<h3>Normal</h3>

<h4>₹5000</h4>

<p>Basic Decoration</p>

</div>

</div>

<div class="col-md-3 mb-4">

<div class="card package-silver text-center p-4">

<h3>Silver</h3>

<h4>₹15000</h4>

<p>Decoration + Catering</p>

</div>

</div>

<div class="col-md-3 mb-4">

<div class="card package-gold text-center p-4">

<h3>Gold</h3>

<h4>₹30000</h4>

<p>Premium Decoration + Food</p>

</div>

</div>

<div class="col-md-3 mb-4">

<div class="card package-premium text-center p-4">

<h3>Premium</h3>

<h4>₹60000</h4>

<p>Luxury Event Management</p>

</div>

</div>

</div>

</div>

<footer class="bg-dark text-white text-center p-4">

<h5>
 Elite Event Management System
</h5>

<p>
Wedding • Birthday • Anniversary • Corporate Events
</p>

<p>
 info@eliteevents.com
</p>

<p>
© 2026 All Rights Reserved
</p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>