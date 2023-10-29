<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of Clients</h2>
        <a href="/myshop/create.php" class="btn btn-primary">New Client</a>
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


                    // Create connection
                    $connection = new mysqli($servername, $username, $password, $database);

                    // Check connection
                    if($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }

                    $sql = "SELECT * FROM clients";
                    $result = $connection->query($sql);

                    // Checking result
                    if(!$result) {
                        die("Invalid query: " . $connection->error);
                    }

                    while($row = $result->fetch_assoc()) {
                        echo '
                        <tr>
                            <td>'. $row['id'] .'</td>
                            <td>'. $row['name'] .'</td>
                            <td>'. $row['email'] .'</td>
                            <td>'. $row['phone'] .'</td>
                            <td>'. $row['address'] .'</td>
                            <td>'. $row['created_at'] .'</td>
                            <td>
                                <a href="/myshop/edit.php?id='. $row['id'] .'" class="btn btn-primary btn-sm">Edit</a>
                                <a href="/myshop/delete.php?id='. $row['id'] .'" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                      </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>


