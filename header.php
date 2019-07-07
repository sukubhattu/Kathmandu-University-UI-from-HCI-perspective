<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kathmandu University</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        .navbar-custom {
          background-color:#001a4d;
        }
        .sticky {
          position: fixed;
          top: 0;
          width: 100%;
          z-index: 9999        }

        .sticky + .content {
          padding-top: 60px;
        }
        .dropbtn {
          padding-top:10px;
          border-radius: 7px;
        }

        .dropdown {
          position: relative;
          display: inline-block;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f1f1f1;
          min-width: 250px;
          box-shadow: 2px 8px 16px 0px rgba(2,0,0,0.2);
          border-radius: 4px;
          z-index: 100;
        }

        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }

        .dropdown-content a:hover {
          background-color: #ddd; 
          color: #132395;
          border-right-style: solid;
          border-right-color: #193250;

        }

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #2B406B;}
    </style>
</head>
<body>
  <div id="nav">
    <nav class="navbar navbar-dark navbar-expand-lg navbar-custom">
      <a class="navbar-brand hoverable" href="index.php">
        <img src="img/1200px-Kathmandu_University_Logo.svg.png" style="height:65px;" alt="ku logo">
      </a>
      <a class="nav-item nav-link active" style="color:white;" href="index.php"><h1>Kathmandu University</h1><span class="sr-only">(current)</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">

  
            <div class="col"></div>

            <div class="student">
              <div class="dropdown">
                <div class="dropbtn">
                            <a class="nav-item nav-link active" style="padding-left:25px;" href="student.php"> <h5>Students  &nbsp</h5> <span class="sr-only">(current)</span></a>
                            </div>
                <div class="dropdown-content">
                  <a href="student_life.php">Student Life</a>
                  <a href="#">Notices</a>
                  <a href="#">Exam and Results</a>
                </div>
              </div>
            </div>

            <div class="schools">
              <div class="dropdown">
                <div class="dropbtn">
                  <a class="nav-item nav-link active" style="padding-left:25px;" href="schools.php"> <h5>Schools &nbsp</h5> <span class="sr-only">(current)</span></a>
                  </div>
                    <div class="dropdown-content">
                      <a href="SOE.php">School of Engineering</a>
                      <a href="#">School of Education</a>
                      <a href="#">School of Medical Science</a>
                      <a href="#">School of Science</a>
                      <a href="#">School of Law</a>
                      <a href="#">School of Management</a>
                      <a href="#">School of Arts</a>
                    </div>
                  </div>
            </div>

            <div class="Publications">
              <div class="dropdown">
                <div class="dropbtn">
                  <a class="nav-item nav-link active" style="padding-left:25px;" href="publications.php"> <h5>Publications &nbsp</h5> <span class="sr-only">(current)</span></a>
                  </div>
                       
                  </div>
            </div>
            <div class="Exam-Section">
              <div class="dropdown">
                <div class="dropbtn">
              <a class="nav-item nav-link active" style="padding-left:25px;" href="exams-final.php"> <h5>Exam- Section &nbsp</h5> <span class="sr-only">(current)</span></a>
              </div>
                   
                  </div>
            </div>

            <div class="E-Learning">
              <div class="dropdown">
                <div class="dropbtn">
              <a class="nav-item nav-link active" style="padding-left:25px;" href="http://elf.ku.edu.np/login/index.php"> <h5>E-Learning &nbsp</h5> <span class="sr-only">(current)</span></a>
              </div>
                      
                  </div>
            </div>

            <div class="btn-group">
              <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none; background-color: transparent;">
                <img src="https://www.materialui.co/materialIcons/social/notifications_white_192x192.png" height="50px">
              </button>

              <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="dropdownMenuButton">
                <img src="http://www.swimpenguins.co.uk/wp-content/uploads/2015/06/white-up-arrow-png-1024x1024.png" height="20px" style="margin-top: -22px; float: right; padding-right: 30px;">
                <b style="padding-left: 25px;">Important Notices:</b><hr width="60%" style="float: left; margin-left: 20px;">
                <a class="dropdown-item" href="#">Fee Payment Date Extension Notice</a>
                <a class="dropdown-item" href="#">Call for Papers and Posters</a>
                <a class="dropdown-item" href="#">Admission Open for BBIS</a>
              </div>
            </div>

    
        </div>
    </nav>
  </div>
  <script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("nav");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }


    </script>
</body>
</html>