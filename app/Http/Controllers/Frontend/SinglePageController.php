<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SinglePageController extends Controller
{
    public function singlePage($id){
        $post = DB::table('posts')
        ->join('categories', 'posts.category_id', 'Categories.id')
        ->join('subcategories', 'posts.subcategory_id', 'subcategories.id')
        ->join('users', 'posts.user_id', 'users.id')
        ->select('posts.*', 'categories.category_en', 'categories.category_nep',
        'subcategories.subcategory_en', 'subcategories.subcategory_nep', 'users.name')
        ->where('posts.id',$id)->first();
        $more = DB::table('posts')->where('category_id', $post->category_id)->orderBy('id', 'desc')->limit(6)->get();
         // Latest Popular Highest sidebar
         $latest = DB::table('posts')->orderBy('id', 'desc')->limit(5)->get();
         $popular = DB::table('posts')->orderBy('id', 'desc')->inRandomOrder()->limit(8)->get();
         $highest = DB::table('posts')->orderBy('id', 'asc')->inRandomOrder()->limit(8)->get();
        return view('main.single-post',compact('post', 'more', 'latest', 'popular', 'highest'));
    }

    public function categoryPost($id, $category_en){
        $catpost = DB::table('posts')->where('category_id', $id)->orderBy('id', 'desc')->paginate(5);
        return view('main.all-post', compact('catpost'));
    }
}
