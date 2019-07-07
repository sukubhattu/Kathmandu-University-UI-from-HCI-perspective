<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KU Exams</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .menuColor{
            background-color:#193250 ;
            color: white;
        }
        .Exam-Section{
          background-color: #3064A3;
          border-radius: 7px;
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
        .scale-down {
        width: 100%;
        height: 350px;
        object-fit: cover;
        padding-top: 5px;
        }
        li a{
        color: black;
        }
        li a:hover{
            color: #597FCD;
        }
        
    </style>
</head>
<body style="font-family: arial;">
<?php include 'header.php';?> 
<nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item" style="margin-left: 100px;"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Exam-Section</a></li>
          </ol>
        </nav> 
    <main>
        <br>
        <div class = "container">

            <div class="p-2"><h2>Office Of Controller Of Examination<hr></h2></div>
            <img class="align-self-center mr-3 scale-down" src="img/Soe11.jpg" alt="department image">
            <br><br>
            <div class= "row">
                <div class = "col-md-3">
                        <div class=" flex-column">
                            <div class="say">
                                <div class="p-2 menuColor">Menu</div>
                                <a href = "exams-final.php"><div class="p-2 inactiveBack">Exam Schedues & Results</div></a>
                                <a href = "exams-final-view.php"><div class="p-2 activeBack">View Results</div></a>
                                <a href = "http://exam.ku.edu.np/?page_id=1983"><div class="p-2 inactiveBack">Exam Forms</div></a>
                                <a href = "#"><div class="p-2 inactiveBack">Exam Rules</div></a>
                                <a href = "#"><div class="p-2 inactiveBack">Contact Us</div></a>
                            </div>
                        </div>
                        <br><br>
                </div>
                <div class = "col-md-9">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="exams-final.php">Exams</a></li>
                            <li class="breadcrumb-item active"><a href="exams-final-view.php">View Results</a></li>
                            <li class="breadcrumb-item active">My result</li>

                        </ol>
                    </nav>
                    <h4>Here is your result.</h4>
                    <hr>
                    <div class = "row">
                            <div class = "col-md-3">
                                <b>Program:</b>
                            </div>
                            <div class ="col-md-3">
                                BE in Computer Engineering
                            </div>
                        </div>
                        <br>
                        <div class = "row">
                            <div class = "col-md-3">
                                <b>Name of student:</b>
                            </div>
                            <div class ="col-md-3">
                                Bhandari Pragya
                            </div>
                        </div>
                        <br>
                        <div class = "row">
                            <div class = "col-md-3">
                                <b> Registration No.:</b>
                            </div>
                            <div class ="col-md-3">
                                020620-16
                            </div>
                        </div>
                        <br>
                        <div class = "row">
                            <div class = "col-md-3">
                                <b> Exam Roll No:</b>
                            </div>
                            <div class ="col-md-3">
                                32236
                            </div>
                        </div>
                        <br>
                        <div class = "row">
                            <div class = "col-md-3">
                                <b>Level:</b>
                            </div>
                            <div class ="col-md-3">
                                III year/ II sem
                            </div>
                        </div>
                        <br>
                        
                        <table class="table table-bordered table-hover">
                        
                            <thead class="thead-dark">
                                <tr>
                                    <th> Course Number</th>
                                    <th>Course Title</th>
                                    <th>Credit</th>
                                    <th>Grade</th>
                                    <th>Grade Value</th>
                                    <th>Grade Points</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>COMP 101</td>
                                <td>Structured Programming in C</td>
                                <td>3</td>
                                <td>4</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Math 101</td>
                                <td>Basic Calculus</td>
                                <td>3</td>
                                <td>4</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>PHYS 101</td>
                                <td>Basic Physics</td>
                                <td>3</td>
                                <td>4</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Chem 101</td>
                                <td>Basic Computer</td>
                                <td>3</td>
                                <td>4</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                        YOUR FINAL GPA IS: <b>3.9</b>

                </div>
            </div>
        </div>
    </main> 
    <?php include 'footer.php';?> 

</body>
</html>