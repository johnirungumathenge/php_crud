<?php
 require_once 'connect.php';

 if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM students WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Deleted successfully')</script>";
        header("Location:display.php");
    }else{
        die(mysqli_error($conn)); 
        echo "<script>alert('Failed to delete')</script>";
    }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>
<body>
    <p>delete operation</p>
    
</body>
</html>