<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Services</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <style>
      .curved {
        position: relative;
        background: #2c3e50;
        background-image: linear-gradient(360deg, black, transparent);
        height: 40vh;
        border-bottom-left-radius: 50% 20%;
        border-bottom-right-radius: 50% 20%;
        overflow: hidden;
      }
      @media (max-width: 768px) {
        .curved {
          height: 35vh;
        }
      }
    </style>
  </head>
  <body>
    <!-- ========== Nav Bar =========== -->
    <section class="curved">
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

      <div class="container-fluid p-0">
        <div class="col" style="position: relative; z-index: 11">
          <h1 class="text-center text-light pt-5">Services</h1>
          <p class="text-center text-light mx-3">
            Job finder enables integration of the following Services
          </p>
        </div>
      </div>
    </section>

    <div class="container services mt-5">
      <div class="col">
        <div class="card mb-3 p-2" style="max-width: 540px">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="assets/images/svg/job-post.svg"
                class="img-fluid rounded-start"
                alt="..."
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col justify-content-end d-flex">
        <div class="card mb-3 mt-5 p-2" style="max-width: 540px">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="assets/images/svg/job-post.svg"
                class="img-fluid rounded-start"
                alt="..."
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3 mt-5 p-2" style="max-width: 540px">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="assets/images/svg/job-post.svg"
                class="img-fluid rounded-start"
                alt="..."
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col justify-content-end d-flex">
        <div class="card mb-3 mt-5 p-2" style="max-width: 540px">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="assets/images/svg/job-post.svg"
                class="img-fluid rounded-start"
                alt="..."
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>
