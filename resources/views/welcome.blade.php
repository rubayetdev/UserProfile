{{--<labe>Registration</labe>--}}
{{--<form action="{{route('insert')}}" method="Post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="name">--}}
{{--    <input type="email" name="email">--}}
{{--    <input type="password" name="password">--}}

{{--    <button type="submit">Submit</button>--}}
{{--</form>--}}

{{--<label>Login</label>--}}

{{--<link href="{{asset('css/style.css')}}">--}}
{{--<form action="{{route('login')}}" method="Post">--}}
{{--    @csrf--}}

{{--    <input type="email" name="email">--}}
{{--    <input type="password" name="password">--}}

{{--    <button type="submit">Submit</button>--}}
{{--</form>--}}
    <!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<h2>Login Form</h2>

<form action="{{route('login')}}" method="post">
    @csrf
    <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="email" placeholder="Enter Username" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>

</body>
</html>
