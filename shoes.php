<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Modify the background color */
         
        .navbar-custom {
            background-color: #35AAAF;
        }
        /* Modify brand and text color */
         
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            color: #FAFB63;
        }
    </style>
    <nav class="navbar navbar-expand-sm navbar-custom">
    <div class="container-fluid text-center navbar-text">
        <a class="navbar-brand" href="#">
            <img src="logo.png" class="rounded" width="50">
        </a>
        <h2 id="page_name">Shoes List</h2>
        <ul class="navbar-nav">
            <li class="nav-item">
                <img>
            </li>
            <li class="nav-item">
                <i class="fa-solid fa-user"></i>
                <span id="username">Teerapath</span>
            </li>
        </ul>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_menu" aria-controls="navbar_menu" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
</head>

<body style="background-color:black;">

    <main class="container-fluid">
        <div class="row">
        <?php include_once("sidebar.php"); ?>
            <div id="content" class="col p-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        Shoes List
                        <a href="./add_shoes.php"><button class="btn btn-outline-success" style="color:black" type="submit">Add shoes</button></a>
                    </div>
                    <div class="card-body">
                        <table id="shoes_table" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Received Date</th>
                                    <th scope="col">Station ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </main>
</body>

<script>

    $(document).ready( function () {
        $('#shoes_table').DataTable();
    } );

    
</script>

</html>