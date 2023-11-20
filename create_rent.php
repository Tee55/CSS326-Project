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
            require_once('../connect.php');
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $user_id = $_POST['user_id'];
                $rent_date = $_POST['rent_date'];
                $rent_start_time = $_POST['rent_start_time'];
                $rent_finish_time = $_POST['rent_finish_time'];
                $shoes_id = $_POST['shoes_id'];

                $sql = "INSERT INTO rent_info (User_ID,Rent_Date,Rent_Start_Time,Rent_Finish_Time,Shoes_ID ) VALUES ('$user_id', '$rent_date', '$rent_start_time', '$rent_finish_time', '$shoes_id')";

                if ($mysqli->query($sql) === TRUE) {
                    header('Location: rent.php');
                    exit;
                } else {
                    echo "Error: " . $sql . "<br>" . $mysqli->error;
                }

                $mysqli->close();
            }
            ?>

            <div id="content" class="col p-3">
                <div class="card">
                    <div class="card-header">
                        Add Rent Information
                    </div>
                    <div class="card-body">
                        <form action="create_rent.php" method="post" id="add_user_form" class="row">
                            <div class="col-12 mb-3">
                                <label for="shoes_id" class="form-label">Select Shoes</label>
                                <select class="form-select" aria-label="shoes_id" name="shoes_id">

                                    <?php
                                    $q = "SELECT * from shoes;";
                                    $result = $mysqli->query($q);
                                    if (!$result) {
                                        echo 'Query error: ' . $mysqli->error;
                                    }
                                    while ($row = $result->fetch_array()) {
                                    ?>
                                        <option value="<?php echo "" . $row['Shoes_ID'] ?>"><?php echo $row['Shoes_ID'], " ",  $row['Shoes_Model']?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="user_id" class="form-label">Select User</label>
                                <select class="form-select" aria-label="user_id" name="user_id">
                                <?php
                                    $q = "SELECT * from users;";
                                    $result = $mysqli->query($q);
                                    if (!$result) {
                                        echo 'Query error: ' . $mysqli->error;
                                    }
                                    while ($row = $result->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $row['User_ID'] ?>"><?php echo $row['User_ID'], " ", $row['User_Title'], " ", $row['User_Fname'], " ", $row['User_Lname'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="rent_date" class="form-label">Rent Date</label>
                                <input type="date" class="form-control" id="rent_date" name="rent_date">
                            </div>

                            <div class="col-6 mb-3">
                                <label for="rent_start_time" class="form-label">Rent's start time</label>
                                <input type="time" class="form-control" id="rent_start_time" name="rent_start_time">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="rent_finish_time" class="form-label">Rent's finish time</label>
                                <input type="time" class="form-control" id="rent_finish_time" name="rent_finish_time">
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