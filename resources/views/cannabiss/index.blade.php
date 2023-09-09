<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>一覧画面</title>
</head>
<body>
    <div class="register">
    <a href="/register">>>登録</a>
    </div>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
            <th></th>
        </tr>
        @foreach ($cannabiss as $cannabis)

        <tr>
            <td>{{ $cannabis->name }}</td>
            <td>{{ $cannabis->tel }}</td>
            <td>{{ $cannabis->email }}</td>
            <td><a href="/edit/{{$cannabis->id}}">>> 編集</a></td>
        </tr>
        @endforeach
    </table>   
</body>
</html>