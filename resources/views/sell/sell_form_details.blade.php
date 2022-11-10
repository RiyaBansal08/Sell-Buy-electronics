<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</head>

<body>
    @extends('header')
    <div class="container mt-5 mb-5">
        <h3 style="margin-top: 5rem">Tell something about your device to evaluate its best price</h3>
        <form action="">
            <div class="card">
                <div class="card-body">
                    <h5>Does your Phone Switch On?</h5>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                </div>

                <div class="card-body">
                    <h5>Is your mobile under brand warranty?</h5>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptionss" id="inlineRadio11"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio11">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptionss" id="inlineRadio22"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio22">No</label>
                    </div>
                </div>

                <div class="card-body">
                    <h5>Select the issues of your phone.</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Display glass crack but touch working fine
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Display/Touch crack, lines, blur, blank
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Battery back up issues
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Speaker/Microphone issue
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Faulty camera
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Wifi/Bluetooth/GPS issue
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Charging Issue
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Power/Volume/Home Button Issue
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Finger Print Issue
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Network Issue
                        </label>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <h5>Select the following acessories you have.</h5>
                        <div class="col-sm-6 col-md-3 col-lg-3 ">
                            <div class=""><img class="img-resp" alt="charger" width="50%"
                                    src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xxhdpi/5d244a8299b93.jpg">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Original Charger of Device
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class=""><img class="img-resp" alt="Earphones" width="50%"
                                    src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xxhdpi/5d2449ca64a06.jpg">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Original Earphones
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class=""><img class="img-resp" alt="Box" width="50%"
                                    src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xxhdpi/5d244b6c82230.jpg">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Box with same IMEI
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class=""><img class="img-resp" alt="Bill" width="50%"
                                    src="https://s3n.cashify.in/cashify/productLinePartVariation/img/xxhdpi/5d244b19aa676.jpg">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Bill with same IMEI
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h5>Please enter your phone number to unlock your device price. </h5>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Mobile : </label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                      </div>
                </div>

                <div class="card-body" id="">
                    <button class="btn btn-success" tabindex="-1" type="button" style="min-height:42px" >
                        <span class="">
                            <a href="sell_form_details.html" style="text-decoration: none; color: white;">
                                <span class="" style="text-transform:none">Get Exact Value</span>
                            </a>
                        </span>
                    </button>
                </div>

            </div>
        </form>
    </div>
@extends('footer')
</body>

</html>
