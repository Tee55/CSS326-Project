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

    .center {
        text-align: center;
        color: black;
        font-size: 90px;
    }
</style>
<nav class="navbar navbar-expand-sm navbar-custom">
    <div class="container-fluid text-center navbar-text">
        <a class="navbar-brand" href="#">
            <img src="image/logo.png" class="rounded" width="50">
        </a>
        <h2 id="page_name">Fast Forward Administrator System</h2>
        <ul class="navbar-nav">
            <li class="nav-item">

                <?php if (isset($_SESSION['isLogin']) && $_SESSION['isLogin']) {
                    echo '<i class="fa-solid fa-user"></i>
                <span id="username">';
                }
                ?>
                <?php echo $_SESSION['username']; ?>
                </span>
            </li>
        </ul>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_menu" aria-controls="navbar_menu" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>