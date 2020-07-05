<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function gambar(){
        return view('articles.gambar');
    }

    public function index(){
        $articles = ArticleModel::get_all();
        return view('articles.index', compact('articles'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(Request $request){
        // $data->slug = Str::slug($request->judul);
 
        $newArticle = ArticleModel::save($request->all());

        return redirect('/artikel');
    }

    public function show($id){
        $article = ArticleModel::find_by_id($id);

        return view('articles.show', compact('article'));
    }

    public function destroy($id){
        $deleted = ArticleModel::destroy($id);

        return redirect('/artikel');
    }

    public function edit($id){
        $article = ArticleModel::find_by_id($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id, Request $request){
        $article = ArticleModel::update($id, $request->all());
        return redirect('/artikel');
    }
}
