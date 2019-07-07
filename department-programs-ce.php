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
            <div class="p-2"><h2>Department of Computer Science and Engineering</h2></div>            <hr>
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
                            <li class="breadcrumb-item active">BE in CE</li>
                        </ol>
                    </nav>
                    <h4>Bachelor of Engineering in Computer Engineering</h4>
                    <p>
                        The Bachelor of Engineering program is the core program of the department. The department gives strong emphasis on facilitating learning by doing process for the students. Strong and modular course structure is followed. Each courses is given adequate practical components. Level of engineering project practice is carefully planned. Continuous improvement in the curriculum and course delivery method are always sought.
                    </p>
                    <hr>
                    <h4>Courses</h4>
                    <p>
                        The courses in the Bachelor of Engineering program of the department can be divided into the followings.
                    </p>
                    <ul>
                        <li>First Year &nbsp; <a href = "department-programs-ce-first.php"><span class="badge badge-primary">Click here for more info</span></a></li>
                        <li>Second Year &nbsp; <span class="badge badge-primary">Click here for more info</span></li>
                        <li>Third Year &nbsp; <span class="badge badge-primary">Click here for more info</span></li>
                        <li>Four Year &nbsp; <span class="badge badge-primary">Click here for more info</span></li>
                    </ul>
                    <hr>
                    <h4>Guidelines</h4>
                    <ul>
                        <li>Project Proposal Format</li>
                        <li>General Guideline Preparing Project Report or Project Activity Report</li>
                        <li>Project Final/Completion Report Format</li>
                        <li>Lab Report Format</li>
                        <li>Project Log Sheet</li>
                    </ul>
                </div>
            </div>
        </div>
    </main> 
    <?php include 'footer.php';?> 

</body>
</html>