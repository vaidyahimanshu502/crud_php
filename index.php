<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-shop</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of Clients</h2>
        <a href="/myshop/create.php" class="btn btn-primary" role="button">New Client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = '';
                    $database = "myshop";
                ?>
                <tr>
                    <td>10</td>
                    <td>Himanshu Vaidya</td>
                    <td>vaidya@gmail.com</td>
                    <td>8294013841</td>
                    <td>chatra, jharkhand</td>
                    <td>10/05/2023</td>
                    <td>
                        <a href="/myshop/edit.php" class="btn btn-primary btn-sm">Edit</a>
                        <a href="/myshop/delete.php" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>