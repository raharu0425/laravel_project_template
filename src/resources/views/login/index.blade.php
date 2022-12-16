<!doctype html>
<html>

<head>
    <meta charset='utf-8' />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>

<body class="text-center">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Laravel Project Temprate</a>
            </div>
        </nav>
    </header>
    <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">ログインしてください</h1>
        <label for="inputEmail" class="sr-only">Emailアドレス</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Emailアドレス" required autofocus>
        <label for="inputPassword" class="sr-only">パスワード</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="パスワード" required>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="rememberCheck">
            <label class="form-check-label" for="rememberCheck">
                状態を記憶する
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">サインイン</button>
    </form>


        <div class="login-box">

            <div class="login-box-body">
                <p class="login-box-msg">ログインして下さい2</p>


                <!-- メール -->
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Email" />
                    <span class="form-control-feedback"><i class="fa fa-envelope-o"></i></span>
                </div>

                <!-- パスワード -->
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password" />
                    <span class="form-control-feedback"><i class="fa fa-lock"></i></span>
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
        </div>
    </div>

</body>

</html>
