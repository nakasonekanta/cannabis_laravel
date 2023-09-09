<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>会編集画面</title>
    
</head>
<body>
    
    <div class="test"> 
    <h1>会員編集 会員ID:{{$cannabis->id}}</h1>
    
    <form action="/update" method="POST">
        @csrf
    <input value="{{$cannabis->name}}" type="text" class="form-control test2" name="name" placeholder="山田太郎" maxlength="50" required autofocus>
    <input value="{{$cannabis->tel}}" type="text" class="form-control test3" name="tel" placeholder="123456789" maxlength="50" required>
    <input value="{{$cannabis->email}}" type="email" class="form-control test4" name="email" placeholder="test@test.jp" maxlength="254" required>
    <button class="w-100 btn btn-lg test5" type="submit">編集</button>
    </form>
    <form action="{{ url('cannabis/'.$cannabis->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
 
                            <button type="submit">
                                削除
                            </button>
                        </form>

    
    </div>
</body>
</html>