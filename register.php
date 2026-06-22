<?php
include 'db.php';

$message="";

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    $password=password_hash(
    $_POST['password'],
    PASSWORD_DEFAULT
    );

    $check=mysqli_query(
    $conn,
    "SELECT * FROM users WHERE email='$email'"
    );

    if(mysqli_num_rows($check)>0)
    {
        $message=" Email Already Registered";
    }
    else
    {
        $sql="INSERT INTO users
        (name,email,phone,address,password)

        VALUES
        ('$name','$email','$phone','$address','$password')";

        mysqli_query($conn,$sql);

        echo "
        <script>
        alert(' Registration Successful');
        window.location='login.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>User Registration</title>

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

.register-card{
background:white;
width:550px;
padding:30px;
border-radius:20px;
box-shadow:0px 10px 25px rgba(0,0,0,0.3);
}

.register-title{
text-align:center;
font-size:35px;
font-weight:bold;
color:#667eea;
margin-bottom:20px;
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

.register-btn{
width:100%;
background:linear-gradient(45deg,#667eea,#764ba2);
color:white;
padding:12px;
border:none;
border-radius:30px;
font-size:18px;
font-weight:bold;
}

.register-btn:hover{
transform:scale(1.03);
transition:0.3s;
}

.message{
background:#f8d7da;
color:#721c24;
padding:10px;
border-radius:10px;
margin-bottom:15px;
text-align:center;
font-weight:bold;
}

.login-link{
text-align:center;
margin-top:15px;
}

</style>

</head>

<body>

<div class="register-card">

<h2 class="register-title">
 User Registration
</h2>

<?php if($message!=""){ ?>
<div class="message">
<?php echo $message; ?>
</div>
<?php } ?>

<form method="POST">

<input
type="text"
name="name"
class="form-control"
placeholder="Enter Full Name"
required>

<input
type="email"
name="email"
class="form-control"
placeholder="Enter Email"
required>

<input
type="text"
name="phone"
class="form-control"
placeholder="Enter Phone Number"
required>

<textarea
name="address"
class="form-control"
placeholder="Enter Address"
rows="3"></textarea>

<input
type="password"
name="password"
class="form-control"
placeholder="Enter Password"
required>

<button
type="submit"
name="register"
class="register-btn">

 Register Now

</button>

</form>

<div class="login-link">

<p class="mt-3">
Already have an account?
</p>

<a href="login.php"
class="btn btn-success">

 Login Here

</a>

</div>

</div>

</body>
</html>