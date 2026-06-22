<?php
include 'db.php';

/* UPLOAD */
if(isset($_POST['upload'])) {

    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    if($image != "") {

        $newName = time() . "_" . $image;
        $path = "uploads/" . $newName;

        move_uploaded_file($tmp, $path);

        mysqli_query($conn,
        "INSERT INTO gallery(image) VALUES('$newName')");
    }
}

/* DELETE */
if(isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $res = mysqli_query($conn,"SELECT * FROM gallery WHERE id=$id");
    $row = mysqli_fetch_assoc($res);

    unlink("uploads/" . $row['image']);

    mysqli_query($conn,"DELETE FROM gallery WHERE id=$id");

    header("Location: admin_gallery.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Gallery</title>

<style>
body{
    margin:0;
    font-family:Arial;
    background: linear-gradient(135deg,#141e30,#243b55);
    color:white;
}

.container{
    width:90%;
    margin:auto;
    padding:20px;
}

h1{
    text-align:center;
}

.upload-box{
    background: rgba(255,255,255,0.1);
    padding:20px;
    border-radius:10px;
    text-align:center;
    margin-bottom:25px;
}

input[type=file]{
    background:white;
    padding:8px;
    border-radius:5px;
}

button{
    padding:10px 20px;
    background:#00c853;
    border:none;
    color:white;
    border-radius:5px;
    cursor:pointer;
}

button:hover{
    background:#00a844;
}

.gallery{
    display:grid;
    grid-template-columns: repeat(auto-fit,minmax(180px,1fr));
    gap:15px;
}

.card{
    background:white;
    padding:10px;
    border-radius:10px;
    position:relative;
}

.card img{
    width:100%;
    height:180px;
    object-fit:cover;
    border-radius:10px;
}

.delete{
    position:absolute;
    top:8px;
    right:8px;
    background:red;
    color:white;
    padding:5px 8px;
    font-size:12px;
    border-radius:5px;
    text-decoration:none;
}
</style>

</head>

<body>

<div class="container">

<h1>📸 Full Admin Gallery System</h1>

<!-- UPLOAD -->
<div class="upload-box">
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <button name="upload">Upload</button>
</form>
</div>

<!-- GALLERY -->
<div class="gallery">

<?php
$res = mysqli_query($conn,"SELECT * FROM gallery ORDER BY id DESC");

while($row = mysqli_fetch_assoc($res)) {
?>

<div class="card">

    <a class="delete"
       href="?delete=<?php echo $row['id']; ?>"
       onclick="return confirm('Delete image?')">
       X
    </a>

    <img src="uploads/<?php echo $row['image']; ?>">

</div>

<?php } ?>

</div>

</div>

</body>
</html>