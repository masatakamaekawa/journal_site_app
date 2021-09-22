<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>article edit</title>
</head>

<body>
    <h1>投稿論文編集</h1>
    <!-- 更新先はitemsのidにしないと増える php artisan rote:listで確認① -->
    <form action="/articles/{{ $article->id }}" method="post">
        @csrf
        <!-- formタグはPUTやDELETEをサポートしていないため、@methodで指定する必要がある -->
        <input name="id" value="{{ $article->id }}">
        @method('PATCH')
        <p>
            <label for="name">論文タイトル</label>
            <input type="text" name="name" value="{{ $article->name }}">
        </p>
        <p>
            <label for="writing">本文</label>
            <input type="text" name="writing" value="{{ $article->writing }}">
        </p>

        <input type="submit" value="更新">
    </form>
</body>

</html>
