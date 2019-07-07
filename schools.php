<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KU Schools</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
    .scale-down {
        width: 100%;
        height: 200px;
        object-fit: cover;
        padding-top: 5px;
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
    hr{
        background-color: #D8D9D9;
    }
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
    
    </style>
</head>
<body style="background-color: #F8F9FA; font-family:Arial">
    <?php include 'header.php';?>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"  style="margin-left: 100px;"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Schools</li>
          </ol>
        </nav>
        <br>
    <div class = "container">
        <h2>Schools Of Kathmandu University <hr></h2>
        <div class = "row">
            <div class = "col-md-3 col-sm-12">
                <div class=" flex-column">
                    <div class="say">
                        <div class="p-2 menuColor">Study at KU</div>
                        <a href = "exams-final.php"><div class="p-2 activeBack">Schools</div></a>
                        <a href = "exams-final-view.php"><div class="p-2 inactiveBack">Admission Process</div></a>
                        <a href = "fee.php"><div class="p-2 inactiveBack">Fee Structure</div></a>
                    </div>
                </div>
            </div>
            <div class = "col-md-3 col-sm-12">
                <div class="card" style="height: 430px;">
                    <!-- Card image -->
                    <a href = "SOE.php">
                        <img class="scale-down" src="img/schools/engineering.jpg"  alt="Card image cap">
                    </a>
                    <!-- Card content -->
                    <div class="card-body">
                        <!-- Title -->
                        <a href = "soe.php">
                            <h4 class="card-title">School of Engineering</h4>
                        </a>
                        <!-- Text -->
                        <p class="card-text">The mission of the School of Engineering is to produce market appliciable engineers.</p>
                    </div>      
                </div>
            </div>

               
            <div class = "col-md-3 col-sm-12">
                <div class="card">
                    <!-- Card image -->
                    <img class="scale-down" src="img/schools/education.png" alt="Card image cap">
                    
                    <!-- Card content -->
                    <div class="card-body">

                        <h4 class="card-title"><a>School of Education</a></h4>
                        <!-- Text -->
                        <p class="card-text">We create the teachers that can build the nation's youth into the pillars that hold our nation with much knowledge and creativity.</p>                    
                    </div>      
                </div>
            </div>
            <div class = "col-md-3 col-sm-12">
                <div class="card">
                    <!-- Card image -->
                    <img class="scale-down" src="img/schools/medical.jpg" alt="Card image cap">
                    
                    <!-- Card content -->
                    <div class="card-body">
                    
                        <!-- Title -->
                        <h4 class="card-title">School of Medical Sciene</h4>
                        <!-- Text -->
                        <p class="card-text">School of medical sciences creates high quality practitioners of the medical field, doctors of the best caliber.</p>
                    
                    </div>      
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class = "row">
            <div class="col-md-3 col-sm-12">
            </div>
            
            <div class = "col-md-3 col-sm-12">
                    <div class="card">
                        <!-- Card image -->
                        <img class="scale-down" src="img/schools/science.jpg" alt="Card image cap">
                        
                        <!-- Card content -->
                        <div class="card-body">
                        
                            <!-- Title -->
                            <h4 class="card-title">School of Science</h4>
                            <!-- Text -->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                        </div>      
                    </div>

            </div>
            <div class = "col-md-3 col-sm-12">
                    <div class="card">
                        <!-- Card image -->
                        <img class="scale-down" src="img/schools/law.jpg" alt="Card image cap">
                        
                        <!-- Card content -->
                        <div class="card-body">
                        
                            <!-- Title -->
                            <h4 class="card-title">School of Law</h4>
                            <!-- Text -->
                            <p class="card-text">The school builds lawyers of high ethics and knowledge about their country's law enforcement.</p>
                        
                        </div>      
                    </div>
            </div>
            <div class = "col-md-3 col-sm-12">
                 <div class="card">
                    <!-- Card image -->
                    <img class="scale-down" src="img/schools/management.png" alt="Card image cap">
                    
                    <!-- Card content -->
                    <div class="card-body">
                    
                        <!-- Title -->
                        <h4 class="card-title"><a>School of Management</a></h4>
                        <!-- Text -->
                        <p class="card-text">We offer our students top quality management skills in the context of all kinds of industries.</p>
                    
                    </div>      
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-3 col-sm-12">
            </div>
            <div class = "col-md-3 col-sm-12">
                <div class="card">
                    <!-- Card image -->
                    <img class="scale-down" src="img/schools/management.png" alt="Card image cap">
                    
                    <!-- Card content -->
                    <div class="card-body">
                    
                        <!-- Title -->
                        <h4 class="card-title">School of Arts</h4>
                        <!-- Text -->
                        <p class="card-text" >The school is a playground for creative minds to truly express their individuality in the form of art.</p>
                    
                    </div>      
                </div>
            </div>
        </div>
        </div>
        <br>
        <br>
    </div>
    <?php include 'footer.php';?>
</body>
</html>