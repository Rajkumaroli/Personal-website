<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raj website</title>
  <!-- Css part -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Font awesome link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Bootstrap link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- Goggle font link -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Here Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand text-capitalize" href="https://www.facebook.com/rajbibash.oli.5""><h1 class="
        logo">rajkumar oli</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse barnav" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="services.html">Cources</a></li>
              <li><a class="dropdown-item" href="ctevt.html">CTEVT</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="web.html">Web Development</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="project.html">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="skill.html">My Skills</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="gallery.html">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>


  <!-- Here start contact us -->
  <section class="contact my-5  pt-10 ">
    <div class="text-center">
      <h1 class="display-4">Contact Us</h1>
      <hr class="w-100% max-auto " />
    </div>
    <div class="container">
      <div class="row">

        <!-- Here Start form part -->
        <div class="col-md-6 col-xxl-6 max-auto">
          <form action="contact.php" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Name:</label>
              <input type="text" name="name" class="form-control" id="name" aria-describedby="textlHelp"
                placeholder="Please Enter Your Name" required>
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="textlHelp"
                placeholder="Please Enter Your Email" required>
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Subject:</label>
              <input type="text" name="subject" class="form-control" id="subject" aria-describedby="textlHelp"
                placeholder="Please Enter Your Subject" required>
            </div>

            <div class="mb-3">
              <label for="validationTextarea" class="form-label">Comment:</label>
              <textarea class="form-control " name="comment" id="validationTextarea" placeholder="Please Comment Here"
                required></textarea>
            </div>
            <button type="submit" name="send" class="btn btn-primary">Send</button>
          </form>
        </div>
        <!-- Here form part End -->

        <!-- Here Start Content part -->
        <div class="col-md-6 col-xxl-6 max-auto">
          <div class="card" style="width: 100%; height: 100%;">
            <div class="card-body">
              <h1 class="head">Contact Me:</h1>
              <div class="Content">
                <h3>Name: Rajkumar Oli</h3>
                <h3>E-mail: olirajkumar30@gmail.com</h3>
                <h3>Mobile Number: 9842723921</h3>
                <h3>Address: Tulsipur Dang, Nepal</h3>
              </div>
              <div class="py-3">
                <a href="https://www.facebook.com/rajbibash.oli.5" class="font_awesome"><i
                    class="fa fa-facebook-official"></i>Facebook</a>
                <a href="https://www.youtube.com/results?search_query=dit+tech+nepal" class="font_awesome"><i
                    class="fa fa-youtube-play"></i>YouTube</a>
                <a href="https://mail.google.com/" class="font_awesome"><i class="fa fa-envelope-o"></i>Gmail</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Here End Content part -->
      </div>
    </div>


<?php
  if(isset($_POST['send'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $comment=$_POST['comment'];
// database start
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database="rajdb";

// Create connection
  $conn = mysqli_connect($servername, $username, $password,$database);

  // Insert values in table
     $sql="INSERT INTO`rajdb`.`rajtb` (`Name`, `Email`, `Subject`, `Comment`) 
     VALUES ('$name','$email','$subject','$comment')";
     $result=mysqli_query($conn,$sql);
// Insert Values in table end
     echo "<h3 style='color:green;text-align:center;'>Thank you for your message. It has been sent.</h3>";
      }
    else{
      echo "    ";
 }
?>
    <!-- End contact us -->








    <!-- Here Start Footter  -->
    <section class="mian_headind my-5 py-2 offer_style">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xxl-12 col-12 py-5 text-center">
            <h1 class="text-white">Copyright © 2021 - 2024, rajkumaroli.com.np All Rights Reserved. Website Powered
              By: Rajkumar Oli</h1>

          </div>
        </div>
      </div>
    </section>

    <!-- Here end Footter  -->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
   -->

    <script type="text/javascript">
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })

    </script>
</body>

</html>