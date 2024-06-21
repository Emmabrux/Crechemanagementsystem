<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
 integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>


<!-- The nav bar design -->
    <nav>
        <label class="logo" for="">Peace Pre-School</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

<!--============================= the main cover image====================================  -->

    <div class="section1">

        <!-- <marquee behavior="alternate" direction="scroll-left"><label class="img_text" for="">*** We are the best foundation builders ***</label></marquee> -->
        <label class="img_text" for="">*** We are the best foundation builders ***</label>
        <img class="main_img" src="block1.jpg" alt="">
    </div>

<!--============================= The school info part====================================  -->

<div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome-img" src="20201006_104808.jpg">

            </div>
            <div class="col-md-8">
                <h1>Welcome to Brux Media Tech</h1>

                <p>Brux Media Tech is an accredited and a well recognized institution 
                that takes delight in training and producing individuals that 
                are determined and job ready to take on the world.
                Our vision as a tech institution is to provide avenues and platforms 
                for young and hungry youths to excell in all dimensions, and our mission 
                is to empower people to build a life of significance
                <br>
                Brux Media Tech is an accredited and a well recognized institution 
                that takes delight in training and producing individuals that 
                are determined and job ready to take on the world.
                Our vision as a tech institution is to provide avenues and platforms 
                for young and hungry youths to excell in all dimensions, and our mission 
                is to empower people to build a life of significance
                  <br>
                Brux Media Tech is an accredited and a well recognized institution 
                that takes delight in training and producing individuals that 
                are determined and job ready to take on the world.
                Our vision as a tech institution is to provide avenues and platforms 
                for young and hungry youths to excell in all dimensions, and our mission 
                is to empower pweople to build a life of significance</p>

            </div>

        </div>
    </div>

<!--============================= Our Caregivers====================================  -->

    <center class="cente1">
        <h1>Our Teachers</h1>
    </center>

    <div class="container3">
        <div class="row">
            <div class="col-md-4">
            <img class="teacher" src="t1.jpg">
            <h3>Regina Buamah</h3>
            <p class="pp">PHD: Child Care, Msc: AI & Design </p>

            </div>
            <div class="col-md-4">
            <img class="teacher" src="t2.jpg">
            <h3>Catherine Abanga</h3>
            <p class="pp">PHD: Child Care, Msc: AI & Design </p>

            </div>
            <div class="col-md-4">
            <img class="teacher" src="t3.jpg">
            <h3>Diana Adadzi</h3>
            <p class="pp">PHD: Child Care, Msc: AI & Design </p>
                
            </div>
        </div>
    </div>

    <!--============================= Our Programmes====================================  -->

    <center class="cente1">
        <h1>Our Teachers</h1>
    </center>

    <div class="container3">
        <div class="row">
            <div class="col-md-4">
            <img class="teacher" src="c3.jpg">
            <h3>Interior Design</h3>
            <!-- <p class="pp">PHD: Child Care, Msc: AI & Design </p> -->

            </div>
            <div class="col-md-4">
            <img class="teacher" src="c3.jpg">
            <h3>Social Psychology</h3>
            <!-- <p class="pp">PHD: Child Care, Msc: AI & Design </p> -->

            </div>
            <div class="col-md-4">
            <img class="teacher" src="c3.jpg">
            <h3>Painting</h3>
            <!-- <p class="pp">PHD: Child Care, Msc: AI & Design </p> -->
                
            </div>
        </div>
    </div>


    <div class="login-form">
        <center>
            <h1 class="adm">Admission Form</h1>
        </center>

     <div align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text">Name of Child</label>
                <input class="input_deg" type="text" name="name">
            </div>
            <div class="adm_int">
                <label class="label_text">Parent Email</label>
                <input  class="input_deg" type="text" name="email">
            </div>
            <div class="adm_int">
                <label class="label_text">Parent Phone</label>
                <input  class="input_deg" type="text" name="phone">
            </div>
            <div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt" name="message" id="" cols="20" rows="2"></textarea>
            </div>
            <div class="adm_int">
                
                <input class="btn btn-primary" type="Submit" id="submit" value="Apply" name="apply">
            </div>
        </form>
     </div>

    </div>

       <!--============================= The footer====================================  -->

    <footer>
        <h3 class="footer_txt">All @copyright reserved by brux media tech</h3>
    </footer>



</body>
</html>