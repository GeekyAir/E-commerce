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
    <title>Offers</title>
    <style>
         .banner .banner_holder .banner_data span{
            font-size: 32px;
            font-weight: bolder;
            color: darkgreen;
        }
         .buy_icon img{
            width: 50px;
            height: 50px;
        }
        .buy_icon{
            top: -6% !important;
            right: -5%;
        }
        .fav_icon{
            top: 0% !important;
        }
        .terms{
            width: 77%;
            text-align: left !important;
        }
        .terms a{
            color: darkgreen !important;
            font-weight: 600;
            padding-right: 10px !important;
        }
        footer{
             background-color: #f3e7d1 !important;
         }
        .market_footer_img img{
            margin-top: 15px;
            height: 320px;
            width: 300px;
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
@include('layouts.frontNav' , ['slug' =>'offer'] )
    <!-- top header -->

    <!--top slider-->
    <div class="top_slider">
        <div class="container-fluid">
            <div class="row slider_row">
                <div id="carouselExampleFade" class="carousel slide carousel-fade w-100" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="assests/img/offer_slide.png" class="">
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
                           <img src="assests/img/offer_banner.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner-->

    <div class="market offer">
        <!-- slick slider-->
        <div class="slick_slider">
            <div class="container-fluid">
                <!-- slick slider container -->
                <div class="row slick-carousel type-one-carousel cards">
                    <div class="">
                        <div class="slick_img_container">
                            <img src="assests/img/drink.png" />
                            <span>المشروبات</span>
                        </div>
                    </div>
                    <div class="">
                        <div class="slick_img_container">
                            <img src="assests/img/bread.png" />
                            <span>المخبوزات</span>
                        </div>
                    </div>
                    <div class="">
                        <div class="slick_img_container">
                            <img src="assests/img/freezing_food.png" />
                            <span>أطعمة مجمدة</span>
                        </div>
                    </div>
                    <div class="">
                        <div class="slick_img_container">
                            <img src="assests/img/organic.png" />
                            <span>اغذية عضوية وحيوية</span>
                        </div>
                    </div>
                
                    <div class="">
                        <div class="slick_img_container">
                            <img src="assests/img/veg.png" />
                            <span>خضراوات وفواكة</span>
                        </div>
                    </div>
                    <div class="">
                        <div class="slick_img_container">
                            <img src="assests/img/cleaning.png" />
                            <span>ادوات التنظيف المنزلية</span>
                        </div>
                    </div>
                    
                    <div class="">
                        <div class="slick_img_container">
                            <img src="assests/img/baby.png" />
                            <span>مستلزمات اطفال</span>
                        </div>
                    </div>
                    <div class="">
                        <div class="slick_img_container">
                            <img src="assests/img/breakfast.png" />
                            <span>الفطار</span>
                        </div>
                    </div>
                    
            
                    <div class="">
                        <div class="slick_img_container">
                            <img src="assests/img/canned_food.png" />
                            <span>اطعمة معلبة</span>
                        </div>
                    </div>
                   
                    <div class="">
                        <div class="slick_img_container">
                            <img src="assests/img/cheese.png" />
                            <span>جبن والبان</span>
                        </div>
                    </div>
                    
                    <div class="">
                        <div class="slick_img_container">
                            <img src="assests/img/fish.png" />
                            <span>اسماك</span>
                        </div>
                    </div>
                    <div class="">
                        <div class="slick_img_container">
                            <img src="assests/img/hot.png" />
                            <span>اطعمة حاره</span>
                        </div>
                    </div>
                    <div class="">
                        <div class="slick_img_container">
                            <img src="assests/img/skin.png" />
                            <span>كريم للبشرة</span>

                        </div>
                    </div>
                </div>
                <!-- slick slider container -->
            </div>
        </div>

        <div class="products">
           <div class="overlay">
            <div class="container-fluid">
                <!-- market products -->
            <div class="row offer_container">
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="buy_icon"><img src="assests/img/ribbon.png" /></div>
                          <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                          <div class="prod_img">
                              <img src="assests/img/prod_img.png" />
                          </div>

                          <div class="prod_data">
                              <span>مياة معباءه 600 مل</span><br>
                              <span>عبوة من 24 قطعة</span>
                              <p>شامل ضريبة القيمة المضافة</p>
                          </div>

                          <div class="card_footer">
                            <i class="fas fa-seedling"></i> <span>12 نقطة 15 نقطة</span>
                          </div>
                          
                        </div>
                      </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="buy_icon"><img src="assests/img/ribbon.png" /></div>
                          <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                          <div class="prod_img">
                              <img src="assests/img/prod_img.png" />
                          </div>

                          <div class="prod_data">
                              <span>مياة معباءه 600 مل</span><br>
                              <span>عبوة من 24 قطعة</span>
                              <p>شامل ضريبة القيمة المضافة</p>
                          </div>

                          <div class="card_footer">
                            <i class="fas fa-seedling"></i> <span>12 نقطة 15 نقطة</span>
                          </div>
                          
                        </div>
                      </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="buy_icon"><img src="assests/img/ribbon.png" /></div>
                          <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                          <div class="prod_img">
                              <img src="assests/img/prod_img.png" />
                          </div>

                          <div class="prod_data">
                              <span>مياة معباءه 600 مل</span><br>
                              <span>عبوة من 24 قطعة</span>
                              <p>شامل ضريبة القيمة المضافة</p>
                          </div>

                          <div class="card_footer">
                            <i class="fas fa-seedling"></i> <span>12 نقطة 15 نقطة</span>
                          </div>
                          
                        </div>
                      </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="buy_icon"><img src="assests/img/ribbon.png" /></div>
                          <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                          <div class="prod_img">
                              <img src="assests/img/prod_img.png" />
                          </div>

                          <div class="prod_data">
                              <span>مياة معباءه 600 مل</span><br>
                              <span>عبوة من 24 قطعة</span>
                              <p>شامل ضريبة القيمة المضافة</p>
                          </div>

                          <div class="card_footer">
                            <i class="fas fa-seedling"></i> <span>12 نقطة 15 نقطة</span>
                          </div>
                          
                        </div>
                      </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="buy_icon"><img src="assests/img/ribbon.png" /></div>
                          <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                          <div class="prod_img">
                              <img src="assests/img/prod_img.png" />
                          </div>

                          <div class="prod_data">
                              <span>مياة معباءه 600 مل</span><br>
                              <span>عبوة من 24 قطعة</span>
                              <p>شامل ضريبة القيمة المضافة</p>
                          </div>

                          <div class="card_footer">
                            <i class="fas fa-seedling"></i> <span>12 نقطة 15 نقطة</span>
                          </div>
                          
                        </div>
                      </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="buy_icon"><img src="assests/img/ribbon.png" /></div>
                          <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                          <div class="prod_img">
                              <img src="assests/img/prod_img.png" />
                          </div>

                          <div class="prod_data">
                              <span>مياة معباءه 600 مل</span><br>
                              <span>عبوة من 24 قطعة</span>
                              <p>شامل ضريبة القيمة المضافة</p>
                          </div>

                          <div class="card_footer">
                            <i class="fas fa-seedling"></i> <span>12 نقطة 15 نقطة</span>
                          </div>
                          
                        </div>
                      </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="buy_icon"><img src="assests/img/ribbon.png" /></div>
                          <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                          <div class="prod_img">
                              <img src="assests/img/prod_img.png" />
                          </div>

                          <div class="prod_data">
                              <span>مياة معباءه 600 مل</span><br>
                              <span>عبوة من 24 قطعة</span>
                              <p>شامل ضريبة القيمة المضافة</p>
                          </div>

                          <div class="card_footer">
                            <i class="fas fa-seedling"></i> <span>12 نقطة 15 نقطة</span>
                          </div>
                          
                        </div>
                      </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="buy_icon"><img src="assests/img/ribbon.png" /></div>
                          <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                          <div class="prod_img">
                              <img src="assests/img/prod_img.png" />
                          </div>

                          <div class="prod_data">
                              <span>مياة معباءه 600 مل</span><br>
                              <span>عبوة من 24 قطعة</span>
                              <p>شامل ضريبة القيمة المضافة</p>
                          </div>

                          <div class="card_footer">
                            <i class="fas fa-seedling"></i> <span>12 نقطة 15 نقطة</span>
                          </div>
                          
                        </div>
                      </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="buy_icon"><img src="assests/img/ribbon.png" /></div>
                          <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                          <div class="prod_img">
                              <img src="assests/img/prod_img.png" />
                          </div>

                          <div class="prod_data">
                              <span>مياة معباءه 600 مل</span><br>
                              <span>عبوة من 24 قطعة</span>
                              <p>شامل ضريبة القيمة المضافة</p>
                          </div>

                          <div class="card_footer">
                            <i class="fas fa-seedling"></i> <span>12 نقطة 15 نقطة</span>
                          </div>
                          
                        </div>
                      </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="buy_icon"><img src="assests/img/ribbon.png" /></div>
                          <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                          <div class="prod_img">
                              <img src="assests/img/prod_img.png" />
                          </div>

                          <div class="prod_data">
                              <span>مياة معباءه 600 مل</span><br>
                              <span>عبوة من 24 قطعة</span>
                              <p>شامل ضريبة القيمة المضافة</p>
                          </div>

                          <div class="card_footer">
                            <i class="fas fa-seedling"></i> <span>12 نقطة 15 نقطة</span>
                          </div>
                          
                        </div>
                      </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="buy_icon"><img src="assests/img/ribbon.png" /></div>
                          <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                          <div class="prod_img">
                              <img src="assests/img/prod_img.png" />
                          </div>

                          <div class="prod_data">
                              <span>مياة معباءه 600 مل</span><br>
                              <span>عبوة من 24 قطعة</span>
                              <p>شامل ضريبة القيمة المضافة</p>
                          </div>

                          <div class="card_footer">
                            <i class="fas fa-seedling"></i> <span>12 نقطة 15 نقطة</span>
                          </div>
                          
                        </div>
                      </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="buy_icon"><img src="assests/img/ribbon.png" /></div>
                          <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                          <div class="prod_img">
                              <img src="assests/img/prod_img.png" />
                          </div>

                          <div class="prod_data">
                              <span>مياة معباءه 600 مل</span><br>
                              <span>عبوة من 24 قطعة</span>
                              <p>شامل ضريبة القيمة المضافة</p>
                          </div>

                          <div class="card_footer">
                            <i class="fas fa-seedling"></i> <span>12 نقطة 15 نقطة</span>
                          </div>
                          
                        </div>
                      </div>
                </div>

                
            </div>
            <!-- market products -->

            </div>
           </div>
        </div>
    <!-- slick slider-->
   </div>


    <!-- footer -->
    <footer class="main_footer">
    <div class="container-fluid">

        <div class="market_footer_img">
            <img src="assests/img/offer_footer.png" />
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
                     slidesToShow: 8,
                     slidesToScroll: 3,
                     responsive: [
                     {
                         
                         breakpoint: 2500,
                         settings: {
                             slidesToShow: 10,
                             slidesToScroll: 6,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 1800,
                         settings: {
                             slidesToShow: 9,
                             slidesToScroll: 5,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 1600,
                         settings: {
                             slidesToShow: 8,
                             slidesToScroll: 4,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 1300,
                         settings: {
                             slidesToShow: 7,
                             slidesToScroll: 4,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 1100,
                         settings: {
                             slidesToShow: 6,
                             slidesToScroll: 3,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 900,
                         settings: {
                             slidesToShow: 5,
                             slidesToScroll: 3,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 700,
                         settings: {
                             slidesToShow: 4,
                             slidesToScroll: 3,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 600,
                         settings: {
                             slidesToShow: 3,
                             slidesToScroll: 3,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 450,
                         settings: {
                             slidesToShow: 2,
                             slidesToScroll: 2,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 340,
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