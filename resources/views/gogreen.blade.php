<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ewaste : Go green</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <style>
        .ewasteImg {
            background-image: url("https://www.incimages.com/uploaded_files/image/1920x1080/getty_179116194_9708149704500203_57722.jpg");
            background-size: contain;
        }

        .heading {
            color: rgb(3, 112, 3);
        }
        .border-bottom{
            border-color: green !important;
        }
        .pic:hover{
            box-shadow: 3px 5px 3px rgb(44, 201, 44);
        }
        @media (max-width:800px) {
            .change{
                display: flex;
                flex-direction: column;
            }

        }
    </style>
</head>

<body>
    @extends('header')
    <div class="container">

        <div class="row mt-5 ">
            <div class="col-sm-12 col-md-8 col-lg-6 pl-0">
                <a href="https://ewasterecyclehub.com/wp-content/uploads/2018/07/New-Project2.jpg">
                    <img width="100%" src="https://ewasterecyclehub.com/wp-content/uploads/2018/07/New-Project2.jpg"
                    class="img-responsive wp-post-image" alt="E Waste Management in India"
                    sizes="(max-width: 800px) 100vw, 600px">
                </a>

            </div>
            <div class=" col-sm-12 col-md-4 col-lg-6">
                <h4 class="border-bottom">What is E-waste</h4>
                <p>E-waste is any electrical or electronic equipment that’s been discarded. This includes working and
                    broken items that are thrown in the garbage or donated to a charity reseller like Goodwill. Often,
                    if the item goes unsold in the store, it will be thrown away. E-waste is particularly dangerous due
                    to toxic chemicals that naturally leach from the metals inside when buried.</p>
                <h4 class="border-bottom">The Dangers of E-waste</h4>
                <p>According to the World Health Organization (WHO), health risks may result from direct contact with
                    toxic materials that leach from e-waste. These include minerals such as lead, cadmium, chromium,
                    brominated flame retardants, or polychlorinated biphenyls (PCBs). Danger can come from inhalation of
                    the toxic fumes, as well as from the accumulation of chemicals in soil, water, and food.<br>
                    This puts not just people in danger but land and sea animals as well. In developing countries, the
                    risks are exceptionally high because some developed countries send their e-waste there. Studies have
                    shown this global e-waste has detrimental effects on the people that work with the e-waste but also
                    the people that live around it.<br>
                    Because of this, a proper recycling process needs to be put in place to protect us and future
                    generations.
            </div>
            <div>
                <h2 class="heading">Our Strategy</h2>
                <p>Since we know consumers will keep buying new devices, it’s important to keep reinforcing that message
                    that we need to recycle the older models, not throw them out.
                    There are serious environmental risks if we send our electronics to a landfill. In contrast,
                    recycling provides considerable benefits to our environment.<br>
                </p>
                <p>So what we do is , We take either old whole products or their parts from the customer and provide its
                    best possible price to the customer. If the products/parts are reusable then we reuse it and enlist
                    it on our portal for sell. Otherwise leftover things are sent to E-waste Management System. </p>
            </div>
        </div>


        <div class="row mt-5 ewasteImg change">
            <div class="col">
                <div class="p-3 border bg-light mt-4 mb-4">
                    <h2 class="heading">Our Vision</h2>
                    <p>To become a world-class facility and provide top-class services and solutions for E-Waste
                        recycling, to help mother earth to harvest maximum resources.</p>
                </div>
            </div>
            <div class="col">
                <div class="p-3 border bg-light mt-4 mb-4">
                    <h2 class="heading">Our Mission</h2>
                    <p>We consider E-Waste not as waste. Our motto is 3 R’s Reduce. Reuse and Recycle, through
                        continuous implementations and innovations in recycling technology.
                    </p>
                </div>
            </div>
        </div>

        <div class=" mt-5 aem-GridColumn aem-GridColumn--default--12">
            <div tabindex="-1">
                <div class="bottomspacing" style="position: relative;">
                    <div class="jss28 jss37 SingleColumnText">
                        <div class="container d-flex align-items-start justify-content-start">
                            <div class="d-flex flex-column text-left align-items-start jss31">
                                <h2 class="MuiTypography-root jss29 jss38 MuiTypography-h3">
                                    <div class="heading">We offer a Variety of Electronics Recycling Services</div>
                                </h2>
                                <div class="MuiBox-root jss40">
                                    <div
                                        class="MuiTypography-root rich-text link-bold single-column-description jss30 jss39 jss32 MuiTypography-body1">
                                        <div>
                                            <img class="pic" src="https://pbs.twimg.com/media/CI0XTeXUAAEX0Fb.jpg" width="50%" style="float: right; margin: 8px">
                                        </div>
                                        <ul>
                                            <li><b>Data Security: </b>Our secure processes remove any data left on your
                                                electronics, and we provide extensive documentation to minimize
                                                chain-of-custody issues from when we receive the materials to the point
                                                where they’re recycled or discarded permanently</li>
                                            <li><b>Product Resale: </b>We research product and material resale options,
                                                providing you the opportunity to earn money back from recycling unwanted
                                                electronics</li>
                                            <li><b>IT Asset Recycling: </b>IT assets with no resale value must be
                                                properly managed. We can turn electronics into materials that can be
                                                reused</li>
                                            <li><b>Environmental Compliance: </b>We work to ensure that our processes
                                                are in compliance with electronic recycling laws, and for peace of mind,
                                                we offer visible tracking of e-waste throughout the process</li>
                                            <li><b>OEM Regulatory Compliance</b>: Our staff has the skills and knowledge
                                                to help with the regulatory complexities that OEMs face in complying
                                                with state recycling laws. Our services address and
                                                satisfy the legal requirements of each state</li>

                                        </ul>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div></div>
        </div>

        <div class=" mt-5 mb-5 aem-GridColumn aem-GridColumn--default--12">
            <div tabindex="-1">
                <div class="bottomspacing" style="position: relative;">
                    <div class="jss28 jss45 SingleColumnText">
                        <div class="container d-flex align-items-start justify-content-start">
                            <div class="d-flex flex-column text-left align-items-start jss31">
                                <h2 class="MuiTypography-root jss29 jss46 MuiTypography-h3">
                                    <div class="heading">Our Electronics Recycling Process</div>
                                </h2>
                                <div class="MuiBox-root jss48">
                                    <div
                                        class="MuiTypography-root rich-text link-bold single-column-description jss30 jss47 jss32 MuiTypography-body1">
                                        <ol>
                                            <li><b>Schedule a Pickup: </b>Log into your account, give us some details
                                                and we’ll handle the rest.</li>
                                            <li><b>Pickup and Collection: </b>Whether you have small quantities or an
                                                entire truck, or if you require something more specialized like white
                                                glove service, we have you covered.</li>
                                            <li><b>Data Destruction:</b> We offer multiple data eradication services.
                                                Your data is safe with us.</li>
                                            <li><b>Recycling and Demanufacturing</b> </li>
                                            <li><b>Tracking and Reporting:</b> Sit back, relax and track the process,
                                                knowing that everything is safe and secure.</li>
                                        </ol>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div></div>
        </div>


    </div>
@extends('footer')


</body>

</html>
