<html>
<head>
<title>Home Page</title>
    <meta charset="UTF-8">
    <script src="Scripts/Jquery.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/animate.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/font-awesome.css">
    <link rel="stylesheet" href="CSS/Custom.css">
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">    </head>
<script>
    $(document).ready(function() {
        setInterval(function () {
            $("#exclam").addClass('animated bounceIn');
            setTimeout(function () {
                $("#exclam").removeClass('animated bounceIn');
            },1000);
        },2500);

     // =========================

    });// document ready

</script>
<body  style="max-width: 100%; overflow-x: hidden;">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

    <div class="container">
        <div class="row">
            <div class="col-md-1"> </div>
            <!-- ============================= -->
            <!--PETRA LOGO -->
            <!-- ============================= -->
            <div class="col-md-2"><img src="Content/pics/petra_logo_blue2.png" class="logo"></div>
            <!-- ============================= -->
           <!--NAVIGATION BAR USING BOOTSTYRAP -->
            <!-- ============================= -->
            <div class="col-md-4" STYLE="float: RIGHT; padding-top:10px " >
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <a class="nav-item nav-link active " href="#">Home<span class="sr-only">(current)</span></a>
                    &nbsp;<a class="nav-item nav-link " href="Doctors.php">Doctors</a>

                        </div>
            </div>
        </div>
    </div>
    <!-- ============================= -->
    <!--BACKGROUND IMAGE -->
    <!-- ============================= -->
<div align="center">
    <div style="background-image: url('Content/pics/doctor-wallpapers.jpg');" class="backpic" >
        <br><br><br><br>
        <div style="width:100%;" align="right">
        <img src="Content/pics/headphones.jpg" class="min4" >
        <img src="Content/pics/tabela.jpg" class="min4">
        <img src="Content/pics/heart.jpg" class="min4">
        <img src="Content/pics/aid.jpg" class="min4" style="margin-right:147px">
        <br><br>
        <h1 style="color: #0f0f0f ; margin-right:280px;margin-bottom: -5px" >PETRA</h1>
        <h3 style="color: #2b669a; margin-right:190px;margin-top: -5px">MEDICAL CENTER</h3>
        <H5 style="color: #0f0f0f;margin-right:166px;margin-bottom: -5px">As a private and respectful University </h5>
            <h5 style="color: #0f0f0f;margin-right:250px;margin-bottom: -3px;margin-top: 2px"> we care of our Students </H5>
            <h5 style="color: #0f0f0f;margin-right:356px;margin-bottom: -5px;margin-top: 2px">health.</h5>
        </div>
</div>
</div>
    <!-- ============================= -->
    <!--THE THREE DIVS IN  THE BOTTOM -->
    <!-- ============================= -->
    <div style="width:100%;height: 50%;% ; margin-top: -4.5%;color: white;" class="col-lg-12" >
        <!-- OPENING TIME --->
        <div style=" width: 20%;%; height:100%;background-color:#106eb4; float:right; margin-right:20%;padding-left: 20px ">
           <h3><i class="fa fa-clock-o" aria-hidden="true"></i></h3>
            <h4>Opening hours</h4>
            <font size="2px">The university policy indicate that the official opening hours<br> for the clinic is only inner the official time.</font>
           <br><br>
            <font size="2px"><u>sun-tue &nbsp;&nbsp;&nbsp;&nbsp; 08:00 - 21:00<i class="fa fa-clock-o" aria-hidden="true"></i></u></font>
            <br>
            <font size="2px"><u>sat-fri &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 09:00 - 20:00<i class="fa fa-clock-o" aria-hidden="true"></i></u></font>

        </div>

        <!-- APPOINTMENT --->
        <div style="width:20%; height:100%;background-color:#1177bf; float:right;padding-left: 20px">
            <h3><i class="fa fa-phone" aria-hidden="true"></i></h3>
            <h4>Appointment</h4>
            <font size="2px"> We are aware that our students may face some problem due to the tightness <br>of their schedule  </font>
            <br><br>
            <input name="appointment" id="appointment" class="btn" type="submit" value="MAKE AN APPOINTMENT" style=" margin-top:5px;background-color: #0f0f0f;font-size:9px ">
        </div>
        <!-- EMERGENCY SERVICE --->
    <div style="width:20%; height:100%;background-color:#127fd1 ; float:right;padding-left: 20px">
        <h3 id="exclam"><i class="fa fa-exclamation-circle" aria-hidden="true" ></i></h3>
        <h4>Emergency Service</h4>
        <i class="fa fa-phone" aria-hidden="true"></i> 79-85451-1565-2
        <br><br>
        <font size="2px">in case of Emergency call this number.</font><br><br>
        <input name="learnmore" id="learnmore"  class="btn" type="submit" value="LEARN MORE" style=" margin-top:5px;background-color: #0f0f0f;font-size:9px ">
    </div>
    <div style="clear: both;">
    </div>
</form>
</body>
</html>
<?php
if(isset($_GET['appointment'])) {
    echo '<script type="text/javascript">';
    echo'window.location = "appointment.php"';
    echo'</script>';
  }

elseif (isset($_GET['learnmore'])){
    echo '<script type="text/javascript">';
    echo'window.location = "learnmore.php"';
    echo'</script>';
}
?>


