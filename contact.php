<?php
include 'db.php';

$success = "";

if(isset($_POST['send']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    mysqli_query(
    $conn,
    "INSERT INTO contacts
    (name,email,subject,message)

    VALUES
    ('$name','$email','$subject','$message')"
    );

    $success = "✅ Message Sent Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(135deg,#36d1dc,#5b86e5);
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;
font-family:Arial,sans-serif;
}

.contact-card{
background:white;
width:550px;
padding:30px;
border-radius:20px;
box-shadow:0px 10px 25px rgba(0,0,0,0.3);
}

.contact-title{
text-align:center;
font-size:35px;
font-weight:bold;
color:#5b86e5;
margin-bottom:20px;
}

.form-control{
border-radius:12px;
padding:12px;
margin-bottom:15px;
}

.form-control:focus{
box-shadow:0px 0px 10px #5b86e5;
border-color:#5b86e5;
}

.send-btn{
width:100%;
background:linear-gradient(45deg,#36d1dc,#5b86e5);
color:white;
padding:12px;
border:none;
border-radius:30px;
font-size:18px;
font-weight:bold;
}

.send-btn:hover{
transform:scale(1.03);
transition:0.3s;
}

.success{
background:#d4edda;
color:#155724;
padding:12px;
border-radius:10px;
text-align:center;
margin-bottom:15px;
font-weight:bold;
}

</style>

</head>

<body>

<div class="contact-card">

<h2 class="contact-title">
Contact Us
</h2>

<?php if($success!=""){ ?>
<div class="success">
<?php echo $success; ?>
</div>
<?php } ?>

<form method="POST">

<input
type="text"
name="name"
class="form-control"
placeholder="Enter Your Name"
required>

<input
type="email"
name="email"
class="form-control"
placeholder="Enter Your Email"
required>

<input
type="text"
name="subject"
class="form-control"
placeholder="Enter Subject"
required>

<textarea
name="message"
class="form-control"
rows="5"
placeholder="Write Your Message"
required></textarea>

<button
type="submit"
name="send"
class="send-btn">

 Send Message

</button>

</form>

</div>

</body>
</html>