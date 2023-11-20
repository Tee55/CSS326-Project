<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <?php
    session_start();
    include_once("navbar.php");
    ?>
</head>

<body style="background-color:black;">

    <?php
    require_once('connect.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST" and $_SESSION['isLogin'] != true) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $q = "SELECT * from users WHERE User_Email = '$email' and User_Password = '$pass' and User_Role = 'Admin';";
        $result = $mysqli->query($q);
        $row = $result->fetch_array();
        if ($result) {
            $user = $row[0];
            $_SESSION['isLogin'] = true;
            $_SESSION['username'] = $row['User_Fname'];
            $_SESSION['email'] = $row['User_Email'];
        } else {
            echo 'Query error: ' . $mysqli->error;
        }
    } else {
        $email = $_SESSION['email'];
        $q = "SELECT * from users WHERE User_Email = '$email';";
        $result = $mysqli->query($q);
        $row = $result->fetch_array();
    }
    ?>
    <main class="container-fluid">
        <div class="row">

            <?php
            include_once("sidebar.php");
            ?>

            <div id="content" class="col p-3">
                <div class="card">
                    <div class="center">
                        <h1>
                            Welcome!!! <?php echo $row['User_Title'], " ", $row['User_Fname'], " ", $row['User_Lname']; ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>