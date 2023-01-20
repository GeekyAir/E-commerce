<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assests/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assests/css/all.min.css" />
    <link rel="stylesheet" href="assests/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assests/css/slick.css" />
    <link rel="stylesheet" href="assests/css/slick-theme.css" />
    <link rel="stylesheet" href="assests/css/style.css" />
    <title>Education & training</title>
    <style>
        footer{
            background-color: #f1f2e4 !important;
        }
       .market_footer_img img{
           position: absolute;
           left: 15px;
           bottom: 10px;
           margin-top: 15px;
           height: 200px;
           width: 180px;
       }

       @media (min-width:250px) and (max-width:500px){
           .terms{
               text-align: right !important;
           }
           .main_footer .social .terms a{
               display: block;
               font-size: 10px;
               padding-right: 2px;
           }
       }
       @media (min-width:500px) and (max-width:992px){
           .terms{
               text-align: right !important;
           }
           .main_footer .social .terms a{
               padding-right: 5px;
               font-size: 12px;
           }
       }
   </style>
</head>
<body>

     <!-- top header -->
     <div class="top_header">
        <div class="container-fluid">
            <div class="row">
                <div class="header_links col-sm-7 col-5 navbar navbar-expand-md  ">
                    <button class="navbar-toggler bg-light navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <div class="btn-group nav_logo">
                                    <img src="assests/img/logo.png" />
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">الرئيسية <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">المنصة</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">العروض</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">من نحن</a>
                            </li>
                        </ul>
                   </div>

                </div>  <!-- header links -->
                <!-- header user -->
                <div class="col-sm-5 col-7 header_icons_cont">
                    <div class="header_icons d-inline-block">
                        <a href="#"><img src="assests/img/cart.png" /></a>
                        <a href="#"><img src="assests/img/mail.png" /></a>
                    </div>
                    <div class="nav-user d-inline-block">
                        <img src="assests/img/user.png" /> <br>
                        <span>اسم المستخدم</span>
                    </div>

                </div>

                <!-- header social -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <!-- top header -->

    <!--top slider-->
    <div class="top_slider">
        <div class="container-fluid">
            <div class="row slider_row">
                <div id="carouselExampleFade" class="carousel slide carousel-fade w-100" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="assests/img/edu_slide.png" class="">
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
                           <img src="assests/img/market_banner.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner-->

    <div class="education">
        <div class="slick_slider">
            <div class="container-fluid">
                <!-- slick slider container -->
                <div class="row slick-carousel type-one-carousel cards">
                    @foreach ($courses as $course )
                    <div class="">
                        <div class="card">
                           <a href="{{ route('courseDetails',$course->id) }}"><img src="images/Course/{{ $course->img_url }}" class="card-img-top" alt="Education"></a>
                            <div class="card-body">
                              <h5 class="card-title">{{ $course->title }} </h5>

                              <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                              </div>

                              <div class="card_footer">
                                <img src="assests/img/plant_icon.png" /> <span>{{ $course->point }} <span class="canceled"> {{ $course->old_point }}</span>
                              </div>


                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- slick slider container -->

                <div class="row slick-carousel type-two-carousel cards">
                    <div class="">
                        <div class="card">
                            <img src="assests/img/edu_card.jpg" class="card-img-top" alt="Education">
                            <div class="card-body">
                              <h5 class="card-title">دورة تعليم html </h5>

                              <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                              </div>

                              <div class="card_footer">
                                <img src="assests/img/plant_icon.png" /> <span>12 نقطة <span class="canceled"> 15 نقطة</span>
                              </div>


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

     <!-- footer -->
     <footer class="main_footer">
        <div class="container-fluid">

            <div class="market_footer_img">
                <img src="assests/img/.png" />
            </div>

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
                        <a href="#" style="text-decoration: underline;">شروط الإستخدام</a>
                        <a href="#" style="text-decoration: underline;">شروط البيع</a>
                        <a href="#" style="text-decoration: underline;">سياسة الخصوصية</a>
                    </div>
                </div>

            </div>
        </div>
        </footer>
    <!-- footer -->










    <script src="./assests/js/jquery-3.3.1.min.js"></script>
    <script src="./assests/js/popper.min.js"></script>
    <script src="./assests/js/bootstrap.min.js"></script>
    <script src="./assests/js/slick.min.js"></script>
    <script src="./assests/js/main.js"></script>

    <script>
        $(document).ready(function(){
             var gadgetCarousel = $(".slick-carousel");

             gadgetCarousel.each(function() {
                 if ($(this).is(".type-one-carousel")) {
                     $(this).slick({
                     dots: false,
                     infinite: true,
                     slidesToShow: 6,
                     slidesToScroll: 3,
                     responsive: [
                     {

                         breakpoint: 2500,
                         settings: {
                             slidesToShow: 8,
                             slidesToScroll: 4,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 1900,
                         settings: {
                             slidesToShow: 7,
                             slidesToScroll: 4,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 1630,
                         settings: {
                             slidesToShow: 6,
                             slidesToScroll: 3,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 1200,
                         settings: {
                             slidesToShow: 5,
                             slidesToScroll: 2,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 950,
                         settings: {
                             slidesToShow: 4,
                             slidesToScroll: 2,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 730,
                         settings: {
                             slidesToShow: 3,
                             slidesToScroll: 1,
                             infinite: true
                         }
                         },

                         {
                         breakpoint: 570,
                         settings: {
                             slidesToShow: 2,
                             slidesToScroll: 1,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 350,
                         settings: {
                             slidesToShow: 1,
                             slidesToScroll: 1,
                             infinite: true
                         }
                         }
                     ]


                 });
                 }
                 else if ($(this).is(".type-two-carousel")){
                $(this).slick({
                    infinite: true,
                     slidesToShow: 6,
                     slidesToScroll: 3,
                    responsive: [
                     {

                         breakpoint: 2500,
                         settings: {
                             slidesToShow: 8,
                             slidesToScroll: 4,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 1900,
                         settings: {
                             slidesToShow: 7,
                             slidesToScroll: 4,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 1630,
                         settings: {
                             slidesToShow: 6,
                             slidesToScroll: 3,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 1200,
                         settings: {
                             slidesToShow: 5,
                             slidesToScroll: 2,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 950,
                         settings: {
                             slidesToShow: 4,
                             slidesToScroll: 2,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 730,
                         settings: {
                             slidesToShow: 3,
                             slidesToScroll: 1,
                             infinite: true
                         }
                         },

                         {
                         breakpoint: 570,
                         settings: {
                             slidesToShow: 2,
                             slidesToScroll: 1,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 350,
                         settings: {
                             slidesToShow: 1,
                             slidesToScroll: 1,
                             infinite: true
                         }
                         }
                     ]
                });
                }
                 else {
                 $(this).slick();
                 }
             })

         });

         /*


         */
     </script>

</body>
</html>
