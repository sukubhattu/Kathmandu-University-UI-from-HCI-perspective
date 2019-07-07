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
    <style>
        li a{
        color: black;
    }
    li a:hover{
        color: #597FCD;
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
<body style="font-family: arial; background-color: #F8F9FA">
    <?php include 'header.php' ?>
    <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"  style="margin-left: 100px;"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="schools.php">Schools</a></li>
            <li class="breadcrumb-item">Fee Structure</li>
          </ol>
        </nav>
    <br>

    <div class = "container">
        <h2>Fee Structure of School Of Engineering</h2><hr>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class=" flex-column">
                    <div class="say">
                        <div class="p-2 menuColor">Study at KU</div>
                        <a href = "schools.php"><div class="p-2 inactiveBack">Schools</div></a>
                        <a href = "#"><div class="p-2 inactiveBack">Admission Process</div></a>
                        <a href = "fee.php"><div class="p-2 activeBack">Fee Structure</div></a>
                    </div>
                </div>
            </div>

            <div class="col">
                <p>School of Engineering offers programs under following headings. The fee for each program for the year of 2019 is listed as below.</p>
                <h5>Under Graduate</h5>
                <table class="table table-hover table-bordered">
                    
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Programs</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Total Fee(NRs)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Bachelor in Engineering Computer Engineering</td>
                            <td>4 Years</td>
                            <td>6,90,000</td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>Bachelor in Engineering Civil Engineering</td>
                            <td>4 Years</td>
                            <td>6,90,000</td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>Bachelor in Engineering Mechanical Engineering</td>
                            <td>4 Years</td>
                            <td>6,90,000</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Bachelor in Engineering Electrical Engineering</td>
                            <td>4 Years</td>
                            <td>6,90,000</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Bachelor in Engineering Electronics Engineering</td>
                            <td>4 Years</td>
                            <td>6,90,000</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Bachelor in Engineering Computer Engineering</td>
                            <td>4 Years</td>
                            <td>6,90,000</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Bachelor in Engineering Computer Engineering</td>
                            <td>4 Years</td>
                            <td>6,90,000</td>
                        </tr>
                    </tbody>
                </table>
                <h5> Graduate</h5>
                <table class="table table-hover table-bordered">
                    
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Programs</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Total Fee(NRs)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Masters in Engineering Computer Engineering</td>
                            <td>2 Years</td>
                            <td>8,60,000</td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>Masters in Engineering Civil Engineering</td>
                            <td>2 Years</td>
                            <td>8,60,000</td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>Masters in Engineering Mechanical Engineering</td>
                            <td>2 Years</td>
                            <td>8,60,000</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Masters in Engineering Electrical Engineering</td>
                            <td>2 Years</td>
                            <td>8,60,000</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Masters in Engineering Electronics Engineering</td>
                            <td>2 Years</td>
                            <td>8,60,000</td>
                        </tr>
                    </tbody>
                </table>
                <b>Note</b>
                <p>Corporate Sponsored: 1.5 times of normal fees.</p>

                <p>Project Sponsored: EC Decision dated 2072/9/24 - still applicable</p>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>