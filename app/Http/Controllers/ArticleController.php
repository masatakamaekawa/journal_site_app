<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
         // indexページへ移動
    public function index()
    {
         // モデル名::テーブル全件取得
        $articles = Article::all();
         // Itemsティレクトリーの中のindexページを指定し、itemsの連想配列を代入
        return view('articles.index', ['articles' => $articles]);
    }

     // showページへ移動
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
         // インスタンスの作成
        $article = new Article;

         // 値の用意
        $article->name = $request->name;
        $article->writing = $request->writing;

         // インスタンスに値を設定して保存
        $article->save();

         // 登録したらindexに戻る
        return redirect('/article');
    }
}