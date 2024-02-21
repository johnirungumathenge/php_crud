<?php
  require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
    <link rel="stylesheet" href="bt5/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid bg-dark text-light top-fixed">
        <h1>welcome home</h1>
    </div>
    <div class="continer">
        <button class="btn btn-primary text-light"><a class="text-light" href="index.php">Add User</button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sid</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
            <?php
                //require_once 'connect.php';

                $sql = "select * from students";
                $result = mysqli_query($conn,$sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id =$row['id'];
                        $name =$row['name'];
                        $email=$row['email'];
                        $mobile =$row['mobile'];
                        $password=$row['password'];
                        echo "
                        <tr>
                            <td >$id</td>
                            <td >$name</td>
                            <td>$email</td>
                            <td>$mobile</td>
                            <td>$password</td>
                            <td>
                                <button class='btn btn-primary' ><a  class='text-light text-decoration-none' href='update.php?updateid=$id'>Update</a></button>
                                <button class='btn btn-danger' href=''><a class='text-light text-decoration-none' href='delete.php?deleteid=$id'>Delete</a></button>
                            </td>
                        </tr>
                        ";
                    }
                    
                }else{
                    echo "<script>alert('new')</script>";
                }
                ?>
                <!-- <tr>
                    <td scope="col">1</td>
                    <td scope="col">Orto</td>
                    <td scope="col">orto@yahoo.com</td>
                    <td scope="col">0734527228</td>
                    <td scope="col">123</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>John</td>
                    <td>john@yahoo.com</td>
                    <td>0734527228</td>
                    <td>128733</td>
                </tr> -->

            </tbody>
        </table>
    </div>

 
    
    <script src="bt5/js/bootstrap.min.js"></script>
</body>
</html>