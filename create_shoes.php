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
                $model = $_POST['model'];
                $received_date = $_POST['received_date'];
                $station_id = $_POST['station_id'];

                $sql = "INSERT INTO shoes(Shoes_Model, Shoes_Received_Date, Shoes_Station) VALUES ('$model', '$received_date', '$station_id')";

                if ($mysqli->query($sql) === TRUE) {
                    header('Location: shoes.php');
                } else {
                    echo "Error: " . $sql . "<br>" . $mysqli->error;
                }

                $mysqli->close();
            }
            ?>

            <div id="content" class="col p-3">
                <div class="card">
                    <div class="card-header">
                        Add Shoes Information
                    </div>
                    <div class="card-body">
                        <form action="create_shoes.php" method="post" id="add_user_form" class="row">
                            <div class="col-12 mb-3">
                                <label for="model" class="form-label">Shoes Model</label>
                                <input type="text" class="form-control" id="model" name="model">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="received_date" class="form-label">Received Date</label>
                                <input type="date" class="form-control" id="received_date" name="received_date">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="station_id" class="form-label">Choose Station</label>
                                <select class="form-select" aria-label="station_id" name="station_id">

                                    <?php
                                    $q = "SELECT * from stations;";
                                    $result = $mysqli->query($q);
                                    if (!$result) {
                                        echo 'Query error: ' . $mysqli->error;
                                    }
                                    while ($row = $result->fetch_array()) {
                                    ?>
                                        <option value="<?php echo "" . $row['Station_ID'] ?>"><?php echo $row['Station_ID'], " ",  $row['Station_Name'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
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