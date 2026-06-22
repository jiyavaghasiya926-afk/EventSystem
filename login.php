<?php
session_start();
include 'db.php';

$error="";

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE email='$email'";
    $result=mysqli_query($conn,$sql);

    $user=mysqli_fetch_assoc($result);

    if($user && password_verify($password,$user['password']))
    {
        $_SESSION['user_id']=$user['id'];
        $_SESSION['name']=$user['name'];

        header("Location: dashboard.php");
        exit();
    }
    else
    {
        $error=" Invalid Email or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>User Login</title>

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

.login-card{
background:white;
width:450px;
padding:30px;
border-radius:20px;
box-shadow:0px 10px 25px rgba(0,0,0,0.3);
}

.login-title{
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

.login-btn{
width:100%;
background:linear-gradient(45deg,#667eea,#764ba2);
color:white;
padding:12px;
border:none;
border-radius:30px;
font-size:18px;
font-weight:bold;
}

.login-btn:hover{
transform:scale(1.03);
transition:0.3s;
}

.error{
background:#f8d7da;
color:#721c24;
padding:10px;
border-radius:10px;
margin-bottom:15px;
text-align:center;
font-weight:bold;
}

.register-link{
text-align:center;
margin-top:15px;
}

</style>

</head>

<body>

<div class="login-card">

<h2 class="login-title">
 User Login
</h2>

<?php if($error!=""){ ?>
<div class="error">
<?php echo $error; ?>
</div>
<?php } ?>

<form method="POST">

<input
type="email"
name="email"
class="form-control"
placeholder="Enter Email"
required>

<input
type="password"
name="password"
class="form-control"
placeholder="Enter Password"
required>

<button
type="submit"
name="login"
class="login-btn">

 Login

</button>

</form>

<div class="register-link">

<p>
Don't have an account?
</p>

<a href="register.php"
class="btn btn-success">
 Register Now

</a>

</div>

</div>

</body>
</html>