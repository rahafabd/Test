<html>
<head>
    <title>NEW DOC</title>
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

    </script>
</head>
<body  style="max-width: 100%; overflow-x: hidden;">
<!-- ============================= -->
<!--PETRA LOGO -->
<!-- ============================= -->
<form action="doct_singup.php" method="get">
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
    <div style="width:40%;height:20%;background-color:#2b669a;margin-top:10px; padding-top: 5px  "><font color="white">SIGNUP</font></div>
</div>
<!-- ============================= -->
<!-- SIGNUP SECTION -->
<!-- ============================= -->
<div style="width:100%; margin-top:10% " align="center" >
    <div style="width:50%">
        <input name="name" id="name" type="text" class="form-control formmargin" placeholder="YOUR NAME" >
        <input name="username" id="username" class="form-control formmargin" placeholder="USERNAME">
        <input name="password" id="password" class="form-control formmargin" placeholder="PASSWORD">
        <input name="id" id="id" class="form-control formmargin" placeholder="YOUR IDENTIFICATION NUMBER">
        <input type="submit" name="SignUp" id="SignUp" class="btn" style="background-color: #2e6da4;color:white;border-radius:12px" value="SignUp" ><br>

        <br><font color="#696969">Already have an Account?</font><a class="nav-item nav-link " href="Doctors.php" style="color:#2b669a">SignIn</a>
    </div>
</div>

    <?php

    if(isset($_GET['SignUp'])){
        // ============================= -->
        //GRAY BLOCK DIV   -->
        //   ============================= -->
        echo "<div class=\"dimScreen\" id=\"dimscreen\" align=\"center\">";

        $name =$_GET ['name'];
        $id = $_GET['id'];
        $username = $_GET['username'];
        $password = $_GET['password'];
          include "BL.php";
          $bl=new BL();

        //echo $sql;

        // ============================
        // SHOW MSG
        //=============================


        if ($bl->SignUp($name,$username,$id,$password) === TRUE) {
            echo '<script type="text/javascript">';
            echo'document.getElementById("dimscreen").innerHTML=" <div style=\"width:30%;height:30%\"id=\"confirm\">\n" +
            "    <div style=\"width:100%;height:20%;background-color: #2e6da4 ;margin-top:60%\"  ></div>\n" +
            "    <div style=\"width:100%;height:80%;background-color:white ;border-style:solid; border-color:#2e6da4  \" align=\"center\" >\n" +
            "        <br>\n" +
            "        YOUR ACCOUNT HAS BEEN CREATED <br><br>\n" +
            "        <input type=\"submit\" class=\"btn\" style=\"background-color: #2e6da4;color:white ;float: right;margin-right: 20px\" id=\"ok\" value=\"ok\">\n" +
            "    </div>\n" +
            "    </div>";';
            echo'</script>';
        } else {
            echo '<script type="text/javascript">';
            echo'document.getElementById("dimscreen").innerHTML="<div style=\"width:30%;height:30%\" id=\"denay\">\n" +
            "        <div style=\"width:100%;height:20%;background-color: #ac2925 ;margin-top:60%\"  ></div>\n" +
            "        <div style=\"width:100%;height:80%;background-color:white ;border-style:solid; border-color:#ac2925  \" align=\"center\" >\n" +
            "            <br>\n" +
            "            TRY AGAIN IN CASE OF FAILURE CALL US <br>0064-6546-564 <br><br>\n" +
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
    <br><br>
<div style=" width:100%;height:20px ;position: fixed;bottom:0px; " align="center">
    <div style=" width:80%;height:100%; border: solid #2b669a;background-color: #2b669a">
        <div id="getwell">
        </div>
    </div>
</div>
</form>
</body>
</html>

