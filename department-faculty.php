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
        .schools{
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
        .photo {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;       
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
                                <li class="breadcrumb-item active">Faculty</li>
                            </ol>
                        </nav>
                    <h4>Faculty Members of Department</h4>
                    <hr>
                    <h5>Head of Department</h5>
                    <br>
                    <div class = "row">
                        <div class = "col-md-3">
                            <center>
                                <img src="img/dean.jpg" class = "photo" alt="Hod image">
                                <br>
                                Dr Bal K Bal
                                <br>
                                <a href ="department-faculty-hod.php"><span class =" badge badge-primary">See full profile</span></a>
                            </center>
                        </div>
            
                   
                        <div class = "col-md-9">
                            <div class="card example-1 scrollbar-ripe-malinka">
                                <div class="card-body">
                                    <h5 style = "color:#ff4d4d;"> Message from HOD</h5>
                                    <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out
                                    qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan
                                    mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim
                                    qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic.
                                    Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    
                    <div class = "row">
                        <div class = "col-md-4">
                            <br>
                            <h5>Professors</h5>
                            <div class="card shadow">
                                <div class="card-body">
                                    <center>
                                        <img src="http://www.ku.edu.np/cse/dlrlab/msrw/image/members/manish.jpg" alt=" sandesh photo" class="photo">
                                        <span><b><h5>Dr. Manish Pokhrel</h5></b></span>
                                        <br>
                                        <span class =" badge badge-primary">See full profile</span>
                                    </center>
                                </div>
                            </div>
                        </div> 
                                          
                        <div class = "col-md-4">
                            <br>
                            <h5>Associate Profressors</h5> 
                            <div class="card shadow">
                                <div class="card-body">
                                   <center>
                                        <img src="https://livedna.net/images/scientist/977.3229.jpg" alt=" sandesh photo" class="photo">
                                        <span><b><h5>Dr. Gajendra Sharma</h5></b></span>
                                        <br>
                                        <span class =" badge badge-primary">See full profile</span>
                                    </center>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <br>
                    <h5>Assistant Professors</h5>
                    <div class = "row">
                        <div class = "col-md-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <center>
                                        <img src="http://ku.edu.np/cse/faculty/manoj/img/manoj.jpg" alt=" sandesh photo" class="photo">
                                        <span><b><h5>Manoj Shakya</h5></b></span>
                                        <br>
                                        <span class =" badge badge-primary">See full profile</span>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class = "col-md-4">
                            <div class="card shadow">
                                <div class="card-body">
                                   <center>
                                        <img src="https://i1.rgstatic.net/ii/profile.image/522463981338624-1501576528039_Q512/Rabindra_Bista2.jpg" alt=" sandesh photo" class="photo">
                                        <span><b><h5>Dr. Rabindra Bista</h5></b></span>
                                        <br>
                                        <span class =" badge badge-primary">See full profile</span>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class = "col-md-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <center>
                                        <img src="http://ku.edu.np/cse/faculty/sushil/image/sushilshrestha.jpg" alt=" sandesh photo" class="photo">
                                        <span><b><h5>Sushil Shrestha</h5></b></span>
                                        <br>
                                        <span class =" badge badge-primary">See full profile</span>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </main> 
    <?php include 'footer.php';?> 

</body>
</html>