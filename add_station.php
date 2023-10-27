<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>

    <?php include_once("navbar.php"); ?>
</head>

<body>
    <main class="container-fluid ">
        <div class="row">
            <?php include_once("sidebar.php"); ?>

            <div id="content" class="col p-3">
                <div class="card">
                    <div class="card-header">
                        Add Station Information
                    </div>
                    <div class="card-body">
                        <form id="add_user_form" class="row">
                            <div class="col-12 mb-3">
                                <label for="station_name" class="form-label">Station Name</label>
                                <input type="text" class="form-control" id="station_name">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="station_address" class="form-label">Station Address</label>
                                <input type="text" class="form-control" id="station_address">
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