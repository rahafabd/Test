<html class="html">
<?php
?>
<head class="body">
    <title>Appointment</title>
    <meta charset="UTF-8">
    <script src="Scripts/Jquery.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/animate.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/font-awesome.css">
    <link rel="stylesheet" href="CSS/Custom.css">
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $("#loading").hide();
        },500);

        $("#txt_name").change(function () {
             // language=JQuery-CSS
         document.getElementById("getwell").innerHTML="WE WISH YOU GET WELL SOON OUR DEER:&nbsp <font color=\"red\">"+document.getElementById("txt_name").value + "</font>&nbsp <i class=\"fa fa-heartbeat\" aria-hidden=\"true\"></i>";
        });



    });//document ready

</script>
</head>
<body style=" max-width: 100%; overflow-x: hidden;">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
   <div style="width:100%" align="center">
    <div style="width:80%; border: solid #2e6da4;">
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
            <div class="col-md-5" STYLE="float: RIGHT; padding-top:10px " >
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <a class="nav-item nav-link active " href="test.php">Home<span class="sr-only">(current)</span></a>
                    &nbsp;<a class="nav-item nav-link " href="Doctors.php">Doctors</a>

                </div>
            </div>
        </div>
    </div>
   </div>
   </div>
    <br>
    <!-- ============================= -->
    <!--THE MIDDLE PICTURE -->
    <!-- ============================= -->
    <div style="width:100%" align="center">
        <div style="width:50%;height:50%;background-image: url('Content/pics/medical-online-scheduling.jpg')" class="backpic"></div>
        <div style="padding-top: 11px ;width:40%;height:8% ;background-color: #2b669a; margin-top: -2%;border-radius:12px;color: white ">please Fill the following Application</div>
    </div>
    <!-- ============================= -->
    <!--NEW APPOINTMENT APPLICATION -->
    <!-- ============================= -->
    <br>
    <div align="center">

        <input type="text" class="form-control formmargin" placeholder="Enter your name" id="txt_name" name="txt_name">
        <input type="text" class="form-control formmargin" placeholder="Enter your ID number" name="txt_id">
        <input type="text" class="form-control formmargin" placeholder="Enter your Age" name="txt_age">
        <input type="text" class="form-control formmargin" placeholder="Enter your Major" name="txt_major">
        <input type="text" class="form-control formmargin" placeholder="Enter your phone number" name="txt_phone">
        <input type="datetime-local" class="form-control formmargin" placeholder="" name="txt_time">
        <select class="form-control formmargin" placeholder="" name="txt_doc">
         <option>Choose your Doc</option>
            <?php
            include "BL.php";
            $bl=new BL();
            $bl->DR_dropdown_menu();
            $result = $bl->DR_dropdown_menu();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value=".$row['DocName'].">".$row['DocName']."</option>";
                }
            }
            ?>

        </select>

        <input type="submit" name="btn" id="btn" class="btn" style="background-color: #2e6da4;color:white;border-radius:12px">
        <input type="reset"  class="btn" style="background-color: dimgray;color:white;border-radius:12px ">
        <?php
        if(isset($_GET['btn'])){
            // ============================= -->
            //GRAY BLOCK DIV   -->
          //   ============================= -->
         echo "<div class=\"dimScreen\" id=\"dimscreen\" align=\"center\">";


            $name =$_GET ['txt_name'];
            $id = $_GET['txt_id'];
            $age = $_GET['txt_age'];
            $major = $_GET['txt_major'];
            $phone = $_GET['txt_phone'];
            $time = $_GET['txt_time'];
            $doc = $_GET['txt_doc'];
            $msg="";

           $bl2=new BL();


          //echo $sql;

          // ============================
          // SHOW MSG
          //=============================


            if ($bl2->make_appointment($name,$id,$age,$major,$phone,$time,$doc) === TRUE) {
                echo '<script type="text/javascript">';
                echo'document.getElementById("dimscreen").innerHTML=" <div style=\"width:30%;height:30%\"id=\"confirm\">\n" +
            "    <div style=\"width:100%;height:20%;background-color: #2e6da4 ;margin-top:60%\"  ></div>\n" +
            "    <div style=\"width:100%;height:80%;background-color:white ;border-style:solid; border-color:#2e6da4  \" align=\"center\" >\n" +
            "        <br>\n" +
            "        YOUR APPOINTMENT HAS BEEN SUCCESSFULLY BOOKED <br><br>\n" +
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
            "            PLEASE CHEEK ALL THE INFORMATION AGAIN OR CHOOSE ANOTHER DATE <br><br>\n" +
            "            <input type=\"submit\" class=\"btn\" style=\"background-color: #ac2925;color:white ;float: right;margin-right: 20px\" id=\"ok\" value=\"ok\">\n" +
            "        </div>\n" +
            "    </div>\n";
        ';
                echo'</script>';

            }

       }
        ?>
                <br><br><br><br><br>
    </div>
    <!-- ============================= -->
    <!--FOOTER -->
    <!-- ============================= -->
    <div style="width:100%;position: fixed;bottom:0px " align="center">
        <div style="width:80%; border: solid #2e6da4;">
            <div id="getwell">
        </div>
    </div>
        </div>







</form>

</body>
</html>



