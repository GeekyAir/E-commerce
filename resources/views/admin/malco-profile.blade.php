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
    <title>Malco Profile</title>
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
    @if(session('success'))
    <div id = "Message" class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="profile malco-profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-4">
                    <div class="side_nav_container malcoo-nav">
                        <div class="profile-img">
                            <img src="assests/img/user.png" />
                        </div>
                        <div class=" upload-btn">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" for="inputGroupFile01"><i class="far fa-edit"></i></label>
                            </div>
                        </div>
                        <div class="profile-name">
                            <span>MALCOO</span>
                        </div>

                        <!-- Link List-->
                        <div class="link_cont">
                            <div class="list-group" id="myList" role="tablist">
                                <a class="" data-toggle="list" href="#malc-inbox" role="tab" aria-controls="home"><i class="fas fa-envelope"></i>  صندوق البريد</a>
                                <a class="" data-toggle="list" href="#malcoo-orders" role="tab" aria-controls="home"><i class="fas fa-laptop-code"></i> الطلبات  </a>
                                <a class="" data-toggle="list" href="#malcoo-add-product" role="tab" aria-controls="home"><i class="fas fa-boxes"></i> إضافة منتج </a>
                                <a class="" data-toggle="list" href="#malcoo-add-service" role="tab" aria-controls="home"><i class="fas fa-boxes"></i> إضافة خدمة </a>
                                <a class="" data-toggle="list" href="#malcoo-add-company" role="tab" aria-controls="home"><i class="fas fa-gifts"></i>إضافة شركة </a>
                                <a class="" data-toggle="list" href="#malcoo-add-charity" role="tab" aria-controls="home"><i class="fas fa-users"></i>   إضافة جمعية</a>
                                <a class="" data-toggle="list" href="#malcoo-add-benfit" role="tab" aria-controls="home"><i class="fas fa-users"></i>   إضافة مستفيد</a>
                                <a class="" data-toggle="list" href="#malcoo-service-provider" role="tab" aria-controls="home"><i class="fas fa-funnel-dollar"></i>   إضافة مزود خدمة</a>
                              </div>
                        </div>
                        <!-- Link List-->
                    </div>
                </div><!--Side Navbar-->


                <div class="col-md-9 col-8 tab-content">

                      <!-- Inbox Container-->
                      <div class="tab-pane fade " id="malc-inbox" role="tabpanel">
                        <div class="inbox comp-inbox">
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

                    <div class="tab-pane fade " id="malcoo-orders" role="tabpanel">
                        <div class="comp-board">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="title">
                                             <span><i class="far fa-hand-paper"></i> الطلبات </span>
                                        </div>
                                    </div>

                                    <div class="malcoo-order-table col-12">
                                        <div>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                              <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#malco-prev-order" role="tab" aria-controls="nav-home" aria-selected="true">المصدرة</a>
                                              <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#malco-next-order" role="tab" aria-controls="nav-profile" aria-selected="false">الحالية</a>
                                            </div>
                                        </div>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="malco-prev-order" role="tabpanel" aria-labelledby="nav-home-tab">
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

                                            <div class="tab-pane fade" id="malco-next-order" role="tabpanel" aria-labelledby="nav-profile-tab">
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

                    </div> <!-- view board -->

                    <div class="tab-pane fade " id="malcoo-add-product" role="tabpanel">
                        <div class="add-product">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="title col-12">
                                        <i class="fab fa-product-hunt"></i> <span>إضافة منتج</span>
                                    </div>
                                </div>

                                <div class="product-input">
                                    <div class="row">
                                        <div class="col-12 prod-title">
                                            <i class="fas fa-plus-square"></i> <span>إضافة </span>
                                        </div>

                                        <div class="col-lg-6 col-md-8 col-12 offset-lg-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">الإسم :</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-8 col-12">
                                            <div class="input-group mb-4 quantity">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">الكمية :</span>
                                                </div>

                                                <input type="radio"  aria-describedby="basic-addon2"><label for="">حبة</label>
                                                <input type="radio"  aria-describedby="basic-addon2"><label for="">كرتون</label>
                                                <input type="radio"  aria-describedby="basic-addon2"><label for="">شد</label>
                                                <input type="radio"  aria-describedby="basic-addon2"><label for="">درزن</label>

                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-8 col-12 offset-lg-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">الوحدة :</span>
                                                </div>
                                                <select class="unit-type form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-8 col-12">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">الوزن :</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-8 col-12 offset-lg-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">المواصفات :</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-8 col-12">
                                           <div class="up-btn">
                                            <span class="text-center" style="width: 100%;">إضافة منتج من ملف أكسيل</span>
                                            <div class="input-group mb-4">

                                                <div class="custom-file">
                                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                  <label class="custom-file-label text-center" for="inputGroupFile01">أختر ملف</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text up-icon" id="inputGroupFileAddon01"><i class="fas fa-cloud-upload-alt"></i></span>
                                                </div>
                                            </div>
                                           </div>
                                        </div>

                                        <div class="col-lg-6 col-md-8 col-12 save-btn">
                                            <button type="button" class="btn btn-primary">حفظ</button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- add product -->

                    <div class="tab-pane fade " id="malcoo-add-service" role="tabpanel">
                        <div class="add-product add-service">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="title col-12">
                                        <i class="fab fa-product-hunt"></i> <span>إضافة خدمة</span>
                                    </div>
                                </div>

                                <div class="product-input">
                                    <div class="row">
                                        <div class="col-12 prod-title">
                                            <i class="fas fa-plus-square"></i> <span>إضافة </span>
                                        </div>


                                        <div class="col-lg-6 col-md-8 col-12">
                                            <div class="input-group mb-4 quantity">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon2">نوع الخدمة :</span>
                                                </div>

                                                <input type="radio"  aria-describedby="basic-addon2"><label for="">تعليم وتدريب</label>
                                                <input type="radio"  aria-describedby="basic-addon2"><label for="">تعليم</label>
                                                <input type="radio"  aria-describedby="basic-addon2"><label for="">تدريب</label>

                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-8 col-12 offset-lg-6">
                                            <div class="input-group mb-4 quantity">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon2">مدة الخدمة :</span>
                                                </div>

                                                <input type="radio"  aria-describedby="basic-addon2"><label for="">يوم </label>
                                                <input type="radio"  aria-describedby="basic-addon2"><label for="">اسبوع</label>
                                                <input type="radio"  aria-describedby="basic-addon2"><label for="">شهر</label>

                                            </div>
                                        </div>



                                        <div class="col-lg-6 col-md-8 col-12 offset-lg-6">
                                            <div class="input-group mb-4">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon2">تفاصيل الخدمة :</span>
                                                </div>
                                                <textarea class="form-control" placeholder="تفاصيل" aria-label="Recipient's username" aria-describedby="basic-addon2"></textarea>
                                            </div>
                                        </div>

                                    <br/>
                                        <div class="col-12 save-btn">
                                            <button type="button" class="btn btn-primary">حفظ</button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- add service -->

                    <!-- company -->
                    <div class="tab-pane fade " id="malcoo-add-company" role="tabpanel">
                        <div class="personal-data comp-personal-data">
                            <form class="prsonal-form" action="{{ route('addCompany') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 add-company-title">
                                       <i class="fas fa-industry"></i> <span>إضافة شركة</span>
                                    </div>
                                    <div class="col-md-5 col-12 offset-2">
                                        <div  class="input">
                                            <input name="companyName" type="text" required>
                                            <label>إسم الشركة</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="far fa-building"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12">
                                        <div class="input">
                                            <input name="ownerName" type="text" required>
                                            <label>إسم مالك الشركة</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-user-alt"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input name="commRecord" type="text" required>
                                            <label>السجل التجارى</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-id-card"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12">
                                        <div class="input">
                                            <input name="taxNumber" type="text" required>
                                            <label>الرقم الضريبى</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="far fa-file-excel"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input name="commActivity" type="text" required>
                                            <label>النشاط التجارى </label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-rss-square"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12">
                                        <div class="input">
                                            <input name="location" type="text" required>
                                            <label>الموقع</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-location-arrow"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input name="birthdate" type="date" required>
                                            <label>تاريخ  الإنشاء </label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="far fa-calendar-alt"></i>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-12 text-center"><button type="submit" class="btn btn-success px-5 "> اضافه</button></div>
                                </div>
                            </form>
                        </div>
                    </div><!-- company-->

                     <!-- charity -->
                     <div class="tab-pane fade " id="malcoo-add-charity" role="tabpanel">
                        <div class="personal-data comp-personal-data">
                            <form class="prsonal-form" action="{{ route('addAssoc') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 add-company-title">
                                       <i class="fas fa-industry"></i> <span>إضافة جمعية</span>
                                    </div>
                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input name="companyName" type="text" required>
                                            <label>إسم الشركة</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="far fa-building"></i>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-md-5 col-12">
                                        <div class="input">
                                            <input name="ownerName" type="text" required>
                                            <label>إسم مالك الشركة</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-user-alt"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input name="commRecord" type="text" required>
                                            <label>السجل التجارى</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-id-card"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12">
                                        <div class="input">
                                            <input name="taxNumber" type="text" required>
                                            <label>الرقم الضريبى</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="far fa-file-excel"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input name="commActivity" type="text" required>
                                            <label>النشاط التجارى </label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-rss-square"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12">
                                        <div class="input">
                                            <input name="location" type="text" required>
                                            <label>الموقع</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-location-arrow"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input name="birthdate" type="date" required>
                                            <label>تاريخ  الإنشاء </label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="far fa-calendar-alt"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12">
                                        <div class="input">
                                            <input name="email" type="email" required>
                                            <label>الايميل</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-location-arrow"></i>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input name="password" type="number" required>
                                            <label>كلمه السر </label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="far fa-calendar-alt"></i>
                                            </div>
                                        </div>

                                    </div>






                                </div>
                                <div class="col-12 text-center"><button type="submit" class="btn btn-success px-5 "> اضافه</button></div>
                            </form>
                        </div>
                    </div><!-- charity-->

                    <!-- comp benfit details-->
                    <div class="tab-pane fade " id="malcoo-add-benfit" role="tabpanel">
                        <div class="personal-data comp-personal-data">
                            <form class="prsonal-form" action="{{ route('addClient') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 add-company-title">
                                        <i class="fas fa-users"></i> <span>إضافة مستفيد</span>
                                     </div>
                                    <div class="col-md-5 col-12 offset-2">
                                        <div  class="input">
                                            <input name="name" type="text" required>
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
                                            <input name="city" type="text" required>
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
                                            <input name="id" type="number" required>
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
                                            <input name="phone" type="number" required>
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
                                            <input name="socialStatus" type="text" required>
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
                                            <input name="anotherPhone" type="number" required>
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
                                            <input name="familyCount" type="text" required>
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
                                            <input name="email" type="email" required>
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
                                            <input name="birthdate" type="date" required>
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
                                            <input name="location" type="text" required>
                                            <label>الموقع</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-location-arrow"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5 col-12">
                                        <select name="company" class="form-control">
                                            <option selected disabled>Select Associate...</option>
                                            @foreach ($companies as $company )
                                            <option value="{{ $company->id }}">{{ $company->fname }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="col-12 text-center"><button type="submit" class="btn btn-success px-5 "> اضافه</button></div>
                            </form>
                        </div>
                    </div> <!-- comp benfit details -->

                    <!-- comp service provider details-->
                    <div class="tab-pane fade show active" id="malcoo-service-provider" role="tabpanel">
                        <div class="personal-data comp-personal-data">
                            <form class="prsonal-form">
                                <div class="row">
                                    <div class="col-12 add-company-title">
                                       <i class="fas fa-industry"></i> <span>إضافة مزود خدمة</span>
                                    </div>
                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input type="text" required>
                                            <label>إسم الشركة</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="far fa-building"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12">
                                        <div class="input">
                                            <input type="text" required>
                                            <label>إسم مالك الشركة</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-user-alt"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input type="text" required>
                                            <label>السجل التجارى</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-id-card"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12">
                                        <div class="input">
                                            <input type="text" required>
                                            <label>الرقم الضريبى</label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="far fa-file-excel"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input type="text" required>
                                            <label>النشاط التجارى </label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="fas fa-rss-square"></i>
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

                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input type="date" required>
                                            <label>تاريخ  الإنشاء </label>
                                            <div class="bar"></div>
                                            <div class="highlight"></div>
                                            <div class="input-icon">
                                                <i class="far fa-calendar-alt"></i>
                                            </div>
                                        </div>

                                    </div>




                                </div>
                            </form>
                        </div>
                    </div> <!-- comp benfit details -->




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









    <script src="./assests/js/jquery-3.3.1.min.js"></script>
    <script src="./assests/js/popper.min.js"></script>
    <script src="./assests/js/bootstrap.min.js"></script>
    <script src="./assests/js/slick.min.js"></script>
    <script src="./assests/js/main.js"></script>

    <script>
        setTimeout(function() {
    $('#Message').fadeOut('slow');
        }, 1500);
    </script>
</body>
</html>
