<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>

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
        <h2 id="page_name">Add Rent Information</h2>
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
    <main class="container-fluid ">
        <div class="row">
            <?php include_once("sidebar.php"); ?>
            
            <div id="content" class="col p-3">
                <div class="card">
                    <div class="card-header">
                        Add Rent Information
                    </div>
                    <div class="card-body">
                        <form id="add_user_form" class="row">
                            <div class="col-12 mb-3">
                                <label for="station_id" class="form-label">Station ID</label>
                                <select class="form-select" aria-label="station_id">
                                    <option selected>001</option>
                                    <option value="1">002</option>
                                    <option value="2">003</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="rent_date" class="form-label">Rent Date</label>
                                <input type="date" class="form-control" id="rent_date">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="rent_start_time" class="form-label">Rent's start time</label>
                                <input type="time" class="form-control" id="rent_start_time">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="rent_finish_time" class="form-label">Rent's finish time</label>
                                <input type="time" class="form-control" id="rent_finish_time">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="shoes_id" class="form-label">Shoes ID</label>
                                <select class="form-select" aria-label="shoes_id">
                                    <option selected>001</option>
                                    <option value="1">002</option>
                                    <option value="2">003</option>
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