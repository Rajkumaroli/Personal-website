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
  <!-- Navbar section end -->

  <!-- Here Carousel -->

  <header>
    <div class="container-fluid">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/c8.jpg" class="d-block w-100" alt="image3">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="ch">Rajkumar Oli</h5>
              <p class="cp">Aim:Web and Android Developer</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/c1.jpg" class="d-block w-100" alt="image1">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="ch">Rajkumar Oli</h5>
              <p class="cp">Aim:Web and Android Developer</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/c4.jpg" class="d-block w-100" alt="image2">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="ch">Rajkumar Oli</h5>
              <p class="cp">Aim:Web and Android Developer</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </header>

  <!-- About us section Start -->
  <section class="main-heading my-5">
    <div class="text-center">
      <h1 class="display-4">About us</h1>
      <hr class="w-100% max-auto" />
    </div>

    <div class="container">
      <div class="row my-5">
        <div class="col-lg-6 col-md-6 col-12 col-xxl-6">
          <figure>
            <img src="image/r1.jpg" alt="about image" class="img-fluid about-img">
          </figure>
        </div>
        <div
          class="col-lg-6 col-md-6 col-12 col-xxl-6 d-flex justify-content-center align-items-start flex-column about_text">
          <h1>Who am I ?</h1>
          <p>
            I am Rajkumar Oli, an IT student with few technical tools and skills under the pocket that I
            learned, all thanks to my quick learning ability. I am studying DIT, which often mistaken
            as just IT, they’re different. I believe to know lots of stuffs so often I fluctuate around lots
            of things to learn and do at the same time which makes me perfect “Jack and Master of Everything
            but Nothing”

            <br /><br /><br />
            Assumedly, I am someone who likes pressure, at least I think of it, so my best ability is
            working my way out of it using my excellent quick learning and adaptability, maybe I’m
            exaggerating. I am as random as Brownian motion (Sorry! Non-Physics Folks) which means all my
            words are scattering everywhere so this blog is developed to contain them in a single place
            which is worth looking.
          </p>

          <a href="moreabout.html"><button type="button" class="btn btn-outline-success" data-bs-toggle="tooltip"
              data-bs-placement="right" title="Who am I ?">
              Check More</button></a>
        </div>
      </div>
    </div>
  </section>
  <!-- Here end about us -->

  <!-- Here Our Services start-->
  <section class="main-heading my-5 bg-light py-4">
    <div class="text-center">
      <h1 class="display-4">Our Services</h1>
      <hr class="w-100% max-auto " />
    </div>
    <div class="container Services">
      <div class="row">
        <div class="col-md-4 col-10 col-xxl-4 max-auto">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row">
              <div class="col-md-4">
                <img src="image/c2.png" alt="image1" class="img-fluid ">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Learn C Programming</h5>
                  <p class="card-text">In this series, we will learn about C Programming Tutorials For Absolute
                    Beginners In Nepali.
                  </p>
                  <a href="contact.html"><button type="button" class="btn btn-outline-info">Learn C</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-10 col-xxl-4 max-auto">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row">
              <div class="col-md-4">
                <img src="image/c++.png" alt="image1" class="img-fluid">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Learn C++</h5>
                  <p class="card-text">In this series, we will learn about C++ Tutorials For Absolute Beginners In
                    Nepali.
                  </p>
                  <a href="contact.html"><button type="button" class="btn btn-outline-info">Learn C++</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-10 col-xxl-4 max-auto">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row">
              <div class="col-md-4">
                <img src="image/java.png" alt="image1" class="img-fluid">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Learn Java </h5>
                  <p class="card-text">In this series, we will learn about Java Programming Tutorials For Absolute
                    Beginners In
                    Nepali.</p>
                  <a href="contact.html"><button type="button" class="btn btn-outline-info">Learn Java</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-4 col-10 col-xxl-4 max-auto">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row">
              <div class="col-md-4">
                <img src="image/hc.png" alt="image1" class="img-fluid">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">HTML and CSS</h5>
                  <p class="card-text">In this series, we will learn about HTML and CSS Tutorials For Absolute
                    Beginners In
                    Nepali.</p>
                  <a href="contact.html"><button type="button" class="btn btn-outline-info">HTML/CSS</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-10 col-xxl-4 max-auto">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row">
              <div class="col-md-4">
                <img src="image/js1.png" alt="image1" class="img-fluid">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Learn Javascript</h5>
                  <p class="card-text">In this series, we will learn about Javascript Tutorials For Absolute Beginners
                    In
                    Nepali.</p>
                  <a href="contact.html"><button type="button" class="btn btn-outline-info">Javascript</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-10 col-xxl-4 max-auto">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row">
              <div class="col-md-4">
                <img src="image/php1.png" alt="image1" class="img-fluid">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Learn PHP</h5>
                  <p class="card-text">In this series, we will learn about PHP Tutorials For Absolute Beginners In
                    Nepali.</p>
                  <a href="contact.html"><button type="button" class="btn btn-outline-info">Learn PHP</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row ">
          <div class="col-md-4 col-10 col-xxl-4 max-auto">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row">
                <div class="col-md-4">
                  <img src="image/bs.png" alt="image1" class="img-fluid ">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Bootstrap</h5>
                    <p class="card-text">In this series, we will learn about Bootstrap Tutorials For Absolute
                      Beginners In
                      Nepali.</p>
                    <a href="contact.html"><button type="button" class="btn btn-outline-info">Bootstrap</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-10 col-xxl-4 max-auto">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row">
                <div class="col-md-4">
                  <img src="image/sql.png" alt="image1" class="img-fluid">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Learn SQL</h5>
                    <p class="card-text">In this series, we will learn about SQL Tutorials For Absolute Beginners In
                      Nepali.</p>
                    <a href="contact.html"><button type="button" class="btn btn-outline-info">Learn SQL</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-10 col-xxl-4 max-auto">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row">
                <div class="col-md-4">
                  <img src="image/wp.png" alt="image1" class="img-fluid">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Learn Wordpress</h5>
                    <p class="card-text">In this series, we will learn about Wordpress Tutorials For Absolute
                      Beginners In Nepali.</p>
                    <a href="contact.html"><button type="button" class="btn btn-outline-info">Wordpress</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="mian_headind offer_style">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xxl-12 col-12 py-5 text-center">
          <a href="web.html"><button type="button" class="btn btn-outline-success">More Services</button></a>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Here Our Services end-->

  <!-- Project Section Start -->
  <section class="main-heading my-5">
    <div class="text-center">
      <h1 class="display-4">Our Project</h1>
      <hr class="w-100% max-auto" />
    </div>
    <div class="container">
      <div class="row my-5">
        <div class="col-md-6 col-10 col-xxl-6 max-auto">
          <figure>
            <img src="image/p1.png" alt="Gallery" class="img-fluid ">
          </figure>
        </div>

        <div class="col-md-6 col-10 col-xxl-6 max-auto">
          <figure>
            <img src="image/p2.png" alt="Gallery" class="img-fluid">
          </figure>
        </div>

        <div class="row my-5">
          <div class="col-md-6 col-10 col-xxl-6 max-auto">
            <figure>
              <img src="image/p4.jpg" alt="Gallery" class="img-fluid">
            </figure>
          </div>

          <div class="col-md-6 col-10 col-xxl-6 max-auto">
            <figure>
              <img src="image/p6.jpg" alt="Gallery" class="img-fluid">
            </figure>
          </div>
        </div>
      </div>

      <div class="row my-5">
        <div class="col-md-6 col-10 col-xxl-6 max-auto">
          <figure>
            <img src="image/p3.jpg" alt="Gallery" class="img-fluid">
          </figure>
        </div>

        <div class="col-md-6 col-10 col-xxl-6 max-auto">
          <figure>
            <img src="image/p5.jpg" alt="Gallery" class="img-fluid">
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!-- Project Section End -->


  <!-- Here start my skill -->
  <section class="skill my-5  pt-10 ">
    <div class="text-center">
      <h1 class="display-4">My Skills</h1>
      <hr class="w-100% max-auto " />
    </div>
    <div class="container my-5 py-5">
      <div class="row">
        <div class="col-md-12 col-xxl-12 max-auto">
          <h2>C Programming</h2>
          <div class="progress mb-3">
            <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65"
              aria-valuemin="0" aria-valuemax="100">65%</div>
          </div>
          <h2>C++</h2>
          <div class="progress mb-3">
            <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0"
              aria-valuemax="100">65%</div>
          </div>
          <h2>Core Java</h2>
          <div class="progress mb-3">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80"
              aria-valuemin="0" aria-valuemax="100">80%</div>
          </div>
          <h2>HTML</h2>
          <div class="progress mb-3">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="85"
              aria-valuemin="0" aria-valuemax="100">85%</div>
          </div>
          <h2>CSS</h2>
          <div class="progress mb-3">
            <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60"
              aria-valuemin="0" aria-valuemax="100">60%</div>
          </div>
          <h2>Core javascript</h2>
          <div class="progress mb-3">
            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
              aria-valuemax="100">50%</div>
          </div>
          <h2>PHP</h2>
          <div class="progress mb-3">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
              aria-valuemin="0" aria-valuemax="100">67%</div>
          </div>
          <h2>SQL</h2>
          <div class="progress mb-3">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67"
              aria-valuemin="0" aria-valuemax="100">67%</div>
          </div>
          <h2>MySQL</h2>
          <div class="progress mb-3">
            <div class="progress-bar bg-success" role="progressbar" style="width: 64%" aria-valuenow="64"
              aria-valuemin="0" aria-valuemax="100">64%</div>
          </div>
          <h2>Wordpress</h2>
          <div class="progress mb-3">
            <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0"
              aria-valuemax="100">56%</div>
          </div>
          <h2>Bootstrap</h2>
          <div class="progress mb-3">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="85"
              aria-valuemin="0" aria-valuemax="100">85%</div>
          </div>

        </div>
      </div>
  </section>
  <!-- Here end MySkills -->



  <!-- Here Our Gallery Start -->
  <section class="main-heading my-5  pt-5">
    <div class="text-center">
      <h1 class="display-4">Our Gallery</h1>
      <hr class="w-100% max-auto " />
    </div>

    <div class="container my-5">
      <div class="row">
        <div class="col-md-4 col-10 col-xxl-4 max-auto">
          <figure>
            <img src="image/i1.JPG" alt="Gallery" class="img-fluid">
          </figure>
        </div>

        <div class="col-md-4 col-10 col-xxl-4 max-auto">
          <figure>
            <img src="image/i2.jpg" alt="Gallery" class="img-fluid">
          </figure>
        </div>

        <div class="col-md-4 col-10 col-xxl-4 max-auto">
          <figure>
            <img src="image/i3.jpg" alt="Gallery" class="img-fluid">
          </figure>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 col-10 col-xxl-4 max-auto">
          <figure>
            <img src="image/i4.jpg" alt="Gallery" class="img-fluid">
          </figure>
        </div>

        <div class="col-md-4 col-10 col-xxl-4 max-auto">
          <figure>
            <img src="image/i5.jpg" alt="Gallery" class="img-fluid">
          </figure>
        </div>

        <div class="col-md-4 col-10 col-xxl-4 max-auto">
          <figure>
            <img src="image/i6.jpg" alt="Gallery" class="img-fluid">
          </figure>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 col-10 col-xxl-4 max-auto">
          <figure>
            <img src="image/i10.jpg" alt="Gallery" class="img-fluid">
          </figure>
        </div>

        <div class="col-md-4 col-10 col-xxl-4 max-auto">
          <figure>
            <img src="image/i11.jpg" alt="Gallery" class="img-fluid">
          </figure>
        </div>

        <div class="col-md-4 col-10 col-xxl-4 max-auto">
          <figure>
            <img src="image/i9.jpg" alt="Gallery" class="img-fluid">
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!-- Here Our Gallery End -->


  <!-- Here some offer start -->
  <section class="mian_headind my-5 py-2 offer_style">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xxl-12 col-12 py-5 text-center">
          <h1 class="text-white">Check Out My Videos</h1>
          <p>In this section , Provides different tech and
            programming video.</p>

          <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-play-circle-fill" viewBox="0 0 16 16">
              <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
            </svg>
            Videos</button>

        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Model Start -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">My Awesome Video</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3>I hope you are Enjoying my videos</h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="https://www.youtube.com/results?search_query=dit+tech+nepal" target="_oli">
            <button type="button" class="btn btn-primary">Go to YouTube</button>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Model end -->
  <!-- Here some offer end  -->


 
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
          <h1 class="text-white">Copyright © 2021 - 2024, rajkumaroli.com.np All Rights Reserved. Website Powered By:
            Rajkumar Oli</h1>

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