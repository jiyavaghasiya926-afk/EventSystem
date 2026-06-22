<?php
include 'db.php';

$result=mysqli_query(
$conn,
"SELECT * FROM gallery"
);
?>

<!DOCTYPE html>
<html>
<head>
<title>Event Gallery</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(135deg,#667eea,#764ba2);
min-height:100vh;
}

.gallery-title{
text-align:center;
font-size:50px;
font-weight:bold;
color:white;
margin-top:30px;
margin-bottom:30px;
text-shadow:2px 2px 10px rgba(0,0,0,0.3);
}

.gallery-box{
background:rgba(255,255,255,0.15);
backdrop-filter:blur(10px);
padding:30px;
border-radius:20px;
}

.card{
border:none;
border-radius:20px;
overflow:hidden;
box-shadow:0px 8px 20px rgba(0,0,0,0.2);
transition:0.4s;
}

.card:hover{
transform:translateY(-10px);
}

.card img{
height:250px;
object-fit:cover;
}

</style>

</head>

<body>

<div class="container">

<h1 class="gallery-title">
📸 Event Gallery
</h1>

<div class="gallery-box">

<div class="row">

<div class="col-md-4 mb-4">

<div class="card">

<img src="https://tse4.mm.bing.net/th/id/OIP.8xYOWHNEN2G30V8HXlrbRQHaHa?w=474&h=379&c=7&p=0"
class="card-img-top">

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card">

<img src="https://images.openai.com/static-rsc-4/7GPOd8e0Z3prkDdctwDtSbsSbGdhPzFxH6Bb7pMMaojgFD4oWPq8BZcKwDJ6QEVxhEbuEA4DapqIVuwE_xKMlS7v6pYrwrKxLMKG_80NNn_RoixzGQYtje44MTTyX0WFjZget6uoGtmXxooQTrRSjxHDThUVGnogprjlE5VVKTMaBy5lfL0HwfMVtNo4AALt?purpose=fullsize"
class="card-img-top">

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card">

<img src="https://tse2.mm.bing.net/th/id/OIP.zvIxSGYd8bmzi4GiY8AZXwHaHa?w=474&h=379&c=7&p=0"
class="card-img-top">

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card">

<img src="https://tse2.mm.bing.net/th/id/OIP.kDGkz0ImiDvcxjjXKKOHNwHaE6?w=474&h=379&c=7&p=0"
class="card-img-top">

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card">

<img src="https://images.openai.com/static-rsc-4/r8hepxkccrE7VNZaAevZIvjPHiV5RvLM-lm_KVMur5HBz9-RE3YoFbtsGxs5jG1e1NbAJPQmbWHG1Ms0uhDxeaS366DmqR5RhU-IEbCzGan1xqAfSdosCgNe98B2KmjWnCpkKnMlx9GylwLKuX8qtF_SZ6oA5SKhJnCok_8M9GiB_hKRRkBQ4AfmneWRQgbv?purpose=fullsize"
class="card-img-top">

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card">

<img src="https://images.openai.com/static-rsc-4/SAihXU5XUL_1Yr1Nko1Pp24FFI3y1sYZiTS7HN8RBLL7I_--51DtRDbu5TZKAzvTMzfero6x09vy2XQ16OLY7_8VOmdhWls1-TvKvTDwZwttwwHZDEMfkl2FHV2WjMvBumni2XaIklyadgaQjlQMnrw7SKlcAV66C4ygXxsjFon0TxAxGzOX-IY4Q-cal6Un?purpose=fullsize"
class="card-img-top">

</div>

</div>

</div>

</div>

</div>

</body>
</html>
</body>
</html>