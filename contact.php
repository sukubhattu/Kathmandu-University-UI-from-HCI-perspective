
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kathmandu University</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        .container-fluid{
            background-color: #ffe680
        }
       
        .fa {
          padding: 20px;
          font-size: 30px;
          width: 70px;
          text-align: center;
          text-decoration: none;
          margin-left: 10px;
          margin-right: 10px;
          border-radius: 50%;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
          background: #3B5998;
          color: white;
        }

        .fa-twitter {
          background: #55ACEE;
          color: white;
        }
        .fa-google {
          background: #dd4b39;
          color: white;
        }
        .fa-youtube {
          background: #bb0000;
          color: white;
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
          min-height: 350px;
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
    </style>
</head>
<body style="font-family: arial">
  <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto" style="padding-left: 20%">
            <div class = "row">
                <center>
                    <a class="navbar-brand" style="padding-right: 25px;"href="about.php">About the University</a>
                    <a class="navbar-brand" style="padding-right: 25px;" href="schools.php">Study at KU</a>
                    <a class="navbar-brand" style="padding-right: 25px;" href="#">Academic Programs</a>
                    <a class="navbar-brand" style="padding-right: 25px;" href="#">Alumni</a>
                    <a class="navbar-brand" style="padding-right: 25px; href="#">Research</a>
                </center>
            </div>
        </nav>
    <?php include 'header.php' ?>
    <!--news section starts here  -->
    <div class = "container">
        <div class="row">
            <br>
        </div>
        <div class = "row">
            <div class="col">
                <br>
                <h2>Contact KU<hr></h2>
            </div>
        </div>

        <div class="row">
            <br>
        </div>

        <div class="row">
            <div class="col">
                    <div class="block-24 mb-5 sm-3 md-6">
                      <h3 class="heading">General Contact Info</h3>
                      <ul>
                        <li>Kathmandu University</li>
                        <li>P.O.Box - 6250</li>
                        <li>Dhulikhel, Nepal</li>
                        <li>Phone:977-011- { 415100, 415200, 415021 },977-9801210035,977-011-415005</li>
                        <li>Fax- 977-011- 415011</li>
                      </ul>
                    </div>
            </div>
            <div class="col">
                <div class="block-24 mb-5">
                  <h3 class="heading">Admission Contact Information</h3>
                  <ul>
                    <li><b>Websites:</b></li>
                    <li>http://www.ku.edu.np/admission/</li>
                    <li><b>Email:</b></li>
                    <li>admission@ku.edu.np</li>
                  </ul>
                </div>
            </div>
            <div class="col">
                <div class="block-24 mb-5">
                  <h3 class="heading">Web Contact Information</h3>
                  <ul>
                    <li><b>Websites:</b> </li>
                    <li>http://www.ku.edu.np/</li>
                    <li><b>Email: </b></li>
                    <li>web@ku.edu.np</li>
                  </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2>Map to KU <hr></h2>
                <a href="http://www.ku.edu.np/news/gallery/1/MAP_Banepa_28Kilo_KU.jpg"><img src="http://www.ku.edu.np/news/gallery/1/MAP_Banepa_28Kilo_KU.jpg" width="100%"></a>
            </div>
        </div>
    </div>
    <br>
    <br>
</div>
<?php include 'footer.php' ?>
</body>
</html>