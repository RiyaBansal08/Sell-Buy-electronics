<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
    <!-- ======= Header ======= -->
    @extends('header')
    <!-- End Header -->

<div id="cart">

      <section class="shopping-cart dark">
        <div class="container">
             <div class="block-heading">
               <h2 style="color: #24ce4f;">Shopping Cart</h2>
               <p>Going to write something here.</p>
             </div>
             <div class="content">
            <div class="row">
              <div class="col-md-12 col-lg-8">
                <div class="items">
                  <div class="product">
                    <div class="row">
                      <div class="col-md-3">
                        <img class="img-fluid mx-auto d-block image" src="https://images.samsung.com/in/smartphones/galaxy-note20/buy/002-note20ultra-kv-mo-720.jpg?imwidth=720">
                      </div>
                      <div class="col-md-8">
                        <div class="info">
                          <div class="row">
                            <div class="col-md-5 product-name">
                              <div class="product-name">
                                <a href="#">Samsung Note 20 ultra</a>
                                <div class="product-info">
                                  <div>RAM : <span class="value">12GB</span></div>
                                  <div>Memory : <span class="value">256GB</span></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4 quantity">
                              <label for="quantity">Quantity : </label>
                              <input id="quantity" type="number" value ="1" class="form-control quantity-input">
                            </div>
                            <div class="col-md-3 price">
                              <span>Rs89,000</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product">
                    <div class="row">
                      <div class="col-md-3">
                        <img class="img-fluid mx-auto d-block image" src="https://images.samsung.com/in/smartphones/galaxy-note20/buy/002-note20ultra-kv-mo-720.jpg?imwidth=720">
                      </div>
                      <div class="col-md-8">
                        <div class="info">
                          <div class="row">
                            <div class="col-md-5 product-name">
                              <div class="product-name">
                                <a href="#">Samsung Note 20 ultra</a>
                                <div class="product-info">
                                  <div>RAM : <span class="value">12GB</span></div>
                                  <div>Memory : <span class="value">256GB</span></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4 quantity">
                              <label for="quantity">Quantity : </label>
                              <input id="quantity" type="number" value ="1" class="form-control quantity-input">
                            </div>
                            <div class="col-md-3 price">
                              <span>Rs89,000</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product">
                    <div class="row">
                      <div class="col-md-3">
                        <img class="img-fluid mx-auto d-block image" src="https://images.samsung.com/in/smartphones/galaxy-note20/buy/002-note20ultra-kv-mo-720.jpg?imwidth=720">
                      </div>
                      <div class="col-md-8">
                        <div class="info">
                          <div class="row">
                            <div class="col-md-5 product-name">
                              <div class="product-name">
                                <a href="#">Samsung Note 20 ultra</a>
                                <div class="product-info">
                                  <div>RAM : <span class="value">12GB</span></div>
                                  <div>Memory : <span class="value">256GB</span></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4 quantity">
                              <label for="quantity">Quantity:</label>
                              <input id="quantity" type="number" value ="1" class="form-control quantity-input">
                            </div>
                            <div class="col-md-3 price">
                              <span>Rs89,000</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-4">
                <div class="summary">
                  <h3>Summary</h3>
                  <div class="summary-item"><span class="text">Subtotal : </span><span class="price">Rs2,67,000</span></div>
                  <div class="summary-item"><span class="text">Discount : </span><span class="price">Rs0</span></div>
                  <div class="summary-item"><span class="text">Shipping : </span><span class="price">Rs0</span></div>
                  <div class="summary-item"><span class="text">Total : </span><span class="price">Rs2,67,000</span></div>
                  <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #24ce4f;">Checkout</button>
                </div>
              </div>
            </div>
          </div>
        </div>
     </section>
    </div>





        <!-- Footer -->
        @extends('footer')
        <!-- Footer -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>

    </html>
