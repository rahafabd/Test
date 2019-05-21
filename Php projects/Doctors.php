<html>
<head>
    <title>Doctors</title>
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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<!-- ============================= -->
<!--PETRA LOGO -->
<!-- ============================= -->
<div style="width:100%;height:20% " align="center">
    <div style="width:80%;height:40%;background-color:#2b669a;margin-top:30px ">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="float:right;padding-top: 14px">
            <a class="nav-item nav-link active " href="test.php" style="color: white">Home<span class="sr-only">(current)</span></a>
            &nbsp;<a class="nav-item nav-link " href="Doctors.php" style="color: white">Doctors</a>

        </div>
    </div>
    <div class="circleBase type1" style="margin-top:-100px;margin-right:0px;background-color: white ">
    <div id="logo">
        <img src="Content/pics/petra_logo_blue.png" style="width:43%;height:85%;margin-top: 4px" class="site__title">
    </div>
    </div>
    <div style="width:60%;height: 25%;background-color:#2b669a;padding-top: 7px "><font color="white">UNIVERSITY OF PETRA</font> </div>
    <div style="width:40%;height:20%;background-color:#2b669a;margin-top:10px; padding-top: 5px  "><font color="white">DOCTORS</font></div>
</div>
<!-- ============================= -->
<!-- LOGIN SECTION -->
<!-- ============================= -->
<div style="width:100%; margin-top:10% " align="center" >
    <div style="width:50%">
        <input name="username" id="username" class="form-control formmargin" placeholder="USERNAME">
        <input name="password" id="password" class="form-control formmargin" placeholder="PASSWORD">
        <input type="submit" name="login" id="login" class="btn" style="background-color: #2e6da4;color:white;border-radius:12px" value="Login" ><br>
        <br><font color="#696969">Don't have an Account?</font><a class="nav-item nav-link " href="doct_singup.php" style="color:#2b669a">SignUp</a>
    </div>
</div>
    <?php

    if(isset($_GET['login'])){
        // ============================= -->
        //GRAY BLOCK DIV   -->
        //   ============================= -->

        $username = $_GET['username'];
        $password = $_GET['password'];
         include "BL.php";
         $bl=new BL();
         $result=$bl->checkUser($username,$password);

        if ($bl->checkUser($username,$password)->num_rows){
            while ($row = $result->fetch_assoc()) {
                session_start();
                $name=$row['DocName'];
                $_SESSION['regName'] = $name;
            }

            echo '<script type="text/javascript">';
                echo'window.location = "DoctorsPage.php"';
                echo'</script>';

            // echo("Error description: " . mysqli_error($conn));
            } else {
            echo "<div class=\"dimScreen\" id=\"dimscreen\" align=\"center\">";
            echo '<script type="text/javascript">';
            echo'document.getElementById("dimscreen").innerHTML="<div style=\"width:30%;height:30%\" id=\"denay\">\n" +
            "        <div style=\"width:100%;height:20%;background-color: #ac2925 ;margin-top:60%\"  ></div>\n" +
            "        <div style=\"width:100%;height:80%;background-color:white ;border-style:solid; border-color:#ac2925  \" align=\"center\" >\n" +
            "            <br>\n" +
            "            CHECK PASSWORD OR USERNAME <br><br>\n" +
            "            <input type=\"submit\" class=\"btn\" style=\"background-color: #ac2925;color:white ;float: right;margin-right: 20px\" id=\"ok\" value=\"ok\">\n" +
            "        </div>\n" +
            "    </div>\n";
        ';
            echo'</script>';

            }


    }
    ?>

<!-- ============================= -->
<!--FOOTER -->
<!-- ============================= -->
<div style=" width:100%;height:30px ;position: fixed;bottom:0px; " align="center">
    <div style=" width:80%;height:100%; border: solid #2b669a;background-color: #2b669a">
        <div id="getwell">
        </div>
    </div>
</div>
</form>
</body>
</html>