<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Profile</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/profile.css">

    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-semi-dark.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="assets/vendor/libs/animate-css/animate.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <script src="assets/js/config.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
</head>
<body>
    <section class="dashboard container-fluid d-flex p-0">
        <div class="sideBar col-3 col-md-2 " style="background-color: #e5e5e5;  height:100vh; width: 220px">
            <div class="profile col rounded-pill bg-white mt-2 d-flex align-items-center m-auto flex-column"
                style="    width: 180px;
                height: 80vh;"
            >
            <div class="profile-content ">
                <div class="img-container">

                    <img src="assets/images/profileIimage.jfif"  alt="" width="150"class="pb-4 rounded-circle  profile-img">
                    <button class="btn edit-button "><img src="assets/images/edit.png" alt=""></button>
                </div>
               <div class="name-container">
                <h5 class="name fw-bolde text-center">Hamad Bakeel
                <button class="btn edit-button"><img src="assets/images/edit.png" alt=""></button>
            </h5>
            </div>
            </div>

            <div class="tabs">
                <ul class="mt-5">
                    <li id="personal"><img src="assets/images/personal-info.svg" alt=""> Personal Info</li>
                    <li id="courses"><img src="assets/images/svg/courses.svg" alt=""> Course</li>
                    <li id="experince"><img src="assets/images/svg/experince.png" alt=""> Experience</li>
                    <li id="qualifications"><img src="assets/images/qualification.png" alt=""> Qualification</li>
                    <li id="skills"><img src="assets/images/skills.png" alt=""> Skills</li>
                </ul>
            </div>
            </div>
        </div>

        <div class="col-9 p-3 bg-light">
            <div class="tabs-content">
                <div class="personal-info edit ">

                    <h2 class="mb-5 text-center">Personal Info</h2>
                    <div class="mb-3">
                        <span >First Name</span>
                        <span >{{$user->first_name}} </span>
                        <br>



                    </div>
                    <div class="mb-3">
                        <span>Last Name</span>
                        <span>{{$user->last_name}}</span>
                    </div>
                    <div class="mb-3">
                        <span >Email</span>
                        <span >{{$user->email}} </span>
                    </div>
                    <div class="mb-3">
                        <span >Bio</span>
                        <span >{{$user->bio}}</span>
                    </div>
                    <div class="mb-3">
                        <span>Address</span>
                        <span>{{$user->location}}</span>
                    </div>
                    <div class="mb-3">
                        <span>Phone Number</span>
                        <span>{{$user->phone}}</span>
                    </div>
                    <div class="mb-3">
                        <span>Job Title</span>
                        <span>Full Stack Developer</span>
                    </div>
{{--                    <button class="btn edit-button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"><img src="assets/images/edit.png" alt=""></button>--}}

                    <button class="btn edit-button"  data-bs-toggle="modal" data-bs-target="#basicModal">
                        <img src="assets/images/edit.png" alt="">
                    </button>

                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="mt-3">
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div class="modal animate__animated animate__jackInTheBox fade" id="basicModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="nameBasic" class="form-label">Name</label>
                                                <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailBasic" class="form-label">Email</label>
                                                <input type="text" id="emailBasic" class="form-control" placeholder="xxxx@xxx.xx">
                                            </div>
                                            <div class="col mb-0">
                                                <label for="dobBasic" class="form-label">DOB</label>
                                                <input type="text" id="dobBasic" class="form-control" placeholder="DD / MM / YY">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="courses edit d-none ">
                    <h2 class="mb-5 text-center">Courses</h2>
                    <button class="btn edit-button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i style="font-size: 35px"  class="far fa-plus-square text-primary"></i></button>
                    <div class="card mb-3 m-auto justify-content-" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4 d-flex justify-content-center p-1">
                            <img src="assets/images/svg/HTML5_logo_and_wordmark.svg"  style="max-height: 180px" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8" style="min-width: fit-content;">
                            <div class="card-body position-relative">
                              <h5 class="card-title mb-3 fw-bolder">HTML5</h5>
                              <p class="card-text"><strong>Studied In : </strong>Rwad Academy</p>
                              <p class="card-text"><strong>Date : </strong>2021</p>
                              <p class="card-text"><strong>instructor : </strong>Eng. Mokhtar Ghalib</p>
                              <p class="card-text"><strong>Mark : </strong>100%</p>
                              <div class="btns position-absolute">
                                <button class="btn text-danger"><i class="fas fa-trash-alt"></i></button>
                                <button class="btn text-success"><i class="far fa-edit"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="card m-auto mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4 d-flex justify-content-center p-1">
                            <img src="assets/images/svg/CSS3_logo_and_wordmark.svg" style="max-height: 180px" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title mb-3 fw-bolder">CSS3</h5>
                                <p class="card-text"><strong>Studied In : </strong>Rwad Academy</p>
                                <p class="card-text"><strong>Date : </strong>2021</p>
                                <p class="card-text"><strong>instructor : </strong>Eng. Mokhtar Ghalib</p>
                                <p class="card-text"><strong>Mark : </strong>100%</p>
                                <div class="btns position-absolute">
                                    <button class="btn text-danger"><i class="fas fa-trash-alt"></i></button>
                                    <button class="btn text-success"><i class="far fa-edit"></i></button>
                                  </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card m-auto mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4 d-flex justify-content-center p-1">
                            <img src="assets/images/svg/Unofficial_JavaScript_logo_2.svg" style="max-height: 180px" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title mb-3 fw-bolder">JavaScript</h5>
                                <p class="card-text"><strong>Studied In : </strong>Rwad Academy</p>
                                <p class="card-text"><strong>Date : </strong>2021</p>
                                <p class="card-text"><strong>instructor : </strong>Eng. Mokhtar Ghalib</p>
                                <p class="card-text"><strong>Mark : </strong>100%</p>
                                <div class="btns position-absolute">
                                    <button class="btn text-danger"><i class="fas fa-trash-alt"></i></button>
                                    <button class="btn text-success"><i class="far fa-edit"></i></button>
                                  </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card m-auto mb-3 " style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4 d-flex justify-content-center p-1">
                            <img src="assets/images/svg/React-icon.svg" style="max-height: 180px" class="img-fluid rounded-start "  alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title mb-3 fw-bolder">React</h5>
                                <p class="card-text"><strong>Studied In : </strong>Rwad Academy</p>
                                <p class="card-text"><strong>Date : </strong>2021</p>
                                <p class="card-text"><strong>instructor : </strong>Eng. Mokhtar Ghalib</p>
                                <p class="card-text"><strong>Mark : </strong>100%</p>
                                <div class="btns position-absolute">
                                    <button class="btn text-danger"><i class="fas fa-trash-alt"></i></button>
                                    <button class="btn text-success"><i class="far fa-edit"></i></button>
                                  </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>

                <div class="experince d-none edit ">
                    <h2 class="mb-5 text-center">Experience</h2>
                    <button class="btn edit-button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i style="font-size: 35px"  class="far fa-plus-square text-primary"></i></button>
                    <div class="card bg-dark mb-3 text-white m-auto" style="max-width: 500px !important;">
                        <img src="assets/images/experince1.jpg" width="400"class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">More Than 6 Years of Experience In The Tech Industry</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="btns position-absolute">
                            <button class="btn text-danger"><i class="fas fa-trash-alt"></i></button>
                            <button class="btn text-success"><i class="far fa-edit"></i></button>
                          </div>
                    </div>
                    <div class="card bg-dark mb-3 text-white m-auto" style="max-width: 500px !important;">
                        <img src="assets/images/experince2.jpg" width="400"class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">More Than 6 Years of Experience In The Tech Industry</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="btns position-absolute">
                            <button class="btn text-danger"><i class="fas fa-trash-alt"></i></button>
                            <button class="btn text-success"><i class="far fa-edit"></i></button>
                          </div>
                    </div>
                    <div class="card bg-dark mb-3 text-dark m-auto" style="max-width: 500px !important;">
                        <img src="assets/images/experince3.jpg" width="400"class="card-img" alt="...">
                        <div class="card-img-overlay position-absolute mt-3 bottom-0">
                            <h5 class="card-title">Worked With Many Teams</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="btns position-absolute">
                            <button class="btn text-danger"><i class="fas fa-trash-alt"></i></button>
                            <button class="btn text-success"><i class="far fa-edit"></i></button>
                          </div>
                    </div>
                </div>


                <div class="qualifications  d-none edit ">
                    <h2 class="mb-5 text-center">Qualifications</h2>
                    <h3 class="mb-5 text-center">Comming Soon ...</h3>
                </div>
                <div class="skills edit d-none">
                    <h2 class="mb-5 text-center">Skills</h2>
                    <h3 class="mb-5 text-center">Comming Soon ...</h3>
                </div>
             </div>
            </div>
    </section>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Personal Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">First Name</span>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">Last Name</span>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">Home Address</span>
                            <input type="text" class="form-control"  aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">Phone</span>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">Job Title</span>
                            <input type="text" class="form-control"  aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jQuery.min.js"></script>
    <script >
        $('#personal').click(function(){
            $('.personal-info').removeClass("d-none");
            $('.skills, .experince , .qualifications , .courses').addClass("d-none");
            $('.modal-content').html(`
            <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Personal Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">First Name</span>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">Last Name</span>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">Home Address</span>
                            <input type="text" class="form-control"  aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">Phone</span>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">Job Title</span>
                            <input type="text" class="form-control"  aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
            `)
        });
        $('#courses').click(function(){
            $('.courses').removeClass("d-none");
            // $('.courses').slideUp()
            $('.skills, .experince , .qualifications , .personal-info').addClass("d-none");
            $('.modal-content').html(`
            <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add A Course</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">Course Logo</span>
                            <input type="file" class="form-control" aria-label="Username" placeholder="choose a file" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">Course Name</span>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">Date</span>
                            <input type="date" class="form-control"  aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">Mark</span>
                            <input type="number" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">Instructor</span>
                            <input type="text" class="form-control"  aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Add</button>
                        </div>
            `);
        });
        $('#experince').click(function(){
            $('.experince').removeClass("d-none");
            $('.skills, .courses , .qualifications , .personal-info').addClass("d-none");
            $('.modal-content').html(`
            <div class="modal-header">
                   <h5 class="modal-title" id="staticBackdropLabel">Add An Experience</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body">
                       <div class="input-group flex-nowrap mb-3">
                           <span class="input-group-text" id="addon-wrapping">Experience Logo</span>
                           <input type="file" class="form-control" aria-label="Username" placeholder="choose a file" aria-describedby="addon-wrapping">
                           </div>
                           <div class="input-group flex-nowrap mb-3">
                           <span class="input-group-text" id="addon-wrapping">Experience</span>
                           <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                           </div>
                           <div class="input-group flex-nowrap mb-3">
                           <span class="input-group-text" id="addon-wrapping">Discription</span>
                           <input type="number" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                           </div>
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                           <button type="button" class="btn btn-primary">Add</button>
                       </div>
            `)
        });
        $('#qualifications').click(function(){
            $('.qualifications').removeClass("d-none");
            $('.skills, .experince , .courses , .personal-info').addClass("d-none");
        });
        $('#skills').click(function(){
            $('.skills').removeClass("d-none");
            $('.courses, .experince , .qualifications , .personal-info').addClass("d-none");
        });
    </script>
</body>
</html>
