<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About KU</title>
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
        hr{
            background-color: #D8D9D9;
        }
        
    </style>
</head>
<body style="font-family: arial;">
    <nav class="navbar navbar-expand-lg navbar-light mx-auto" style="padding-left: 20%; background-color: #151515; color: white;">
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
    <?php include 'header.php' ?>
    <main>
        <div class = "container">
            <br><br>
            <div class="p-2"><h2>About KU<hr></h2></div>
            <img class="align-self-center mr-3 scale-down" src="img/Soe11.jpg" alt="department image">
            <br><br>
            <div class= "row">
                <div class = "col-md-3">
                    <div class=" flex-column">
                        <div class="say">
                            <div class="p-2 menuColor">About KU</div>
                            <a href = "#"><div class="p-2 inactiveBack">History</div></a>
                            <a href = "#"><div class="p-2 inactiveBack">Constitution</div></a>
                            <a href = "#"><div class="p-2 inactiveBack">Message from VC</div></a>
                            <a href = "#"><div class="p-2 inactiveBack">ISMS</div></a>
                            <a href = "#"><div class="p-2 inactiveBack">Library</div></a>
                            <a href = "#"><div class="p-2 inactiveBack">Fee Structure</div></a>
                            <br>
                            <div class="p-2 menuColor">Administration</div>
                            <a href = "#"><div class="p-2 inactiveBack">Admin Section</div></a>
                            <a href = "#"><div class="p-2 inactiveBack">Senate Member</div></a>
                            <a href = "#"><div class="p-2 inactiveBack">Board of trustees</div></a>
                            <a href = "#"><div class="p-2 inactiveBack">Executive Council</div></a>
                            <a href = "#"><div class="p-2 inactiveBack">Academic Council</div></a>
                            <br>
                            <div class="p-2 menuColor">Affiliates and Donors</div>
                            <a href = "#"><div class="p-2 inactiveBack">Affiliated Colleges</div></a>
                            <a href = "#"><div class="p-2 inactiveBack">Collaborating Colleges</div></a>
                            <a href = "#"><div class="p-2 inactiveBack">Major Donors</div></a>
                        </div>
                    </div>
                </div>

                <div class = "col-md-9">
                    <h4>About Kathmandu University</h4>
                    <hr>
                    <p>
                        Founded in 1994, Kathmandu University, Dhulikhel, has rapidly achieved a status of one of the top institutions in the nation for higher education and scientific research.
                    </p>
                    <p>
                        With the need to develop and deploy the digital concepts that are changing the world rapidly with astonishing inventions and innovation,Kathmandu University launched Computer Science and Engineering program.
                    </p>
                    <h6>Mission</h6>
                    <ul>
                        <li>To become a centre of excellence in computer science and engineering education and research.</li>
                        <li>To produce self-motivated, qualified, confident and creative graduate of high quality with entrepreneurial attitude.</li>
                        <li>To closely collaborate with the industries and institutions so that the education and research in the department in line with the current domestic and international needs.</li>
                    </ul>
                    <h6>Salient Features</h6>
                    <ul>
                        <li>Involvement of IT expert in the subject committee.</li>
                        <li>Updated syllabus to meet the industry requirement.</li>
                        <li>Faculty members with reputed degrees and expertise.</li>
                        <li>Industry based Faculty members</li>
                    </ul>
                </div>
            </div>
        </div>
    </main> 
    <?php include 'footer.php' ?>
</body>
</html>