<!DOCTYPE html>
<html>
<head>
    <title>ログイン画面</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .login-container {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .login-button {
            margin-bottom: 15px;
        }

        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 10px;
        }

        .service-title {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="service-title">精神障害者特化型<br>スカウトメディアサービス</div>
    <h2 class="text-center mb-4">BizDiverse</h2>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 login-container">
            <form action="{{ route('explain') }}" method="get" class="mb-3">
                <button class="btn btn-warning btn-lg login-button" type="submit">　　企画説明　　</button>
            </form>

            <!-- 個人用ログイン画面のボタン -->
            <form action="{{ route('user.login') }}" method="get" class="mb-3">
                <button class="btn btn-primary btn-lg login-button" type="submit">個人用ログイン画面</button>
            </form>

            <!-- 企業用ログイン画面のボタン -->
            <form action="{{ route('admin.login') }}" method="get" class="mb-3">
                <button class="btn btn-primary btn-lg login-button" type="submit">企業用ログイン画面</button>
            </form>
        </div>
    </div>
</div>

<!-- フッターにサービス名を追加 -->
<footer>
    <p>&copy; BizDiverse</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
