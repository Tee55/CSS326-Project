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
                        Add Rent Information
                    </div>
                    <div class="card-body">
                        <form id="add_user_form" class="row">
                            <div class="col-12 mb-3">
                                <label for="model" class="form-label">Model</label>
                                <input type="text" class="form-control" id="model">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="received_date" class="form-label">Received Date</label>
                                <input type="time" class="form-control" id="received_date">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="station_id" class="form-label">Station ID</label>
                                <select class="form-select" aria-label="station_id">
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