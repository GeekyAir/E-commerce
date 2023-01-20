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
    <title>Association Profile</title>
    <style>
        footer.main_footer {
            background-color: #eee;
            height: 148px;
            position: relative;
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
                                    <img src="{{ asset('assests/img/logo.png') }}" />
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
                        <a href="#"><img src="{{ asset('assests/img/cart.png') }}" /></a>
                        <a href="#"><img src="{{ asset('assests/img/mail.png') }}" /></a>
                    </div>
                    <div class="nav-user d-inline-block">
                        <img src="{{ asset('assests/img/user.png') }}" /> <br>
                        <span>اسم المستخدم</span>
                    </div>

                </div>

                <!-- header social -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <!-- top header -->

    <div class="profile assoc-profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-4">
                    <div class="side_nav_container assoc-nav">
                        <div class="profile-img">
                            <img src="{{ asset('assests/img/user.png') }}" />
                        </div>
                        <div class=" upload-btn">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" for="inputGroupFile01"><i class="far fa-edit"></i></label>
                            </div>
                        </div>
                        <div class="profile-name">
                            <span>{{ auth()->user()->fname }}</span>
                        </div>

                        <!-- Link List-->
                        <div class="link_cont">
                            <div class="list-group" id="myList" role="tablist">
                                <a class="" data-toggle="list" href="#assoc-view-board" role="tab" aria-controls="home"><i class="fas fa-laptop-code"></i> لوحة العرض </a>
                                <a class="" data-toggle="list" href="#assoc-personal-data" role="tab" aria-controls="home"><i class="fas fa-users"></i>  بيانات الجمعية</a>
                                <a class="" data-toggle="list" href="#order-manage" role="tab" aria-controls="home"><i class="fas fa-boxes"></i> إدارة الطلبات </a>
                                <a class="" data-toggle="list" href="#inbox" role="tab" aria-controls="home"><i class="fas fa-envelope"></i>  صندوق البريد</a>
                                <a class="" data-toggle="list" href="#benfits" role="tab" aria-controls="home"><i class="fas fa-funnel-dollar"></i>  المستفيدين</a>
                              </div>
                        </div>
                        <!-- Link List-->
                    </div>
                </div><!--Side Navbar-->


                <div class="col-md-9 col-8 tab-content">

                    @if(session('success'))
                    <div id = "Message" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="tab-pane fade " id="assoc-view-board" role="tabpanel">
                        <div class="viewboard-container">
                            <div class="container">
                                <div class="view_container">
                                    <div class="title">
                                        <i class="far fa-hand-paper"></i> <span>مرحبا جمعية الخير</span>
                                    </div>

                                    <div class="supporters">
                                        <p>المستفيدين</p>
                                    </div>

                                    <div class="card-list">
                                        <div class="row charity-data">
                                            <div class="cust_card_2_cont">
                                                <div class="container">
                                                    <div class="row">

                                                        <div class="col-md-4 col-12">
                                                            <div class="custom_card_2">
                                                                <div class="card_title">
                                                                    <img src="assests/img/plant_icon.png" /> <br>
                                                                    <p>150</p>
                                                                </div>
                                                                <div class="card_body">
                                                                    <span>مستفيد</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 col-12">
                                                            <div class="custom_card_2">
                                                                <div class="card_title">
                                                                    <img src="assests/img/plant_icon.png" /> <br>
                                                                    <p>40000</p>
                                                                </div>
                                                                <div class="card_body">
                                                                    <span>نقط مستخدمة</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 col-12">
                                                            <div class="custom_card_2">
                                                                <div class="card_title">
                                                                    <img src="assests/img/plant_icon.png" /> <br>
                                                                    <p>5540</p>
                                                                </div>
                                                                <div class="card_body">
                                                                    <span>نقط غير مستخدمة</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>

                                <div class="clients-requi">
                                    <div class="row clients-requi-flex">
                                        <div class="col-12 text-center mt-5 mb-5 title">
                                            <span>نظرة شاملة عن إحتياجات المستفيد</span>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-12">
                                            <div class="sub_cont_img">
                                                <img src="assests/img/sub_cont_img1.png" />
                                            </div>

                                            <div class="text-center">نقطة لقسم الأجهزة</div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-12 mt_div">
                                            <div class="sub_cont_img">
                                                <img src="assests/img/sub_cont_img2.png" />
                                            </div>
                                            <div class="text-center">نقطة لقسم التعليم</div>

                                        </div>
                                        <div class="col-lg-3 col-md-4 col-12">
                                            <div class="sub_cont_img">
                                                <img src="assests/img/sub_cont_img3.png" />
                                            </div>
                                            <div class="text-center">نقطة لقسم الأغذية</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- view board -->

                    <!-- assoc profile details-->
                    <div class="tab-pane fade " id="assoc-personal-data" role="tabpanel">
                        <div class="personal-data">
                            <form class="prsonal-form">
                                <div class="row">

                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input type="text" required>
                                            <label>الاسم</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-user-alt"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12">
                                        <div class="input">
                                            <input type="text" required>
                                            <label>المدينة</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-city"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input type="number" required>
                                            <label>رقم الهوية</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-id-card"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12">
                                        <div class="input">
                                            <input type="number" required>
                                            <label>رقم الجوال</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input type="text" required>
                                            <label>الحالة الإجتماعية</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-ring"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12">
                                        <div class="input">
                                            <input type="number" required>
                                            <label>رقم جوال أخر</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input type="text" required>
                                            <label>عدد أفراد الأسرة </label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-user-friends"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12">
                                        <div class="input">
                                            <input type="email" required>
                                            <label>الإيميل</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input type="date" required>
                                            <label>تاريخ  الميلاد </label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-birthday-cake"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12">
                                        <div class="input">
                                            <input type="text" required>
                                            <label>الداعمين</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-ticket-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5 col-12">
                                        <div class="input">
                                            <input type="text" required>
                                            <label>الموقع</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-location-arrow"></i>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div> <!-- assoc profile details -->

                    <div class="tab-pane fade " id="order-manage" role="tabpanel">
                        <div class="orders-manag">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="title">
                                            <a href="#">إدارة الطلبات</a>
                                        </div>
                                    </div>

                                    <div class="col-12 text-right mt-4">
                                        <h6 class="order-title">الطلبات</h6>
                                    </div>

                                    <div class="order-table col-12">
                                        <div>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                              <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#prev-order" role="tab" aria-controls="nav-home" aria-selected="true">السابقة</a>
                                              <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#next-order" role="tab" aria-controls="nav-profile" aria-selected="false">الحالية</a>
                                            </div>
                                        </div>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="prev-order" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="cart-table">
                                                    <table class="table">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">النوع</th>
                                                            <th scope="col">حالة الطلب</th>
                                                            <th scope="col">تاريخ التسليم</th>
                                                            <th scope="col">تاريخ الطلب</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>

                                                          <tr>
                                                            <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                            <td>تم التسليم</td>
                                                            <td>2-20-2021</td>
                                                            <td>2-20-2021</td>
                                                          </tr>

                                                          <tr>
                                                            <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                            <td>تم التسليم</td>
                                                            <td>2-20-2021</td>
                                                            <td>2-20-2021</td>
                                                          </tr>

                                                          <tr>
                                                            <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                            <td>تم التسليم</td>
                                                            <td>2-20-2021</td>
                                                            <td>2-20-2021</td>
                                                          </tr>

                                                          <tr>
                                                            <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                            <td>تم التسليم</td>
                                                            <td>2-20-2021</td>
                                                            <td>2-20-2021</td>
                                                          </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="next-order" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <div class="cart-table">
                                                    <table class="table">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">النوع</th>
                                                            <th scope="col">حالة الطلب</th>
                                                            <th scope="col">تاريخ التسليم</th>
                                                            <th scope="col">تاريخ الطلب</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>

                                                          <tr>
                                                            <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                            <td>تم التسليم</td>
                                                            <td>10-20-2021</td>
                                                            <td>2-20-2021</td>
                                                          </tr>

                                                          <tr>
                                                            <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                            <td>تم التسليم</td>
                                                            <td>10-20-2021</td>
                                                            <td>2-20-2021</td>
                                                          </tr>

                                                          <tr>
                                                            <td><img src="assests/img/hot.png" /><span>سلعة غذائية</span></td>
                                                            <td>لم يتم التسليم</td>
                                                            <td>2-20-2021</td>
                                                            <td>2-20-2021</td>
                                                          </tr>

                                                          <tr>
                                                            <td><img src="assests/img/fish.png" /><span>سلعة غذائية</span></td>
                                                            <td>تم التسليم</td>
                                                            <td>2-20-2021</td>
                                                            <td>12-29-2021</td>
                                                          </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-12 text-right mt-4">
                                        <h6 class="order-title">الفواتير</h6>
                                    </div>

                                    <div class="order-table col-12">
                                        <div>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                              <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#prev-order2" role="tab" aria-controls="nav-home" aria-selected="true">المصدرة</a>
                                              <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#next-order2" role="tab" aria-controls="nav-profile" aria-selected="false">الحالية</a>
                                            </div>
                                        </div>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="prev-order2" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="cart-table">
                                                    <table class="table">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">النوع</th>
                                                            <th scope="col">حالة الطلب</th>
                                                            <th scope="col">تاريخ التسليم</th>
                                                            <th scope="col">تاريخ الطلب</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>

                                                          <tr>
                                                            <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                            <td>تم التسليم</td>
                                                            <td>2-20-2021</td>
                                                            <td>2-20-2021</td>
                                                          </tr>

                                                          <tr>
                                                            <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                            <td>تم التسليم</td>
                                                            <td>2-20-2021</td>
                                                            <td>2-20-2021</td>
                                                          </tr>

                                                          <tr>
                                                            <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                            <td>تم التسليم</td>
                                                            <td>2-20-2021</td>
                                                            <td>2-20-2021</td>
                                                          </tr>

                                                          <tr>
                                                            <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                            <td>تم التسليم</td>
                                                            <td>2-20-2021</td>
                                                            <td>2-20-2021</td>
                                                          </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="next-order2" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <div class="cart-table">
                                                    <table class="table">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">النوع</th>
                                                            <th scope="col">حالة الطلب</th>
                                                            <th scope="col">تاريخ التسليم</th>
                                                            <th scope="col">تاريخ الطلب</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>

                                                          <tr>
                                                            <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                            <td>تم التسليم</td>
                                                            <td>10-20-2021</td>
                                                            <td>2-20-2021</td>
                                                          </tr>

                                                          <tr>
                                                            <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                            <td>تم التسليم</td>
                                                            <td>10-20-2021</td>
                                                            <td>2-20-2021</td>
                                                          </tr>

                                                          <tr>
                                                            <td><img src="assests/img/hot.png" /><span>سلعة غذائية</span></td>
                                                            <td>لم يتم التسليم</td>
                                                            <td>2-20-2021</td>
                                                            <td>2-20-2021</td>
                                                          </tr>

                                                          <tr>
                                                            <td><img src="assests/img/fish.png" /><span>سلعة غذائية</span></td>
                                                            <td>تم التسليم</td>
                                                            <td>2-20-2021</td>
                                                            <td>12-29-2021</td>
                                                          </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> <!-- order managements -->

                    <!-- Inbox Container-->
                    <div class="tab-pane fade " id="inbox" role="tabpanel">
                        <div class="inbox">
                            <div class="row">
                                <div class="col-12  title">
                                    <span>صندوق البريد</span>
                                </div>

                                <div class="col-12 inbox-filter">
                                    <ul class="list-unstyled" id="myList" role="tablist">
                                        <li>
                                            <input type="checkbox" /><span>تحديد الكل</span>
                                        </li>

                                        <li>
                                            <a class="" data-toggle="list" href="#all-message" role="tab" aria-controls="home"><i class="far fa-credit-card"></i><span> كل الرسائل</span></a>

                                        </li>

                                        <li>
                                            <a class="" data-toggle="list" href="#sent-message" role="tab" aria-controls="home"><i class="fas fa-paper-plane"></i><span> المرسلة </span></a>

                                        </li>

                                        <li>
                                            <a class="" data-toggle="list" href="#recieve-message" role="tab" aria-controls="home"><i class="fas fa-clipboard"></i><span>  المستلمة</span></a>

                                        </li>

                                        <li>
                                            <a class="" data-toggle="list" href="#fav-message" role="tab" aria-controls="home"><i class="far fa-heart"></i><span> المفضلة</span></a>


                                        </li>

                                    </ul>
                                </div>

                                <div class="col-12 inbox-table tab-content">
                                    <div class="table-responsive tab-pane fade show active" id="all-message" role="tabpanel">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                        <img src="assests/img/user.png" />
                                                        <a href="chat.html" target="_blank" class="name"> اروي السيد </a>
                                                        <span class="time">10:30 am</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                        <img src="assests/img/user.png" />
                                                        <a href="chat.html" target="_blank" class="name"> اروي السيد </a>
                                                        <span class="time">10:30 am</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                        <img src="assests/img/user.png" />
                                                        <a href="chat.html" target="_blank" class="name"> اروي السيد </a>
                                                        <span class="time">10:30 am</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="table-responsive tab-pane fade" id="sent-message" role="tabpanel">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                        <img src="assests/img/user.png" />
                                                        <a href="chat.html" target="_blank" class="name"> منى السيد </a>
                                                        <span class="time">10:30 am</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                        <img src="assests/img/logo.png" />
                                                        <a href="chat.html" target="_blank" class="name"> على السيد </a>
                                                        <span class="time">10:30 am</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                        <img src="assests/img/user.png" />
                                                        <a href="chat.html" target="_blank" class="name"> اروي السيد </a>
                                                        <span class="time">10:30 am</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="table-responsive tab-pane fade" id="recieve-message" role="tabpanel">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                        <img src="assests/img/user.png" />
                                                        <a href="chat.html" target="_blank" class="name"> منى السيد </a>
                                                        <span class="time">10:30 am</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                        <img src="assests/img/logo.png" />
                                                        <a href="chat.html" target="_blank" class="name"> على السيد </a>
                                                        <span class="time">10:30 am</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                        <img src="assests/img/user.png" />
                                                        <a href="chat.html" target="_blank" class="name"> اروي السيد </a>
                                                        <span class="time">10:30 am</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="table-responsive tab-pane fade" id="fav-message" role="tabpanel">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                        <img src="assests/img/user.png" />
                                                        <a href="chat.html" target="_blank" class="name"> اروي السيد </a>
                                                        <span class="time">10:30 am</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                        <img src="assests/img/user.png" />
                                                        <a href="chat.html" target="_blank" class="name"> اروي السيد </a>
                                                        <span class="time">10:30 am</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="checkbox" />
                                                        <img src="assests/img/user.png" />
                                                        <a href="chat.html" target="_blank" class="name"> اروي السيد </a>
                                                        <span class="time">10:30 am</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div> <!-- inbox container -->

                    <div class="tab-pane fade show active" id="benfits" role="tabpanel">
                        <div class="benfits-container">
                            <div class="row">
                                <div class="col-12 title">
                                    <i class="fas fa-money-bill-alt"></i> <span>المستفيدين من همة وطن</span>
                                </div>
                            </div>

                            <div class="add-new-benf mt-5 mb-5">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <a href="{{ route('registerClient') }}" target="_blank" class="btn btn-success add-benf-btn"> إضافة مستفيد</a>
                                    </div>

                                    <div class="col-sm-6 col-12">
                                        <div class="form-group has-search">
                                            <span class="fa fa-search form-control-feedback"></span>
                                            <input type="search" class="form-control" placeholder="Search">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="benf-cards">
                                <div class="row">
                                    @foreach ($users as $user)
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="card">
                                            <div class="card-body">
                                              <div class="card-title">
                                                  <img src="{{ asset('assests/img/user.png') }}" />
                                              </div>

                                              <div class="card-body">
                                                    <div><span>{{ $user->fname }}</span></div>
                                                    <div><span>عدد أفراد الاسرة:</span> <Span>{{ $user->family_members }}</Span></div>
                                                    <div><span>النقاط الحالية:</span> <span>{{ $user->points }}</span></div>
                                                    <div><span>النقاط المستخدمة:</span> <span>{{ $user->totalPoints }}</span></div>
                                              </div>

                                              <div class="card-footer">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <i class="fas fa-times-circle card-footer-icon"></i>
                                                    </div>

                                                    <div class="col-3">
                                                        <i class="fas fa-user-edit card-footer-icon"></i>
                                                    </div>

                                                    <div class="col-3">
                                                        <!-- Button trigger modal -->
                                                        <a href="javaascript:void(0)" onclick="getInfo({{ $user->id }})" type="button" class="" data-toggle="modal" data-target="#plus-circle-icon">
                                                            <i class="fas fa-plus-circle card-footer-icon"></i>
                                                        </a>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="plus-circle-icon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('addPoints') }}" method="POST">
                                                                @csrf
                                                            <div class="modal-body">
                                                                <input name="userId" id="userId" type="hidden" >
                                                                <input name="companyId" id="companyId" type="hidden">
                                                                <input name="points" type="number" class="form-control" placeholder="اضف نقاط" />
                                                            </div>
                                                            <div class="modal-footer text-center justify-content-center">
                                                                <button type="submit" class="btn btn-success">Save changes</button>
                                                            </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-3">
                                                        <i class="fas fa-eye card-footer-icon"></i>
                                                    </div>

                                                </div>
                                              </div>

                                            </div>
                                          </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>




                        </div>
                    </div> <!-- benfits-->


                </div><!-- content container-->
            </div>
        </div>
    </div>


     <!-- footer -->
     <footer class="main_footer">
        <div class="container-fluid">

            <div class="contact_details">
                <div class="row contact_grid">
                    <div class="col-3">
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

                        </div>
                    </div>

                    <div class="col-4">
                        <div class="contact_card">
                            <div class="icon">
                                <span><i class="fas fa-phone-alt"></i></span>
                            </div>
                            <div class="details">
                                <span>phone support</span>
                                <a href="tel:"><p>8002221222</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="contact_card">
                            <div class="icon">
                                <span><i class="fas fa-handshake"></i></span>
                            </div>
                            <div class="details">
                                <span>for help</span>
                                <a href="mailto:"><p>help.hemmat-watan.com</p></a>
                            </div>
                        </div>
                    </div>


                </div>



            </div>
        </div>
        </footer>
    <!-- footer -->







    <script type="text/javascript" src="{{ URL::asset('./assests/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/main.js') }}"></script>

    <script>
        setTimeout(function(){
            $('#Message').fadeOut('slow');
        },1500);
    </script>

    <script>
        function getInfo(id)
        {
            $.get('/getInfo/'+id,function($user){
                $("#userId").val($user.id);
                $("#companyId").val($user.company_id);

            });
        }
    </script>
</body>
</html>
