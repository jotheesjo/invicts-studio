<?php
include("header.php");
?>
<!-- Desktop View-->

<div id="slider" class="inspiro-slider slider-fullscreen dots-creative hicons" data-height-xs="360" style="min-height: 685px;">

    <img class="rocket" data-animate="" data-animate-delay="900" src="img/gif/Rocket.gif">

    <div class="slide banners" data-bg-image="img/banner/skybanner1.png">

        <div class="bg-overlay"> </div>

        <div class="container cont">

            <img class="sat" data-animate="" data-animate-delay="900" data-lightbox="iframe" src="img/gif/Satellite_Header.gif">



            <div class="slide-captions text-center text-light">

                <a href="#">

                    <img style="margin-top:-5rem;" src="img/logos.png">

                </a>

                <!-- <span data-animate="fadeInUp" class="strong"><a href="#" class="business"><span class="business">Let's Do This</span></a>

                        </span> --><br>



                        <?php $slider=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `slider_section` WHERE id='1'")); ?>

                <h1 class="bannerfont"><?=$slider['description'];?></h1>

                <br>

                <a data-target="#modal-3" data-toggle="modal" href="#" class="btn btn-light" style="text-transform: capitalize;">Get Started</a>

                <a href="<?=$slider['link'];?>" data-lightbox="iframe" class="btn btn-light" style="text-transform: capitalize;">Watch Reel </a>

                <!-- <a data-animate="fadeInUp" class="btn btn-outline btn-rounded btn-light">Purchase</a> -->

                <br>

                <br>





                <a href="#section02">

                    <h5 data-animate="fadeInUp" data-animate-delay="300">Scroll Down</h5>

                    <!--<img class="bouncee" src="img/scroll3.png">-->

                    <i class="fa fa-arrow-down bouncee"></i>

                </a>

            </div>

        </div>

    </div>

</div>

<!-- Desktop View end-->



<!-- Mobile View-->

<div id="slider" class="inspiro-slider slider-fullscreen dots-creative sprocess" data-height-xs="360" style="min-height: 685px;">

    <img class="rocket" data-animate="" data-animate-delay="900" src="img/gif/Rocket.gif">

    <div class="slide" data-bg-image="img/banner/skymobile.png">

        <div class="bg-overlay"> </div>

        <div class="container cont">

            <img class="sat" data-animate="" data-animate-delay="900" data-lightbox="iframe" src="img/gif/Satellite_Header.gif">



            <div class="slide-captions text-center text-light">

                <a href="#">

                    <img style="margin-top:-5rem;" src="img/logos.png">

                </a>

                <!-- <span data-animate="fadeInUp" class="strong"><a href="#" class="business"><span class="business">Let's Do This</span></a>

                        </span> --><br>





                <h1 class="bannerfont">Video More Than Everything<br>That Take You To Future</h1>

                <br>

                <a data-target="#modal-3" data-toggle="modal" href="#" class="btn btn-light" style="text-transform: capitalize;">Get Started</a>

                <a href="https://www.youtube.com/watch?v=07d2dXHYb94" data-lightbox="iframe" class="btn btn-light" style="text-transform: capitalize;">Watch Reel </a>

                <!-- <a data-animate="fadeInUp" class="btn btn-outline btn-rounded btn-light">Purchase</a> -->

                <br>

                <br>





                <a href="#section02">

                    <h5 data-animate="fadeInUp" data-animate-delay="300">Scroll Down</h5>

                    <!--<img class="bouncee" src="img/scroll3.png">-->

                    <i class="fa fa-arrow-down bouncee"></i>

                </a>

            </div>

        </div>

    </div>

</div>

<!-- Mobile View end-->

<section id="section02" style="padding-bottom: 50px; padding-top: 0px;background-color:#fff0;">

    <img src="img/m1.png" alt="" class="m1">

    <img src="img/m2.png" alt="" class="m2">

    <div class="container" style="padding: 0px 30px;">

        <div class="heading-text heading-section text-center">

            <h2 data-animate="fadeInUp" data-animate-delay="300">We’re Molded with Creative and Skills</h2>

            <p data-animate="fadeInUp" data-animate-delay="300">Making your first impression in front of the investors is a very crucial part in such scenarios.

            </p>

        </div>

        <div class="row">
            <?php $sec1 = mysqli_query($conn, "SELECT * FROM home_section1 WHERE status='1'");
            while ($rowsec1 = mysqli_fetch_array($sec1)) { ?>
                <div class="col-lg-4 text-center" data-animate="fadeInUp" data-animate-delay="0">

                    <a href="<?= $rowsec1['link']; ?>">

                        <img src="images/home/<?= $rowsec1['image']; ?>" style=" width: 96%;">

                        <h3 class="edu"><?= $rowsec1['title']; ?>
                        </h3>

                    </a>

                </div>
            <?php } ?>

        </div>

        <br>

        <br>

        <div class="text-center">

            <a href="service.php" data-animate="fadeInUp" data-animate-delay="100" class="btn btn-light btn-rounded" style="text-transform: capitalize; text-align: center;">View All Services </a>

        </div>

    </div>

</section>



<section style="padding: 0px;">

    <div class="">

        <div data-bg-image="img/gif/whygig.gif" style="height: 650px;background-image: url(&quot;img/gif/whygig.gif&quot;);" class="bg-loaded">


            <?php $sec2 = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM home_section2 WHERE status='1'")); ?>
            <div class="row">

                <div class="col">

                    <div class="text-light p-t-30 text-center sec2">

                        <h1 class="mb-4"><?= $sec2['title']; ?></h1>

                        <h2><?= $sec2['description']; ?></h2>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>







<section style="padding: 0px;" class="">

    <img src="img/m3.png" alt="" class="m3">

    <img src="img/4.png" alt="" class="m4">

    <img src="img/roc.png" alt="" class="m10">

    <img src="img/roc1.png" alt="" class="m11">



    <div class="container" style="padding-bottom: 44px;">

        <div class="heading-text heading-section Portfolio text-center">

            <h2>Our Portfolio</h2>

            <p>These are just a few glimpses of creative work we’ve created but not an indication of all that we can do. </p>

        </div>









        <div data-lightbox="gallery" class="row">


             <?php $sq=mysqli_query($conn, "SELECT * FROM portfolio WHERE status='1' LIMIT 0,6");
                while($row=mysqli_fetch_array($sq)){   ?>
                 <div class="col-lg-4" style="padding: 0 35px 35px;">
                    <div class="grid-item">
                        <div class="grid-item-wrap" style=" box-shadow: 0px 1px 20px 0px #ebebeb; border-radius: 15px;">
                            <div class="grid-image"> <img alt="Image Lightbox" src="images/portfolio/<?=$row['image'];?>" />
                            </div>
                            <div class="oport">
                                <h5 style="margin-bottom: 0px;"><?=$row['title'];?></h5>
                                <p><?=$row['description'];?></p>
                                <hr>
                            </div>
                            <div class="grid-description">
                                <a href="<?=$row['link'];?>" data-lightbox="iframe"><i class="icon-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>



            



        </div>



        <div class="text-center" style=" margin-top: -20px;">

            <a href="portfolio.php" data-animate="fadeInUp" data-animate-delay="100" class="btn btn-light btn-rounded" style="text-transform: capitalize; text-align: center;"> View More </a>

        </div>

    </div>

    <!-- <img src="img/portd.png" width="100%" class="portd"> -->

</section>







<!--<section style="background-image: url(img/worldbg.JPG); background-size: 100% 100%; padding: 20px;">

    <div class="container contains">

        <div class=" heading-text heading-section none text-center">

            <h2 style="font-size: 24px; font-weight: 700;"> More than 1000+ Videos for clients all over the world </h2>

            <p class="worldsec">A good portfolio is more than a long list of good stocks and bonds. It is a balanced whole, providing the investor with protections and opportunities with respect to a wide range of contingencies.

            </p>

        </div>

        <br>



        <div class="row ">

            <div class="col-lg-4">

                <img src="img/gif/Globe_Section.gif" class="hglobe" width="110%" >

            </div>

            <div class="col-lg-8">

                <div class="carousel" data-items="1">

                    <div>

                        <a href="#"><img alt="" src="img/clogos.png" width="85%">

                        </a>

                    </div>



                    <div>

                        <a href="#"><img alt="" src="img/clogos.png" width="85%">

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>-->





<section style="background-image: url(img/worldbg.JPG); background-size: cover; padding: 30px;">

    <!-- <img src="img/worldbg - Copy.JPG" class="worldbg"> -->

    <div class="container contains p-0">

        <div class=" heading-text heading-section none text-center">

            <h2 class="p-b-10" style="font-size: 24px; font-weight: 700;"> More than 1000+ Videos for clients all over the world </h2>

            <p class="worldsec" style="color:#ffffff">A good portfolio is more than a long list of good stocks and bonds. It is a balanced whole, providing the investor with protections and opportunities with respect to a wide range of contingencies.

            </p>

        </div>

        <br>



        <div class="row ">

            <div class="col-lg-4 text-center">

                <img src="img/gif/Globe_Section.gif" class="hglobe">

            </div>

            <div class="col-lg-8">

                <div class="carousel" data-items="1">
                <?php $clients=mysqli_query($conn,"SELECT * FROM clients WHERE status='1'");
                while($clientsrow=mysqli_fetch_array($clients)){ ?>
                <div>

<a href="#"><img alt="" src="<?='images/clients/'.$clientsrow['path'];?>" width="85%">

</a>

</div>
                <?php } ?>

                </div>

            </div>

        </div>

    </div>

</section>











<section style="padding-bottom: 50px; padding-top: 25px;">

    <img src="img/m1.png" alt="" class="m5">

    <img src="img/mm1.png" alt="" class="mm1">

    <img src="img/m2.png" alt="" class="m2">

    <img src="img/roc2.png" alt="" class="m20">

    <div class="container">

        <div class="heading-text heading-section proc text-center">

            <h2>Our Process</h2>

            <p>Discover our creative and unique video production process. </p>

        </div>

        <img src="img/gif/Our_Process.gif" width="100%" class="dprocess">



        <div class="row sprocess">



            <img src="img/sprocess/Script.gif" width="100%">

            <img src="img/sprocess/Moodboard.gif" width="100%">

            <img src="img/sprocess/Storyboard.gif" width="100%">

            <img src="img/sprocess/Illustration.gif" width="100%">

            <img src="img/sprocess/StyleFrames.gif" width="100%">

            <img src="img/sprocess/Animation_Sfx.gif" width="100%">

            <img src="img/sprocess/Your_Video.gif" width="100%">



        </div>

    </div>

    <div class="text-center">

        <a href="process.php" data-animate="fadeInUp" data-animate-delay="100" class="btn btn-light btn-rounded" style="text-transform: capitalize; text-align: center;"> Read More </a>

    </div>

    <!-- <img src="img/prod.png" width="100%" style="margin-top: -135px;"> -->

</section>







<section style="background-image: url(img/cbg.JPG); background-size: cover; padding: 30px;">





    <img src="img/m1.png" alt="" class="m6">

    <img src="img/m2.png" alt="" class="m7">

    <img src="img/cer.png" alt="" class="cer">



    <div class="container" style="padding: 2px 30px;">





        <div class="row">



            <div class="col-lg-8">

                <div class=" heading-text heading-section none text-center">

                    <p style="color: #ffffff; margin-bottom: 0px; text-align: left; font-size: 10px; font-style: normal;">Testimonials

                    </p>

                    <h2 style="color: #ffffff; margin-bottom: 0px; text-align: left;"> Our Customer Say </h2>

                </div>





                <div class="carousel testimonial testimonial-single testimonial-left" data-items="1" data-autoplay="true" data-loop="true" data-autoplay="3500">


<?php $testi=mysqli_query($conn,"SELECT * FROM testimonial WHERE status='1'");
while($testirow=mysqli_fetch_array($testi)){ ?>
    <div class="testimonial-item">

    <img src="images/testimonial/<?=$testirow['image'];?>" alt="" class="cst">

    <p style="color: #fff;font-weight: 700;"><?=$testirow['name'];?></p>

    <p style="color: #fff;font-weight: 300;"><?=$testirow['designation'];?></p>

    <br>

 <span><?=$testirow['description'];?></span>

</div>
<?php } ?>




                </div>

            </div>



            <div class="col-lg-4">

                <img src="img/Customer_Says.png" width="100%" class="hpimg">

            </div>

            </div>

    </div>

</section>

<?php
include("footer.php");
?>