<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Life</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        .scale-down {
        width: 100px;
        height: 100px;
        object-fit: cover;
        padding-top: 5px;
        }
        .nextButton{
        float: right;
        }
        .child2 {
            margin-left: auto;
            padding-right: 2%;
        }
        .parallax {
          /* The image used */
          background-image: url("https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80");
          overflow-x:hidden;


          /* Set a specific height */
          min-height: 500px; 
          width: 100%;
   
          /* Create the parallax scrolling effect */
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
        li a{
        color: black;
        }
        li a:hover{
            color: #597FCD;
        }
        .student{
          background-color: #3064A3;
          border-radius: 7px;
        }
    </style>
</head>
<body style="font-family: arial;">
    <?php include 'header.php';?> 
    <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item" style="margin-left: 100px;"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="student.php">Students</a></li>
            <li class="breadcrumb-item active">Student Life</li>
          </ol>
        </nav> 
            <div class="parallax">
                <div class="row">
                 <br>
                </div>
                <div class = "row">
                    <div class="col">
                        <h1><p style="text-align: right; padding-top: 150px; color: white; padding-right: 200px;">Student Section</p></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 style="padding-top: 70px;color: white; padding-bottom: 10px; padding-right: 200px; text-align: right;">Student Life</h2>
                    </div>
                </div>
            </div>
        <br><br>
            <div class = "container">



        <div class="row" style="padding-top: 30px; ">
            <div class="col">
                <h4>Academics<hr style="background-color: #D8D9D9;"></h4>
            </div>
        </div>
        <div class = "row" style="padding-bottom: 10px;">
            <div class="col"  width="250px" height: 150px;>
                <img width="400px" style="padding-right: 10px;" class="float-left" src="https://blog.werobotics.org/wp-content/uploads/2016/10/Nepal-Phase-2-0022-IMG_8678.jpg">
                <div style="  text-align: justify; padding-top: 10px; padding-bottom: 10px; padding-right:10px; padding-left: 10px; min-height: 150px;">
                    <p>The academic programs of the University are based on credit-semester system with continuous internal evaluations. The University has adopted 1 to 10 teacher–student ratio. However, KU is very cautious in recruitment of every single faculty or non-teaching staff. The staff strength at KU is 458 for teaching and 725 for nonteaching (Including Paramedical staff). The academic calendar of minimum 230 days is strictly adhered to; admission of students is based on merit, based on their score in the previous examination and written and oral entrance tests.
                    </p>
                </div>
            </div>
        </div>

<br><br>
        <div class="row" style="padding-top: 30px; ">
            <div class="col">
                <h4>Hostel Life<hr style="background-color: #D8D9D9;"></h4>
            </div>
        </div>
        <div class = "row" style=" padding-bottom: 10px;">
            <div class="col"  width="250px" height: 150px;>
                <img width="400px" style="padding-left: 10px;" class="float-right" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1i6nJEXVs9Cg22lgWy6TGQimRsysdWrte5HcvvwVERaywPE2I0A">
                <div style=" text-align: justify; padding-top: 10px; padding-bottom: 5px; padding-right:10px; min-height: 148px">
                    <p>KU has several hostels , two in the main premises, one for boys(200) and the other for girls (163) and one in Chaukot for Boys (50). Some private houses outside the university premises are taken lease for use as hostel for medical students. Priorities are given to the students from outside the locality. Each hostel is secured by guard, and is provided with hot water (Solar), pantry, canteen , exercising machine, television and sports ground.

                    All rooms are well furnished. International students are provided single accommodation at the guest house within the university premise.
                    </p>
                </div>
            </div>
        </div>

<br><br>
        <div class="row" style="padding-top: 30px; ">
            <div class="col">
                <h4>Student Welfare council<hr style="background-color: #D8D9D9;"></h4>
            </div>
        </div>
        <div class = "row" style="padding-bottom: 10px;">
            <div class="col"  width="250px" height: 150px;>
                <img width="400px" style="padding-right: 10px;" class="float-left" src="http://www.kusms.edu.np/images/dh1.jpg">
                <div style="text-align: justify; padding-top: 10px; padding-bottom: 10px; padding-right:10px; padding-left: 10px; min-height: 150px;">
                    <p>In each school of KU, a Student Welfare Council (SWC), headed by a President, is constituted through individual class represntation. Each SWC is responsible for implrementing and coordinating all the student activities in the respective schools. SWCs also coordinate amoung each other and implent inter-school student activites.
                    </p>
                </div>
            </div>
        </div>

<br><br>
        <div class="row" style="padding-top: 30px; ">
            <div class="col">
                <h4>Student Clubs<hr style="background-color: #D8D9D9"></h4>
            </div>
        </div>
        <div class = "row" style="padding-bottom: 10px;">
            <div class="col"  width="250px" height: 150px;>
                <img width="400px" style="padding-left:10px;" class="float-right" src="https://rotaractnepal.org/images/project-images/cache/17246-Self-defense-training-workshop-20190515065411_250x250.jpg">
                <div style="background-color: white;  text-align: justify; padding-top: 10px; padding-bottom: 10px; padding-right:10px; min-height: 150px;">
                    <p>Various student clubs are formed in the university to facilitate different activities. These clubs operate under the umbrella of SWC. These clubs are both general and academic in nature and work in university or school or department level. Each club is facilated by a teacher coordinator.

                    Sports Club: The Sports Club of KU organised a Sports Week each year in which students from all the schools of KU participate. This year the Sports Week was organized during March 16-20, 2008 at Central Campus, Dhulikhel.

                    Youth Solidarity Festival: SWC of KU organized a Youth Solidartiy Festival in September 2007. The fest was participated by more than 51 different colleges of Kathmandu
                    <br>
                    <br>

                    <b>Academic Clubs:</b>

                    <ul>
                        <li>Association of Mechanical Engineering Students</li>
                        <li>Eco-Active Forum</li>
                        <li>Forum for Environment Conseravation and management</li>
                        <li>Forum for Pharmacy</li>
                        <li>Geomatics Engineering Society</li>
                        <li>Green Club fo Throughts</li>
                        <li>Kathmandu University Biotechnology Creative</li>
                        <li>Kathmandu University Computer Club</li>
                        <li>Kathmandu University Human Biology Club</li>
                        <li>Kathmandu University Youth Red Cross Circle</li>
                        <li>Nature and Social Concern Society</li>
                        <li>Society for Electrical and Electronic Engineers</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>




    </div>
    </div>


    <br>
    <br>
   
    <?php include 'footer.php';?> 
</body>
</html>