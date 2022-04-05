@extends('layouts.navbar')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
     integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .hero-text p:first-child{
        font-size: 4rem;
        font-weight: bold;
        color: #50bbd4;
        margin-bottom: 0;
      }
      .hero-text p:nth-child(2){
        font-size: 2rem;
      }
      .hero-img{
        width: 100%;
        display: flex;
        flex-direction: row-reverse;
      }
      .hero-img img{
        width: 400px;
        /* max-width: 100%; */
        border-radius:5%;
        margin-inline-end: 10%;
      }
      .ads-container{
        position: relative;

      }
      .ads{
        display: flex;
        gap: 15px;
        scroll-behavior: smooth;
        height: 32vh !important;
        width: fit-content;
        margin-inline-start: 4rem;
      }
      .ads-container::-webkit-scrollbar{
        visibility: hidden;
      }
      .card1{
        /* width: 50%; */
        width: 500px;
      }.card1 img{
        height: 32vh !important;
      }
      .card2{
        max-height: 100%;
        width: 250px;
      }
      .card2 img{
        height: 80px !important;
        object-fit: cover;
      }
      .card2 p{
        margin-bottom: 0;
        font-size: .9rem;
      }
      .left-button, .right-button{
        box-shadow: 0 0 7px -1px grey;
        width: 3rem;
        height: 3rem;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        position: absolute;
        z-index: 3;
        background-color: white;
        top:135px;
      }
      .left-button{
        left: 15px;

      }
      .right-button{
        /* position: fixed; */
        right: 10px;
      }

    </style>
  </head>
  <body>
    <!-- ========== Nav Bar =========== -->
    <svg style="position: absolute; z-index: -11;" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'><rect fill='#ffffff' width='1600' height='900'/><defs><linearGradient id='a' x1='0' x2='0' y1='1' y2='0' gradientTransform='rotate(0,0.5,0.5)'><stop  offset='0' stop-color='#0FF'/><stop  offset='1' stop-color='#CF6'/></linearGradient><linearGradient id='b' x1='0' x2='0' y1='0' y2='1' gradientTransform='rotate(0,0.5,0.5)'><stop  offset='0' stop-color='#F00'/><stop  offset='1' stop-color='#FC0'/></linearGradient></defs><g fill='#FFF' fill-opacity='0' stroke-miterlimit='10'><g  stroke='url(#a)' stroke-width='9.569999999999999'><path  transform='translate(-88.55 18) rotate(10.65 1409 581) scale(1.0364119999999999)' d='M1409 581 1450.35 511 1490 581z'/><circle  stroke-width='3.19' transform='translate(-59 53) rotate(13.899999999999999 800 450) scale(1.0229499999999998)' cx='500' cy='100' r='40'/><path  transform='translate(41.300000000000004 -141) rotate(137 401 736) scale(1.0229499999999998)' d='M400.86 735.5h-83.73c0-23.12 18.74-41.87 41.87-41.87S400.86 712.38 400.86 735.5z'/></g><g stroke='url(#b)' stroke-width='2.9'><path  transform='translate(318 -17.200000000000003) rotate(4.300000000000001 150 345) scale(0.954804)' d='M149.8 345.2 118.4 389.8 149.8 434.4 181.2 389.8z'/><rect  stroke-width='6.38' transform='translate(-190 -134.5) rotate(162 1089 759)' x='1039' y='709' width='100' height='100'/><path  transform='translate(-295.6 96.4) rotate(27 1400 132) scale(0.98)' d='M1426.8 132.4 1405.7 168.8 1363.7 168.8 1342.7 132.4 1363.7 96 1405.7 96z'/></g></g></svg>


    <!-- ============ hero section ============= -->
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="hero-img">
          <img src="assets/images/work1.jfif" alt="">
        </div>
        <div class="col-6">
          <div class="hero-text">
            <p>Job Finder</p>
            <p>Basically Finds a Job For You</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== ads section ============= -->
    <div class="container-fluid ads-container my-5" style="overflow-x: auto;">
      <div class="left-button ">
        <img src="assets/images/svg/rightArrowBlack.svg" alt="">
      </div>
      <div class="right-button ">
        <img src="assets/images/svg/rightArrowBlack.svg" alt="">
      </div>
      <div class="ads my-5">
        <div class="card bg-dark text-white card1 ">
          <img src="assets/images/work1.jfif" class="card-img" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">Last updated 3 mins ago</p>
          </div>
        </div>
        <div class="card card2 card1 ">
          <img src="assets/images/work3.jfif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card bg-dark text-white card1">
          <img src="assets/images/work2.jfif" class="card-img" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">Last updated 3 mins ago</p>
          </div>
        </div>
        <div class="card card2 card1 ">
          <img src="assets/images/work4.jfif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>




    <!-- =========== carousel ============ -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner mb-5">
        <div class="carousel-item active ">
          <img src="assets/images/job-offer2.jfif" class="m-auto d-block w-50" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/images/job-offer3.jfif" class="m-auto d-block w-50" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/images/job-offer4.jfif" class="m-auto d-block w-50" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/images/job-offer6.jfif" class="m-auto d-block w-50" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>



    <!-- <div class="container-fluid mt-2 p-0">
      <div
        id="carouselExampleFade"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner mr-2 mb-5">
          <div class="carousel-item d-flex justify-content-center active">
            <img
              src="assets/images/job-offer2.jfif"
              class="d-block w-75"
              alt="..."
            />
          </div>
          <div class="carousel-item d-flex justify-content-center">
            <img
              src="assets/images/job-offer3.jfif"
              class="d-block w-75"
              alt="..."
            />
          </div>
          <div class="carousel-item d-flex justify-content-center">
            <img
              src="assets/images/job-offer4.jfif"
              class="d-block w-75"
              alt="..."
            />
          </div>
          <div class="carousel-item d-flex justify-content-center">
            <img
              src="assets/images/job-offer6.jfif"
              class="d-block w-75"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleFade"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon "  aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleFade"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div> -->

   <!-- <div class="container-fluid mt-4"> -->
      <!-- <div class="row justify-content-between">
        <div class="row justify-content-center col-8 my-5">
          <div class="col-12">
            <p class="h2 text-center">Recent Job Offers</p>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4">
            <div class="card">
              <img
                src="assets/images/job-offer1.webp"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>

                <a href="#" class="btn btn-outline-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4">
            <div class="card">
              <img
                src="assets/images/job-offer2.jfif"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>

                <a href="#" class="btn btn-outline-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4">
            <div class="card">
              <img
                src="assets/images/job-offer3.jfif"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>

                <a href="#" class="btn btn-outline-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4">
            <div class="card">
              <img
                src="assets/images/job-offer4.jfif"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>

                <a href="#" class="btn btn-outline-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4">
            <div class="card">
              <img
                src="assets/images/job-offer5.jfif"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>

                <a href="#" class="btn btn-outline-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4">
            <div class="card">
              <img
                src="assets/images/job-offer6.jfif"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>

                <a href="#" class="btn btn-outline-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div> -->

        <!-- <div class="col-3 my-5 border">
          <div class="col-12">
            <p class="h2 mx-5">Ads</p>
          </div>
          <div class="col-sm-12 col-md-10 mx-auto">
            <div class="card">
              <img
                src="assets/images/job-offer6.jfif"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>

                <a href="#" class="btn btn-outline-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-10 mx-auto mt-3">
            <div class="card">
              <img
                src="assets/images/job-offer6.jfif"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>

                <a href="#" class="btn btn-outline-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div> -->
        <!-- <div class="row">
          <div class="col-6">
            <div class="card bg-dark text-white">
              <img src="assets/images/job-offer3.jfif" class="card-img opacity-50" alt="...">
              <div class="card-img-overlay ">
                <h5 class="card-title ">Card title</h5>
                <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text ">Last updated 3 mins ago</p>
              </div>
            </div>
          </div>
        </div>
    </div>
      <div class="container">
        <div class="row">
          <p class="h2 text-center text-info fw-bold border-bottom my-5">
            Our Parteners
          </p>
        </div>
      </div>
    </div> -->


  </body>
</html>
@endsection
