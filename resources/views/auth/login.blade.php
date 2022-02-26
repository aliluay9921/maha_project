<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>login</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Cairo&display=swap");

    * {
        margin: 0;
        padding: 0;
        font-family: Cairo;

    }

    body {
        background-color: #97BFB4 !important;
    }

    .loginPage {
        display: flex;
        direction: rtl;
        justify-content: space-around;
        margin: 10px;
        min-height: 700px;
        background-color: #97BFB4 !important;
        /* background-color: #fff !important; */
    }

    .loginPage .form {
        margin-top: 100px;
        margin-right: 50px;
        width: 400px;
        height: 300px;
        padding: 20px;
    }

    .loginPage .form h2 {
        text-align: center;
        padding: 15px;
    }

    .loginPage .form .btn {
        margin-top: 50px;
    }

    .loginPage .lotte {
        width: 40%;
        padding: 10px;
    }

    .loginPage .lotte img {
        width: 100%;
    }

    .submit {
        float: right;
    }

    .submit a,
    button {
        margin: 5px
    }

</style>

<body>
    <div class="loginPage">
        <div class="form">
            <h2>تسجيل الدخول </h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group text-right">
                    <label for="exampleInputEmail1 ">البريد الالكتروني</label>
                    <input type="email" value="{{ old('email') }}" class="form-control" name="email"
                        aria-describedby="emailHelp" required autocomplete="email" autofocus />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <label for="exampleInputEmail1">كلمة المرور</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        aria-describedby="emailHelp" required autocomplete="current-password" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="submit">
                    <button type="submit" class="btn btn-success text-white ">
                        تسجيل دخول
                    </button>
                    <a href="{{ route('register') }}" type="submit" class="btn btn-primary text-white ">
                        انشاء حساب
                    </a>
                </div>
            </form>
        </div>
        <div class="lotte">
            <img src="/image/animation_500_kwyvd9aj.gif" />

        </div>
    </div>
</body>

</html>
