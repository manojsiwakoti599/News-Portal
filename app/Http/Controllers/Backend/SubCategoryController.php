<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function index(){
        $subcategory = DB::table('subcategories')
        ->join('categories', 'subcategories.category_id' , 'categories.id')
        ->select('subcategories.*', 'categories.category_en')
        ->orderBy('id', 'desc')->paginate(2);
        return view('backend.subcategory.index', compact('subcategory'));
    }

    public function addSubCategory(){
        $category = DB::table('categories')->get();
        return view('backend.subcategory.create', compact('category'));
    }


    // store a Subcategory in database
 public function storeSubCategory(Request $request){
    $validated = $request->validate([
        'subcategory_en' => 'required|unique:subcategories|max:255',
        'subcategory_nep' => 'required|unique:subcategories|max:255',
    ]);
 $data = array();
 $data['subcategory_en'] = $request->subcategory_en;
 $data['subcategory_nep'] = $request->subcategory_nep;
 $data['category_id'] = $request->category_id;
 DB::table('subcategories')->insert($data);


 $notification = array(
    'success' => 'SubCategory Inserted Successfully',
    'alert-type' => 'success'
 );

// showing notefication using jS.
 return redirect()->route('subcategories')->with($notification);
}


// Edit SubCategory
public function editSubCategory($id){
    $subcategory = DB::table('subcategories')->where('id', $id)->first();
    $category = DB::table('categories')->get();
    return view('backend.subcategory.edit', compact('subcategory', 'category'));
}


// Update SubCategory
public function updateSubCategory(Request $request, $id){

    $data = array();
    $data['subcategory_en'] = $request->subcategory_en;
    $data['subcategory_nep'] = $request->subcategory_nep;
    $data['category_id'] = $request->category_id;
    DB::table('subcategories')->where('id', $id)->update($data);


    $notification = array(
       'success' => 'SubCategory Updated Successfully',
       'alert-type' => 'success'
    );

   // showing notefication using jS.
    return redirect()->route('subcategories')->with($notification);
}


// Delete SubCategory
    public function deleteSubCategory($id){

        DB::table('subcategories')->where('id', $id)->delete();
        $notification = array(
            'success' => 'SubCategory deleted Successfully',
            'alert-type' => 'warning'
         );
         return redirect()->route('subcategories')->with($notification);

    }
}
