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

    .btn-outline-success {
        background-color: #FAFB63 !important;
    }

    .active {
        color: black !important;
    }

    .btn:hover,
    .btn:active,
    .btn:visited {
        color: gray !important;
    }
</style>

<div id="navbar_menu" class="col-2 p-3 collapse show navbar-custom">
    <div class="d-flex flex-column px-3 pt-2 min-vh-100">
        <ul class="nav nav-pills flex-column navbar-text">
            <?php if (isset($_SESSION['isLogin']) && $_SESSION['isLogin']) {

                echo '
                <li class="nav-item">
                    <a class="nav-link" href="./home.php"><i class="fa fa-fw fa-home"></i> Home</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="./user.php"><i class="fa fa-fw fa-user"></i> User List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./rent.php"><i class="fa fa-fw fa-key"></i> Rent Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./mechanics.php"><i class="fa fa-fw fa-wrench"></i> Mechanics List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./shoes.php"><i class="fa-solid fa-shoe-prints"></i> Shoes List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./station.php"><i class="fa-solid fa-charging-station"></i> Stations List</a>
                </li>
                <hr style="color:black">
                <li class="nav-item">
                    <a href="./logout.php">
                        <button class="btn btn-outline-success" style="color:black" type="submit">Logout
                        </button>
                    </a>
                </li>';
            }
            ?>
        </ul>

    </div>
</div>

<script>
    $(document).ready(function() {
        document.querySelectorAll(".nav-link").forEach((link) => {
            if (link.href === window.location.href) {
                link.classList.add("active");
                link.setAttribute("aria-current", "page");
            }
        });
    });
</script>