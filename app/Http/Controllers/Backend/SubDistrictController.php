<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SubDistrictController extends Controller
{
    public function index()
    {
        $subdistrict = DB::table('subdistricts')
            ->join('districts', 'subdistricts.district_id', 'districts.id')
            ->select('subdistricts.*', 'districts.district_en')
            ->orderBy('id', 'desc')->paginate(2);
        return view('backend.subdistrict.index', compact('subdistrict'));
    }

    // create a subdistrict
    public function addSubDistrict()
    {
        $district = DB::table('districts')->get();
        return view('backend.subdistrict.create', compact('district'));
    }



    // store a SubDistrict in database
    public function storeSubDistrict(Request $request)
    {
        $validated = $request->validate([
            'subdistrict_en' => 'required|unique:subdistricts|',
            'subdistrict_nep' => 'required|unique:subdistricts|',
        ]);
        $data = array();
        $data['subdistrict_en'] = $request->subdistrict_en;
        $data['subdistrict_nep'] = $request->subdistrict_nep;
        $data['district_id'] = $request->district_id;
        DB::table('subdistricts')->insert($data);


        $notification = array(
            'success' => 'SubDistrict Inserted Successfully',
            'alert-type' => 'success'
        );

        // showing notefication using jS.
        return redirect()->route('subdistrict')->with($notification);
    }


    // Edit SubDistrict
    public function editSubDistrict($id)
    {
        $subdistrict = DB::table('subdistricts')->where('id', $id)->first();
        $district = DB::table('districts')->get();
        return view('backend.subdistrict.edit', compact('subdistrict', 'district'));
    }


    public function updateSubDistrict(Request $request, $id)
    {

        $data = array();
        $data['subdistrict_en'] = $request->subdistrict_en;
        $data['subdistrict_nep'] = $request->subdistrict_nep;
        $data['district_id'] = $request->district_id;
        DB::table('subdistricts')->where('id', $id)->update($data);


        $notification = array(
            'success' => 'SubDistricts Updated Successfully',
            'alert-type' => 'success'
        );

        // showing notefication using jS.
        return redirect()->route('subdistrict')->with($notification);
    }



    // Delete SubCategory
    public function deleteSubDistrict($id)
    {
        DB::table('subdistricts')->where('id', $id)->delete();
        $notification = array(
            'success' => 'SubDistrict deleted Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->route('subdistrict')->with($notification);
    }
}
