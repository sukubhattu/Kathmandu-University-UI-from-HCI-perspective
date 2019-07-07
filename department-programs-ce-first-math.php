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
        .menuColor{
            background-color:#193250 ;
            color: white;
        }
        .inactiveBack{
            background-color:#EAECEE;
        }
        .schools{
          background-color: #3064A3;
          border-radius: 7px;
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
                                <a href = "department-programs.php"><div class="p-2 activeBack">Programs</div></a>
                                <a href = "department-faculty.php"><div class="p-2 inactiveBack">Faculty</div></a>
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
                            <li class="breadcrumb-item "><a href = "department-programs.php">Programs</a></li>
                            <li class="breadcrumb-item active"> <a href = "department-programs-ce.php">BE in CE</a></li>
                            <li class="breadcrumb-item"><a href = "department-programs-ce-first.php">Course-First</a></li>
                            <li class="breadcrumb-item active">MATH 101</li>
                        </ol>
                    </nav>
                    <h4>MATH 101</h4>
                    <p>
                        <b>Course Name:</b> &nbsp; Calculus and Linear Algebra
                        <br>
                        <b>Credit:</b> &nbsp;3
                    </p>

                    <u><i>Objective</i></u>: &nbsp; To extend the design methods from control engineering, to learn using control system design tools, and to introduce equipment for realisation of control systems.
                    <br>
                    <br>
                    <h5>Syllabus</h5>
                    <br>
                    <p>
                        <b>Introduction:</b> The control problem; System specification: demands and desires; System realisation: analog and digital systems, design tools and approaches
                    </p>
                    <p>
                        <b>System description and analysis:</b> Single-Input-Single-Output (SISO) systems; Multi-Input-Multi-Output (MIMO) systems; Linearization; Block-diagrams, transfer functions (matrices), state space methods; Controllability and observability.
                    </p>
                    <p>
                        <b>Computer simulation and realization:</b> Introduction to computer tools for analysis and design; Bock diagrams and op-amp circuits; Realisation of transfer functions and state space models
                    </p>
                    <p>
                        <b>Introduction:</b> The control problem; System specification: demands and desires; System realisation: analog and digital systems, design tools and approaches
                    </p>
                    <p>
                        <b>System description and analysis:</b> Single-Input-Single-Output (SISO) systems; Multi-Input-Multi-Output (MIMO) systems; Linearization; Block-diagrams, transfer functions (matrices), state space methods; Controllability and observability.
                    </p>
                    <p>
                        <b>Computer simulation and realization:</b> Introduction to computer tools for analysis and design; Bock diagrams and op-amp circuits; Realisation of transfer functions and state space models
                    </p>
                    <br>
                    <h5>Reference Books</h5>
                    <br>
                    <ol>
                        <li>Chen, Analog and Digital Control System Design Saunders, College Publishing 1993</li>
                        <li>Wolovich, Automatic Control Systems: Basic Analysis and Design, Saunders College Publishing 1994</li>
                        <li>Thompson, Control Systems Engineering and Design, ELBS (Longman) 1990</li>
                        <li>Chen, Analog and Digital Control System Design Saunders, College Publishing 1993</li>
                        <li>Wolovich, Automatic Control Systems: Basic Analysis and Design, Saunders College Publishing 1994</li>
                        <li>Thompson, Control Systems Engineering and Design, ELBS (Longman) 1990</li>
                    </ol>
                </div>
            </div>
        </div>
    </main> 
    <?php include 'footer.php';?> 

</body>
</html>