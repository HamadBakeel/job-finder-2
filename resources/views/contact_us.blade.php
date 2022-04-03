<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/main.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">


  </head>
  <body style="background-color: #f2f2f2;">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
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

    <div class="container-contact100">
      <div class="wrap-contact100">
        <form class="contact100-form validate-form">
          <span class="contact100-form-title">
            Send Us A Message
          </span>

          <label class="label-input100" for="first-name">Tell us your name *</label>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
            <input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
            <input class="input100" type="text" name="last-name" placeholder="Last name">
            <span class="focus-input100"></span>
          </div>

          <label class="label-input100" for="email">Enter your email *</label>
          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
            <span class="focus-input100"></span>
          </div>

          <label class="label-input100" for="phone">Enter phone number</label>
          <div class="wrap-input100">
            <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
            <span class="focus-input100"></span>
          </div>

          <label class="label-input100" for="message">Message *</label>
          <div class="wrap-input100 validate-input" data-validate = "Message is required">
            <textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
            <span class="focus-input100"></span>
          </div>

          <div class="container-contact100-form-btn">
            <button class="contact100-form-btn">
              Send Message
            </button>
          </div>
        </form>

        <div class="contact100-more flex-col-c-m" style="background-image: url('assets/images/bg-01.jpg');">
          <div class="flex-w size1 p-b-47">
            <div class="txt1 p-r-25">
              <span class="lnr lnr-map-marker"></span>
            </div>

            <div class="flex-col size2">
              <span class="txt1 p-b-20">
                Address
              </span>

              <span class="txt2">
                Mada Center 8th floor, 379 Hudson St, New York, NY 10018 US
              </span>
            </div>
          </div>

          <div class="dis-flex size1 p-b-47">
            <div class="txt1 p-r-25">
              <span class="lnr lnr-phone-handset"></span>
            </div>

            <div class="flex-col size2">
              <span class="txt1 p-b-20">
                Lets Talk
              </span>

              <span class="txt3">
                +1 800 1236879
              </span>
            </div>
          </div>

          <div class="dis-flex size1 p-b-47">
            <div class="txt1 p-r-25">
              <span class="lnr lnr-envelope"></span>
            </div>

            <div class="flex-col size2">
              <span class="txt1 p-b-20">
                General Support
              </span>

              <span class="txt3">
                contact@example.com
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div id="dropDownSelect1"></div>


    <!-- <h2 class="text-center mt-5">Contact us</h2>
    <form class="row g-3 m-5">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" />
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4" />
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input
          type="text"
          class="form-control"
          id="inputAddress"
          placeholder="1234 Main St"
        />
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input
          type="text"
          class="form-control"
          id="inputAddress2"
          placeholder="Apartment, studio, or floor"
        />
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity" />
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" class="form-select">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="inputZip" />
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck" />
          <label class="form-check-label" for="gridCheck"> Check me out </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-outline-info">Sign in</button>
      </div>
    </form> -->

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jQuery.min.js"></script>
  </body>
</html>
