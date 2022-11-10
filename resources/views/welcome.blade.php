<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project X</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
        <link rel="stylesheet" href="/css/style.css">

</head>

<body>
  @extends('header')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-7 col-lg-9 text-center" id="bgimage">
                    <!-- <h1 >Sell and Buy your Electronics Easily.</h1> -->
                    <h2 style="margin-top: 0.8rem ;">We are the one who can manage your E-waste for you.</h2>
                    <img class="img-fluid" src="/img/Raj-kumar.jpeg" alt="brand" style="height: 18.5rem " style="width: 40rem"   >
                </div>
            </div>
            <div class="text-center mt-5" style="color: #2C9934;">
                <a href="{{route('goGreen')}}"
                    class="btn-get-started scrollto">GO Green</a>
            </div>
            <!-- -------------------------------sell section--------------------------------------- -->
            <div class="heading mt-5 ">
                <h1>Sell Something!</h1>
            </div>
            <div class="row icon-boxes">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-mobile" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title">
                            <a href="{{route('sellPhone')}}">Sell Phone</a>
                        </h4>
                        <p class="description">You can sell your phone in any condition to our website, you just need to
                            follow the give steps and rest is upto us to give you satisfaction.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-laptop" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title">
                            <a href="">Sell Laptop</a>
                        </h4>
                        <p class="description">Your laptop is not working properly, dont worry we are here for you just
                            click here are you will be able to sell your laptop in just minutes and at best price from
                            the market </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-headphones" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title">
                            <a href="">Sell Earphone </a>
                        </h4>
                        <p class="description">Do you think that your old earphones are of no use, you may be wrong
                            cause we are here to help you to sell your your earphones at an unbelievable costs </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-tablet" aria-hidden="true" style="color:#2edb4b ;"></i></div>
                        <h4 class="title"><a href="">Sell Tablet</a></h4>
                        <p class="description">Did you phone just replaced your tablet and you are feeling that your
                            tablet is of no use now, do not worry it still worth every penny just click here get rid of
                            your problems. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-camera-retro" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title"><a href="">Sell Camera</a></h4>
                        <p class="description">Did you just upgraded to a new camera to upgrade your photography game
                            and your last one is of no use , you mightbe wrong, just click here and get best price of
                            your camera. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-gamepad" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title"><a href="">Sell Gaming Console</a></h4>
                        <p class="description">Is your gaming console lying aroung just taking up space cause in this
                            fast moving world you have no time to play the games do not worry just with a single click
                            you can sell you console to us and we assure you to give best price
                            for it. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="fa fa-laptop" aria-hidden="true" style="color:#2edb4b ;"></i></i>
                        </div>
                        <h4 class="title">
                            <a href="">Sell Dekstop</a>
                        </h4>
                        <p class="description">In this new age laptop is your PC is ideal and you want to get rid of it,
                            do not worry just click here and you can get best value for you PC.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-cubes" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title"><a href="">Sell Dekstop Parts</a></h4>
                        <p class="description">You want to upgeade your PC with new ram or graphic card but you dont
                            know what to do with the old parts, Dont worry just click here and get best price of youe
                            dekstop parts.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-heartbeat" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title"><a href="">Sell Smartwatch </a></h4>
                        <p class="description">You also take your fitness seriously and want to upgrade your smartwatch
                            then just click here and get best price of your old one.</p>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-wrench" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title"><a href="">Repair your product </a></h4>
                        <p class="description">We can repair you peice of tech with the world class technician at the
                            lowest prices possible, feel free to launch your phone in the air. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-recycle" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title"><a href="">Sell your E-waste </a></h4>
                        <p class="description">Are you sick of your electronic garbage lying around instead of
                            throughing it youcan sell your electronics just by a single click. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-microchip" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title"><a href="">Sell other Electronics <br>(Parts) </a></h4>
                        <p class="description">You can also sell your electronics like transformers, resistors and
                            electronics items like motor and you canget best price for that.</p>
                    </div>
                </div>

                <!-- ------------------------------BUY SECTION---------------------------------------------------  -->
                <div class="heading">
                    <h1>Buy Something!</h1>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-mobile" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title">
                            <a href="{{route('buyPhone')}}">Buy Phone</a>
                        </h4>
                        <p class="description">You can buy smartphones of all brands here.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-laptop" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title">
                            <a href="">Buy Laptop</a>
                        </h4>
                        <p class="description">You can buy Laptop of all brands here.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-headphones" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title">
                            <a href="">Buy Earphone </a>
                        </h4>
                        <p class="description">You can buy Earphone of all brands here. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-tablet" aria-hidden="true" style="color:#2edb4b ;"></i></div>
                        <h4 class="title"><a href="">Buy Tablet</a></h4>
                        <p class="description">You can buy Tablet of all brands here.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-camera-retro" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title"><a href="">Buy Camera</a></h4>
                        <p class="description">You can buy Camera of all brands here.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-gamepad" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title"><a href="">Buy Gaming Console</a></h4>
                        <p class="description">You can buy Gaming Console of all brands here.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="fa fa-laptop" aria-hidden="true" style="color:#2edb4b ;"></i></i>
                        </div>
                        <h4 class="title">
                            <a href="">Buy Dekstop</a>
                        </h4>
                        <p class="description">You can buy Dekstop of all brands here.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-cubes" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title"><a href="">Buy Dekstop Parts</a></h4>
                        <p class="description">You can buy Dekstop Parts of all brands here.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-heartbeat" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title"><a href="">Buy Smartwatch </a></h4>
                        <p class="description">You can buy Smartwatch of all brands here.</p>
                    </div>
                </div>



                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-microchip" aria-hidden="true" style="color:#2edb4b ;"></i>
                        </div>
                        <h4 class="title"><a href="">Buy other Electronics </a></h4>
                        <p class="description">You can buy all kinds of Electronic items here.</p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- End Hero -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</h2>
                <p>We believe in making the world a better place for our future generation. </p>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        We can provide you best value of your products that you are going to sell here, as we do not give
                        you money for the broken peices we give you money for the parts that are left ans can be used by
                        some one else.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> We disassemble your product.</li>
                        <li><i class="ri-check-double-line"></i> We enlist the working part of your product on our
                            website.</li>
                        <li><i class="ri-check-double-line"></i> And leftover part is senf to our E-waste managment
                            system.</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        E-Waste Management Rules 2016 is more stringent than before Due to which the E-waste generated
                        in Companies, Industries, Institutions, need to dispose it to Government Authorized E-Waste
                        Recycler, This is why we are here to support you.

                        Project X recycling services, will help you to dispose all your electrical and electronic scrap
                        legally with 100% compliance – with certification to prove your electronic waste has been
                        legally disposed of. Our versatility and expertise in the field of E-Waste recycling, enables us
                        to provide a first class experience to our clients.
                    </p>
                    <a href="{{route('goGreen')}}" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>You can alaways contact us here by the given emails and phone numbers, we are at your service 24*7.
                </p>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="fa fa-location-arrow" aria-hidden="true" style="color: #2edb4b;"></i>
                            <h4>Location:</h4>
                            <p>#27,Adarsh Nagar, Model Town, Ambala City, Haryana, India Pincode: 134003 </p>
                        </div>

                        <div class="email">
                            <i class="fa fa-envelope" aria-hidden="true" style="color: #2edb4b;"></i>
                            <h4>Email:</h4>
                            <p>raghavmoudgil99@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="fa fa-mobile" aria-hidden="true" style="color: #2edb4b;"></i>
                            <h4>Call:</h4>
                            <p>+91 8278145655</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-3">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit" style="background-color: #2edb4b;">Send
                                Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <p>As we are currently a start up so our team only consist of few people but they are best at their
                    work.</p>
            </div>

            <div class="row" style="justify-content: center;">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="/img/Raghav.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://www.facebook.com/raghav.moudgil.5"><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/raghav-moudgil-039334156"><i
                                        class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Raghav</h4>
                            <span>Team member</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="/img/Riya.png" class="img-fluid" alt="" height="120px">
                            <div class="social">
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Riya Bansal </h4>
                            <span>Team member</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Team Section -->
  @extends('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>

</html>
