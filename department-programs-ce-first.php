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
        td a{
            color: black;
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
                            <li class="breadcrumb-item active"> <a href = "department-programs-ce.php">BE in CE</a></li>
                            <li class="breadcrumb-item active">Course-First</li>
                        </ol>
                    </nav>
                    <h4>Bachelor of Engineering in Computer Engineering</h4>
                    <p>
                        The Syllabus for courses of first yearcan be viewed by clicking on the Course Code of the courses.
                    </p>
                    <h4>First Semester</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Course Title</th>
                            <th scope="col">Credit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href = "department-programs-ce-first-math.php">MATH 101</a></th>
                                <td><a href = "department-programs-ce-first-math.php">Calculus and Linear Algebra</a></td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td><a href="#">PHYS 101</a> </th>
                                <td>General Physics I</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td><a href="#">CHEM 101</a> </th>
                                <td>General Chemistry </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td><a href="department-programs-ce-first-math.php">MATH 101</a></th>
                                <td>Calculus and Linear Algebra</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td><a href="#">PHYS 101 </a></th>
                                <td>General Physics I</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td><a href="#">CHEM 101</a> </th>
                                <td>General Chemistry </td>
                                <td>3</td>
                            </tr>

                            <th colspan="2">Total</th>
                            <td >18</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <h4>Second Semester</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Course Title</th>
                            <th scope="col">Credit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>MATH 101</th>
                                <td>Calculus and Linear Algebra</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>PHYS 101 </th>
                                <td>General Physics I</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CHEM 101 </th>
                                <td>General Chemistry </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>MATH 101</th>
                                <td>Calculus and Linear Algebra</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>PHYS 101 </th>
                                <td>General Physics I</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CHEM 101 </th>
                                <td>General Chemistry </td>
                                <td>3</td>
                            </tr>

                            <th colspan="2">Total</th>
                            <td >18</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main> 
    <?php include 'footer.php';?> 

</body>
</html>