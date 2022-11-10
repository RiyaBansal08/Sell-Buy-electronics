<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple phone brands</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ======= Header ======= -->
    @extends('header')
    <!-- End Header -->
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sell Phone</li>
            </ol>
        </nav>
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 ">
                <h1>Sell Phone to us!!!</h1><br>
                <label>Search your model here</label>
                <form class="d-flex">

                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" size="60">

                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

            </div>
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://www.starshopping.in/blog/wp-content/uploads/2019/07/6.jpg" class="img-fluid"
                    alt="Sample image">
            </div>

        </div>
        <section class="mb-5 mt-5">
            <div class="layout horizontal justified center">
                <div class="jss128 jss163 pad-lr-16-mob layout vertical">
                    <h2 class="jss127 jss162 font27-18 center mar0 font-medium left-align"
                        style="border-left: 5px solid green; padding-left: 5px;">Top Selling Models</h2>
                </div>
                <div class="jss152">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick="">
                        <a href="{{route('iPhone13ProMax')}}"><img
                                src="https://www.theiphonewiki.com/w/images/thumb/7/7d/IPhone_13_Pro_Max.png/300px-IPhone_13_Pro_Max.png"
                                height="120px">
                            <h6 class="mt-3">iPhone 13 Pro Max </h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href="">
                            <img src="https://www.theiphonewiki.com/w/images/thumb/4/4e/IPhone_13_Pro.png/300px-IPhone_13_Pro.png"
                                height="120px">
                            <h6 class="mt-3">iPhone 13 Pro </h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/thumb/3/37/IPhone_13.png/300px-IPhone_13.png"
                                height="120px">
                            <h6 class="mt-3">iPhone 13</h6>
                        </a></div>
                </div>

                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/thumb/1/17/IPhone_13_mini.png/300px-IPhone_13_mini.png"
                                height="120px">
                            <h6 class="mt-3">iPhone 13 mini</h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/thumb/6/60/IPhone_12_Pro_Max.jpg/300px-IPhone_12_Pro_Max.jpg"
                                height="120px">
                            <h6 class="mt-3">iPhone 12 Pro Max</h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/c/c0/IPhone_12_Pro.jpg"
                                height="120px">
                            <h6 class="mt-3">iPhone 12 Pro</h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/3/3a/IPhone_12.jpg"
                                height="120px">
                            <h6 class="mt-3">iPhone 12</h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/c/c7/IPhone_12_mini.jpg"
                                height="120px">
                            <h6 class="mt-3">iPhone 12 mini</h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/thumb/0/0c/IPhone_11_Pro_Max.png/300px-IPhone_11_Pro_Max.png"
                                height="120px">
                            <h6 class="mt-3">iPhone 11 Pro Max</h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/thumb/5/58/Iphone11pro.jpg/225px-Iphone11pro.jpg"
                                height="120px">
                            <h6 class="mt-3">iPhone 11 Pro</h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/thumb/4/47/IPhone_11.png/225px-IPhone_11.png"
                                height="120px">
                            <h6 class="mt-3">iPhone 11</h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/thumb/3/37/IPhone_XS_Max.jpg/300px-IPhone_XS_Max.jpg"
                                height="120px">
                            <h6 class="mt-3">iPhone Xs Max </h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/thumb/4/4e/IPhone_XS.jpg/225px-IPhone_XS.jpg"
                                height="120px">
                            <h6 class="mt-3">iPhone XS</h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/thumb/5/5f/IPhone_XR.jpg/225px-IPhone_XR.jpg"
                                height="120px">
                            <h6 class="mt-3">iPhone Xr </h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/thumb/c/cd/IPhone_X.png/225px-IPhone_X.png"
                                height="120px">
                            <h6 class="mt-3">iPhone X</h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/thumb/d/de/IPhone_8.png/225px-IPhone_8.png"
                                height="120px">
                            <h6 class="mt-3">iPhone 8 plus</h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/thumb/c/c2/IPhone_8_Plus.png/300px-IPhone_8_Plus.png"
                                height="120px">
                            <h6 class="mt-3">iPhone 8</h6>
                        </a></div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-4">
                    <div class="shadow p-4 text-center rounded productDiv" onclick=""><a href=""><img
                                src="https://www.theiphonewiki.com/w/images/0/09/IPhone_7_Plus.png"
                                height="120px">
                            <h6 class="mt-3">iPhone 7 plus</h6>
                        </a></div>
                </div>


            </div>
        </section>

        <div class="layout horizontal justified center">
            <div class="jss128 jss163 pad-lr-16-mob layout vertical">
                <h2 class="jss127 jss162 font27-18 center mar0 font-medium left-align"
                    style="border-left: 5px solid green; padding-left: 5px;">FAQs</h2>
            </div>
            <div class="jss152">

            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Where can I turn in old phones for cash?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                            body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            How can I sell my old phone?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                            body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            What do you do with my old phone?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                            body. Nothing more exciting happening here in terms of content, but just filling up the
                            space to make it look, at least at first glance, a bit more representative of how this would
                            look in a real-world application.</div>
                    </div>
                </div>
            </div>
            <br><br>

                <div class="jss128 jss163 pad-lr-16-mob layout vertical">
                    <h2 class="jss127 jss162 font27-18 center mar0 font-medium left-align"
                        style="border-left: 5px solid green; padding-left: 5px;">Why us?</h2>
                </div>
                <div class="jss152">

                </div>
                <div class="accordion mb-5" id="accordionWhyUs">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne"><button class="accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#whyUscollapseOne"
                                aria-expanded="false" aria-controls="whyUscollapseOne">Quick &amp; Hassle-free</button>
                        </h2>
                        <div id="whyUscollapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionWhyUs" style="">
                            <div class="accordion-body">Seal the deal in just 3 steps! Get a price offer, fix a
                                convenient location for pickup and finally, receive payment before the phone leaves your
                                hands.Say goodbye to standing at a shop counter and negotiating or going crazy answering
                                messages from prospective buyers when they see your listing on a classifieds platform.
                                 Best Price - Zero Hassle!</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#whyUscollapseTwo"
                                aria-expanded="false" aria-controls="whyUscollapseTwo">Best value to your
                                Gadgets</button></h2>
                        <div id="whyUscollapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionWhyUs">
                            <div class="accordion-body">We gives the best value to your gadgets because we not
                                trust on the minting money in short span of time but entrusted on the satisfication of
                                customer and expand the customer base in market.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5"><button class="accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#whyUscollapse5"
                                aria-expanded="false" aria-controls="whyUscollapse5">Continuous Improvement</button>
                        </h2>
                        <div id="whyUscollapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                            data-bs-parent="#accordionWhyUs">
                            <div class="accordion-body">Customer who have no offshoring experience or customer who have
                                bad experience in the past, our process helped them start and rump up their partnership
                                with us at a place that is customised to their needs.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading6"><button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#whyUscollapse6" aria-expanded="true"
                                aria-controls="whyUscollapse6">Customer Centric</button></h2>
                        <div id="whyUscollapse6" class="accordion-collapse collapse " aria-labelledby="heading6"
                            data-bs-parent="#accordionWhyUs" style="">
                            <div class="accordion-body">Our main priority is to exceed our customers expectations. We
                                are open 24hrs a day, 7 days a week. We get it done on your schedule, not ours.</div>
                        </div>
                    </div>
                </div>

        </div>
    </div>


    <!-- Footer -->
    @extends('footer')
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
