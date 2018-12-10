<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pk-Friends</title>
    <link rel="stylesheet" href="{{ asset('/assets')}}/css/bootstrap-4.min.css">
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('/assets/login/')}}/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('/assets/login/')}}/css/style.css">
    <style>
        .main-content{
            margin-top: 20px;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
<div class="">
    <section class="signup">
        <div class="container">
            {!! Session::has('success') ? '<div class="alert alert-success alert-dismissible"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>'. Session::get("success") .'</div>' : '' !!}
            {!! Session::has('error') ? '<div class="alert alert-danger alert-dismissible"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>'. Session::get("error") .'</div>' : '' !!}
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    {{ Form::open(['url' => '/sign-up-post', 'method' => 'post', 'id' => 'sign_up_form', 'class' => 'register-form'])}}
                    {{ csrf_field()}}

                    @if ($errors->has('first_name'))
                        <span class="invalid-feedback" style="color: red;display:block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                    @endif
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        {{ Form::text('first_name','',['id' => 'first_name', 'placeholder' => 'Enter Your First Name', 'required']) }}
                    </div>
                    @if ($errors->has('last_name'))
                        <span class="invalid-feedback" style="color: red;display:block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                    @endif
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        {{ Form::text('last_name','',['id' => 'last_name', 'placeholder' => 'Enter Your Last Name', 'required']) }}
                    </div>
                    @if ($errors->has('mobile'))
                        <span class="invalid-feedback" style="color: red;display:block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                    @endif
                    <div class="form-group">
                        <label for="mobile"><i class="zmdi zmdi-phone"></i></label>
                        {{ Form::number('mobile','',['id' => 'mobile', 'onkeypress' => 'return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57', 'placeholder' => 'Enter Your  Mobile','required' ]) }}
                        <span id="mobile_err" style="color: red"></span>
                    </div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" style="color: red;display:block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        {{ Form::password('password',['class' => '' ,'id' => 'password', 'placeholder' => 'Enter your Password', 'required']) }}
                        <span id="pass_err" style="color: red"></span>
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback" style="color: red;display:block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                    @endif
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        {{ Form::password('password_confirmation',['class' => '' ,'id' => 'password_confirmation', 'placeholder' => 'Repeat your password' , 'required']) }}
                        <span id="con_pass_err" style="color: red"></span>
                    </div>

                    @if ($errors->has('union'))
                        <span class="invalid-feedback" style="color: red;display:block">
                                        <strong>{{ $errors->first('union') }}</strong>
                                    </span>
                    @endif

                    <div class="form-group">
                        <label for="union"><i class="zmdi zmdi-badge-check"></i></label>
                        <select name="union" id="union" class="form-control" required="required">
                            <option value="">Select Your Union</option>
                            <option value="Pakundiya">Pakundiya</option>
                            <option value="Hosendi">Hosendi</option>
                            <option value="Narandi">Narandi</option>
                            <option value="Patuyavannga">Patuyavannga</option>
                            <option value="Chondipasha">Chondipasha</option>
                            <option value="Sukhiya">Sukhiya</option>
                            <option value="Janngaliya">Janngaliya</option>
                            <option value="Chorporadi">Chorporadi</option>
                            <option value="Egarosindur">Egarosindur</option>
                            <option value="Burudiya">Burudiya</option>
                        </select>
                        <span id="union_err" style="color: red"></span>
                    </div>

                    @if ($errors->has('blood'))
                        <span class="invalid-feedback" style="color: red;display:block">
                                        <strong>{{ $errors->first('blood') }}</strong>
                                    </span>
                    @endif

                    <div class="form-group">

                        <label for="blood"><i class="zmdi zmdi-label-heart"></i></label>
                        <select name="blood" id="blood" class="form-control" required="required">
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+ Positive</option>
                            <option value="A-">A- Negetive</option>
                            <option value="B+">B+ Positive</option>
                            <option value="B-">B- Negetive</option>
                            <option value="O+">O+ Positive</option>
                            <option value="O-">O- Negetive</option>
                            <option value="AB+">AB+ Positive</option>
                            <option value="AB-">AB- Negetive</option>
                        </select>

                        <span id="blood_err" style="color: red"></span>
                    </div>

                    {{--<div class="form-group">--}}
                    {{--<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>--}}
                    {{--<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all--}}
                    {{--statements in <a href="#" class="term-service">Terms of service</a></label>--}}
                    {{--</div>--}}
                    <div class="form-group form-button">
                        {{ Form::submit('Sign Up !', ['id' => 'signup', 'class' => 'form-submit']) }}
                    </div>
                    {{ Form::close() }}
                </div>
                <div class="signup-image">
                    <figure><img src="{{asset('/assets/login/')}}/images/signup-image.jpg" alt="sing up image">
                    </figure>
                    <a href="{{url('/')}}" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="{{ asset('/assets') }}/script/jquery3.min.js" type="text/javascript"></script>
<script src="{{ asset('/assets')}}/script/jquery-validate.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function(){
        $('.close').click(function(){
            $(this).parent().hide();
        })
    });
    $(document).ready(function(){

        $('#mobile').on('keyup',function(){
            var mobile = $(this).val();
            var mob = mobile.substr(0,3);
            if(mob == '017' || mob == '018' || mob == '019' || mob == '016' || mob == '015' || mob == '011'){
                $('#mobile_err').html('');
            }else{
                $('#mobile_err').html('<p style="color:red">Invalid Mobile Number</p>');
            }
            if(mobile.length != 11){
                $('#mobile_err2').html('<p style="color:red">Mobile Number Be 11 chracter</p>');
            }else{
                $('#mobile_err2').html('');
            }
        });
        $('#password').on('keyup',function(){
            var password = $(this).val();
            if(password.length < 18 && password.length > 5){
                $('#pass_err').html('');
            }else{
                $('#pass_err').html('<p style="color:red">Password should be 6 to 18 chracter</p>');
            }
            var con_pass = $('#password_confirmation').val();
            if(con_pass != ''){
                if(password === con_pass){
                    $('#con_pass_err').html('');
                }else{
                    $('#con_pass_err').html("<p style=\"color:red\">Password Does't Match</p>");
                }
            }
        });
        $('#password_confirmation').on('keyup',function(){
            var con_pass = $(this).val();
            var pass     = $('#password').val();
            if(pass === con_pass){
                $('#con_pass_err').html('');
            }else{
                $('#con_pass_err').html("<p style=\"color:red\">Password Does't Match</p>");
            }
        })
        $('#sign_up_form').validate({
            rules: {
                first_name: {
                    required: true,
                    minlength: 2,
                },
                last_name: {
                    required: true,
                    minlength: 2,
                },
                mobile : {
                    required: true,
                    number: true,
                    minlength: 11,
                    maxlength: 11,
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 18,
                },
                password_confirmation: {
                    required: true,
                    minlength: 6,
                    maxlength: 18,
                    equalTo : '#password'
                },
                union: {
                    required: true,
                },
                blood: {
                    required: true,
                }
            },
            messages: {
                first_name: {
                    required : "First Name is required",
                    minlength : "First Name at least 2 Chracter",
                },
                last_name: {
                    required : "Last Name is required",
                    minlength : "Last Name at least 2 Chracter",
                },
                mobile: {
                    required: "Mobile Number is required",
                    number: "Mobile Would be number not chracter",
                    minlength: "Mobile Must be 11 chracter",
                },
                password : {
                    required : "Password is required",
                    minlength : "Password at least 6 Chracter",
                    maxlength : "Password at not above 18 Chracter",
                },
                password_confirmation : {
                    required : "Confirm Password is required",
                    minlength : "Confirm Password at least 6 Chracter",
                    maxlength : "Confirm Password at not above 18 Chracter",
                    equalTo : "Password Doen't match ,Please enter the same password as above",
                },
                union : {
                    required :  "Union is required",
                },
                blood : {
                    required :  "Blood Group is required, Please enter your currect blood Group",
                },

            }
        });
    });
</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>