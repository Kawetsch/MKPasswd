<!--Navbar -->
<nav class="mb-1 navbar fixed-top navbar-expand-lg navbar-dark primary-color">
    <a class="navbar-brand" href="/">KMPasswd</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">

        <?php if (isset($_SESSION['username'])) {
            echo "<ul class='navbar-nav mr-auto'>
            <li class='nav-item active'>
                <a class='nav-link' href='/'>Passwords
                </a>
            </li>
            
        </ul>";
        } ?>


        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <a href="https://tradebyte.com/impressum" target="_blank"
                   class="nav-link waves-effect waves-light">Imprint
                </a>
            </li>
            <li class="nav-item">
                <a href="https://tradebyte.com/datenschutz" target="_blank"
                   class="nav-link waves-effect waves-light">data policy
                </a>
            </li>
            <li class="nav-item">
                <a href="https://github.com/Kawetsch/MKPasswd" target="_blank"
                   class="nav-link waves-effect waves-light">
                    <i class="fab fa-github"></i>
                </a>
            </li>

            <?php if (isset($_SESSION['username'])) {
                echo "<li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                   aria-expanded=\"false\">
                    <i class=\"fas fa-user\"></i>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right dropdown-default\" aria-labelledby=\"navbarDropdownMenuLink-333\">
                    <a class=\"dropdown-item\" href=\"/addUser.php\">Add User</a>
                    <a class=\"dropdown-item\" href=\"/logout.php\">Logout</a>
                </div>
            </li>";
            } ?>

        </ul>
    </div>
</nav>
<!--/.Navbar -->