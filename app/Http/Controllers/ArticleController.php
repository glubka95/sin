<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Category;

class ArticleController extends Controller
{
    public function get(){
        $id = request()->route("id");
        if(is_null($id)) {
        $article = Article::all();
        return view('article', ["article" =>$article]);
        
        }
        $article = Article::find($id);
        if(is_null($article)){
            return redirect(route("article.get"));
        }
        return view("article",["article"=>$category]);
        
    }



    public function create(){
        $data = request()->all();
        return var_dump($data);
        $title = array_get($data, "title");
         $content = array_get($data, "content");
          $category_id = array_get($data, "category_id");
        
        $article = new Article();
        $category = Category::find($category_id);
        $article->category()->associate($category);
        $article->title = $title;
        $article->content = $content;
        
        $article->save();
        return redirect (route("article.get"));
        
    }
        
}
