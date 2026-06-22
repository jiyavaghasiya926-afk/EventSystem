<?php
include 'db.php';

$success=false;
$payment_method="";

if(isset($_POST['pay']))
{

$booking=$_POST['booking'];
$package=$_POST['package'];
$payment_method=$_POST['payment_method'];

if($package=="Normal")
{
$amount=5000;
}

if($package=="Silver")
{
$amount=15000;
}

if($package=="Gold")
{
$amount=30000;
}

if($package=="Premium")
{
$amount=60000;
}

mysqli_query(
$conn,
"INSERT INTO payments
(booking_id,package_name,amount,payment_method,payment_status)

VALUES
('$booking','$package','$amount','$payment_method','Paid')"
);

$success=true;

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Payment Page</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(135deg,#667eea,#764ba2);
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;
font-family:Arial,sans-serif;
}

.payment-card{
background:white;
width:550px;
padding:30px;
border-radius:20px;
box-shadow:0px 10px 25px rgba(0,0,0,0.3);
}

.payment-title{
text-align:center;
font-size:35px;
font-weight:bold;
color:#667eea;
margin-bottom:20px;
}

.form-control,
.form-select{
border-radius:12px;
padding:12px;
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

.pay-btn{
width:100%;
background:linear-gradient(45deg,#667eea,#764ba2);
color:white;
padding:12px;
border:none;
border-radius:30px;
font-size:18px;
font-weight:bold;
}

.pay-btn:hover{
transform:scale(1.03);
transition:0.3s;
}

.success-box{
background:#d4edda;
color:#155724;
padding:15px;
border-radius:10px;
text-align:center;
font-size:18px;
font-weight:bold;
margin-bottom:20px;
border:1px solid #28a745;
}

</style>

</head>

<body>

<div class="payment-card">

<h2 class="payment-title">
 Payment Gateway
</h2>

<?php if($success){ ?>

<div class="success-box">

 Payment Successful

<br><br>

Package :
<?php echo $package; ?>

<br>

Amount :
₹<?php echo $amount; ?>

<br>

Method :
<?php echo $payment_method; ?>

<br><br>

Thank You For Booking With Us 🎉

</div>

<?php } ?>

<form method="POST">

<label>Booking ID</label>

<input
type="number"
name="booking"
class="form-control mb-3"
placeholder="Enter Booking ID"
required>

<label>Select Package</label>

<select
name="package"
class="form-select mb-3"
required>

<option value="">
Select Package
</option>

<option>Normal</option>
<option>Silver</option>
<option>Gold</option>
<option>Premium</option>

</select>

<label>Payment Method</label>

<select
name="payment_method"
class="form-select mb-3"
required>

<option value="">
Select Payment Method
</option>

<option>Cash</option>

<option>UPI</option>

<option>Credit Card</option>

<option>Debit Card</option>

<option>Net Banking</option>

</select>

<div class="package-box normal">
 Normal - ₹5000
</div>

<div class="package-box silver">
 Silver - ₹15000
</div>

<div class="package-box gold">
 Gold - ₹30000
</div>

<div class="package-box premium">
 Premium - ₹60000
</div>

<button
type="submit"
name="pay"
class="pay-btn">

Pay Now

</button>

</form>

<br>

<a href="view_booking.php"
class="btn btn-success w-100">
 View Booking

</a>

</div>

</body>
</html>