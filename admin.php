<?php
session_start();
include 'db.php';

$error="";

if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM admins
    WHERE username='$username'
    AND password='$password'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['admin']=$username;

        header("Location: dashboard.php");
        exit();
    }
    else
    {
        $error=" Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(135deg,#141e30,#243b55);
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;
font-family:Arial,sans-serif;
}

.login-card{
background:white;
width:450px;
padding:35px;
border-radius:20px;
box-shadow:0px 10px 25px rgba(0,0,0,0.4);
}

.login-title{
text-align:center;
font-size:35px;
font-weight:bold;
color:#243b55;
margin-bottom:20px;
}

.form-control{
padding:12px;
border-radius:12px;
margin-bottom:15px;
}

.form-control:focus{
border-color:#243b55;
box-shadow:0px 0px 10px #243b55;
}

.login-btn{
width:100%;
background:linear-gradient(45deg,#141e30,#243b55);
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

.admin-icon{
font-size:60px;
text-align:center;
margin-bottom:10px;
}

</style>

</head>

<body>

<div class="login-card">

<div class="admin-icon">

</div>

<h2 class="login-title">
Admin Login
</h2>

<?php if($error!=""){ ?>
<div class="error">
<?php echo $error; ?>
</div>
<?php } ?>

<form method="POST">

<input
type="text"
name="username"
class="form-control"
placeholder="Enter Username"
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

</div>

</body>
</html>