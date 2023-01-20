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
    <title>الرئيسية</title>
    <style>
        .home_footer_img img {
            margin-top: 15px;
            height: 320px;
            width: 300px;
        }
    </style>
</head>

<body>

    <!-- top header -->
@include('layouts.frontNav' , ['slug' =>'home'] )
    <!-- top header -->

    <!-- top content -->
    <div class="top_content">
        <div class="top-content-holder">
            <div class="top-content-data">
                <p>المظلة التى تندرج تحتها العمليات الخيريه بالمملكة لاإدارة وتنظيم عمليات الدعم اللوجيستى</p>

                <div class="top-content-btn">
                    <form>
                        <button class="btn">تسجيل الدخول</button>
                        <button class="btn">الدخول إلى المنصة</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- top content -->

    <!-- sub content 1-->
    <div class="sub_content">
        <div class="container">
            <div class="sub_cont_holder">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="sub_cont_img">
                            <p>منتجات استهلاكية</p>
                            <img src="assests/img/sub_cont_img1.png" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt_div">
                        <div class="sub_cont_img">
                            <p>منتجات التعليم والتدريب</p>
                            <img src="assests/img/sub_cont_img2.png" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="sub_cont_img">
                            <p>منتجات غذائية</p>
                            <img src="assests/img/sub_cont_img3.png" />
                        </div>
                    </div>
                </div>

                <div class="join_btn_holder">
                    <div class="join_icon btn-group">
                        <a href="#"><i class="fas fa-plus"></i></a>
                    </div>
                    <div class="join_text btn-group">
                        <span>بادر بالإنضمام إلينا</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- sub content 1-->

    <!-- about us content-->
    <div class="about_us_content">
        <div class="container-fluid">
            <div class="about_us_holder">
                <div class="about_us_text">
                    <div class="text_holder">
                        <h3>من نحن</h3>
                        <p>
                            مبادرة وطنية اطلفتها شركة مشوار العاصمة للخدمات والعمليات اللوجيستية حيث تكمن الفكرة فى همة
                            وطن ان تكون المظلة التى تضم القطاع الغير ربحى الجمعيات الخيرية الضمان الاجتماعى ومستفيدة مع
                            الشركات والمؤسسات الاخرى لتقدم الخدمات والسلع المختلفة بسعر مخفض وتقوم بدعهم بالخدمات
                            اللوجيستية والعمليات اللوجيستية
                        </p>
                    </div>
                </div>

                <div class="about_us_img">
                    <img src="assests/img/about_us.png" />
                </div>
            </div>
        </div>
    </div>
    <!-- about us content-->

    <!-- sub content 2 -->
    <div class="bot_content">
        <div class="container">
            <div class="bot_content_cont">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="custom_card">
                            <div class="card_title">
                                <img src="assests/img/letter.png" /> <br>
                                <span>الرسالة</span>
                            </div>
                            <div class="card_body">
                                <p>لوريم ايبسوم دولار سيت كونيست ستار سيتت</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="custom_card">
                            <div class="card_title">
                                <img src="assests/img/vision.png" /> <br>
                                <span>إرسال</span>
                            </div>
                            <div class="card_body">
                                <p>لوريم ايبسوم دولار سيت كونيست ستار سيتت</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="custom_card">
                            <div class="card_title">
                                <img src="assests/img/goal.png" /> <br>
                                <span>إرسال</span>
                            </div>
                            <div class="card_body">
                                <p>لوريم ايبسوم دولار سيت كونيست ستار سيتت</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="container-fluid">
            <div class="cust_card_2_cont">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-12">
                            <div class="custom_card_2">
                                <div class="card_title">
                                    <img src="assests/img/benfits.png" /> <br>
                                    <p>عدد المستفيدين من همة وطن</p>
                                </div>
                                <div class="card_body">
                                    <span>325</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="custom_card_2">
                                <div class="card_title">
                                    <img src="assests/img/fam.png" /> <br>
                                    <p>عدد الأسر المستفيدة من همة وطن</p>
                                </div>
                                <div class="card_body">
                                    <span>325</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="custom_card_2">
                                <div class="card_title">
                                    <img src="assests/img/charity.png" /> <br>
                                    <p>عدد الجمعيات المشاركة</p>
                                </div>
                                <div class="card_body">
                                    <span>325</span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sub content 2 -->

    <!-- footer -->
    <footer class="main_footer">
        <div class="container-fluid">
            <div class="home_footer_img">
                <img src="assests/img/home_footer.png" />
            </div>
            <div class="contact_details">
                <div class="row contact_grid">
                    <div class="contact_card col-md-3 col-6">
                        <div class="icon">
                            <span><i class="fas fa-phone-alt"></i></span>
                        </div>
                        <div class="details">
                            <span>phone support</span>
                            <a href="tel:">
                                <p>8002221222</p>
                            </a>
                        </div>
                    </div>

                    <div class="contact_card col-md-3 col-6">
                        <div class="icon">
                            <span><i class="fas fa-handshake"></i></span>
                        </div>
                        <div class="details">
                            <span>for help</span>
                            <a href="mailto:">
                                <p>help.hemmat-watan.com</p>
                            </a>
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
        </div>
    </footer>
    <!-- footer -->











    <script src="./assests/js/jquery-3.3.1.min.js"></script>
    <script src="./assests/js/popper.min.js"></script>
    <script src="./assests/js/bootstrap.min.js"></script>
</body>

</html>
