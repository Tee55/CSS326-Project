<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>

    <?php
    session_start();
    include_once("navbar.php");
    ?>
</head>

<body style="background-color:black;">
    <main class="container-fluid ">
        <div class="row">
            <?php
            include_once("sidebar.php");
            require_once('connect.php');

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $station_name = $_POST['station_name'];
                $station_address = $_POST['station_address'];

                $sql = "INSERT INTO stations(Station_Name,Station_Address) VALUES ('$station_name','$station_address')";

                if ($mysqli->query($sql) === TRUE) {
                    header('Location: station.php');
                } else {
                    echo "Error: " . $sql . "<br>" . $mysqli->error;
                }
                $mysqli->close();
            }
            ?>

            <div id="content" class="col p-3">
                <div class="card">
                    <div class="card-header">
                        Add Station Information
                    </div>
                    <div class="card-body">
                        <form action="create_station.php" method="post" id="add_user_form" class="row">
                            <div class="col-12 mb-3">
                                <label for="station_name" class="form-label">Station Name</label>
                                <input type="text" class="form-control" id="station_name" name="station_name">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="station_address" class="form-label">Station Address</label>
                                <input type="text" class="form-control" id="station_address" name="station_address">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>
</body>

</html>