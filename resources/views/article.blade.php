  <!DOCTYPE html>
  <html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>auction index</title>
  </head>
  <body>
      <h1>論文詳細</h1>
      <ul>
         @foreach ($articles as $article)
             <!-- // リンク先をidで取得し名前で出力 -->
             <li><a href="/article/{{ $article->id }}">{{ $article->name }}</a></li>
         @endforeach
      </ul>
  </body>
  </html>