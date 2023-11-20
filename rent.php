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
            session_start();
            include_once("sidebar.php");
            require_once('connect.php');
            ?>
            <div id="content" class="col p-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3>Rent Information List</h3>
                        <a href="./add_rent.php"><button class="btn btn-outline-success" style="color:black" type="submit">Add rent</button></a>
                    </div>
                    <div class="card-body">
                        <table id="rent_table" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Rent ID</th>
                                    <th scope="col">Shoes ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone number</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Start Time</th>
                                    <th scope="col">Finish Time</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $q = "SELECT * from rent_info JOIN users ON users.User_ID = rent_info.User_ID";
                                $result = $mysqli->query($q);
                                if (!$result) {
                                    echo 'Query error: ' . $mysqli->error;
                                }
                                while ($row = $result->fetch_array()) {
                                ?>
                                    <tr>
                                        <td><?php echo "" . $row['Rent_ID'] ?></td>
                                        <td><?php echo "" . $row['Shoes_ID'] ?></td>
                                        <td><?php echo "" . $row['User_Title'], " ", $row['User_Fname'], " ", $row['User_Lname']; ?></td>
                                        <td><?php echo "" . $row['User_Email'] ?></td>
                                        <td><?php echo "" . $row['User_Phone_Number'] ?></td>
                                        <td><?php echo "" . $row['Rent_Date'] ?></td>
                                        <td><?php echo "" . $row['Rent_Start_Time'] ?></td>
                                        <td><?php echo "" . $row['Rent_Finish_Time'] ?></td>
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
        $('#rent_table').DataTable();
    });
</script>

</html>