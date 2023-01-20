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
    <title>Service Provider Profile</title>
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

    <div class="profile serv-prov-profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-4">
                    <div class="side_nav_container service-provider-nav">
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
                            <span>شركة LG</span>
                        </div>

                        <!-- Link List-->
                        <div class="link_cont">
                            <div class="list-group" id="myList" role="tablist">
                                <a class="" data-toggle="list" href="#serv-prov-view-board" role="tab" aria-controls="home"><i class="fas fa-laptop-code"></i> لوحة العرض </a>
                                <a class="" data-toggle="list" href="#serv-prov-offers" role="tab" aria-controls="home"><i class="fas fa-gifts"></i>عروض </a>
                                <a class="" data-toggle="list" href="#serv-prov-inbox" role="tab" aria-controls="home"><i class="fas fa-envelope"></i>  صندوق البريد</a>
                                <a class="" data-toggle="list" href="#serv-prov-personal-data" role="tab" aria-controls="home"><i class="fas fa-users"></i>  بيانات مزود الخدمة</a>
                                <a class="" data-toggle="list" href="#serv-prov-add-product" role="tab" aria-controls="home"><i class="fas fa-boxes"></i> إضافة خدمة </a>
                                <a class="" data-toggle="list" href="#serv-prov-benfits" role="tab" aria-controls="home"><i class="fas fa-assistive-listening-systems"></i>  عرض الخدمات</a>
                              </div>
                        </div>
                        <!-- Link List-->
                    </div>
                </div><!--Side Navbar-->


                <div class="col-md-9 col-8 tab-content">
                     
                    <div class="tab-pane fade " id="serv-prov-view-board" role="tabpanel">
                        <div class="comp-board">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="title">
                                             <span><i class="far fa-hand-paper"></i> مرحبا LG </span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="prog-circle">
                                            <div class="row d-flex justify-content-center mt-100">
                                                <div class="">
                                                    <div class="progress blue"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">90%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="completed-order-title">
                                                <span>نسبة الطلبات المكتملة</span>
                                            </div>
                                        </div>

                                        <div class="order-details-cont">
                                            <h5>تفاصيل الطلب</h5>

                                            <div class="order-details">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <div>طلب 400</div> 
                                                    </li>
                                                    <li>
                                                        <div>98%</div> 
                                                    </li>
                                                    <li>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>طلب مكتمل</div>
                                                    </li>
                                                </ul>

                                                <ul class="list-unstyled">
                                                    <li>
                                                        <div>طلب 400</div> 
                                                    </li>
                                                    <li>
                                                        <div>98%</div> 
                                                    </li>
                                                    <li>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>طلب مكتمل</div>
                                                    </li>
                                                </ul>

                                                <ul class="list-unstyled">
                                                    <li>
                                                        <div>طلب 400</div> 
                                                    </li>
                                                    <li>
                                                        <div>98%</div> 
                                                    </li>
                                                    <li>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>طلب مكتمل</div>
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="order-table-title">
                                            <span>عدد المنتجات الاكثر مبيعا</span>
                                        </div>

                                        <div class="table-responsive table-order-status-cont">
                                            <table class="table order-table-status">
                                                <thead>
                                                    <th>المنتج</th>
                                                    <th>تقييم المنتج</th>
                                                    <th>عدد مرات </th>
                                                    <th></th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="assests/img/drink.png" />
                                                        </td>
                                                        <td>
                                                            <div class="progress blue"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                                <div class="progress-value">90%</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            25
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary">زر للاختبار</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assests/img/drink.png" />
                                                        </td>
                                                        <td>
                                                            <div class="progress blue"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                                <div class="progress-value">90%</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            25
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary">زر للاختبار</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assests/img/drink.png" />
                                                        </td>
                                                        <td>
                                                            <div class="progress blue"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                                <div class="progress-value">90%</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            25
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary">زر للاختبار</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assests/img/drink.png" />
                                                        </td>
                                                        <td>
                                                            <div class="progress blue"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                                <div class="progress-value">90%</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            25
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary">زر للاختبار</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assests/img/drink.png" />
                                                        </td>
                                                        <td>
                                                            <div class="progress blue"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                                <div class="progress-value">90%</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            25
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary">زر للاختبار</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assests/img/drink.png" />
                                                        </td>
                                                        <td>
                                                            <div class="progress blue"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                                <div class="progress-value">90%</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            25
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary">زر للاختبار</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assests/img/drink.png" />
                                                        </td>
                                                        <td>
                                                            <div class="progress blue"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                                <div class="progress-value">90%</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            25
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary">زر للاختبار</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assests/img/drink.png" />
                                                        </td>
                                                        <td>
                                                            <div class="progress blue"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                                <div class="progress-value">90%</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            25
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary">زر للاختبار</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                           
                    </div> <!-- view board -->

                    <!-- company offers-->
                    <div class="tab-pane fade " id="serv-prov-offers" role="tabpanel">
                        <div class="comp-offer">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 title">
                                        <i class="fas fa-gifts"></i> <span>العروض</span>
                                    </div>
                                </div>

                                <div class="offer-card">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-title">
                                                    <div class="card-badge">
                                                        <img src="assests/img/logo.png" />
                                                    </div>
                                                    <div class="card-logo">
                                                        <img src="assests/img/ribbon.png" />
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <p>عرض</p>
                                                    <p>جمعية الخير</p>
                                                    <p>رقم العرض</p>
                                                    <p>حالة العرض</p>
                                                    <a href="#">عرض التفاصيل</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-title">
                                                    <div class="card-badge">
                                                        <img src="assests/img/logo.png" />
                                                    </div>
                                                    <div class="card-logo">
                                                        <img src="assests/img/ribbon.png" />
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <p>عرض</p>
                                                    <p>جمعية الخير</p>
                                                    <p>رقم العرض</p>
                                                    <p>حالة العرض</p>
                                                    <a href="#">عرض التفاصيل</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-title">
                                                    <div class="card-badge">
                                                        <img src="assests/img/logo.png" />
                                                    </div>
                                                    <div class="card-logo">
                                                        <img src="assests/img/ribbon.png" />
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <p>عرض</p>
                                                    <p>جمعية الخير</p>
                                                    <p>رقم العرض</p>
                                                    <p>حالة العرض</p>
                                                    <a href="#">عرض التفاصيل</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-title">
                                                    <div class="card-badge">
                                                        <img src="assests/img/logo.png" />
                                                    </div>
                                                    <div class="card-logo">
                                                        <img src="assests/img/ribbon.png" />
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <p>عرض</p>
                                                    <p>جمعية الخير</p>
                                                    <p>رقم العرض</p>
                                                    <p>حالة العرض</p>
                                                    <a href="#">عرض التفاصيل</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-title">
                                                    <div class="card-badge">
                                                        <img src="assests/img/logo.png" />
                                                    </div>
                                                    <div class="card-logo">
                                                        <img src="assests/img/ribbon.png" />
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <p>عرض</p>
                                                    <p>جمعية الخير</p>
                                                    <p>رقم العرض</p>
                                                    <p>حالة العرض</p>
                                                    <a href="#">عرض التفاصيل</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-title">
                                                    <div class="card-badge">
                                                        <img src="assests/img/logo.png" />
                                                    </div>
                                                    <div class="card-logo">
                                                        <img src="assests/img/ribbon.png" />
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <p>عرض</p>
                                                    <p>جمعية الخير</p>
                                                    <p>رقم العرض</p>
                                                    <p>حالة العرض</p>
                                                    <a href="#">عرض التفاصيل</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-title">
                                                    <div class="card-badge">
                                                        <img src="assests/img/logo.png" />
                                                    </div>
                                                    <div class="card-logo">
                                                        <img src="assests/img/ribbon.png" />
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <p>عرض</p>
                                                    <p>جمعية الخير</p>
                                                    <p>رقم العرض</p>
                                                    <p>حالة العرض</p>
                                                    <a href="#">عرض التفاصيل</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-title">
                                                    <div class="card-badge">
                                                        <img src="assests/img/logo.png" />
                                                    </div>
                                                    <div class="card-logo">
                                                        <img src="assests/img/ribbon.png" />
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <p>عرض</p>
                                                    <p>جمعية الخير</p>
                                                    <p>رقم العرض</p>
                                                    <p>حالة العرض</p>
                                                    <a href="#">عرض التفاصيل</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-title">
                                                    <div class="card-badge">
                                                        <img src="assests/img/logo.png" />
                                                    </div>
                                                    <div class="card-logo">
                                                        <img src="assests/img/ribbon.png" />
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <p>عرض</p>
                                                    <p>جمعية الخير</p>
                                                    <p>رقم العرض</p>
                                                    <p>حالة العرض</p>
                                                    <a href="#">عرض التفاصيل</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-title">
                                                    <div class="card-badge">
                                                        <img src="assests/img/logo.png" />
                                                    </div>
                                                    <div class="card-logo">
                                                        <img src="assests/img/ribbon.png" />
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <p>عرض</p>
                                                    <p>جمعية الخير</p>
                                                    <p>رقم العرض</p>
                                                    <p>حالة العرض</p>
                                                    <a href="#">عرض التفاصيل</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-title">
                                                    <div class="card-badge">
                                                        <img src="assests/img/logo.png" />
                                                    </div>
                                                    <div class="card-logo">
                                                        <img src="assests/img/ribbon.png" />
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <p>عرض</p>
                                                    <p>جمعية الخير</p>
                                                    <p>رقم العرض</p>
                                                    <p>حالة العرض</p>
                                                    <a href="#">عرض التفاصيل</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-title">
                                                    <div class="card-badge">
                                                        <img src="assests/img/logo.png" />
                                                    </div>
                                                    <div class="card-logo">
                                                        <img src="assests/img/ribbon.png" />
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <p>عرض</p>
                                                    <p>جمعية الخير</p>
                                                    <p>رقم العرض</p>
                                                    <p>حالة العرض</p>
                                                    <a href="#">عرض التفاصيل</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-title">
                                                    <div class="card-badge">
                                                        <img src="assests/img/logo.png" />
                                                    </div>
                                                    <div class="card-logo">
                                                        <img src="assests/img/ribbon.png" />
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <p>عرض</p>
                                                    <p>جمعية الخير</p>
                                                    <p>رقم العرض</p>
                                                    <p>حالة العرض</p>
                                                    <a href="#">عرض التفاصيل</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-title">
                                                    <div class="card-badge">
                                                        <img src="assests/img/logo.png" />
                                                    </div>
                                                    <div class="card-logo">
                                                        <img src="assests/img/ribbon.png" />
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <p>عرض</p>
                                                    <p>جمعية الخير</p>
                                                    <p>رقم العرض</p>
                                                    <p>حالة العرض</p>
                                                    <a href="#">عرض التفاصيل</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- company offers-->

                     <!-- Inbox Container-->
                     <div class="tab-pane fade " id="serv-prov-inbox" role="tabpanel">
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

                    <!-- comp profile details-->
                    <div class="tab-pane fade " id="serv-prov-personal-data" role="tabpanel">
                        <div class="personal-data comp-personal-data">
                            <form class="prsonal-form">
                                <div class="row">
                                    <div class="col-12 title text-right">
                                       <i class="fas fa-building"></i> <span>بيانات مزود الخدمة</span>
                                    </div>
                                    <div class="col-md-5 col-12 offset-2">
                                        <div class="input">
                                            <input type="text" required>
                                            <label>إسم مزود الخدمة</label>
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
                                            <label>إسم مالك مزود الخدمة</label>
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
                    </div> <!-- comp profile details -->

                    <div class="tab-pane fade " id="serv-prov-add-product" role="tabpanel">
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

                                                <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                                
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
                    </div> <!-- add service -->

                    <div class="tab-pane fade show active" id="serv-prov-benfits" role="tabpanel">
                        <div class="benfits-container show-prod">
                            <div class="row mb-5 service-fix">
                                <div class="col-md-6 col-12 title offset-md-1">
                                    <i class="fab fa-product-hunt"></i> <span>عرض الخدمات</span>
                                </div>

                                <div class="col-md-5 col-12 filter">
                                    <div class="filter-container">
                                        <div class="show-all">
                                            <i class="fas fa-filter"></i><span>عرض الكل</span>
                                        </div>
                                        <div class="add-serv">
                                            <i class="fas fa-plus-circle"></i><br><span> إضف خدمة</span>
                                        </div>
                                        <div class="serv-qunt">
                                            <span>عدد الخدمات</span><br>
                                            <span>55</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="benf-cards service-card">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-12">
                                        <div class="card">
                                            <div class="card-title">
                                                <img src="assests/img/edu_card2.jpg" />
                                            </div>

                                            <div class="card-body">
                                                <p>كورس تعليم الاطفال</p>
                                                <i class="fas fa-seedling"></i><span>عدد النقط 15 نقطة</span> <br>
                                                <span>شامل ضريبة القيمة</span>
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
                                                        <i class="fas fa-plus-circle card-footer-icon"></i>
                                                    </div>

                                                    <div class="col-3">
                                                        <i class="fas fa-eye card-footer-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-12">
                                        <div class="card">
                                            <div class="card-title">
                                                <img src="assests/img/edu_card3.png" />
                                            </div>

                                            <div class="card-body">
                                                <p>كورس تعليم الاطفال</p>
                                                <i class="fas fa-seedling"></i><span>عدد النقط 15 نقطة</span> <br>
                                                <span>شامل ضريبة القيمة</span>
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
                                                        <i class="fas fa-plus-circle card-footer-icon"></i>
                                                    </div>

                                                    <div class="col-3">
                                                        <i class="fas fa-eye card-footer-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-12">
                                        <div class="card">
                                            <div class="card-title">
                                                <img src="assests/img/edu_card.jpg" />
                                            </div>

                                            <div class="card-body">
                                                <p>كورس تعليم الاطفال</p>
                                                <i class="fas fa-seedling"></i><span>عدد النقط 15 نقطة</span> <br>
                                                <span>شامل ضريبة القيمة</span>
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
                                                        <i class="fas fa-plus-circle card-footer-icon"></i>
                                                    </div>

                                                    <div class="col-3">
                                                        <i class="fas fa-eye card-footer-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-12">
                                        <div class="card">
                                            <div class="card-title">
                                                <img src="assests/img/slide-1.jpg" />
                                            </div>

                                            <div class="card-body">
                                                <p>كورس تعليم الاطفال</p>
                                                <i class="fas fa-seedling"></i><span>عدد النقط 15 نقطة</span> <br>
                                                <span>شامل ضريبة القيمة</span>
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
                                                        <i class="fas fa-plus-circle card-footer-icon"></i>
                                                    </div>

                                                    <div class="col-3">
                                                        <i class="fas fa-eye card-footer-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-12">
                                        <div class="card">
                                            <div class="card-title">
                                                <img src="assests/img/slide-2.jpg" />
                                            </div>

                                            <div class="card-body">
                                                <p>كورس تعليم الاطفال</p>
                                                <i class="fas fa-seedling"></i><span>عدد النقط 15 نقطة</span> <br>
                                                <span>شامل ضريبة القيمة</span>
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
                                                        <i class="fas fa-plus-circle card-footer-icon"></i>
                                                    </div>

                                                    <div class="col-3">
                                                        <i class="fas fa-eye card-footer-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-12">
                                        <div class="card">
                                            <div class="card-title">
                                                <img src="assests/img/slide-3.jpg" />
                                            </div>

                                            <div class="card-body">
                                                <p>كورس تعليم الاطفال</p>
                                                <i class="fas fa-seedling"></i><span>عدد النقط 15 نقطة</span> <br>
                                                <span>شامل ضريبة القيمة</span>
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
                                                        <i class="fas fa-plus-circle card-footer-icon"></i>
                                                    </div>

                                                    <div class="col-3">
                                                        <i class="fas fa-eye card-footer-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-12">
                                        <div class="card">
                                            <div class="card-title">
                                                <img src="assests/img/user.png" />
                                            </div>

                                            <div class="card-body">
                                                <p>كورس تعليم الاطفال</p>
                                                <i class="fas fa-seedling"></i><span>عدد النقط 15 نقطة</span> <br>
                                                <span>شامل ضريبة القيمة</span>
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
                                                        <i class="fas fa-plus-circle card-footer-icon"></i>
                                                    </div>

                                                    <div class="col-3">
                                                        <i class="fas fa-eye card-footer-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-12">
                                        <div class="card">
                                            <div class="card-title">
                                                <img src="assests/img/user.png" />
                                            </div>

                                            <div class="card-body">
                                                <p>كورس تعليم الاطفال</p>
                                                <i class="fas fa-seedling"></i><span>عدد النقط 15 نقطة</span> <br>
                                                <span>شامل ضريبة القيمة</span>
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
                                                        <i class="fas fa-plus-circle card-footer-icon"></i>
                                                    </div>

                                                    <div class="col-3">
                                                        <i class="fas fa-eye card-footer-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                    </div>

                                   
                                </div>
                            </div>


                        </div>
                    </div> <!-- show services-->


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
</body>
</html>