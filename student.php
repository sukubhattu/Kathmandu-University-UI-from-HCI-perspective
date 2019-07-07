<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kathmandu University</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="https://kit.fontawesome.com/93877d0e99.js"></script> -->
    <style>
        .navbar-custom {
          background-color:#001a4d;
        }
        .carousel-inner{
        width:100%;
        max-height: 400px !important;
        }
        @media only screen and (min-width : 1200px) {
            .carousel-caption
            {
                top: 42%;
            }
        }
        .col a{
            color:black;
        }
        .col a:hover{
            color:black;
            text-decoration: none;
        }
        hr{
            background-color: #D8D9D9;
        }
  
          .block-24 {
          background: #fff;
          -webkit-box-shadow: 0 5px 20px -5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 5px 20px -5px rgba(0, 0, 0, 0.2);
          padding-bottom: 10px;
          margin-right: 50px;
          min-width: 40%;
          min-height: 300px;
        }

        .block-24 .heading {
          font-size: 20px;
          margin: 0 0 20px 0;
          padding: 20px 0 0 20px;
          color: #000;
        }

        .block-24 ul, .block-24 ul li {
            padding: 8px 16px;
          margin: 0;
        }

        .block-24 ul li {
          display: block;
        }
        .block-24:hover, .block-24:focus {
          -webkit-box-shadow: 0 2px 90px -5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 90px -5px rgba(0, 0, 0, 0.2);
          z-index: 2;
        }
        li a{
        color: black;
        }
        li a:hover{
            color: #597FCD;
        }
        .student{
          background-color: #3064A3;
          border-radius: 7px;
        }
    </style>
</head>
<body style="background-color: #F8F9FA; font-family:Arial">
    <?php include 'header.php';?>
    <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item" style="margin-left: 100px;"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Students</a></li>
          </ol>
        </nav> 
    <!--news section starts here  -->
    <div class = "container">
        <div class="row">
            <br>
        </div>
        <div class = "row">
            <div class="col">
                <h2>Student Section<hr></h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="student_life.php">
                    <div class="block-24 mb-5 sm-3 md-6">
                      <h3 class="heading">Student Life<hr></h3>
                      <ul>
                        <li>Academics</li>
                        <li>Hostel Life</li>
                        <li>SWC</li>
                        <li>Student Clubs</li>
                      </ul>
                    </div>
                </a>
            </div>
            <div class="col">
                <div class="block-24 mb-5">
                  <h3 class="heading">Notices<hr></h3>
                  <ul>
                    <li>Notice for Scholarship</li>
                    <li>Notice for Sports Week</li>
                    <li>Notice for Fee payment</li>
                  </ul>
                </div>
            </div>
            <div class="col">
                <div class="block-24 mb-5">
                  <h3 class="heading">Exam and Results<hr></h3>
                  <ul>
                    <li>Exam Schedule</li>
                    <li>Result of III yr MBBS</li>
                    <li>Exam Forms</li>
                  </ul>
                </div>
            </div>

        </div>
    </div>
    <?php include 'footer.php';?>  
</body>
</html>