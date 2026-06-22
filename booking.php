<<?php
session_start();


include 'db.php';

if(isset($_POST['book']))
{
    if(!isset($_SESSION['user_id']))
    {
        header("Location: login.php");
        exit();
    }

    $user_id = $_SESSION['user_id'];

    $event_type=$_POST['event_type'];
    $event_date=$_POST['event_date'];
    $location=$_POST['location'];
    $guests=$_POST['guests'];
    $package=$_POST['package'];
    $requirements=$_POST['requirements'];

    $sql="INSERT INTO bookings
    (user_id,event_type,event_date,location,guests,package_name,requirements)

    VALUES
    ('$user_id','$event_type','$event_date','$location','$guests','$package','$requirements')";

    mysqli_query($conn,$sql);

    echo "<script>alert('🎉 Booking Submitted Successfully!');</script>";

    
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Book Event</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(135deg,#667eea,#764ba2);
min-height:100vh;
font-family:Arial,sans-serif;
padding:30px;
}

.title{
text-align:center;
color:white;
font-size:45px;
font-weight:bold;
margin-bottom:20px;
}

.subtitle{
text-align:center;
color:white;
margin-bottom:30px;
}

.booking-card{
background:white;
padding:30px;
border-radius:20px;
box-shadow:0px 10px 25px rgba(0,0,0,0.3);
}

.form-control{
border-radius:12px;
padding:12px;
margin-bottom:15px;
}

.form-control:focus{
box-shadow:0px 0px 10px #667eea;
border-color:#667eea;
}

.book-btn{
width:100%;
background:linear-gradient(45deg,#667eea,#764ba2);
color:white;
padding:12px;
border:none;
border-radius:30px;
font-size:18px;
font-weight:bold;
}

.book-btn:hover{
transform:scale(1.03);
transition:0.3s;
}

.package-box{
padding:10px;
border-radius:10px;
font-weight:bold;
margin-bottom:10px;
}

.normal{
background:#d1ecf1;
}

.silver{
background:#e2e3e5;
}

.gold{
background:#fff3cd;
}

.premium{
background:#f8d7da;
}

</style>

</head>

<body>

<div class="container">

<h1 class="title">
 Book Your Dream Event
</h1>

<p class="subtitle">
Marriage • Birthday • Anniversary • Corporate Event • Business Party
</p>

<div class="row justify-content-center">

<div class="col-md-8">

<div class="booking-card">

<h3 class="text-center text-primary mb-4">
 Event Booking Form
</h3>

<form method="POST">

<label>Event Type</label>

<select name="event_type" class="form-control">

<option>Marriage</option>
<option>Birthday</option>
<option>Anniversary</option>
<option>Corporate Event</option>
<option>Business Party</option>

</select>

<label>Event Date</label>

<input
type="date"
name="event_date"
class="form-control"
required>

<label>Location</label>

<input
type="text"
name="location"
class="form-control"
placeholder="Enter Event Location"
required>

<label>Number of Guests</label>

<input
type="number"
name="guests"
class="form-control"
placeholder="Enter Guest Count"
required>

<label>Select Package</label>

<select name="package" class="form-control">

<option>Normal</option>
<option>Silver</option>
<option>Gold</option>
<option>Premium</option>
</select>

<div class="package-box normal">
Normal Package - ₹5000
</div>

<div class="package-box silver">
 Silver Package - ₹15000
</div>

<div class="package-box gold">
 Gold Package - ₹30000
</div>

<div class="package-box premium">
 Premium Package - ₹60000
</div>

<label>Special Requirements</label>

<textarea
name="requirements"
class="form-control"
rows="4"
placeholder="Enter Special Requirements"></textarea>

<button
type="submit"
name="book"
class="book-btn">

 Book Event

</button>

</form>

</div>

</div>

</div>

</div>

</body>
</html>