
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="#">
                <img
                    src="assets/images/logo.jfif"
                    alt=""
                    width="50"
                    height="35"
                    class="d-inline-block align-text-top rounded-pill"
                />
                Job Finder
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="position: relative;" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="../index.blade.php">Home</a>
                    <a class="nav-link" href="../about.blade.php">About us</a>
                    <a class="nav-link" href="../contact_us.blade.php">Contact</a>
                    <a href="../job_offers.blade.php" class="nav-link">Find a Job</a>
                    <a href="../services.blade.php" class="nav-link">Services</a>
                </div>
                <button
                    class="btn btn-outline-info px-4 me-4 fw-bold align-self-end rounded-pill nav-button-link"
                    style="position: absolute;
                 right: 90px;
          "
                    type="button"
                >
                    Post a Job
                </button>
                <a href="../login_register.blade.php"
                   style="position: absolute;
                 right: 55px;
          text-decoration: none"

                   class="text-secondary nav-button-link"
                >Sign In</a
                >
            </div>



        </div>
    </nav>

    @yield('content')

    <footer class="bg-dark text-light">
        <div class=" pt-5  footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xs-12 about-company">
                        <h2>Job Finder</h2>
                        <p class="pr-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
                        <p><a href="#"><i class="fab fa-facebook-square me-md-2"></i>
                            </a><a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </p>
                    </div>
                    <div class="col-lg-3 col-xs-12 links">
                        <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                        <ul class="m-0 p-0">
                            <li>- <a href="#">Lorem ipsum</a></li>
                            <li>- <a href="#">Nam mauris velit</a></li>
                            <li>- <a href="#">Etiam vitae mauris</a></li>
                            <li>- <a href="#">Fusce scelerisque</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-4 col-xs-12 location">
                        <h4 class="mt-lg-0 mt-sm-4">Location</h4>
                        <p>22, Lorem ipsum dolor, consectetur adipiscing</p>
                        <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
                        <p><i class="fa fa-envelope-o mr-3"></i>info@hsdf.com</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col copyright">
                        <p class=""><small class="text-white-50">© 2022. @hamadbakeel.</small></p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jQuery.min.js"></script>

