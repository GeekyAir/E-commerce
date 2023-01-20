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
    <title>Login</title>
    <style>
        #login_body,html{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body id="login_body login">

    <div class="login">
        <div class="overlay">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12 login-form_cont">

                        <div class="form_container">
                            <h2 class="text-center login_text">Sign In</h2>
                            @if(session('error'))
                                <div class="text-light bg-danger text-center border border-rounded">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form action="{{ route('login.user') }}" class="login_form" method="POST">
                                @csrf
                                <input name="email" type="text" class="form-control" placeholder="email"  required/>
                                <input name="password" type="password" class="form-control" placeholder="Password"  required/>
                                    <div class="remember_forget">
                                        <div class="remember_check">
                                            <input type="checkbox" id="rememberMe"/>
                                            <labe for="rememberMe">Remember Me</label>
                                        </div>
                                        <div class="forget_password">
                                            <a href="#">Forget Password</a>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="login_btn">
                                        <button type="submit" class="btn btn-primary form-control">Login</button>
                                    </div>
                                </form>


                            <div class="to_register">
                                <a href="#" id="to_register">Don't Have an Account!</a>
                            </div>
                        </div><!-- form Container -->

                    </div> <!-- form container column-->

                </div> <!-- row -->

              </div> <!-- container -->
               <!-- Register -->
               <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8 col-12 login-form_cont reg_container">

                        <h2 class="text-center reg_text">Sign UP</h2>
                        <form class="reg_form row" id="register-form" >
                            @csrf
                            <div class="fName col-md-6 col-xs-12"><input id="fname" name="fname" type="text" class="form-control" placeholder="First Name" /></div>
                            <div id="fnameError" class="text-danger "></div>

                            <div class="lName col-md-6 col-xs-12"><input id="lname" name="lname" type="text" class="form-control" placeholder="Last Name" /></div>
                            <div id="lnameError" class="text-danger"></div>

                            <div class="email col-md-12 col-xs-12"><input id="email" name="email" type="email" class="form-control" placeholder="Email" /></div>
                            <div id="emailError" class="text-danger "></div>

                            <div class="password col-md-6 col-xs-12"><input id="password" name="password" type="password" class="form-control" placeholder="Password" /></div>
                            <div id="passwordError" class="text-danger"></div>

                            <div class="cpassword col-md-6 col-xs-12"><input id="password_confirmation" name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" /></div>
                            <div id="passwordconfirmationError" class="text-danger"></div>

                            <div class="city col-md-6 col-xs-12"><input id="city" name="city" type="text" class="form-control" placeholder="City" /></div>
                            <div id="cityError" class="text-danger"></div>

                            <div class="zipcode col-md-6 col-xs-12"><input id="zipcode" name="zipcode" type="text" class="form-control" placeholder="Zip Code" /></div>
                            <div id="zipcodeError" class="text-danger"></div>

                            <div class="phone col-md-12 col-xs-12"><input id="phone" name="phone" type="number" class="form-control" placeholder="Phone Number" /></div>
                            <div id="phoneError" class="text-danger"></div>


                            <div class="reg_btn">
                                <button type="submit" class="btn btn-success ">Register</button>
                            </div>
                        </form>
                        <div class="to_login">
                            <a href="#" id="to_login">Already Have an Account!</a>
                        </div>
                    </div> <!-- reg container -->
                </div>
              </div><!-- container for register-->
        </div> <!-- over lay-->

    </div>











    <script src="./assests/js/jquery-3.3.1.min.js"></script>
    <script src="./assests/js/popper.min.js"></script>
    <script src="./assests/js/bootstrap.min.js"></script>
    <script src="./assests/js/slick.min.js"></script>
    <script src="./assests/js/main.js"></script>

    <script>
        $("#register-form").submit(function(e){
            e.preventDefault();
            let fname = $("#fname").val();
            let lname = $("#lname").val();
            let email = $("#email").val();
            let password = $("#password").val();
            let zipcode = $("#zipcode").val();
            let phone = $("#phone").val();
            let city = $("#city").val();
            let _token = $("input[name=_token]").val();
            console.log(fname)

        $.ajax({
        url:"/register",
        type:"POST",
        data:{
            fname:fname,
            lname:lname,
            email:email,
            password:password,
            zipcode:zipcode,
            city:city,
            phone:phone,
            _token:_token
        },
        success:function(response){
            console.log(response)
            // $("#addModel").modal("hide")
            alert("تم التسجيل بنجاح")
            location.reload();
        },
        error:function(error){
            console.log(error);
            alert("خطأ في البيانات")
            $('#fnameError').text(error.responseJSON.errors.fname);
            $('#lnameError').text(error.responseJSON.errors.lname);
            $('#emailError').text(error.responseJSON.errors.email);
            $('#passwordError').text(error.responseJSON.errors.password);
            $('#phoneError').text(error.responseJSON.errors.phone);
            $('#cityError').text(error.responseJSON.errors.city);
            $('#zipcodeError').text(error.responseJSON.errors.zipcode);
            $('#passwordconfirmationError').text(error.responseJSON.errors.password_confirmation);
        }
    });
});
    </script>

</body>
</html>
