@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job offres</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">
    <style>
      .input{
        position: relative;
      }
      .input::before{
        content: "What";
        position: absolute;
        color: black;
        top: 10px;
        left: 9px;
        font-weight: bold;
        font-size: .9rem;
        z-index: 2;
      }
      .input:last-of-type::before{
        font-size: .9rem;
        content: "Where";
      }
      .input input[type="text"]{
        padding-inline-start: 60px;
      }

      .job{
        border-radius: 10px;
        /* cursor: pointer; */
      }
      .job:focus{
        /* border-color: red; */
      }
      .jobSnippet{
        margin-top: 20px;
        padding-inline-start: 25px;
      }
      .jobSnippet li{
        font-size: .9rem;
        list-style-type: circle;
      }
      .date{
        font-size: .8rem;
      }
      .job .dropdown-toggle::after {
            content: none;
        }
        .dropdown-toggle:focus{
          box-shadow: none;
        }
        /* .jog .dropdown-toggle{
          position: relative;
          z-index: 11;
        } */

        @media (max-width: 992px) {
            .nav-button-link{
                position: static !important;
            }
        }
    </style>

<style>
  .grid {
    position: relative;
    top: 10%;
  }
  .item {
    display: block;
    position: absolute;
    width: 100px;
    height: 100px;
    margin: 5px;
    z-index: 1;
    background: #000;
    color: #fff;
  }
  .item.muuri-item-dragging {
    z-index: 3;
  }
  .item.muuri-item-releasing {
    z-index: 2;
  }
  .item.muuri-item-hidden {
    z-index: 0;
  }
  .item-content {
    position: relative;
    width: 100%;
    height: 100%;
  }
</style>
  </head>
  <body>
   @section('content')
      <div class="container-fluid">
        <div class="col d-flex m-5 justify-content-center">
          <div class="me-3 input">
            <input type="text" class="input form-control me-3  py-2 border-dark">
          </div>
          <div class="input me-3">
            <input type="text" class="input form-control me-3  py-2 border-dark">
          </div>
          <button class="btn btn-primary">search</button>
        </div>

        <div class="container-fluid filters d-flex flex-wrap justify-content-center border-bottom pb-5 " style="gap: 10px;">
          <select name="salary" id="salary">
            <option value="50kto60k">$50000 - $60000</option>
            <option value="60kto70k">$60000 - $70000</option>
            <option value="70kto80k">$70000 - $80000</option>
            <option value="80kto90k">$80000 - $90000</option>
            <option value="90kto100k">$90000 - $100000</option>
          </select>
          <select name="company" id="company">
            <option value="google">Google</option>
            <option value="microsoft">MicroSoft</option>
            <option value="amazon">Amazon</option>
            <option value="facebook">Facebook</option>
            <option value="apple">Apple</option>
          </select>
          <select name="type" id="type">
            <option value="all" disabled selected>Job Type</option>
            <option value="part-time">Part Time</option>
            <option value="full-time">Full Time</option>
            <option value="internship">Internship</option>
            <option value="remote">Remote</option>
          </select>
          <!-- <select name="city" id="salary">
            <option value="">$50000</option>
            <option value="60000">$60000</option>
            <option value="70000">$70000</option>
            <option value="80000">$80000</option>
            <option value="90000">$90000+</option>
          </select> -->

          <!-- <div class="dropdown">
            <button class="btn btn-outline-secondary text-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              remote
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-outline-secondary text-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Date Posted
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Last 24 Hours</a></li>
              <li><a class="dropdown-item" href="#">Last 3 days</a></li>
              <li><a class="dropdown-item" href="#">Last 7 days</a></li>
              <li><a class="dropdown-item" href="#">Last 14 days</a></li>
              <li><a class="dropdown-item" href="#">Since last visit</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-outline-secondary text-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Salaty Esitmate
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">$60,000+</a></li>
              <li><a class="dropdown-item" href="#">$70,000+</a></li>
              <li><a class="dropdown-item" href="#">$85,000+</a></li>
              <li><a class="dropdown-item" href="#">$90,000+</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-outline-secondary text-dark dropdown-toggle" type="button"
             id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Job Type
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Full Time</a></li>
              <li><a class="dropdown-item" href="#">Part Time</a></li>
              <li><a class="dropdown-item" href="#">Contract</a></li>
              <li><a class="dropdown-item" href="#">Temporary </a></li>
              <li><a class="dropdown-item" href="#">Internship </a></li>
            </ul>
          </div> -->

        </div>

      </div>
      <div class="container jobs-list">
        <!-- <div class="row pt-5 justify-content-center jobs-list"> -->
          <div class="col-xl-4 col-lg-6 pb-3 col-md-10 col-sm-12 pb-3  part-time">
            <div class="job border   p-2" style="position: relative;">
              <h5 class="mb-1">
                <img src="assets/images/svg/GoogleLogosvg.svg" width="25" alt="">
                Software Developer</h5>
              <div class="dropdown ">
                <button id="dropdownMenuButton" class="btn  dropdown-toggle"
                style=" position: absolute; right: -3px; top: -32px;"
                 type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img style="width: 15px;" src="assets/images/svg/kabab-menu-icon.png"  alt="">
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item d-flex align-items-center" style="font-size: .8rem;" href="#">
                    <i class=" me-2 far fs-5 py-2 fa-heart"></i>Save job</a>
                  </li>
                  <li><a class="dropdown-item d-flex align-items-center" style="font-size: .8rem;" href="#">
                    <i class=" me-2 fas fa-ban fs-5 py-2 "></i>Not interesed</a>
                  </li>
                  <li><a class="dropdown-item d-flex align-items-center" style="font-size: .8rem;" href="#">
                    <i class=" me-2 fas fs-5 py-2 fa-flag"></i>Report job</a>
                  </li>
                </ul>
              </div>
              <p class="company m-0">Boston Scientific Corporation <sapn class="rating fw-bold " style="font-size: 13px;">3.9 &#9733;</span></p>
                <p class="companyLocation m-0">Hybrid remote in Saint Paul, MN</p>
                <p class="type text-secondary mb-1 rounded fw-bold "
                  style="font-size: .9rem;background-color: #eee; width: fit-content; padding: 0 5px;">
                  <i class="fas fa-toolbox  pe-1"></i>Part-time
                </p>

                <p class="salary text-secondary mb-0 rounded fw-bold "
                  style="font-size: .9rem;background-color: #eee; width: fit-content; padding: 0 5px;">
                  <i class="fas pe-1  fa-money-bill"></i>$50000 - $60000
                </p>
                <ul class="jobSnippet">
                  <li class="text-secondary">We’re looking for an entry-level software engineer who will provide software testing and verification in support of R&D.</li>
                  <li class="text-secondary">0 -1 year of relevant work experience.</li>
                </ul>
                <div class="bottom d-flex justify-content-between ">
                  <p class="date text-secondary m-0">13 days ago</p>
                  <a href="" class="show-details btn p-0 fw-bolder w-full"
                      style="
                      width: 75%;
                      text-align: end;
                      font-size: .9rem;">Show details</a>
                </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 pb-3 col-md-10 col-sm-12 pb-3  full-time">
            <div class="job border   p-2" style="position: relative;">
              <h5 class="mb-1">
                <img src="assets/images/svg/Microsoft_logo.svg" width="25" alt="">
                UI/UX Designer</h5>
              <div class="dropdown ">
                <button id="dropdownMenuButton" class="btn  dropdown-toggle"
                style=" position: absolute; right: -3px; top: -32px;"
                 type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img style="width: 15px;" src="assets/images/svg/kabab-menu-icon.png"  alt="">
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item d-flex align-items-center" style="font-size: .8rem;" href="#">
                    <i class=" me-2 far fs-5 py-2 fa-heart"></i>Save job</a>
                  </li>
                  <li><a class="dropdown-item d-flex align-items-center" style="font-size: .8rem;" href="#">
                    <i class=" me-2 fas fa-ban fs-5 py-2 "></i>Not interesed</a>
                  </li>
                  <li><a class="dropdown-item d-flex align-items-center" style="font-size: .8rem;" href="#">
                    <i class=" me-2 fas fs-5 py-2 fa-flag"></i>Report job</a>
                  </li>
                </ul>
              </div>
              <p class="company m-0">Boston Scientific Corporation <sapn class="rating fw-bold " style="font-size: 13px;">3.9 &#9733;</span></p>
                <p class="companyLocation m-0">Hybrid remote in Saint Paul, MN</p>
                <p class="type text-secondary mb-1 rounded fw-bold "
                  style="font-size: .9rem;background-color: #eee; width: fit-content; padding: 0 5px;">
                  <i class="fas fa-toolbox  pe-1"></i>Full-time
                </p>

                <p class="salary text-secondary mb-0 rounded fw-bold "
                  style="font-size: .9rem;background-color: #eee; width: fit-content; padding: 0 5px;">
                  <i class="fas pe-1  fa-money-bill"></i>$50000 - $60000
                </p>
                <ul class="jobSnippet">
                  <li class="text-secondary">We’re looking for an entry-level software engineer who will provide software testing and verification in support of R&D.</li>
                  <li class="text-secondary">0 -1 year of relevant work experience.</li>
                </ul>
                <div class="bottom d-flex justify-content-between ">
                  <p class="date text-secondary m-0">13 days ago</p>
                  <a href="" class="show-details btn p-0 fw-bolder w-full"
                      style="
                      width: 75%;
                      text-align: end;
                      font-size: .9rem;">Show details</a>
                </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 pb-3 col-md-10 col-sm-12 pb-3  full-time">
            <div class="job border   p-2" style="position: relative;">
              <h5 class="mb-1">
                <img src="assets/images/svg/GoogleLogosvg.svg" width="25" alt="">
                Data Analyst</h5>
              <div class="dropdown ">
                <button id="dropdownMenuButton" class="btn  dropdown-toggle"
                style=" position: absolute; right: -3px; top: -32px;"
                 type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img style="width: 15px;" src="assets/images/svg/kabab-menu-icon.png"  alt="">
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item d-flex align-items-center" style="font-size: .8rem;" href="#">
                    <i class=" me-2 far fs-5 py-2 fa-heart"></i>Save job</a>
                  </li>
                  <li><a class="dropdown-item d-flex align-items-center" style="font-size: .8rem;" href="#">
                    <i class=" me-2 fas fa-ban fs-5 py-2 "></i>Not interesed</a>
                  </li>
                  <li><a class="dropdown-item d-flex align-items-center" style="font-size: .8rem;" href="#">
                    <i class=" me-2 fas fs-5 py-2 fa-flag"></i>Report job</a>
                  </li>
                </ul>
              </div>
              <p class="company m-0">Boston Scientific Corporation <sapn class="rating fw-bold " style="font-size: 13px;">3.9 &#9733;</span></p>
                <p class="companyLocation m-0">Hybrid remote in Saint Paul, MN</p>
                <p class="type text-secondary mb-1 rounded fw-bold "
                  style="font-size: .9rem;background-color: #eee; width: fit-content; padding: 0 5px;">
                  <i class="fas fa-toolbox  pe-1"></i>Full-time
                </p>

                <p class="salary text-secondary mb-0 rounded fw-bold "
                  style="font-size: .9rem;background-color: #eee; width: fit-content; padding: 0 5px;">
                  <i class="fas pe-1  fa-money-bill"></i>$50000 - $60000
                </p>
                <ul class="jobSnippet">
                  <li class="text-secondary">We’re looking for an entry-level software engineer who will provide software testing and verification in support of R&D.</li>
                  <li class="text-secondary">0 -1 year of relevant work experience.</li>
                </ul>
                <div class="bottom d-flex justify-content-between ">
                  <p class="date text-secondary m-0">13 days ago</p>
                  <a href="" class="show-details btn p-0 fw-bolder w-full"
                      style="
                      width: 75%;
                      text-align: end;
                      font-size: .9rem;">Show details</a>
                </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 pb-3 col-md-10 col-sm-12 pb-3  part-time">
            <div class="job border   p-2" style="position: relative;">
              <h5 class="mb-1">
                <img src="assets/images/svg/Amazon_logo.svg" width="25" alt="">
                Software Developer</h5>
              <div class="dropdown ">
                <button id="dropdownMenuButton" class="btn  dropdown-toggle"
                style=" position: absolute; right: -3px; top: -32px;"
                 type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img style="width: 15px;" src="assets/images/svg/kabab-menu-icon.png"  alt="">
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item d-flex align-items-center" style="font-size: .8rem;" href="#">
                    <i class=" me-2 far fs-5 py-2 fa-heart"></i>Save job</a>
                  </li>
                  <li><a class="dropdown-item d-flex align-items-center" style="font-size: .8rem;" href="#">
                    <i class=" me-2 fas fa-ban fs-5 py-2 "></i>Not interesed</a>
                  </li>
                  <li><a class="dropdown-item d-flex align-items-center" style="font-size: .8rem;" href="#">
                    <i class=" me-2 fas fs-5 py-2 fa-flag"></i>Report job</a>
                  </li>
                </ul>
              </div>
              <p class="company m-0">Boston Scientific Corporation <sapn class="rating fw-bold " style="font-size: 13px;">3.9 &#9733;</span></p>
                <p class="companyLocation m-0">Hybrid remote in Saint Paul, MN</p>
                <p class="type text-secondary mb-1 rounded fw-bold "
                  style="font-size: .9rem;background-color: #eee; width: fit-content; padding: 0 5px;">
                  <i class="fas fa-toolbox  pe-1"></i>Part-time
                </p>

                <p class="salary text-secondary mb-0 rounded fw-bold "
                  style="font-size: .9rem;background-color: #eee; width: fit-content; padding: 0 5px;">
                  <i class="fas pe-1  fa-money-bill"></i>$50000 - $60000
                </p>
                <ul class="jobSnippet">
                  <li class="text-secondary">We’re looking for an entry-level software engineer who will provide software testing and verification in support of R&D.</li>
                  <li class="text-secondary">0 -1 year of relevant work experience.</li>
                </ul>
                <div class="bottom d-flex justify-content-between ">
                  <p class="date text-secondary m-0">13 days ago</p>
                  <a href="" class="show-details btn p-0 fw-bolder w-full"
                      style="
                      width: 75%;
                      text-align: end;
                      font-size: .9rem;">Show details</a>
                </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 pb-3 col-md-10 col-sm-12 pb-3  part-time">
            <div class="job border   p-2" style="position: relative;">
              <h5 class="mb-1">
                <img src="assets/images/svg/Apple_logo_black.svg" width="25" alt="">
                Software Developer</h5>
              <div class="dropdown ">
                <button id="dropdownMenuButton" class="btn  dropdown-toggle"
                style=" position: absolute; right: -3px; top: -32px;"
                 type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img style="width: 15px;" src="assets/images/svg/kabab-menu-icon.png"  alt="">
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item d-flex align-items-center" style="font-size: .8rem;" href="#">
                    <i class=" me-2 far fs-5 py-2 fa-heart"></i>Save job</a>
                  </li>
                  <li><a class="dropdown-item d-flex align-items-center" style="font-size: .8rem;" href="#">
                    <i class=" me-2 fas fa-ban fs-5 py-2 "></i>Not interesed</a>
                  </li>
                  <li><a class="dropdown-item d-flex align-items-center" style="font-size: .8rem;" href="#">
                    <i class=" me-2 fas fs-5 py-2 fa-flag"></i>Report job</a>
                  </li>
                </ul>
              </div>
              <p class="company m-0">Boston Scientific Corporation <sapn class="rating fw-bold " style="font-size: 13px;">3.9 &#9733;</span></p>
                <p class="companyLocation m-0">Hybrid remote in Saint Paul, MN</p>
                <p class="type text-secondary mb-1 rounded fw-bold "
                  style="font-size: .9rem;background-color: #eee; width: fit-content; padding: 0 5px;">
                  <i class="fas fa-toolbox  pe-1"></i>Part-time
                </p>

                <p class="salary text-secondary mb-0 rounded fw-bold "
                  style="font-size: .9rem;background-color: #eee; width: fit-content; padding: 0 5px;">
                  <i class="fas pe-1  fa-money-bill"></i>$50000 - $60000
                </p>
                <ul class="jobSnippet">
                  <li class="text-secondary">We’re looking for an entry-level software engineer who will provide software testing and verification in support of R&D.</li>
                  <li class="text-secondary">0 -1 year of relevant work experience.</li>
                </ul>
                <div class="bottom d-flex justify-content-between ">
                  <p class="date text-secondary m-0">13 days ago</p>
                  <a href="" class="show-details btn p-0 fw-bolder w-full"
                      style="
                      width: 75%;
                      text-align: end;
                      font-size: .9rem;">Show details</a>
                </div>
            </div>
          </div>

      </div>

  </body>
  @endsection
{{--  <script src="https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js"></script>--}}
{{--  <script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>--}}
{{--  <script src="js/bootstrap.bundle.js"></script>--}}
{{--  <script src="js/jQuery.min.js"></script>--}}
  <!-- <script>
    var grid = new Muuri('.grid',{
      dragEnabled: true,

    });
    // Show all items that have the attribute "data-foo".
    // grid.filter(function (item) {
    //   return item.getElement().hasAttribute('data-foo');
    // });

    // Or simply just...
    // grid.filter('[data-foo]');

    // Show all items that have a class foo.
    // grid.filter('.part-time');
    function showFoo(){
      grid.filter('.foo');

    }
    function showPartTime(){
      grid.filter('.part-time');
    }
    function showDataFoo(){
      grid.filter(function (item) {
  return item.getElement().hasAttribute('data-foo');
});
    }

  </script> -->
  <script>
    // const jobOptions = document.querySelector(".job .dorpdown");
    // // jobOptions.removeEventListener('click');
    // jobOptions.addEventListener('click',function(){
    //   // document.querySelector(".job").removeEventListener("click");

    // })

     var grid = new Muuri('.jobs-list'//,{dragEnabled: true, }
     );
    $('.show-details').click(function(e){
      e.preventDefault();
      location.href = "job_details.html";

    });

    const salarySelect = document.getElementById("salary");
    $(salarySelect).change(function(){
      console.log(salarySelect.selectedIndex);
      console.log(salarySelect.value);
    })

    const companySelect = document.getElementById("company");
    $(companySelect).change(function(){
      console.log(companySelect.value);
    })

    const jobTypeSelect = document.getElementById("type");
    $(jobTypeSelect).change(function(){
      console.log(jobTypeSelect.value);
      // grid.filter('.part-time');
      if(jobTypeSelect.value === "all")
      return;
      grid.filter(`.${jobTypeSelect.value}`)
    });


  </script>
</html>
