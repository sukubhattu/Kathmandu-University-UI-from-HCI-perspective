<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ku</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        .navbar-custom {
            background-color:#001a4d;
        }
    </style>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto" style="padding-left: 20%">
    <div class = "row">
      <center>
          <a class="navbar-brand" style="padding-right: 25px;"href="about.html">About the University</a>
          <a class="navbar-brand" style="padding-right: 25px;" href="StudyAtKU.html">Study at KU</a>
          <a class="navbar-brand" style="padding-right: 25px;" href="#">Academic Programs</a>
          <a class="navbar-brand" style="padding-right: 25px;" href="#">Alumni</a>
          <a class="navbar-brand" style="padding-right: 25px; href="#">Research</a>
      </center>
    </div>
  </nav>
  <nav class="navbar navbar-dark navbar-expand-lg navbar-custom">
    <a class="navbar-brand hoverable" href="#">
      <img src="img/1200px-Kathmandu_University_Logo.svg.png" style="height:90px;" alt="ku logo">
    </a>
    <a class="nav-item nav-link active" style="color:white;" href="#"><h1>काठमाडौं विश्वविद्यालय</h1><span class="sr-only">(current)</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" style="padding-left:25px;" href="student.html"> <h5>Students</h5> <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" style="padding-left:25px;" href="faculty.html"> <h5>Faculty</h5> <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" style="padding-left:25px;" href="#"> <h5>Schools</h5> <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" style="padding-left:25px;" href="#"> <h5>Publications</h5> <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" style="padding-left:25px;" href="#"> <h5>Exam- Section</h5> <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" style="padding-left:25px;" href="#"> <h5>E-Learning</h5> <span class="sr-only">(current)</span></a>
      </div>
    </div>
  </nav>
    </header>
        <div class = "container photo">
          <div class="bd-example">
                  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img src="img/soe1.jpg" class="d-block w-100 photo" alt="soe 1">
                          <div class="carousel-caption d-none d-md-block">
                          <h5>First slide label</h5>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <img src="img/soe2.jpg" class="d-block w-100" alt="soe 2">
                          <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <img src="img/soe3.jpg" class="d-block w-100" alt="soe 3">
                          <div class="carousel-caption d-none d-md-block">
                          <h5>Third slide label</h5>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                          </div>
                      </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                      </a>
                  </div>
          </div>
      </div>
        <!-- breadcrum starts here -->
        <!-- breadcrum will not be in the home page but will be in the other sides -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active">Data</li>
          </ol>
        </nav>
      </header>  
      <main>
        <div class = "container">
          <div class = "row ">
            <div class = "col-sm-4">
              <img src = "img/news.png" width="275px;" alt = "news icon">
            </div>
            <div class = "col">
              <h1 class="display-3">News and Events</h1>
            </div>
          </div>
          <div class = "row">
            <div class = "col-sm-4">
              <div class="card card-cascade">
                <!-- Card image -->
                <div class="view view-cascade overlay">
                  <img class="card-img-top border-bottom border-danger" src="img/news1.jpg"  height="220px" alt="shinchan image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <div class="card-body card-body-cascade text-center">
                  <!-- Title -->
                  <h4 class="card-title"><strong>Shinnosuke Nohara</strong></h4>
                  <!-- Subtitle -->
                  <h6 class="font-weight-bold indigo-text py-2"><i class="far fa-calendar-alt"></i><span> &nbsp21-05-2019</span></h6>
                  <!-- Text -->
                  <p class="card-text">Shinnosuke Nohara (野原しんのすけ), also known as Shin chan, Shinchan and Shin-chan, is the protagonist of Crayon Shin-chan. He is 5 years old and yet acts overtly mature. In general, he is brutally honest, highly curious, and has no shame whatsoever. Ironically, there have been several instances in which Shinnosuke's own crazy antics actually solved the problems of those around him
                  </p>
                  <!-- badge -->
                  <button type="button" class="btn btn-outline-primary">Read More</button>
                </div>
              </div>
            </div>
            <div class = "col-sm-4">
              <div class="card card-cascade">
                <!-- Card image -->
                <div class="view view-cascade overlay">
                  <img class="card-img-top border-bottom border-danger" src="img/news2.jpg" height="220px" alt="action image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <div class="card-body card-body-cascade text-center">
                  <!-- Title -->
                  <h4 class="card-title"><strong>Misae Nohara</strong></h4>
                  <!-- Subtitle -->
                  <h6 class="font-weight-bold indigo-text py-2"><i class="far fa-calendar-alt"></i><span> &nbsp19-05-2019</span></h6>
                  <!-- Text -->
                  <p class="card-text">Shinnosuke Nohara (野原しんのすけ), also known as Shin chan, Shinchan and Shin-chan, is the protagonist of Crayon Shin-chan. He is 5 years old and yet acts overtly mature. In general, he is brutally honest, highly curious, and has no shame whatsoever. Ironically, there have been several instances in which Shinnosuke's own crazy antics actually solved the problems of those around him
                  </p>
                  <!-- badge -->
                  <button type="button" class="btn btn-outline-primary">Read More</button>
                </div>
              </div>
            </div>
            <div class = "col-sm-4">
            <div class="card card-cascade">
              <!-- Card image -->
              <div class="view view-cascade overlay">
                <img class="card-img-top border-bottom border-danger" src="img/news3.jpg" height="220px" alt="masao image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <div class="card-body card-body-cascade text-center">
                <!-- Title -->
                <h4 class="card-title"><strong>Sheero</strong></h4>
                <!-- Subtitle -->
                <h6 class="font-weight-bold indigo-text py-2"><i class="far fa-calendar-alt"></i><span> &nbsp15-05-2019</span></h6>
                <!-- Text -->
                <p class="card-text">Shinnosuke Nohara (野原しんのすけ), also known as Shin chan, Shinchan and Shin-chan, is the protagonist of Crayon Shin-chan. He is 5 years old and yet acts overtly mature. In general, he is brutally honest, highly curious, and has no shame whatsoever. Ironically, there have been several instances in which Shinnosuke's own crazy antics actually solved the problems of those around him
                </p>
                <!-- badge -->
                <button type="button" class="btn btn-outline-primary">Read More</button>
            </div>
            </div>
            </div>
            
          </div>
          <br>
          <div class = "container">
            <button type="button" class="btn btn-outline-primary float-right">Go to All News</button>
          </div>
          <br>
          <hr>
          <!-- arko section suru -->
          <div class = "container">
            <div class = "row ">
                <div class = "col-sm-4">
                  <img src = "img/notice.png" alt = "notice icon">
                </div>
                <div class = "col">
                  <br>
                  <h1 class="display-3">Notice and Announcements</h1>
                </div>
              </div>
              <div class = "row">
                  <div class = "col-sm-4">
                    <div class="card card-cascade">
                      <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img class="card-img-top border-bottom border-danger" src="img/notice2.jpg"  height="300px" alt="shinchan image">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <div class="card-body card-body-cascade text-center">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Shinnosuke Nohara</strong></h4>
                        <!-- Subtitle -->
                        <h6 class="font-weight-bold indigo-text py-2"><i class="far fa-calendar-alt"></i><span> &nbsp21-05-2019</span></h6>
                        <!-- Text -->
                        <p class="card-text">Shinnosuke Nohara (野原しんのすけ), also known as Shin chan, Shinchan and Shin-chan, is the protagonist of Crayon Shin-chan. He is 5 years old and yet acts overtly mature. In general, he is brutally honest, highly curious, and has no shame whatsoever. Ironically, there have been several instances in which Shinnosuke's own crazy antics actually solved the problems of those around him
                        </p>
                        <!-- badge -->
                        <span class="badge badge-pill badge-success">Read More >>></span>
                      </div>
                    </div>
                  </div>
                  <div class = "col-sm-4">
                    <div class="card card-cascade">
                      <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img class="card-img-top border-bottom border-danger" src="img/notice2.jpg" height="300px" alt="notice image">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <div class="card-body card-body-cascade text-center">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Misae Nohara</strong></h4>
                        <!-- Subtitle -->
                        <h6 class="font-weight-bold indigo-text py-2"><i class="far fa-calendar-alt"></i><span> &nbsp19-05-2019</span></h6>
                        <!-- Text -->
                        <p class="card-text">Shinnosuke Nohara (野原しんのすけ), also known as Shin chan, Shinchan and Shin-chan, is the protagonist of Crayon Shin-chan. He is 5 years old and yet acts overtly mature. In general, he is brutally honest, highly curious, and has no shame whatsoever. Ironically, there have been several instances in which Shinnosuke's own crazy antics actually solved the problems of those around him
                        </p>
                        <!-- badge -->
                        <span class="badge badge-pill badge-success">Read More >>></span>
                      </div>
                    </div>
                  </div>
                  <div class = "col-sm-4">
                  <div class="card card-cascade">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                      <img class="card-img-top border-bottom border-danger" src="img/notice2.jpg" height="300px" alt="notice image">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <div class="card-body card-body-cascade text-center">
                      <!-- Title -->
                      <h4 class="card-title"><strong>Sheero</strong></h4>
                      <!-- Subtitle -->
                      <h6 class="font-weight-bold indigo-text py-2"><i class="far fa-calendar-alt"></i><span> &nbsp15-05-2019</span></h6>
                      <!-- Text -->
                      <p class="card-text">Shinnosuke Nohara (野原しんのすけ), also known as Shin chan, Shinchan and Shin-chan, is the protagonist of Crayon Shin-chan. He is 5 years old and yet acts overtly mature. In general, he is brutally honest, highly curious, and has no shame whatsoever. Ironically, there have been several instances in which Shinnosuke's own crazy antics actually solved the problems of those around him
                      </p>
                      <!-- badge -->
                      <span class="badge badge-pill badge-success">Read More >>></span>
                    </div>
                  </div>
                  </div>
              </div>
              <hr>
          </div>
          <div class = "container">
              <div class = "row ">
                  <div class = "col-sm-4">
                    <img src = "img/seminar.png" alt = "notice icon">
                  </div>
                  <div class = "col">
                    <br><br>
                    <h1 class="display-3">Talk and Seminar</h1>
                  </div>
                </div>
                <div class = "row">
                    <div class = "col-sm-4">
                      <div class="card card-cascade">
                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                          <img class="card-img-top border-bottom border-danger" src="img/announcement1.jpeg"  height="300px" alt="shinchan image">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                          <!-- Title -->
                          <h4 class="card-title"><strong>Shinnosuke Nohara</strong></h4>
                          <!-- Subtitle -->
                          <h6 class="font-weight-bold indigo-text py-2"><i class="far fa-calendar-alt"></i><span> &nbsp21-05-2019</span></h6>
                          <!-- Text -->
                          <p class="card-text">Shinnosuke Nohara (野原しんのすけ), also known as Shin chan, Shinchan and Shin-chan, is the protagonist of Crayon Shin-chan. He is 5 years old and yet acts overtly mature. In general, he is brutally honest, highly curious, and has no shame whatsoever. Ironically, there have been several instances in which Shinnosuke's own crazy antics actually solved the problems of those around him
                          </p>
                          <!-- badge -->
                          <span class="badge badge-pill badge-success">Read More >>></span>
                        </div>
                      </div>
                    </div>
                    <div class = "col-sm-4">
                      <div class="card card-cascade">
                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                          <img class="card-img-top border-bottom border-danger" src="img/announcement2.jpeg" height="300px" alt="action image">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                          <!-- Title -->
                          <h4 class="card-title"><strong>Misae Nohara</strong></h4>
                          <!-- Subtitle -->
                          <h6 class="font-weight-bold indigo-text py-2"><i class="far fa-calendar-alt"></i><span> &nbsp19-05-2019</span></h6>
                          <!-- Text -->
                          <p class="card-text">Shinnosuke Nohara (野原しんのすけ), also known as Shin chan, Shinchan and Shin-chan, is the protagonist of Crayon Shin-chan. He is 5 years old and yet acts overtly mature. In general, he is brutally honest, highly curious, and has no shame whatsoever. Ironically, there have been several instances in which Shinnosuke's own crazy antics actually solved the problems of those around him
                          </p>
                          <!-- badge -->
                          <span class="badge badge-pill badge-success">Read More >>></span>
                        </div>
                      </div>
                    </div>
                    <div class = "col-sm-4">
                    <div class="card card-cascade">
                      <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img class="card-img-top border-bottom border-danger" src="img/shiro.jpg" height="300px" alt="masao image">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <div class="card-body card-body-cascade text-center">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Sheero</strong></h4>
                        <!-- Subtitle -->
                        <h6 class="font-weight-bold indigo-text py-2"><i class="far fa-calendar-alt"></i><span> &nbsp15-05-2019</span></h6>
                        <!-- Text -->
                        <p class="card-text">Shinnosuke Nohara (野原しんのすけ), also known as Shin chan, Shinchan and Shin-chan, is the protagonist of Crayon Shin-chan. He is 5 years old and yet acts overtly mature. In general, he is brutally honest, highly curious, and has no shame whatsoever. Ironically, there have been several instances in which Shinnosuke's own crazy antics actually solved the problems of those around him
                        </p>
                        <!-- badge -->
                        <span class="badge badge-pill badge-success">Read More >>></span>
                      </div>
                    </div>
                    </div>
                  </div>
          </div>
      </main>
      
      <div id="v-cal">
        <div class="vcal-header">
          <button class="vcal-btn" data-calendar-toggle="previous">
            <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
            </svg>
          </button>
      
          <div class="vcal-header__label" data-calendar-label="month">
            March 2017
          </div>
      
          <button class="vcal-btn" data-calendar-toggle="next">
            <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
            </svg>
          </button>
        </div>
      
        <div class="vcal-week">
          <span>Mon</span> <span>Tue</span><span>Wed</span> <span>Thu</span> <span>Fri</span> <span>Sat</span> <span>Sun</span>
        </div>
        <div class="vcal-body" data-calendar-area="month"></div>
      </div>
      <script src="vanillaCalendar.js" type="text/javascript"></script>
      <script>
      window.addEventListener('load', function () {
        vanillaCalendar.init();
      })
      </script>

</body>
</html>