<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" type="text/javascript"></script>

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
                $title = $_POST['title'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $phone_num = $_POST['phone_num'];
                $role = $_POST['role'];
                $pass = $_POST['pass'];
                $userid = $_SESSION['userid'];

                $q = "UPDATE users SET User_Title='$title', User_Fname='$fname', User_Lname='$lname', User_Email='$email', User_Phone_Number='$phone_num', User_Role='$role', User_Password='$pass' WHERE User_ID = $userid";
                $result = $mysqli->query($q);

                if (!$result) {
                    echo 'Query error: ' . $mysqli->error;
                } else {
                    header('Location: user.php');
                }

                $mysqli->close();
            } else if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $_SESSION['userid'] = $_GET['userid'];
                $userid = $_SESSION['userid'];
				$q = "SELECT * FROM users WHERE User_ID = $userid";
				$result = $mysqli->query($q);
                $row = $result -> fetch_array();
            }
            ?>

            <div id="content" class="col p-3">
                <div class="card">
                    <div class="card-header">
                        Edit User
                    </div>
                    <div class="card-body">
                        <form action="edit_user.php" method="post" class="row">
                            <div class="col-4 mb-3">
                                <label for="title" class="form-label">Title</label>
                                <select class="form-select" aria-label="title" name="title">
                                    <option selected>Mr.</option>
                                    <option value="1">Mrs.</option>
                                    <option value="2">Ms.</option>
                                </select>

                            </div>
                            <div class="col-4 mb-3">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['User_Fname'];?>">
                            </div>
                            <div class="col-4 mb-3">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $row['User_Lname'];?>">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['User_Email'];?>">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="phone_num" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone_num" name="phone_num" value="<?php echo $row['User_Fname'];?>">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select" aria-label="role" id="role" name="role">
                                    <option value="Admin" <?php if ($row['User_Role'] == "Admin"){ echo 'selected';};?>>Admin</option>
                                    <option value="Customer" <?php if ($row['User_Role'] == "Customer"){ echo 'selected';};?>>Customer</option>
                                    <option value="Mechanic" <?php if ($row['User_Role'] == "Mechanic"){ echo 'selected';};?>>Mechanic</option>
                                </select>
                            </div>
                            <div id="station" class="col-12 mb-3 collapse hide">
                                <label for="station_id" class="form-label">Choose Responsible Station</label>
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

                            <div class="col-12 mb-3">
                                <label for="pass" class="form-label">Password</label>
                                <input type="password" class="form-control" id="pass" name="pass">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>
</body>

<script>
    $(document).ready(function() {

        var element = document.getElementById("station");
        if ($('#role').val() == "Mechanic") {
            element.classList.remove("hide");
            element.classList.add("show");
        }

        $('#role').on('change', function() {
            
            if ($(this).val() == "Mechanic") {
                element.classList.remove("hide");
                element.classList.add("show");
            } else {
                element.classList.remove("show");
                element.classList.add("hide");
            }
        });
    });
</script>

</html>