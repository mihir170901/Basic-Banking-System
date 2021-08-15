<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">

    <title>Bank</title>
    <style>
        .nav {
            background-color: rgb(25, 27, 27);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bank of Sparks</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-mihir ">
                    <li class="nav-item  ">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link " aria-current="page" href="customer.php">View customers</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link " aria-current="page" href="history.php">Transaction History</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link " aria-current="page" href="#">Contact Us</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/mastercard.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Savings Account</h5>
                    <p>Open A Zero balance Savings Account</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/trading.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Current Account</h5>
                    <p>Open A Cuurent Account with min Balance of 10k</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/bitcoin.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Credit Cards</h5>
                    <p>Get Lucrative offers from leading E-Commerce sites</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-90">
                        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;"></span>
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
                            What
                            we offer for you</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                            We
                            provide online instant cash loans with quick approval that suit your term</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".5s"
                        style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.5s; animation-name: fadeInLeft;">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="image/loan.jpg" alt="">
                            </div>
                        </div>
                        <div class=" info text-center">
                            <span>Home Loan</span>
                            <h3>$5000-$20000</h3>
                        </div>
                        <div class="service_content">
                            <ul>
                                <li> Borrow - $350 over 3 months </li>
                                <li> Interest rate - 292% pa fixed</li>
                                <li>Total amount payable - $525.12</li>
                                <li>Representative - 1,286% APR</li>
                            </ul>
                            <div class="apply_btn">
                                <button class="boxed-btn3" type="submit">Apply Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="image/car.jpg" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                            <span>Car Loan</span>
                            <h3>$4000-$15000</h3>
                        </div>
                        <div class="service_content">
                            <ul>
                                <li> Borrow - $350 over 3 months </li>
                                <li> Interest rate - 292% pa fixed</li>
                                <li>Total amount payable - $525.12</li>
                                <li>Representative - 1,286% APR</li>
                            </ul>
                            <div class="apply_btn">
                                <button class="boxed-btn3" type="submit">Apply Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".5s"
                        style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.5s; animation-name: fadeInRight;">
                        <div class="service_icon_wrap text-center">
                            <div class="service_icon ">
                                <img src="image/education.jpg" alt="">
                            </div>
                        </div>
                        <div class="info text-center">
                            <span>Education Loan</span>
                            <h3>&#8377 100000-&#8377 1500000</h3>
                        </div>
                        <div class="service_content">
                            <ul>
                                <li> Borrow - $350 over 3 months </li>
                                <li> Interest rate - 292% pa fixed</li>
                                <li>Total amount payable - $525.12</li>
                                <li>Representative - 1,286% APR</li>
                            </ul>
                            <div class="apply_btn">
                                <button class="boxed-btn3" type="submit">Apply Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container services">

        <div class="row section">
            <div class="col-lg-12">
                <h1 style="text-align: center;padding-top: 25px;">Our Services</h1>
                <p style="text-align: center;">Whether you are opening your first bank account or have managed a
                    checking account for years, we will provide you with different types of banking services available.
                </p>

            </div>
        </div>
        <center>
            <div style="display: flex;box-sizing: border-box;">
                <div style="flex: 50%;padding: 10px;height: 338px;">
                    <img src="image/img11.webp" height="200" width="250">
                    <h4>View Transfer History</h4>
                    <p>View all transfer details that has been done till date among customers.</p><br>
                    <a href="history.php"><button class="button2" style="vertical-align:middle">
                            <h5><span style="font-family: Trebuchet MS">Transfer History</span></h5>
                        </button></a>

                </div>
                <div style="flex: 50%;padding: 10px;height: 338px;">
                    <img src="image/clients.jpg" height="200" width="400">
                    <h4>View All Customers</h4>
                    <p>View all customers registered and transfer money to customers as required.</p><br>
                    <a href="customer.php"><button class="button2" style="vertical-align:middle">
                            <h5><span style="font-family: Trebuchet MS">View Customers</span></h5>
                        </button></a>

                </div>
            </div>
        </center>
        <div><br><br><br></div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"></script>



</body>

</html>