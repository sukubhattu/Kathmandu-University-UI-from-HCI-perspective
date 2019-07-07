<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Of Engineering</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <style>
        .navbar-custom {
            background-color:#001a4d;
        }
        .photo{ 
            padding-right: 30px;
            padding-left: 30px;
        }
        .jumbotron{
        background-color:#4d94ff
        }
        .scale-down {
            object-fit: scale-down;
        }
        .section-divider {
            background: #6ca3d3;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #3290cf, #6ca3d3);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #3290cf, #6ca3d3);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            margin-bottom: 3rem;
            padding: 2rem 0;
            font-size: 30px;
        }
        .card a{
        text-decoration: none;
        color:black;
        }
        .card a:hover
        {
            text-decoration: none;
            color: #17429A;
        }
        p{
            color:black;
        }
        li a{
            color: black;
        }
        li a:hover{
            color: #597FCD;
        }
        .card{
            min-height: 400px;
        }
        .media a{
            color: black;
        }
        .media a:hover{
            color: #17429A;
        }
        hr{
            color: #D8D9D9;
        }
        .schools{
          background-color: #3064A3;
          border-radius: 7px;
        }

    </style>
</head>
<body style="font-family:Arial">
<?php include 'header.php';?>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item" style="margin-left: 100px;"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="schools.php">Schools</a></li>
        <li class="breadcrumb-item active">School Of Engineering</li>
      </ol>
    </nav>
    <div class = "container">
        <br>
        <h2>School Of Engineering<hr></h2>
        <h6> Department Overview </h6>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <p>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words
        </p>
        <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
        </p>
    </div>
    
        <hr>
        <div class = "container">
            <center> <h5>Departments of School of Engineering</h5><br></center>
            <div class = "row">
                <div class = "col-md-4 col-sm-12">
                    <div class="media">
                        <img class="align-self-center mr-3 scale-down" src="img/icons/computer engineering.svg" alt="department icon" style="width:50px;height:50px">
                        <div class="media-body">
                            <p class="mb-0"><a href ="department-home.php">Department of Computer Science and Engineering</a></p>
                        </div>
                    </div>
                 </div>
                <div class = "col-md-4 col-sm-12">
                    <div class="media">
                        <img class="align-self-center mr-3 scale-down" src="img/icons/chemical.png" alt="department icon" style="width:50px;height:50px">
                        <div class="media-body">
                            <p class="mb-0">Department of Chemical Science & Engineering</p>
                        </div>
                    </div>
                </div>
                <div class = "col-md-4 col-sm-12">
                    <div class="media">
                        <img class="align-self-center mr-3 scale-down" src="img/icons/civil.svg" alt="Pdepartment iconaris" style="width:50px;height:50px">
                        <div class="media-body">
                            <p class="mb-0">Department of Civil & Geomatics Engineering</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class = "row">
                <div class = "col-md-4 col-sm-12">
                    <div class="media">
                        <img class="align-self-center mr-3 scale-down" src="img/icons/mechanical.svg" alt="department icon" style="width:50px;height:50px">
                        <div class="media-body">
                            <p class="mb-0">Department of Mechanical Engineering</p>
                        </div>
                    </div>
                    </div>
                <div class = "col-md-4 col-sm-12">
                    <div class="media">
                        <img class="align-self-center mr-3 scale-down" src="img/icons/electronics.svg" alt="department icon" style="width:50px;height:50px">
                        <div class="media-body">
                            <p class="mb-0">Department of Electrical & Electronics Engineering</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <hr>
    <br>
    
    <br>
    <div class = "container">
        <div class = "row">
            <div class = "col-md-6">
                <h5>Objectives</h5>
                <br>
                <p>
                    The programmes under the School of Engineering & Technology are designed to enable students to: 
                </p>
                <ul>
                    <li>Gain sufficient knowledge and understanding of the appropriate scientific and mathematical fundamentals necessary to develop their professional skills</li>
                    <li>Be proficient in integrating knowledge and applying their understanding in identifying problems and producing powerful solutions</li>
                    <li>Have awareness and understanding of different cultures and social conditions</li>
                    <li>Attain professional competence, intellectual maturity and personal growth along with a commitment for ethical development of the industry</li>
                </ul>
            </div>
            <div class = "col-md-6">
                <h5>Key Highlights</h5>
                <br>
                <ul>
                    <li>Gain sufficient knowledge and understanding of the appropriate scientific and mathematical fundamentals necessary to develop their professional skills</li>
                    <li>Be proficient in integrating knowledge and applying their understanding in identifying problems and producing powerful solutions</li>
                    <li>Have awareness and understanding of different cultures and social conditions</li>
                    <li>Attain professional competence, intellectual maturity and personal growth along with a commitment for ethical development of the industry</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="section-divider py-4 mb-0">
        <div class="container">
            <div class = "row">
                    <div class = "col-md-1">
                        
                    </div>
                    <div class = "col-md-3">
                            4 <br>Departments
                        </div>
                    
                    <div class = "col-md-3">
                        216 <br>Courses
                    </div>
                    <div class = "col-md-3">
                        20000 <br> Alumnni
                    </div>
                    <div class = "col-md-2">
                        60+ <br> faculty
                    </div>
                </div>
        </div>
    </section>
    <br>
    <div class = "container">
        <div class = "row">
            <div class = "col-md-3">
                <img src="img/dean.jpg" alt="dean image">
                <h5>Dambar Bahadur Nepali</h5>
            </div>
            <!-- <div class = "col-md-1">

            </div> -->
            <div class = "col-md-9">
                <div class="card example-1 scrollbar-ripe-malinka">
                    <div class="card-body">
                        <h5 style = "color:#ff4d4d;"> Message from Dean</h5>
                        <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out
                        qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan
                        mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim
                        qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic.
                        Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                        <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out
                        qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan
                        mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim
                        qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic.
                        Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <?php include 'footer.php';?>
</body>
</html>