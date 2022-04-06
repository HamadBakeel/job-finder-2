@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        @media (max-width: 992px) {
            .nav-button-link{
                position: static !important;
            }
        }
    </style>
</head>
<body>
@section('content')

    <div class="container-fluid mt-4">
        <div class="row">
            <h3>
                Job details
            </h3>
            <div class="jobType">
            <h5 class="m-0">Job Type</h5>
            <p class="type text-secondary pb-5 " style="font-size: .8rem; border-bottom: #ccc 2px solid;">Full Time</p>
            </div>
        </div>
        <div class="row">
            <h3>Full Job Description</h3>
            <div class="jobDescriptionText">
                <p>
                    As a RoviSys employee, you will use the latest technologies as we
                    provide innovative solutions for our clients. You will design,
                    implement, and configure automation systems/software, and/or write
                    custom software. We support our customers onsite and from our offices,
                     located throughout North America. We use new and exciting
                    technology to improve our clients’ sustainability, profitability, efficiency and overall success!
                </p>
                <p class="fw-bold fs-5">
                    Entry Level Position: College Graduate - 2 years experience
                </p>
                <p>
                    RoviSys offers a broad opportunity to grow your career with any of the following duties:
                </p>
                <ul>
                    <li>Design and develop automation systems</li>
                    <li>Design and develop electrical control systems that will interface with process manufacturing equipment and sensors</li>
                    <li>Architect software solutions using the appropriate technologies from database to AI to User Interface tools.</li>
                    <li>Provide our clients with real time, actionable information about their process</li>
                    <li>Develop quality code in accordance with established RoviSys and client standards</li>
                    <li>Work in team environment with engineers and designers from RoviSys, partners and clients</li>
                    <li>Work in team environment with engineers and designers from RoviSys, partners and clients</li>
                </ul>
                <p class="fs-5"><strong>Qualifications:</strong></p>
                <ul>
                    <li>Relevant Co-op experience</li>
                    <li>Manufacturing process knowledge</li>
                    <li>Programmable Logic Controller and Distributed Control System experience</li>
                    <li>Well-versed with web development technologies (JavaScript, CSS, HTML, .NET, etc)</li>
                    <li>Design and Implementation of Relational/Document Databases and Historians (Microsoft SQL Server, Oracle, Mongo, OSIsoft, etc.)</li>
                </ul>
                <p>Candidates must be authorized to work in the U.S. without RoviSys sponsorship</p>
                    <div>Rovisys Automation & Information Solutions</div>
                    <div>13 days ago</div>
            </div>
            <div class="reprotJob">
                <button class="btn mt-3 mb-5 fw-bold" style="background-color: #e4e2e0; cursor: pointer;"><img src="assets/images/svg/flag-fill.svg" alt=""> Report Job</button>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
