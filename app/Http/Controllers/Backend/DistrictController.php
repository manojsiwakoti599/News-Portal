<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DistrictController extends Controller
{
        // show District data in index
        public function index(){
            $district = DB::table('districts')->orderBy('id', 'desc')->paginate(2);
            return view('backend.district.index', compact('district'));
        }


        // Create a District
        public function addDistrict(){
            return view('backend.district.create');
        }


        // store a category in database
 public function storeDistrict(Request $request){
    $validated = $request->validate([
        'district_en' => 'required|unique:districts',
        'district_nep' => 'required|unique:districts',
    ]);
 $data = array();
 $data['district_en'] = $request->district_en;
 $data['district_nep'] = $request->district_nep;
 DB::table('districts')->insert($data);


 $notification = array(
    'success' => 'District Inserted Successfully',
    'alert-type' => 'success'
 );

// showing notefication using jS.
 return redirect()->route('district')->with($notification);
}


// Edit District
public function editDistrict($id){
    $district = DB::table('districts')->where('id', $id)->first();
    return view('backend.district.edit', compact('district'));
}


    public function updateDistrict(Request $request, $id){

        $data = array();
        $data['district_en'] = $request->district_en;
        $data['district_nep'] = $request->district_nep;
        DB::table('districts')->where('id',$id)->update($data);


        $notification = array(
           'success' => 'District Updated Successfully',
           'alert-type' => 'success'
        );

       // showing notefication using jS.
        return redirect()->route('district')->with($notification);

    }


    // Soft Delete
    public function deleteDistrict($id){
        DB::table('districts')->where('id', $id)->delete();
    $notification = array(
        'success' => 'District deleted Successfully',
        'alert-type' => 'warning'
     );
     return redirect()->route('district')->with($notification);

}


}
