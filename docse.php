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

    </style>
</head>
<body>
    <?php include 'header.php';?> 
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item "><a href = "schools.php">Schools</a></li>
        <li class="breadcrumb-item "><a href = "soe.php">SoE</a></li>
        <li class="breadcrumb-item active">DoCSE</li>
      </ol>
    </nav> 
    <div class = "container">
        <div class = "row">
            <div class= "col-md-4 col-sm-12">
                <div class="d-flex flex-column">
                    <div class="p-2" style="color: #ffffff; background-color:#001a4d"><h6>Programs</h6></div>
                </div>
                <ul>
                    <li> Undergraduate</li>
                    <li>Graduate</li>
                    <li>PhD</li>
                </ul>
            </div>
            <div class= "col-md-4 col-sm-12">
                <div class="d-flex flex-column">
                    <div class="p-2" style="color: #ffffff; background-color:#001a4d"><h6>Faculty</h6></div>
                </div>
                <ul>
                    <li> HoD</li>
                    <li>Teaching Staffs</li>
                    <li>Non Teaching Staffs</li>
                </ul>
            </div>
            <div class= "col-md-4 col-sm-12">
                <div class="d-flex flex-column">
                    <div class="p-2" style="color: #ffffff; background-color:#001a4d"><h6>Laboratory</h6></div>
                </div>
                <ul>
                    <li> DLR</li>
                    <li>NLP</li>
                </ul>
            </div>
        </div>
        <br>
        <div class = "row">
            <div class= "col-md-4 col-sm-12">
                <div class="d-flex flex-column">
                    <div class="p-2" style="color: #ffffff; background-color:#001a4d"><h6>KUCC</h6></div>
                </div>
                <ul>
                    <li> Workshops</li>
                    <li>News</li>
                    <li>Events</li>
                </ul>
            </div>
            <div class= "col-md-4 col-sm-12">
                <div class="d-flex flex-column">
                    <div class="p-2" style="color: #ffffff; background-color:#001a4d"><h6>Fee Structure</h6></div>
                </div>
                <ul>
                    <li> Undergraduate</li>
                    <li>Graduate</li>
                    <li>PhD</li>
                </ul>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?> 
</body>
</html>