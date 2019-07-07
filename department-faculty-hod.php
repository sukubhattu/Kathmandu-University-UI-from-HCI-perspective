<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DoCSE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
    .schools{
          background-color: #3064A3;
          border-radius: 7px;
        }
        .menuColor{
            background-color:#193250 ;
            color: white;
        }
        .inactiveBack{
            background-color:#EAECEE;
        }
        .inactiveBack:hover{
            border-right-style: solid;
            border-right-width: 2px;
            border-right-color: #193250;
            background-color: #e0e1e3;
        }
        .activeBack{
            /* border-left: 3px solid blue; */
            background-color: #e0e1e3;
            border-right-style: solid;
            border-right-width: 2px;
            border-right-color: #193250;
        }
        .say a{
            color:black;
            text-decoration: none;
        }
        .say a:hover{
            color:#132395;
            text-decoration: none;
        }
        hr{
            background-color: #D8D9D9;
        }
        .photo{ 
        border-radius: 47%;
        width: 220px;
        }
        li a{
        color: black;
        }
        li a:hover{
            color: #597FCD;
        }
    </style>
</head>
<body style="font-family: arial">
<?php include 'header.php';?> 
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item" style="margin-left: 100px;"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="schools.php">Schools</a></li>
            <li class="breadcrumb-item"><a href=SOE.php>School Of Engineering</a></li>
            <li class="breadcrumb-item active">DoCSE</li>
          </ol>
        </nav> 
    <main>
        <div class = "container">
            <div class="p-2"><h2>Department of Computer Science and Engineering</h2></div>
            <hr>
            <div class= "row">
                <div class = "col-md-3">
                    <div class=" flex-column">
                        <div class="say">
                            <div class="p-2 menuColor">Menu</div>
                            <a href = "department-home.php"><div class="p-2 inactiveBack">Home</div></a>
                            <a href = "department-programs.php"><div class="p-2 inactiveBack">Programs</div></a>
                            <a href = "department-faculty.php"><div class="p-2 activeBack">Faculty</div></a>
                            <a href = "department-labrotary.php"><div class="p-2 inactiveBack">Labrotary</div></a>
                            <a href = "department-projects.php"><div class="p-2 inactiveBack">Projects</div></a>
                            <a href = "department-research.php"><div class="p-2 inactiveBack">Research</div></a>
                            <a href = "department-contact.php"><div class="p-2 inactiveBack">Contact</div></a>
                        </div>
                    </div>
                    <br>
                </div>
                <div class = "col-md-9">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="department-home.php">DoCSE</a></li>
                                <li class="breadcrumb-item active"><a href = "department-faculty.php">Faculty</a></li>
                                <li class="breadcrumb-item active">HOD</li>
                            </ol>
                        </nav>
                        <center>
                            <img src="https://hlon.org/wp-content/uploads/2015/09/bal22.jpeg" alt=" sandesh photo" class="photo">
                            <span><b><h5>Dr Bal K Bal</h5></b></span>
                            <p>Head of Department</p>
                            <i>balkbal@ku.edu.np</i>
                            +977 9840261051
                        </center>
                        <hr>
                        <h5>About</h5>
                    <p>
                            Associate Professor & Head
Department of Computer Science & Engineering
Kathmandu University
                    </p>
                    <h5>Qualification</h5>
                    <ul>
                        <li>2012 - 2015
                        Ph.D. Computer Science & Engineering   Kathmandu University, Nepal</li>
                        <li>
                        2004
                        
                        Masters Degree in Informatics and Computer Engineering  Volgograd State Technical University, Russia</li>
                         <li>
                        2002
                        Bachelors Degree in Informatics and Computer Engineering  Volgograd State Technical University, Russia
                        </li>
                        
                    </ul>
                    <h5>Experience</h5>
                    <ul>
                        <li>05/18 - Present
                            Kathmandu University,Nepal<br>
                            Associate Professor, Department of Computer Science & Engineering
                        </li>
                        <li>
                            08/09 - Present
                            Kathmandu University,Nepal<br>
                            Assistant Professor, Department of Computer Science & Engineering
                            Lead, Information and Language Processing Research Lab 
                        </li>
                        <li>
                            09/15 - 08/16
                            University of Houston, TX, U.S.A<br>
                            Visiting Assistant Professor,Computer Science Department
                        </li>
                        <li>
                            03/05 - 07/09
                            Madan Puraskar Pustakalaya  Nepal<br>
                            Project Manager and Natural Language Processing Researcher
                        </li>
                        <li>
                            09/04 -02/05
                            Gandaki College of Engineering & Science,  Nepal<br>
                            Lecturer
                        </li>
                    </ul>
                    
                    
                    <h5>Award and Recognizition</h5>
                    <ul>
                        <li>    United Mission to Nepal (UMN) Scholarship for studies at Gandaki Awasiya Ma. Vi (from grade four to ten) and at Gandaki Boarding Higher Secondary School(from grade eleven to twelve), Lamachaur, Pokhara, Nepal.
                        </li>
                        <li> 
                            Scholarship (free tuition) under the sponsorship of the Russian Federation for a full term of Engineering Studies in Russia. 
                            Master's Degree (Hons.), "Red Diploma" 2004. 
                        </li>
                        <li>
                            Recommendation for a free PhD course by the State Attestation Commission (Russia) 2004 at Volgograd State Technical University for the academic year 2004-2007 
                        </li>
                        <li>
                            Certified registered computer engineer of "A" category by the Nepal Engineering Council, 2005.
                        </li>
                        <li>
                            Nominated as the finalist for the Fulbright PhD Science and Technology award 2007 by the bi-national Fulbright Commission Board of Nepal in the summer of 2006.
                        </li>
                    </ul>
                    <h5>Area of Intrest</h5>
                    <ul>
                        <li>Software Localization, Natural Language Processing, Language Technologies,
                        Social Computing, Trust Parameters in E-Government Systems, Cyber SecurityResearch</li>
                    </ul>
                </div>
            </div>
        </div>
    </main> 
    <?php include 'footer.php';?> 

</body>
</html>