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
    <!-- <script src="https://kit.fontawesome.com/93877d0e99.js"></script> -->
    <style>
        .navbar-custom {
          background-color:#001a4d;
        }
        .carousel-inner{
        width:100%;
        max-height: 380px !important;
        }
        @media only screen and (min-width : 1200px) {
        .carousel-caption
        {
            top: 42%;
            margin-top: 20px;
            background-color: #000000;
            opacity: .7;
        }
        }
        .container-fluid{
            background-color: #ffe680
        }

        hr{
            background-color: #D8D9D9;
        }
        .card{
            min-height: 500px;
        }
    </style>
</head>
<body style="background-color: #F8F9FA; font-family: arial;">
    <header>

        <nav class="navbar navbar-expand-lg navbar-light mx-auto" style="padding-left: 25%; background-color: #151515; color: white;">
            <div class = "row">
                <center>
                    <a class="navbar-brand" style="padding-right: 25px; font-size: 13pt; color: white;" href="about.php">About the University</a>
                    <a class="navbar-brand" style="padding-right: 25px; font-size: 13pt; color: white;" href="schools.php">Study at KU</a>
                    <a class="navbar-brand" style="padding-right: 25px; font-size: 13pt; color: white" href="#">Academic Programs</a>
                    <a class="navbar-brand" style="padding-right: 25px; font-size: 13pt; color: white;" href="#">Alumni</a>
                    <a class="navbar-brand" style="padding-right: 25px; font-size: 13pt; color: white;" href="#">Research</a>
                </center>
            </div>
        </nav>
        <?php include 'header.php';?>
    </header>
    <!-- carousel starts here -->
    <main>
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/soe1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <div>
                            <h5>Adminstration Building</h5>
                            <!-- <p><mark>Adminstration building view from the library</mark></p> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/soe2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <div>
                            <h5>Boys Hostel</h5>
                            <!-- <p><mark>Adminstration building view from the library</mark></p> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/soe3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <div>
                            <h5>KU Building</h5>
                            <!-- <p><mark>Adminstration building view from the library</mark></p> -->
                        </div>
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
        <br><br>
    </main>

    <!--news section starts here  -->
    <div class = "container">
        <div class = "row">
            <div class="col">
                <h1>News<hr></h1>
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-4">

                <!-- Card Narrower -->
                <div class="card card-cascade narrower">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                    <img  class="card-img-top" src="images/news_2.jpg" height="200px;" alt="Card image cap">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">

                    <!-- Label -->
                    <!-- here lies the calendar icon -->
                    <!-- Title -->
                    <h4 class="font-weight-bold card-title">Presentation on the Importance of Technical Education</h4>
                    <!-- Text -->
                    <p class="card-text">24 June, 2019 20:42<hr>Dr. Reshma Shrestha and Dr. Krishna Prasad Shrestha (Assistant Professors from ...</p>
                    <!-- Button -->
                    <a href = "news_detail.php"><button type="button" class="btn btn-outline-dark">Read more</button></a>

                    </div>

                </div>
            </div>
            <div class = "col-md-4">
                <div class="card card-cascade narrower">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                    <img  class="card-img-top" src="http://www.ku.edu.np/news/gallery/1/2019-06-18-Global-Crisisonomy-Symposium-pic.jpg" height="200px" alt="Card image cap">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">

                    <!-- Label -->
                    <!-- here lies the calendar icon -->
                    <!-- Title -->
                    <h4 class="font-weight-bold card-title">Dr. Sharma Attended 8th Global Crisisonomy Symposium</h4>
                    <!-- Text -->
                    <p class="card-text">18 June, 2019 14:45<hr>Dr. Gajendra Sharma, Department of Computer Science and Engineering participated in Eighth Global ...</p>
                    <!-- Button -->
                    <button type="button" class="btn btn-outline-dark">Read more</button>

                    </div>

                </div>
            </div>
            <div class = "col-md-4">
                <div class="card card-cascade narrower">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                    <img  class="card-img-top" src="http://www.ku.edu.np/news/gallery/1/ttc-inaguration-2014.jpg" height="200px" alt="Card image cap">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">

                    <!-- Label -->
                    <!-- here lies the calendar icon -->
                    <!-- Title -->
                    <h4 class="font-weight-bold card-title">Training program by General Electric (GE) Renewable Energy</h4>
                    <!-- Text -->
                    <p class="card-text">16 June, 2019 17:34<hr>A 4 days training program from June 10-11 & 13-14 was held in Kathmandu University conducted by GE Renewable Energy...</p>
                    <!-- Button -->
                    <button type="button" class="btn btn-outline-dark">Read more</button>

                    </div>

                </div>
            </div>
        </div>
        <br>
        <div class="float-right"><a href = "news_lists.php"><button type="button" class="btn btn-outline-dark">Load More News...</button></a></div><br>
    </div>
    <br>
    <!-- notice starts here -->
    <div class="background2">
        <div class = "container">
            <div class = "row">
                <div class="col">
                    <h1>Notice and Announcement<hr></h1>
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-4">

                    <!-- Card Narrower -->
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                        <img  class="card-img-top" src="http://www.ku.edu.np/news/gallery/1/Vacancy-GE-TA-RA-2018.jpg" style="object-fit: contain;" height="300px" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">

                        <!-- Label -->
                        <!-- here lies the calendar icon -->
                        <!-- Title -->
                        <h4 class="font-weight-bold card-title">Result of Vacancy Announcement ( School of Engineering)</h4>
                        <!-- Text -->
                        <button type="button" class="btn btn-outline-dark">Read more</button>

                        </div>

                    </div>
                </div>
                <div class = "col-md-4">
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                        <img  class="card-img-top" src="http://www.ku.edu.np/news/gallery/1/Vacancy_TA_IT-SoS.jpeg" style="object-fit: contain;" height="300px;" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">

                        <!-- Label -->
                        <!-- here lies the calendar icon -->
                        <!-- Title -->
                        <h4 class="font-weight-bold card-title">Vacancy Announcement for Teaching Assistant - School of Science</h4>
                       <!-- Button -->
                        <button type="button" class="btn btn-outline-dark">Read more</button>

                        </div>

                    </div>
                </div>
                <div class = "col-md-4">
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                        <img  class="card-img-top" src="https://kusoa.edu.np/wp-content/uploads/2019/06/Admission-Open-724x1024.jpg" style="object-fit: contain;" height="300px" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">

                        <!-- Label -->
                        <!-- here lies the calendar icon -->
                        <!-- Title -->
                        <h4 class="font-weight-bold card-title">ADMISSIONS OPEN FOR UNDERGRADUATE PROGRAMS!</h4>
                       <!-- Button -->
                        <button type="button" class="btn btn-outline-dark">Read more</button>

                        </div>

                    </div>
                </div>
            </div>
            <br>
            <div class="float-right"><button type="button" class="btn btn-outline-dark">Load More Notices...</button></div><br>
        </div>
    </div>
    <br>
    <!-- seminars start here -->
    <div class = "container">
        <div class = "row">
            <div class="col">
                 <h1>Seminar and Talk Program<hr></h1>
             </div>
        </div>
        <div class = "row">
            <div class = "col-md-4">

                <!-- Card Narrower -->
                <div class="card card-cascade narrower">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                    <img  class="card-img-top" src="http://www.ku.edu.np/news/gallery/1/Guest-Lecture_Yogan-Khatri-31-may-2019.jpeg" style="object-fit: contain;" height="300px" alt="Card image cap">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">

                    <!-- Label -->
                    <!-- here lies the calendar icon -->
                    <!-- Title -->
                    <h4 class="font-weight-bold card-title">Special Guest Lecture on "Bridging Genes to Chemistry: Discovery of Novel Bio-molecules"</h4>
                    <!-- Button -->
                    <button type="button" class="btn btn-outline-dark">Read more</button>

                    </div>

                </div>
            </div>
            <div class = "col-md-4">
                <div class="card card-cascade narrower">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                    <img  class="card-img-top" src="http://www.ku.edu.np/news/gallery/1/Guest-Lecture_Om-Krishna-Suwal-31-may-2019.jpeg" style="object-fit: contain;" height="300px" alt="Card image cap">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">

                    <!-- Label -->
                    <!-- here lies the calendar icon -->
                    <!-- Title -->
                    <h4 class="font-weight-bold card-title">Special Guest Lecture on "Nanopore Sequencing"</h4>
                    <!-- Text -->
                   
                    <button type="button" class="btn btn-outline-dark">Read more</button>

                    </div>

                </div>
            </div>
            <div class = "col-md-4">
                <div class="card card-cascade narrower">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                    <img  class="card-img-top" src="http://www.ku.edu.np/news/gallery/1/seminar-7-may-2019.JPG" style="object-fit: contain;" height="300px" alt="Card image cap">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">

                    <!-- Label -->
                    <!-- here lies the calendar icon -->
                    <!-- Title -->
                    <h4 class="font-weight-bold card-title">Invitation Notice for seminar( RDC)</h4>
                   <!-- Button -->
                    <button type="button" class="btn btn-outline-dark">Read more</button>

                    </div>

                </div>
            </div>
        </div>
        <br>
        <div class="float-right"><button type="button" class="btn btn-outline-dark">Load More seminars...</button></div><br>
    </div>
    <?php include 'footer.php';?>
</body>
</html>
