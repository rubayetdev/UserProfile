<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="png" href="images/icon/favicon.png">
    <title>Login SignUp</title>
    <link rel="stylesheet" type="text/css" href="{{asset('user/loginStyle.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/images/favicon.png')}}">

    <!-- It will redirect to the Home Page after submitting the form -->

    <style>
        body {
            background-image:url('{{ asset('user/images/bg_1.png') }}');
        }
    </style>
</head>
<body>

<div class="form-box">
    <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" id="log" onclick="login()" style="color: #fff;">Log In</button>
        <button type="button" class="toggle-btn" id="reg" onclick="register()">Register</button>
    </div>
    <div class="social-icons">
        <img src="{{asset('images/icon/fb2.png')}}">
        <img src="{{asset('images/icon/insta2.png')}}">
        <img src="{{asset('images/icon/tt2.png')}}">
    </div>

    <!-- Login Form -->
    <form id="login" class="input-group" action="{{route('loogin')}}" method="post">
        @csrf
        <div class="inp">
            <img src="{{asset('images/icon/user.png')}}"><input type="text" id="email" name="email" class="input-field" placeholder="Username or Phone Number" style="width: 88%; border:none;" required="required">
        </div>
        <div class="inp">
            <img src="{{asset('images/icon/password.png')}}"><input type="password" id="password" name="password" class="input-field" placeholder="Password" style="width: 88%; border: none;" required="required">
        </div>
        <button type="submit" class="submit-btn">Log In</button>

{{--        <a href="forget" class="submit-btn">Forgot Password?</a>--}}
    </form>


    <div class="other" id="other">
        <a href="forget" class="instead" target="_blank">
            <h3>Forget Password?</h3>
        </a>
{{--        <button class="connect" onclick="google()">--}}
{{--            <img src="{{asset('images/icon/google.png')}}"><span>Sign in with Google</span>--}}
{{--        </button>--}}
    </div>

    <!-- Registration Form -->
    <form id="register" action="{{route('registers')}}" method="post" class="input-group">
        @csrf
        <input type="text" class="input-field" name="name" placeholder="Full Name" required="required">
        <input type="email" class="input-field"  name="email" placeholder="Email Address" required="required">
        <input type="password" class="input-field" name="password" placeholder="Create Password" required="required">
        <input type="password" class="input-field" name="confirm-password" placeholder="Confirm Password" required="required">
        <input type="checkbox" class="check-box" id="chkAgree" onclick="goFurther()">I agree to the Terms & Conditions
        <button type="submit" id="btnSubmit" class="submit-btn reg-btn">Register</button>
    </form>
</div>
<script type="text/javascript" src="{{asset('user/script.js')}}"></script>
</body>
</html>
