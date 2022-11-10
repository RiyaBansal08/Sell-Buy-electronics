<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>i13promax_64gb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Georama&display=swap" rel="stylesheet">
    <style>
        .pad10 {
            padding: 10px;
        }

        .marginCol {
            margin-left: -5rem;
        }

        .model {
            font-family: 'Georama', sans-serif;
            font-size: xx-large;
        }
        .price{
            font-size: 30px;
            color: red;
        }
        @media (max-width:700px) {
            .marginCol {
                margin-left: auto;
                text-align: center;
            }
            .model{
                font-size: x-large;
            }
            .onSmall {
                width: 60%;
                position: relative;
                margin: 0 auto;
            }
        }
    </style>
</head>

<body>
    @extends('header')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="onSmall">
                    <img class="img-resp " alt="Apple iPhone 13 pro max"
                        src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-13-pro-max-gold-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000"
                        itemprop="image" width="70%">
                </div>
                <meta itemprop="url" content="sell-old-mobile-phone/used-apple-iphone-11">
            </div>
            <!-- <div itemprop="brand" class="hide">Apple</div> -->
            <div class="col-sm-12 col-md-8 col-lg-8 marginCol ">
                <!-- <div class="hide" itemprop="name">Apple iPhone 13 pro max</div> -->

                <div class="">
                    <span class="model">Apple iPhone 13 pro max(4GB/64GB)</span>
                </div>
                <span class="" >
                    <span class="primary-text">50</span>+&nbsp;already&nbsp;sold&nbsp;on ProjectX</span>

                <div class=""><span class="">Get Upto </span><br>
                    <span class="price">Rs 25000</span>
                </div>
                <div class="" id="">
                    <button class="btn btn-success" tabindex="-1" type="button" style="min-height:42px" >
                        <span class="">
                            <a href="{{route('PhoneDetails')}}" style="text-decoration: none; color: white;">
                                <span class="" style="text-transform:none">Get Exact Value</span>
                            </a>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@extends('footer')

</body>
</html>
