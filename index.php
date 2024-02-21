<?php
 require_once 'connect.php';
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $password= $_POST['password'];

    $sql ="INSERT INTO students(name,email,mobile,password) VALUES('$name','$email','$mobile', '$password')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('Data inserted successful')</script>";
        header('Location: display.php');
    }else{
        echo "<script>alert('Failed to insert data')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap</title>
    <link rel="stylesheet" href="bt5/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid bg-dark text-light top-fixed">
        <h1>welcome home</h1>
    </div>
    <div class="container" style="margin:0px auto;">
        <form method="POST" class="form-group" style="width:400px">
            <div class="form-group">
                <label for="name" class="label-control">name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name" class="label-control">email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="mobile" class="label-control">mobile</label>
                <input type="number" name="mobile" class="form-control">
            </div>
            <div class="form-group">
                <label for="name" class="label-control">password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">submit</button>
            </div>
        </form>

    </div>


    <script src="bt5/js/bootstrap.min.js"></script>
</body>
</html>