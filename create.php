<?php 
include "db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name=$_POST['name'];
    $email=$_POST['email'];

   $data="insert into users (name,email) values('$name','$email')";

   $statement= $pdo->prepare($data);
   $statement->execute();
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container">
    <div class="row">
    <h1 class="text-center">Block Post</h1>
    <hr>
        <div class="col-md-6 offset-md-3">
            <a class="btn btn-primary mb-1" href="index.php">Users List</a>
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">

                        </div>
                        <div class="mb-3">
                            <label for="">email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                            
                        </div>
                        <button type="submit" class="btn btn-success">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>