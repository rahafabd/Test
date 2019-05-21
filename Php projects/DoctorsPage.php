<html>
<?php
session_start();
$name=$_SESSION['regName'];
if(!isset($_SESSION['regName']))
{
    header("location:Doctors.php");
}
?>
<head>
    <title>Doctors Page</title>
    <meta charset="UTF-8">
    <script src="Scripts/Jquery.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" ></script>
    <link rel="stylesheet" href="CSS/animate.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/font-awesome.css">
    <link rel="stylesheet" href="CSS/Custom.css">
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" >
    <script>
        $(document).ready(function() {
            setInterval(function () {
                $("#logo").addClass('animated flipInY');
                setTimeout(function () {
                    $("#logo").removeClass('animated flipInY');
                },1000);
            },2500);
        });// document ready
    </script>
</head>
<body  style="max-width: 100%; overflow-x: hidden;">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

<!-- ============================= -->
<!--PETRA LOGO -->
<!-- ============================= -->
<div style="width:100%;height:20% " align="center">
    <div style="width:80%;height:40%;background-color:#2b669a;margin-top:30px ">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="float:right;padding-top: 14px">
            <a class="nav-item nav-link active " href="test.php" style="color: white">Home<span class="sr-only">(current)</span></a>
            &nbsp;<a class="nav-item nav-link " href="Doctors.php" style="color: white">Doctors</a>
            &nbsp;<input type="submit" class="nav-item nav-link " name="logout"  style="color: white;background-color: transparent" value="logout">
        </div>
    </div>
    <div class="circleBase type1" style="margin-top:-100px;margin-right:0px;background-color: white ">
        <div id="logo">
        <img src="Content/pics/petra_logo_blue.png" style="width:43%;height:85%;margin-top: 4px" class="site__title">
        </div>
    </div>
    <div style="width:60%;height: 25%;background-color:#2b669a;padding-top: 7px "><font color="white">UNIVERSITY OF PETRA</font> </div>
    <div style=" width:40%;height:20%;background-color:#2b669a;margin-top:10px; padding-top: 2px   "><font color="white"><?php echo $name; ?></font></div>
</div>
<!-- ============================= -->
<!-- LOGIN SECTION -->
<!-- ============================= -->
    <?php
include "BL.php";
    $bl3=new BL();
    $result =$bl3->booked_appointment($name);

    if ($result->num_rows >0) {

        ?>
        <div class="container-fluid">
            <table class="table table-hover">
                <thead>
                <tr>
                    <td colspan="7" align="center">  <h2>Appointments</h2> </td>
                </tr>
                </thead>
                <tr class="jumbotron">
                    <td>Name</td>
                    <td>Id</td>
                    <td>Age</td>
                    <td>Major</td>
                    <td>Phone</td>
                    <td>Date</td>
                    <td>  </td>
                </tr>
        </div>

        <?php
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row['name']."</td>";
            echo "<td>".$row['id_num']."</td>";
            echo "<td>".$row['age']."</td>";
            echo "<td>".$row['major']."</td>";
            echo "<td>".$row['phone_no']."</td>";
            echo "<td>".$row['date']."</td> </tr>";
        }
    }//if

    else {  echo "Result 0";  }



    ?>













</form>
<?php
if(isset($_GET['logout'])){

    session_start();
    echo"bye";
    session_destroy();
    header("location:Doctors.php");
}
?>
</body>
</html>
