<!DOCTYPE html>
<html>
<head>

<title>Help Center</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(135deg,#667eea,#764ba2);
min-height:100vh;
font-family:Arial,sans-serif;
padding:30px;
}

.help-title{
text-align:center;
color:white;
font-size:45px;
font-weight:bold;
margin-bottom:10px;
}

.help-subtitle{
text-align:center;
color:white;
margin-bottom:30px;
}

.help-card{
background:white;
padding:30px;
border-radius:20px;
box-shadow:0px 10px 25px rgba(0,0,0,0.3);
}

.accordion-button{
font-weight:bold;
font-size:18px;
}

.home-btn{
border-radius:30px;
padding:10px 25px;
font-weight:bold;
}

</style>

</head>

<body>

<div class="container">

<h1 class="help-title">
 Help Center
</h1>

<p class="help-subtitle">
Find answers to common questions
</p>

<div class="help-card">

<div class="accordion" id="faq">

<div class="accordion-item">

<h2 class="accordion-header">

<button class="accordion-button"
type="button"
data-bs-toggle="collapse"
data-bs-target="#q1">

 How To Book Event?

</button>

</h2>

<div id="q1"
class="accordion-collapse collapse show">

<div class="accordion-body">

Register ➜ Login ➜ Book Event ➜ Submit Booking

</div>

</div>

</div>

<div class="accordion-item">

<h2 class="accordion-header">

<button class="accordion-button collapsed"
type="button"
data-bs-toggle="collapse"
data-bs-target="#q2">

 How To Pay?

</button>

</h2>

<div id="q2"
class="accordion-collapse collapse">

<div class="accordion-body">

Select Package ➜ Go To Payment Page ➜ Pay Successfully

</div>

</div>

</div>

<div class="accordion-item">

<h2 class="accordion-header">

<button class="accordion-button collapsed"
type="button"
data-bs-toggle="collapse"
data-bs-target="#q3">

 How To Check Booking Status?

</button>

</h2>

<div id="q3"
class="accordion-collapse collapse">

<div class="accordion-body">

Dashboard ➜ My Bookings ➜ View Status

</div>

</div>

</div>

<div class="accordion-item">

<h2 class="accordion-header">

<button class="accordion-button collapsed"
type="button"
data-bs-toggle="collapse"
data-bs-target="#q4">

 How To Contact Admin?

</button>

</h2>

<div id="q4"
class="accordion-collapse collapse">

<div class="accordion-body">

Go To Contact Us Page And Send Your Message

</div>

</div>

</div>

</div>

<br>

<div class="text-center">

<a href="dashboard.php"
class="btn btn-primary home-btn">

 Dashboard

</a>

<a href="index.php"
class="btn btn-success home-btn">

Home

</a>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>