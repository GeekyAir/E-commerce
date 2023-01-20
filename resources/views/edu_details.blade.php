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
    <link rel="stylesheet" href="{{ URL::asset('assests/css/datatables.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assests/css/style.css') }}" />
    <title>Course Details</title>
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

    <div class="course_details">
        <div class="container-fluid">
            <div class="course_title">
                <div class="row">
                    <div class="col-12 title">
                        <img src="{{ URL::asset('assests/img/cap_icon.svg') }}" />
                         <span>التعليم والترديب</span>
                     </div>
                </div>
            </div>

            <div class="course_content">
                <div class="row">
                    <div class="col-sm-4 col-12">
                        <div class="content_container">
                            <div class="content_title">
                                <p> محتوي الكورس</p>
                            </div>

                            <div class="container-fluid">
                                    <!-- slick slider container -->
                                <div class="row slick-carousel type-one-carousel cards">
                                    @foreach($sections as $section)
                                    <div class="section_num">
                                        <a href="javascript:void(0)" onclick="getVideos({{ $section->id }})">{{ $section->name  }}</a>
                                    </div>
                                    @endforeach
                                </div>

                                <!-- slick slider container -->

                                <div class="course_progress" id="course_progress">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-12">
                        <div class="video_cont" id="video_cont">
                            {{-- <video controls>
                                <source src="{{ asset('assests/img/Service_center.mp4') }}" type="video/mp4">
                                <source src="assests/img/Service_center.mp4" type="video/ogg">
                                 Your browser does not support the video tag.
                              </video> --}}
                        </div>

                        <div class="video_content">
                            <p><img src="{{ URL::asset('assests/img/plant_icon.png') }}" /> <span>{{ $course->point }} <span class="canceled"> {{ $course->old_point }}</span> </p>
                        </div>

                        <div class="instractor_details">
                            <ul class="list-unstyled">
                                <li>
                                    <span>{{ $course->title }}</span>
                                </li>
                                <li>
                                    <span> {{ $course->publisher_name }}</span>
                                </li>

                            </ul>
                        </div>

                        <div class="course_summary">
                            <h4>لمحه مختصرة عن الدورة</h4>
                            <div class="summary_details">
                            {{ $course->short_description }}
                            </div>
                        </div>

                        <div class="row description_container">
                            <div class="col-sm-7 col-12 course_description">
                                <h4>الوصف</h4>
                                {{ $course->description }}
                            <div class="col-sm-5 col-12 rating">
                                <div class="rating_cont">
                                    <h4>تقييم الدورة</h4>
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
                <img src="{{ asset('assests/img.png') }}" />
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


    <script type="text/javascript" src="{{ URL::asset('./assests/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/datatables.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/datatables-bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/main.js') }}"></script>

    <script>
        function getVideos(id)
        {

            $.get('/getVideo/'+id,function($videos){
                $("#course_progress").empty();
                for(i=0; i<$videos.length;i++)
                {

                    $("#course_progress").append('<div class="prog-1"><div class="prog-title"><a href="javascript:void(0)" onclick="video(\''+$videos[i].title+'\')"></a></div><div class="prog-img"><span></span><i class="fab fa-youtube"></i></div><div class="circle"><p class="sub-circle"></p></div><div class="progress"><div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemax="100"></div></div></div>')
                    let x =  $('.prog-title a');
                    x[i].innerText = $videos[i].title;
                    // x[i].setAttribute('href','/courses/'+$videos[i].id);
                }
            });
        }

        function video(title)
        {
            $("#video_cont").empty();
            $("#video_cont").append('<video controls class="video"><source src="" type="video/mp4"><source src="{{ asset('assests/img/Service_center.mp4') }}" type="video/ogg">Your browser does not support the video tag.</video>');
            $(".video")[0].setAttribute('src','/videos/section/'+title);
        }
    </script>

    <script>
        $(document).ready(function(){
             var gadgetCarousel = $(".slick-carousel");

             gadgetCarousel.each(function() {
                 if ($(this).is(".type-one-carousel")) {
                     $(this).slick({
                     dots: false,
                     arrows: false,
                     infinite: true,
                     slidesToShow: 6,
                     slidesToScroll: 3,
                     responsive: [
                     {

                         breakpoint: 2500,
                         settings: {
                             slidesToShow: 4,
                             slidesToScroll: 2,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 1630,
                         settings: {
                             slidesToShow: 4,
                             slidesToScroll: 2,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 1200,
                         settings: {
                             slidesToShow: 3,
                             slidesToScroll: 2,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 960,
                         settings: {
                             slidesToShow: 2,
                             slidesToScroll: 1,
                             infinite: true
                         }
                         },
                         {
                         breakpoint: 730,
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
