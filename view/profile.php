<?php // include "header.php" ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
            color: #fff;
            font-family: Arial, sans-serif;
        }

       

        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto;
            display: block;
        }

        .profile-heading {
            text-align: center;
            margin-top: 20px;
        }

        .profile-name {
            font-size: 24px;
            font-weight: bold;
        }

        .profile-title {
            font-size: 18px;
        }

        .profile-description {
            text-align: center;
            margin-top: 20px;
        }

        .profile-contact {
            margin-top: 20px;
        }

        .profile-contact p {
            font-size: 16px;
        }

        .profile-contact a {
            color: #fff;
            text-decoration: none;
        }

        .profile-contact a:hover {
            text-decoration: underline;
        }
        #nav{
            position:sticky;
            background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(25,145,16,1) 0%, rgba(11,117,221,1) 100%);
        }
       
        @media (max-width: 768px) {
            .profile-pic {
                width: 100px;
                height: 100px;
            }

            .profile-name {
                font-size: 20px;
            }

            .profile-title {
                font-size: 16px;
            }

            .profile-description {
                font-size: 14px;
            }

            .profile-contact p {
                font-size: 14px;
            }
        }
        a:hover{
            color: white !important;
        }
    </style>
</head>
<body>
<div class="container-fluid">
<nav id="nav" class=" navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <div class=" navbar-collapse" id="navbarNavAltMarkup">
    <a  style="color: black;" class="navbar-brand" href="#">profile</a>
        <a style="color: black;" class="navbar-brand" href="home.php">Home</a>
        <a style="color: black;" class="navbar-brand" href="index.php">main page</a>
        <a style="color: black;" class="navbar-brand" href="regiser_form.php">sign up/sign in</a>
        <a style="color: black;" class="navbar-brand" href="#">Disabled</a>
    </div>
  </div>
</nav>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="https://picsum.photos/1200" class=" rounded-circle img-fluid" alt="">
        </div>
        <div class="col-md-8">
            <h2>John Doe</h2>
            <p>Web Developer</p>
            <p>Location: New York, NY</p>
            <p>Email: johndoe@example.com</p>
            <p>Phone: 123-456-7890</p>
        </div>
    </div><hr style="color:black; border-width: 3px;">
    <div class="row mt-3">
        <div class="col-md-12">
            <h4>Summary</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
        </div>
    </div><hr style="color:black; border-width: 3px;">
    <div class="row mt-3">
        <div class="col-md-12">
            <h4>Skills</h4>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>Bootstrap</li>
                <li>PHP</li>
                <li>MySQL</li>
            </ul>
        </div>
    </div><hr style="color:black; border-width: 3px;">
    <div class="row mt-3">
        <div class="col-md-12">
            <h4>Experience</h4>
            <p>Company Name - Web Developer (2018-Present)</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.</p>
        </div>
    </div><hr style="color:black; border-width: 3px;">
    <div class="row mt-3">
        <div class="col-md-12">
            <h4>Education</h4>
            <p>Bachelor's Degree in Computer Science - University Name (2014-2018)</p>
        </div>
    </div>
</div>


</body>
</html>