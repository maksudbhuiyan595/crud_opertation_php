<?php 
include "db.php";

$data="select * from users";

$statement=$pdo->query($data);

$users=$statement->fetchAll(PDO::FETCH_ASSOC);

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
        <h1 class="text-center">Block Post </h1>
        <hr>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <a class="btn btn-primary mb-1" href="create.php">+Add User</a>
                <div class="card">
                    <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                           <?php 
                           
                            foreach($users as $user):
                           ?>
                                <tr>
                                <th scope="row">1</th>
                                <td><?php echo $user['name']?></td>
                                <td><?php echo $user['email']?></td>
                                <td>
                                    <a class="btn btn-secondary" href="">View</a>
                                    <a class="btn btn-secondary" href="">Edit</a>
                                    <a class="btn btn-secondary" href="">Delete</a>
                                </td>
                                </tr>
                                <tr>
                            <?php endforeach ?>
                        
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html> -->
