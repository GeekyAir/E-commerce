<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('assests/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assests/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assests/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assests/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assests/css/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assests/css/style.css') }}" />
    <title>Elec-Devices Preview</title>
    <style>
        .carousel-indicators li{
            border-radius:50%;
            width: 10px;
            height: 10px;
        }
        .carousel-indicators .active{
            background-color: darkgreen;
        }
        #prev_body,html{
            width: 100%;
            height: 100%;
        }
        .terms{
            width: 77%;
            text-align: right !important;
        }
        .terms a{
            color: rgb(21, 97, 121) !important;
            font-weight: 600;
            padding-right: 10px !important;
        }
        footer{
             background-color: #d8e4fe !important;
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
            .market_footer_img img{

                height: 150px !important;
                width: 100px !important;
            }
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
<body id="prev_body">

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
                                    <img src="{{ URL::asset('assests/img/logo.png') }}" />
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
                        <a href="#"><img src="{{ URL::asset('assests/img/cart.png') }}" /></a>
                        <a href="#"><img src="{{ URL::asset('assests/img/mail.png') }}" /></a>
                    </div>
                    <div class="nav-user d-inline-block">
                        <img src="{{ URL::asset('assests/img/user.png') }}" /> <br>
                        <span>اسم المستخدم</span>
                    </div>

                </div>

                <!-- header social -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <!-- top header -->

    <!-- preview -->
    <div class="preview elect_prev">
        <div class="overlay">
            <div class="container-fluid">
                <div class="preview_container">
                    <div class="row elec_holder">
                        <!-- title -->
                        <div class="col-12 title">
                           <img src="{{ URL::asset('assests/img/elect_plug_icon.png') }}" />
                            <span>الأجهزة الكهربائية</span>
                        </div>

                        <!-- product preview slider -->
                        <div class="col-lg-4 col-mg-5 col-sm-6 col-12 carousel_container">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="{{ URL::asset('images/Product') }}/{{ $product->main_img }}" class="d-block w-100" alt="...">
                                  </div>

                                  @if($product->img1)
                                  <div class="carousel-item">
                                    <img src="{{ URL::asset('images/Product') }}/{{ $product->img1 }}" class="d-block w-100" alt="...">
                                  </div>
                                  @endif

                                  @if($product->img2)
                                  <div class="carousel-item">
                                    <img src="{{ URL::asset('images/Product') }}/{{ $product->img2 }}" class="d-block w-100" alt="...">
                                  </div>
                                  @endif

                                  @if($product->img3)
                                  <div class="carousel-item">
                                    <img src="{{ URL::asset('images/Product') }}/{{ $product->img3 }}" class="d-block w-100" alt="...">
                                  </div>
                                  @endif
                                </div>

                              </div>
                        </div>

                        <!--product details-->
                        <div class="col-lg-8 col-md-6 col-sm-5 col-12 prod_details">
                            <div class="prev_data">
                                <ul class="list-unstyled">
                                    <li>
                                        <span>{{ $product->name }}</span>
                                    </li>
                                    <li>
                                        <span>{{ $product->short_description }}</span>
                                    </li>
                                    <li>
                                        <img src="{{ URL::asset('assests/img/plant_icon.png') }}" /> <span>{{ $product->point }} &nbsp; &nbsp;&nbsp; &nbsp; <span class="canceled">{{ $product->old_point }}</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="prev_btn">
                                <div class="select-wrapper">
                                    <select>
                                        @for ($i=1; $i<=$product->qnt ; $i++)
                                        <option>{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <span id="select_arrow"><img src="{{ URL::asset('assests/img/dropdown_icon.png') }}" /> </span>
                                </div>


                                <button class="btn add_cart">إضافة إلى العربة</button>
                            </div>
                        </div>

                    </div>

                    <div class="features row">
                        <div class="feat_title col-12">
                            <span>المواصفات</span>
                        </div>

                        <div class="prev_table table-responsive">
                            <table class="table">
                                <tbody>
                                  <tr>
                                    <td>بلد المنشأ</td>
                                    <td>{{ $product->country }}</td>
                                  </tr>
                                  <tr>
                                    <td>كمية العبوة</td>
                                    <td>{{ $product->qnt }}</td>
                                  </tr>
                                  <tr>
                                    <td>مدة الصلاحية</td>
                                    <td>{{ $product->valdiation }}</td>
                                  </tr>
                                  <tr>
                                    <td>الحجم</td>
                                    <td>{{ $product->size }}</td>
                                  </tr>
                                  <tr>
                                    <td>متطلبات التخزين</td>
                                    <td>{{ $product->store_conditions }} </td>
                                  </tr>
                                  <tr>
                                    <td>الفئه</td>
                                    <td>{{ $product->findCat($product->cat_id)->name_ar }} </td>
                                  </tr>
                                  <tr>
                                    <td>الفئه الفرعيه</td>
                                    <td>{{  $product->findSubCat($product->sub_cat_id)->name_ar }} </td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>

                    <div class="may_like row">
                        <div class="may_like_title col-12">
                            <span>قد تعجبك ايضاً</span>
                        </div>
                    </div>

                    <div class="may_like_card">
                        <div class="row">

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="buy_icon"><a href="#"><img src="{{ URL::asset('assests/img/buy_icon.png') }}" /></a></div>
                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                        <div class="prod_img">
                                            <img src="{{ URL::asset('assests/img/prod_img.png') }}" />
                                        </div>

                                        <div class="prod_data">
                                            <span>مياة معباءه 600 مل</span><br>
                                            <span>عبوة من 24 قطعة</span>
                                            <p>شامل ضريبة القيمة المضافة</p>
                                        </div>

                                        <div class="card_footer">
                                            <img src="{{ URL::asset('assests/img/plant_icon.png') }}" /> <span>12 نقطة <span class="canceled"> 15 نقطة</span>
                                        </div>

                                    </div>
                                    </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="buy_icon"><a href="#"><img src="{{ URL::asset('assests/img/buy_icon.png') }}" /></a></div>
                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                        <div class="prod_img">
                                            <img src="{{ URL::asset('assests/img/prod_img.png') }}" />
                                        </div>

                                        <div class="prod_data">
                                            <span>مياة معباءه 600 مل</span><br>
                                            <span>عبوة من 24 قطعة</span>
                                            <p>شامل ضريبة القيمة المضافة</p>
                                        </div>

                                        <div class="card_footer">
                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة <span class="canceled"> 15 نقطة</span>
                                        </div>

                                    </div>
                                    </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="buy_icon"><a href="#"><img src="assests/img/buy_icon.png" /></a></div>
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
                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة <span class="canceled"> 15 نقطة</span>
                                        </div>

                                    </div>
                                    </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="buy_icon"><a href="#"><img src="assests/img/buy_icon.png" /></a></div>
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
                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة <span class="canceled"> 15 نقطة</span>
                                        </div>

                                    </div>
                                    </div>
                            </div>


                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="buy_icon"><a href="#"><img src="assests/img/buy_icon.png" /></a></div>
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
                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة <span class="canceled"> 15 نقطة</span>
                                        </div>

                                    </div>
                                    </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="buy_icon"><a href="#"><img src="assests/img/buy_icon.png" /></a></div>
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
                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة <span class="canceled"> 15 نقطة</span>
                                        </div>

                                    </div>
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
    <!-- preview -->

    <!-- footer -->
    <footer class="main_footer">
        <div class="container-fluid">

            <div class="market_footer_img">
                <img src="assests/img/elect_footer.png" />
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

                        <a href="#" style="text-decoration: underline;">سياسة الخصوصية</a>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- footer -->












    <script src="{{ URl::asset('./assests/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ URl::asset('./assests/js/popper.min.js') }}"></script>
    <script src="{{ URl::asset('./assests/js/bootstrap.min.js') }}"></script>
    <script src="{{ URl::asset('./assests/js/slick.min.js') }}"></script>
    <script src="{{ URl::asset('./assests/js/main.js') }}"></script>
</body>
</html>
