<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class PostController extends Controller
{

    public function createPost(){
        $category = DB::table('categories')->get();
        $district = DB::table('districts')->get();
        return view('backend.post.create', compact('category', 'district'));
    }

    // store a POSTS in database
     public function storePost(Request $request){
        $validated = $request->validate([
            'category_id' => 'required',
            'district_id' => 'required',
        ]);
        $data = array();
        $data['title_en'] = $request->title_en;
        $data['title_nep'] = $request->title_nep;
        $data['user_id'] = Auth::id();
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['district_id'] = $request->district_id;
        $data['subdistrict_id'] = $request->subdistrict_id;
        $data['tags_en'] = $request->tags_en;
        $data['tags_nep'] = $request->tags_nep;
        $data['details_en'] = $request->details_en;
        $data['details_nep'] = $request->details_nep;
        $data['headline'] = $request->headline;
        $data['first_section'] = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
        $data['big_thumbnail'] = $request->big_thumbnail;
        $data['post_date'] = date('d-m-Y');
        $data['post_month'] = date('F');

        $image = $request->image;
        if ($image) {
            $image_one =uniqid().'.'. $image->getClientOriginalExtension();
            Image::make($image)->resize(500,300)->save('image/postimg'. $image_one);

        $data['image'] = 'image/postimg/'. $image_one;
        DB::table('posts')->insert($data);

        $notification = array(
            'success' => 'POST Updated Successfully',
            'alert-type' => 'success'
         );

        // showing notefication using jS.
         return redirect()->route('create.post')->with($notification);
        }
        else{
             return back();
        }
     }


     //-------------------------------------------------------------------------------------------


    // fetch all category_id data to subcategory table
     public function getSubCategory($category_id){
        $sub = DB::table('subcategories')->where('category_id', $category_id)->get();
        return response()->json($sub);
     }
    // fetch all district_id data to subDistrict table
     public function getSubDistrict($district_id){
        $subdistrict = DB::table('subdistricts')->where('district_id', $district_id)->get();
        return response()->json($subdistrict);
     }
     //---------------------------------------------------------------------------------------------
}
