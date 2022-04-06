@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <style>

      body {
        background: #e5e5e5;
        /* background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%); */
        color: black;
        font-family: "Rubik", sans-serif !important;
      }

      /* .container {
        display: flex;
        height: 100%;
        align-items: center;
        justify-content: center;
      } */

      .form-signin {
        background: white;
        /* background-color: #c2e9fb; */
        padding: 50px 20px;
        /* min-width: 400px; */
        /* max-width: 100%; */
        /* min-height: 620px; */
      }

      .logo {
        width: 200px;
      }
      .one-line {
        display: flex;
      }

      .forgot {
        margin-left: auto;
      }

      @media only screen and (max-width: 576px) {
        .form-signin {
          /* min-width: 360px; */
          flex-wrap: wrap;
          padding: 50px 20px;
        }
      }

      /* not active */
      .nav-pills .pill-1 .nav-link:not(.active) {
        border: none;
        color: #6c757d !important;
        font-weight: 700;
        width: 0%;
        transition: width 0.4s;
      }

      .nav-pills .pill-2 .nav-link:not(.active) {
        border: none;
        color: #6c757d !important;
        font-weight: 700;
        width: 0%;
        transition: width 0.4s;
      }

      /* active (faded) */
      .nav-pills .pill-1 .nav-link {
        background: white !important;
        border-bottom: 2px solid #007bff;
        color: #212529 !important;
        font-size: 1.5rem;
        font-weight: 700;
      }

      .nav-pills .pill-2 .nav-link {
        background: white !important;
        border-bottom: 2px solid #007bff;
        color: #212529 !important;
        font-size: 1.5rem;
        font-weight: 700;
      }

      .nav-pills .pill-1 .nav-link:hover {
        color: #212529 !important;
        width: 100%;
        border-bottom: 2px solid #007bff;
      }
      .nav-pills .pill-2 .nav-link:hover {
        color: #212529 !important;
        width: 100%;
        border-bottom: 2px solid #007bff;
      }

      .nav {
        padding: 0 15px !important;
      }

      @media (min-width: 786px) {
          .container{
              width: 60% !important;
          }

      }
    </style>
  </head>
  <body>
    @section('content')
    <div class="container w-lg-50  my-5">
      <form class="form-signin rounded shadow">
        <div class="mx-auto" style="width: 200px">
          <img class="mb-4 logo" src="assets/images/logo.jfif" alt="" />
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-pills mb-4">
          <li class="nav-item pill-1">
            <a
              class="nav-link active link1 rounded-0"
              data-toggle="tab"
              href="#login"
              >Login</a
            >
          </li>
          <li class="nav-item pill-2">
            <a
              class="nav-link rounded-0 link2"
              data-toggle="tab"
              href="#register"
              >Register</a
            >
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Tab1 -->
          <div id="login" class=" tab-pane tab1 active">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input
              type="email"
              id="inputEmail"
              class="form-control mb-4"
              placeholder="Email address"
              required
              autofocus
            />
            <label for="inputPassword" class="sr-only">Password</label>
            <input
              type="password"
              id="inputPassword"
              class="form-control mb-4"
              placeholder="Password"
              required
            />
            <div class="one-line mb-2">
              <div class="checkbox">
                <label>
                  <input
                    type="checkbox"
                    checked="checked"
                    value="remember-me"
                  />
                  Remember me
                </label>
              </div>
              <a class="forgot" href="#">Forgot password?</a>
            </div>

            <button class="btn btn-lg btn-dark btn-block loginButton" type="submit">
              Login
            </button>
          </div>

          <!-- Tab2 -->
          <div id="register" class=" p-md-4 tab-pane tab2 ">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input
              type="email"
              id="inputEmail"
              class="form-control mb-4"
              placeholder="Email address"
              required
              autofocus
            />
            <label for="inputPassword" class="sr-only">Password</label>
            <input
              type="password"
              id="inputPassword"
              class="form-control mb-4"
              placeholder="Password"
              required
            />
            <label for="inputPassword" class="sr-only">Password</label>
            <input
              type="password"
              id="inputPassword"
              class="form-control mb-4"
              placeholder="Repeat Password"
              required
            />

            <!-- <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="Register-as-instructor" />
                Register as instructor
              </label>
            </div> -->
            <button class="btn btn-lg btn-dark btn-block" type="submit">
              Register
            </button>
          </div>
        </div>
      </form>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jQuery.min.js"></script>
      <script>
        $(".pill-1").click(function () {
          $(".tab2").removeClass("active");
          $(".tab1").addClass("active");
        });
        $(".pill-2").click(function () {
          $(".tab2").addClass("active");
          $(".tab1").removeClass("active");
        });
        $(".link1").click(function () {
          $(".link1").addClass("active");
          $(".link2").removeClass("active");
        });
        $(".link2").click(function () {
          $(".link2").addClass("active");
          $(".link1").removeClass("active");
        });

        $('.loginButton').click(function(){
          location.href = "dashboard.html";
        })
      </script>
    </div>
    @endsection
  </body>
</html>
