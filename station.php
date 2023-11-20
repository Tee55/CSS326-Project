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
    </nav>
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
                        <h3>Stations List</h3>
                        <a href="./add_station.php"><button class="btn btn-outline-success" style="color:black" type="submit">Add station</button></a>
                    </div>
                    <div class="card-body">
                        <table id="station_table" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Station ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $q = "SELECT * from stations";
                                $result = $mysqli->query($q);
                                if (!$result) {
                                    echo 'Query error: ' . $mysqli->error;
                                }
                                while ($row = $result->fetch_array()) {
                                ?>
                                    <tr>
                                        <td><?php echo "" . $row['Station_ID'] ?></td>
                                        <td><?php echo "" . $row['Station_Name'] ?></td>
                                        <td><?php echo "" . $row['Station_Address'] ?></td>
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
        $('#station_table').DataTable();
    });
</script>

</html>