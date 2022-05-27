<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


//Models
use App\Models\Article;
use  App\Models\Models\Category;

class Homepage extends Controller
{

    public function index(){
        $data['articles']=Article::orderBy('created_at','DESC')->get();
      $data['categories'] = Category::inRandomOrder()->get();
      return view('front.homepage',$data);
    }

    public function single($slug){

        $article["article"] = Article::where('slug',$slug)->first() ?? abort(403,'Kayboldun sanırım?');
      //  dd($article);

        $data['categories'] = Category::inRandomOrder()->get();
        return view('front.single',$article);
    }
}
