@extends('layouts.navbar')

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

    @section('content')

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
@endsection
