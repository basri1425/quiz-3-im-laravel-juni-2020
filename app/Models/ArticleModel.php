<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleModel {
    protected $fillable =['judul','isi'];

    public static function get_all(){
        $articles = DB::table('articles')->get();
        return $articles;
    }

    public static function save($data){
        unset($data["_token"]);
        $new_article = DB::table('articles')->insert($data);
        return $new_article;
    }

    public static function find_by_id($id){
        $article = DB::table('articles')->where('id', $id)->first();
        return $article;
    }

    public static function update($id, $request){
        $article = DB::table('articles')
                ->where('id', $id)
                ->update([
                    'judul' => $request["judul"],
                    'isi' =>$request["isi"],
                    'slug' =>$request["slug"],
                    'tag' =>$request["tag"],
                ]);
        return $article;
    }

    public static function destroy($id){
        $deleted = DB::table('articles')
                    ->where('id', $id)
                    ->delete();
        return $deleted;
    }
}