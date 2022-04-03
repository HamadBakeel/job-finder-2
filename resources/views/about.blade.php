<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Who are we</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
  </head>
  <body>
    <!-- ========== Nav Bar =========== -->

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
            <a class="nav-link active" aria-current="page" href="index.blade.php">Home</a>
            <a class="nav-link" href="about.blade.php">About us</a>
            <a class="nav-link" href="contact_us.blade.php">Contact</a>
            <a href="job_offers.blade.php" class="nav-link">Find a Job</a>
            <a href="services.blade.php" class="nav-link">Services</a>
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
        <a href="login_register.blade.php"
        style="position: absolute;
                 right: 55px;
          text-decoration: none"

          class="text-secondary nav-button-link"
          >Sign In</a
        >
        </div>



      </div>
      </div>
    </nav>

    <div class="container" style="margin-top: 60px">
      <div class="col-12">
        <h2 class="text-center fs-2 fw-bolder mb-4">About Us</h2>
      </div>
      <div class="col-12 mb-5">
        <p class="text-secondary text-center">
          Job finder is the #1 job site in the world1 with over 250 million
          unique visitors every month. Job finder strives to put job seekers
          first, giving them free access to search for jobs, post resumes, and
          research companies. Every day, we connect millions of people to new
          opportunities.
        </p>
      </div>
      <div class="row d-flex justify-content-between mt-5">
        <div class="col-lg-2 mb-3 col-12">
          <h2 class="fs-1 text-center text-primary fw-bolder">250M</h2>
          <p class="text-center text-secondary">unique monthly visitors</p>
        </div>
        <div class="col-lg-2 mb-3 col-12">
          <h2 class="fs-1 text-center text-primary fw-bolder">175M</h2>
          <p class="text-center text-secondary">resumes</p>
        </div>
        <div class="col-lg-2 mb-3 col-12">
          <h2 class="fs-1 text-center text-primary fw-bolder">320M</h2>
          <p class="text-center text-secondary">total ratings and reviews</p>
        </div>
        <div class="col-lg-2 mb-3 col-12">
          <h2 class="fs-1 text-center text-primary fw-bolder">10</h2>
          <p class="text-center text-secondary">
            Job added per seconds globally
          </p>
        </div>
        <div class="col-lg-2 mb-3 col-12">
          <h2 class="fs-1 text-center text-primary fw-bolder">750M</h2>
          <p class="text-center text-secondary">salaries</p>
        </div>
      </div>

      <hr style="margin-block: 10vh;" />

      <div class="col-12">
        <h2 class="text-center fs-2 fw-bolder mb-4">Our People</h2>
      </div>
      <div class="col-12 mb-5">
        <p class="text-secondary text-center">
          At Job finder Indeed, our mission is to help people get jobs. We have
          more than 10,000 global employees passionately pursuing this purpose
          and improving the recruitment journey through real stories and data.
          We foster a collaborative workplace that strives to create the best
          experience for job seekers.
        </p>
      </div>
      <div class="col mt-3 mb-5 mx-5 d-flex flex-column flex-sm-row   justify-content-evenly">
          <button class="btn btn-primary rounded-pill mb-sm-0 mb-3 px-4" >Work for Job Finder</button>
          <button class="btn btn-primary rounded-pill px-4" >Leadership</button>
      </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>
