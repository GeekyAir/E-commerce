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
    <title>Videos</title>
</head>
<body>


    <div class="videos_page">
        <div class="container-fluid">
            <div class="row">
                <br/>
                <div class="col-12 text-center">
                    <h1 class="text-info" style="font-weight: bold;">فيديوهات الكورس</h1>
                </div>
                    <br/>
                <div class="col-lg-4 col-md-6 col-12">
                    @foreach($videos as $video)
                    <div class="video_cont">
                        <video controls>
                            <source src="{{ URL::asset('videos/section') }}/{{ $video->title }}" type="video/mp4">
                            <source src="assests/img/Service_center.mp4" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>








    <script type="text/javascript" src="{{ URL::asset('./assests/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/datatables.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/datatables-bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('./assests/js/main.js') }}"></script>


</body>
</html>
