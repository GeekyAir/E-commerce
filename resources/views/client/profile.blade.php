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
    <title>Profile</title>
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

    <div class="profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-4">
                    <div class="side_nav_container">
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
                            <span>أسم المستخدم</span>
                        </div>

                        <!-- Link List-->
                        <div class="link_cont">
                            <div class="list-group" id="myList" role="tablist">
                                <a class="" data-toggle="list" href="#view-board" role="tab" aria-controls="home"><i class="fas fa-laptop-code"></i> لوحة العرض </a>
                                <a class="" data-toggle="list" href="#cart-view" role="tab" aria-controls="home"><i class="fas fa-cart-arrow-down"></i> عربة التسوق</a>
                                <a class="" data-toggle="list" href="#personal-data" role="tab" aria-controls="home"><i class="fas fa-user-tie"></i> البيانات الشخصية</a>
                                <a class="" data-toggle="list" href="#inbox" role="tab" aria-controls="home"><i class="fas fa-envelope"></i>  صندوق البريد</a>
                              </div>
                        </div>
                        <!-- Link List-->
                    </div>
                </div><!--Side Navbar-->


                <div class="col-md-9 col-8 tab-content">
                     
                    <div class="tab-pane fade " id="view-board" role="tabpanel">
                        <div class="viewboard-container">
                            <div class="container">
                                <div class="view_container">
                                    <div class="title">
                                        <i class="far fa-hand-paper"></i> <span>مرحبا اسم المستخدم</span>
                                    </div>
    
                                    <div class="supporters">
                                        <p>الداعمين</p>
                                    </div>
    
                                    <div class="card-list">
                                        <div class="row card-flex-container">
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-img">
                                                        <img src="assests/img/edu_card3.png" />
                                                    </div>
                                                    <div class="card-text">
                                                        <p>170 نقطة</p>
                                                    </div>
                                                    <div class="card-img-footer">
                                                        <img src="assests/img/plant_icon.png" />
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-img">
                                                        <img src="assests/img/edu_card3.png" />
                                                    </div>
                                                    <div class="card-text">
                                                        <p>170 نقطة</p>
                                                    </div>
                                                    <div class="card-img-footer">
                                                        <img src="assests/img/plant_icon.png" />
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-img">
                                                        <img src="assests/img/edu_card3.png" />
                                                    </div>
                                                    <div class="card-text">
                                                        <p>170 نقطة</p>
                                                    </div>
                                                    <div class="card-img-footer">
                                                        <img src="assests/img/plant_icon.png" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="cart-table">
                                        <h4>الطلبات:</h4>
                                        <table class="table">
                                            <thead>
                                              <tr>
                                                <th scope="col">النوع</th>
                                                <th scope="col">حالة الطلب</th>
                                                <th scope="col">تاريخ التسليم</th>
                                                <th scope="col">تاريخ الطلب</th>
                                                <th scope="col">السعر </th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                             
                                              <tr>
                                                <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                <td>تم التسليم</td>
                                                <td>2-20-2021</td>
                                                <td>2-20-2021</td>
                                                <td><div class="price">125 ريال</div></td>
                                              </tr>
    
                                              <tr>
                                                <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                <td>تم التسليم</td>
                                                <td>2-20-2021</td>
                                                <td>2-20-2021</td>
                                                <td><div class="price">125 ريال</div></td>
                                              </tr>
    
                                              <tr>
                                                <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                <td>تم التسليم</td>
                                                <td>2-20-2021</td>
                                                <td>2-20-2021</td>
                                                <td><div class="price">125 ريال</div></td>
                                              </tr>
    
                                              <tr>
                                                <td><img src="assests/img/cheese.png" /><span>سلعة غذائية</span></td>
                                                <td>تم التسليم</td>
                                                <td>2-20-2021</td>
                                                <td>2-20-2021</td>
                                                <td><div class="price">12225 ريال</div></td>
                                              </tr>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- view board -->

                    <div class="tab-pane fade " id="cart-view" role="tabpanel">
                        <div class="cart-view-container">
                            <div class="container-fluid">
                                <div class="cart-container">
                                    <div class="row">
                                        <div class="col-6 title">
                                            <h4>عربة التسوق</h4>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-success proceed-to">إكمال عملية الشراء</button>
                                        </div>
    
                                        
                                    </div>
    
                                    <div class="market-cart-container">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-12 title">
                                            <h4>المفضلة</h4>
                                        </div>
                                        
                                        
                                    </div>
    
                                   <!-- favourit items cont  -->
                                    <div class="market-cart-container fav-items-cont">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <!--bought-items-cont-->
                                <div class="buy-process-container">
                                    <div class="row">
                                        <div class="col-6 title">
                                            <h4>عربة التسوق</h4>
                                        </div>
    
                                        <div class="prev-page col-6">
                                            <button class="btn btn-outline-danger">الرجوع إلى الصفحه السابقة</button>
                                        </div>
                                       
                                    </div>
    
                                    <div class="market-cart-container">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fav_icon"><span><i class="far fa-heart"></i></span></div>
                                                        <div class="prod_img">
                                                            
                                                        </div>
                            
                                                        <div class="prod_data">
                                                            <span>مياة معباءه 600 مل</span><br>
                                                            <span>عبوة من 24 قطعة</span>
                                                            <p>شامل ضريبة القيمة المضافة</p>
                                                        </div>
                            
                                                        <div class="card_footer">
                                                            <img src="assests/img/plant_icon.png" /> <span>12 نقطة</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="bill-amount">
                                        <span>مجموع الطلبات: 25</span>
                                        <span>إجمالى المبلغ: 25</span>
                                    </div>
    
                                    <div class="get-bill row">
                                        <div class=" total-points">
                                            <p>مجموع نقاطك الحالية</p>
                                            <p><i class="fas fa-plane"></i></p>
                                            <p>3255</p>
                                        </div>
    
                                        <div class=" get-bill-btn">
                                            <a href="reciet.html" target="_blank" class="btn btn-success" >الحصول على فاتورة</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- cart view-->

                    <!-- profile details-->
                    <div class="tab-pane fade " id="personal-data" role="tabpanel">
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
                                   

                                </div>
                            </form>
                        </div>
                    </div> <!-- profile details -->

                    <!-- Inbox Container-->
                    <div class="tab-pane fade show active" id="inbox" role="tabpanel">
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