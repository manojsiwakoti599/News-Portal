<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $livetvs = DB::table('livetvs')->first();
        $prayer = DB::table('prayers')->first();
        $website = DB::table('websites')->get();
        $firstbig = DB::table('posts')->where('first_section_thumbnail', 1)->orderBy('id', 'desc')->first();
        $firstsection = DB::table('posts')->where('first_section', 1)->orderBy('id', 'desc')->limit(8)->get();

        //  scape  data
        $category = DB::table('categories')->first();
        $generalbig = DB::table('posts')->where('category_id', $category->id)->where('big_thumbnail', 1)->first();
        $generalsmall = DB::table('posts')->where('category_id', $category->id)->where('big_thumbnail', NULL)->limit(3)->get();

        // scape first data
        $secondcategory = DB::table('categories')->skip(1)->first();
        $secondgeneralbig = DB::table('posts')->where('category_id', $secondcategory->id)->where('big_thumbnail', 1)->first();
        $secondgeneralsmall = DB::table('posts')->where('category_id', $secondcategory->id)->where('big_thumbnail', NULL)->limit(3)->get();

        // escape second data
        $thirdcategory = DB::table('categories')->skip(2)->first();
        $thirdgeneralbig = DB::table('posts')->where('category_id', $thirdcategory->id)->where('big_thumbnail', 1)->first();
        $thirdgeneralsmall = DB::table('posts')->where('category_id', $thirdcategory->id)->where('big_thumbnail', NULL)->limit(3)->get();

        // escape third data
        $fourcategory = DB::table('categories')->skip(3)->first();
        $fourgeneralbig = DB::table('posts')->where('category_id', $fourcategory->id)->where('big_thumbnail', 1)->first();
        $fourgeneralsmall = DB::table('posts')->where('category_id', $fourcategory->id)->where('big_thumbnail', NULL)->limit(3)->get();

        // escape fourth data
        $fivecategory = DB::table('categories')->skip(4)->first();
        $fivegeneralbig = DB::table('posts')->where('category_id', $fivecategory->id)->where('big_thumbnail', 1)->first();
        $fivegeneralsmall = DB::table('posts')->where('category_id', $fivecategory->id)->where('big_thumbnail', NULL)->limit(3)->get();

        // escape fourth data
        $sixcategory = DB::table('categories')->skip(5)->first();
        $sixgeneralbig = DB::table('posts')->where('category_id', $sixcategory->id)->where('big_thumbnail', 1)->first();
        $sixgeneralsmall = DB::table('posts')->where('category_id', $sixcategory->id)->where('big_thumbnail', NULL)->limit(3)->get();

        // photo gallery
        $bigphoto = DB::table('photos')->where('type', 1)->orderBy('id', 'desc')->first();
        $smallphoto = DB::table('photos')->where('type', 0)->orderBy('id', 'desc')->limit(5)->get();
        // video gallery
        $bigvideo = DB::table('videos')->where('type', 1)->orderBy('id', 'desc')->first();
        $smallvideo = DB::table('videos')->where('type', 0)->orderBy('id', 'desc')->limit(4)->get();

        // Latest Popular Highest sidebar
        $latest = DB::table('posts')->orderBy('id', 'desc')->limit(5)->get();
        $popular = DB::table('posts')->orderBy('id', 'desc')->inRandomOrder()->limit(5)->get();
        $highest = DB::table('posts')->orderBy('id', 'asc')->inRandomOrder()->limit(5)->get();

        return view('main.body.home', compact('prayer', 'livetvs', 'website', 'firstbig', 'firstsection', 'category',
         'generalbig', 'generalsmall', 'secondcategory', 'secondgeneralbig', 'secondgeneralsmall', 'thirdcategory', 'thirdgeneralbig', 'thirdgeneralsmall',

         'fourcategory', 'fourgeneralbig', 'fourgeneralsmall', 'fivecategory', 'fivegeneralbig', 'fivegeneralsmall', 'sixcategory', 'sixgeneralbig',
        'sixgeneralsmall', 'bigphoto', 'smallphoto', 'bigvideo', 'smallvideo', 'latest', 'popular', 'highest'));
    }
}
