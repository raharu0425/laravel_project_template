<!doctype html>
<html>

<head>
    <meta charset='utf-8' />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLet -->
    <link href="/vendor/adminlte/dist/css/adminlte.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="login-page skin-green">
    <div class="login-box">
        <div class="login-box-body">
            <p class="login-box-msg">ログインして下さい</p>
            @foreach ($errors->all() as $error)
                <div class="flash_message bg-danger text-center py-3 my-0">
                    {{$error}}
                </div>
            @endforeach
            <form action="/login/start" method="post">
                <!-- CSRF保護 -->
                @csrf
                <!-- メール -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Email" />
                </div>

                <!-- パスワード -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password" />
                </div>

                <!-- ボタン グリッドでセンタリング-->
                <div class="row">
                    <div class="col-xs-4">
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">ログイン</button>
                    </div>
                    <div class="col-xs-4">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>
