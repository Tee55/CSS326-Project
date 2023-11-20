<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <?php
    session_start();
    include_once("navbar.php");
    ?>
</head>

<body style="background-color:black;">

    <main class="container-fluid">
        <div class="row">
            <?php
            include_once("sidebar.php");
            require_once('connect.php');
            ?>

            <div id="content" class="col p-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3>Users List</h3>
                        <a href="create_user.php"><button class="btn btn-outline-success" style="color:black" type="submit">Add user</button></a>
                    </div>
                    <div class="card-body">
                        <table id="user_table" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">User ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone number</th>
                                    <th scope="col">Role</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $q = "SELECT * from users";
                                $result = $mysqli->query($q);
                                if (!$result) {
                                    echo 'Query error: ' . $mysqli->error;
                                }
                                while ($row = $result->fetch_array()) {
                                ?>

                                    <tr>
                                        <td><?php echo "" . $row['User_ID'] ?></td>
                                        <td><?php echo "" . $row['User_Title'], " ", $row['User_Fname'], " ", $row['User_Lname']; ?></td>
                                        <td><?php echo "" . $row['User_Email'] ?></td>
                                        <td><?php echo "" . $row['User_Phone_Number'] ?></td>
                                        <td><?php echo "" . $row['User_Role'] ?></td>
                                        <td><a type="button" class="btn btn-warning" href='edit_user.php?userid=<?echo "".$row['User_ID']?>'><i class="fa fa-edit"></i></a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </main>
</body>

<script>
    $(document).ready(function() {
        $('#user_table').DataTable();
    });
</script>

</html>