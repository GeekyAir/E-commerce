<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assests/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assests/css/all.min.css" />
    <link rel="stylesheet" href="assests/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assests/css/style.css" />
    <title>Platform</title>
</head>
<body>
     <!-- top header -->
@include('layouts.frontNav' , ['slug' =>'platform'] )
    <!-- top header -->

    <!--top slider-->
    <div class="top_slider">
        <div class="container-fluid">
            <div class="row slider_row">
                <div id="carouselExampleFade" class="carousel slide carousel-fade w-100" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="assests/img/platform_slide.png" class="">
                      </div>
                      <div class="carousel-item">
                        <img src="assests/img/slide-1.jpg" class="">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--top slider-->

    <!--banner-->
    <div class="banner">
        <div class="container-fluid">
            <div class="banner_holder">
                <div class="row">
                    <div class="col-12">
                        <div class="banner_data">
                           <img src="assests/img/platform_banner.png" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="plat_feature">
                <div class="row">
                    <div class="col-md-2 col-5 cate_card">
                        <div class="card">
                            <img src="assests/img/market_img.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="#" class="card-text">تسوق</a>
                            </div>
                        </div>
                    </div>

                    <div class="dots">
                        .....
                    </div>

                    <div class="col-md-2 col-5 cate_card">
                        <div class="card">
                            <img src="assests/img/deliver_img.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <a href="#" class="card-text">حدد موعد التوصيل</a>
                            </div>
                        </div>
                    </div>

                    <div class="dots">
                        .....
                    </div>

                    <div class="col-md-2 col-5 cate_card">
                        <div class="card">
                            <img src="assests/img/free_deliver.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="#" class="card-text">التوصيل مجانا</a>
                            </div>
                        </div>
                    </div>

                    <div class="dots">
                        .....
                    </div>

                    <div class="col-md-2 col-5 cate_card">
                        <div class="card">
                            <img src="assests/img/help.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="#" class="card-text">نسعد بخدمتك</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="plat_category">
                <div class="container-fluid">
                    <div class="category_cont">
                        <div class="row">
                            <div class="col-md-4 col-12 cate_holder">
                                <div class="cate_data">
                                    <img src="assests/img/market_icon.png" />
                                    <span>السوبر ماركت</span>
                                </div>
                            </div>

                            <div class="col-md-4 col-12 cate_holder">
                                <div class="cate_data">
                                    <img src="assests/img/edu_icon.png" />
                                    <span>التعليم والتدريب</span>
                                </div>
                            </div>

                            <div class="col-md-4 col-12 cate_holder">
                                <div class="cate_data">
                                    <img src="assests/img/plug_icon.png" />
                                    <span>الاجهزة الكهربائية</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner-->


<!-- footer -->
<footer class="main_footer">
    <div class="contact_details">
        <div class="row contact_grid">
            <div class="contact_card col-md-3 col-6">
                <div class="icon">
                    <span><i class="fas fa-phone-alt"></i></span>
                </div>
                <div class="details">
                    <span>phone support</span>
                    <a href="tel:"><p>8002221222</p></a>
                </div>
            </div>

            <div class="contact_card col-md-3 col-6">
                <div class="icon">
                    <span><i class="fas fa-handshake"></i></span>
                </div>
                <div class="details">
                    <span>for help</span>
                    <a href="mailto:"><p>help.hemmat-watan.com</p></a>
                </div>
            </div>
        </div>

        <div class="social">
            <ul class="list-unstyled">
               
                <li>
                    <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                </li>

                <li>
                    <span><a href="#"><i class="fab fa-instagram"></i></a></span>
                </li>

                <li>
                    <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                </li>
            </ul>

            <div class="terms">
                <a href="#">معاهده الخصوصية</a>
            </div>
        </div>

    </div>
</footer>
<!-- footer -->








    <script src="./assests/js/jquery-3.3.1.min.js"></script>
    <script src="./assests/js/popper.min.js"></script>
    <script src="./assests/js/bootstrap.min.js"></script>
</body>
</html>