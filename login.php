<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <?php include_once("navbar.php"); ?>
</head>

<body>
    <main class="container-fluid">
        <div class="row">
            <!--
            <div id="sidebar" class="col-2 p-3">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./user.html">User List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rent Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mechanics List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shoes List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Stations List</a>
                    </li>
                </ul>
                <hr>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <button class="btn btn-outline-success" type="submit">Logout</button>
                    </li>
                </ul>
            </div>
            -->
            <div id="content" class="col p-3">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form id="login_form">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Password</label>
                                <input type="password" class="form-control" id="pass">
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