@extends('layouts.navbar')
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
      @section('content')
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
    @endsection
  </body>
</html>
