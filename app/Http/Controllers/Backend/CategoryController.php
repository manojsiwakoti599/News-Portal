<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    // show categories data in index
    public function index(){
        $category = DB::table('categories')->orderBy('id', 'desc')->paginate(2);
        return view('backend.category.index', compact('category'));
    }



    // Add Categories
    public function addCategory(){
        return view('backend.category.create');
    }


// store a category in database
 public function storeCategory(Request $request){
    $validated = $request->validate([
        'category_en' => 'required|unique:categories|max:255',
        'category_nep' => 'required|unique:categories|max:255',
    ]);
 $data = array();
 $data['category_en'] = $request->category_en;
 $data['category_nep'] = $request->category_nep;
 DB::table('categories')->insert($data);


 $notification = array(
    'success' => 'Category Inserted Successfully',
    'alert-type' => 'success'
 );

// showing notefication using jS.
 return redirect()->route('categories')->with($notification);
}


// Edit Categories
public function editCategory($id){
    $category = DB::table('categories')->where('id', $id)->first();
    return view('backend.category.edit', compact('category'));
}


// Update Category
    public function updateCategory(Request $request, $id){

        $data = array();
        $data['category_en'] = $request->category_en;
        $data['category_nep'] = $request->category_nep;
        DB::table('categories')->where('id', $id)->update($data);


        $notification = array(
           'success' => 'Category Updated Successfully',
           'alert-type' => 'success'
        );

        // showing notefication using jS.
 return redirect()->route('categories')->with($notification);
    }


    // Soft Delete
    public function deleteCategory($id){
        DB::table('categories')->where('id', $id)->delete();
    $notification = array(
        'success' => 'Category deleted Successfully',
        'alert-type' => 'warning'
     );
     return redirect()->route('categories')->with($notification);

}
}


