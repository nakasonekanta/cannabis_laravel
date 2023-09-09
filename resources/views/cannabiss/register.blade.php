<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>会員登録</title>
</head>
<body>
    <div class="tekisuto"> 
    <h1>会員登録</h1>
    
    <form action="/register" method="POST">
        @csrf
    <input type="text" class="form-control tekisuto2" name="name" placeholder="名前" maxlength="50" required autofocus>
    <input type="text" class="form-control tekisuto3" name="tel" placeholder="電話番号" maxlength="50" required>
    <input type="email" class="form-control tekisuto4" name="email" placeholder="メールアドレス" maxlength="254" required>
    <button class="w-100 btn btn-lg tekisuto5" type="submit">登録</button>
    <input type="hidden">
    </form>
    </div>
</body>
</html>