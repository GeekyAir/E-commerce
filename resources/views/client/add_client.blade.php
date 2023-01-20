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
    <title>إضافة مستفيد</title>

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

    <div class="add-client profile">
        <div class="personal-data">
            <form class="prsonal-form" action="{{ route('addAssocClient') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 mb-5 mt-5 title">
                        <h3>إضافة مستفيد</h3>
                    </div>
                    <input type="hidden" name="company" value="{{ auth()->id() }}">
                    <div class="col-md-5 col-12 offset-2">
                        <div class="input">
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
                            <input name="otherPhone" type="number" required>
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
                            <input name="familyCount" type="number" required>
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
                    <div class="col-12 text-center"><button type="submit" class="btn btn-success px-5 "> اضافه</button></div>
                </div>
            </form>
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
<script type="text/javascript" src="{{ URL::asset('./assests/js/datatables-bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('./assests/js/main.js') }}"></script>

</body>
</html>
