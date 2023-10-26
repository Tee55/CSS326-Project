<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    
    <?php include_once("navbar.php"); ?>
</head>

<body>
    <main class="container-fluid">
        <div class="row">

            <div id="content" class="col p-3">
                <div class="card">
                    <div class="card-header">
                        Add User
                    </div>
                    <div class="card-body">
                        <form id="add_user_form" class="row">
                            <div class="col-6 mb-3">
                                <label for="title" class="form-label">Title</label>
                                <select class="form-select" aria-label="title">
                                    <option selected>Mr.</option>
                                    <option value="1">Mrs.</option>
                                    <option value="2">Ms.</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fname">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="phone_num" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone_num">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select" aria-label="role">
                                    <option selected>Admin</option>
                                    <option value="1">Customers</option>
                                    <option value="2">Mechanics</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="pass" class="form-label">Password</label>
                                <input type="password" class="form-control" id="pass">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="con_pass" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="con_pass">
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