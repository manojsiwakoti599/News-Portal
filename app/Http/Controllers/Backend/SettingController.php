<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function socialSetting()
    {
        $social = DB::table('socials')->first();
        return view('backend.setting.social', compact('social'));
    }


    // Update Social Setting
    public function updateSocial(Request $request, $id)
    {
        $data = array();

        $data['facebook'] = $request->facebook;
        $data['twitter'] = $request->twitter;
        $data['youtube'] = $request->youtube;
        $data['linkedin'] = $request->linkedin;
        $data['instagram'] = $request->instagram;
        DB::table('socials')->where('id', $id)->update($data);


        $notification = array(
            'success' => 'Social Setting Updated Successfully',
            'alert-type' => 'success'
        );

        // showing notefication using jS.
        return redirect()->route('social.setting')->with($notification);
    }



    // Edit Seo Settings
    public function seoSetting()
    {
        $seo = DB::table('seos')->first();
        return view('backend.setting.seo', compact('seo'));
    }


    // Update Seo Setting
    public function updateSeo(Request $request, $id)
    {
        $data = array();

        $data['meta_author'] = $request->meta_author;
        $data['meta_title'] = $request->meta_title;
        $data['meta_keyword'] = $request->meta_keyword;
        $data['meta_description'] = $request->meta_description;
        $data['google_analytics'] = $request->google_analytics;
        $data['google_verification'] = $request->google_verification;
        $data['alexa_analytics'] = $request->alexa_analytics;
        DB::table('seos')->where('id', $id)->update($data);


        $notification = array(
            'success' => 'Seo Setting Updated Successfully',
            'alert-type' => 'success'
        );

        // showing notefication using jS.
        return redirect()->route('seo.setting')->with($notification);
    }


        // Prayer  Settings
        public function prayerSetting()
        {
            $prayer = DB::table('prayers')->first();
            return view('backend.setting.prayer', compact('prayer'));
        }

            // Update Prayer Setting
        public function updatePrayer(Request $request, $id)
        {
            $data = array();

            $data['fajr'] = $request->fajr;
            $data['johor'] = $request->johor;
            $data['asor'] = $request->asor;
            $data['magrib'] = $request->magrib;
            $data['esha'] = $request->esha;
            $data['jummah'] = $request->jummah;
            DB::table('prayers')->where('id', $id)->update($data);


            $notification = array(
                'success' => 'Prayer Setting Updated Successfully',
                'alert-type' => 'success'
            );

            // showing notefication using jS.
            return redirect()->route('prayer.setting')->with($notification);
        }


        // Live Tv Edit Function
        public function liveTvSetting(){
            $livetv = DB::table('livetvs')->first();
            return view('backend.setting.livetv', compact('livetv'));
        }

        // Update Live Tv
        public function updateLiveTv(Request $request, $id){
            $data = array();
            $data['embed_code'] = $request->embed_code;
            DB::table('livetvs')->where('id', $id)->update($data);


            $notification = array(
                'success' => 'Live Tv Setting Updated Successfully',
                'alert-type' => 'success'
            );

            // showing notefication using jS.
            return redirect()->route('livetv.setting')->with($notification);

        }


        // Active Live Tv
        public function activeLiveTv(Request $request, $id){
            DB::table('livetvs')->where('id', $id)->update(['status' => 1]);

            $notification = array(
                'success' => 'Live Tv  Activate Successfully',
                'alert-type' => 'success'
            );

            // showing notefication using jS.
            return redirect()->back()->with($notification);

        }

        // Deactive Live Tv
        public function DeactiveLiveTv(Request $request, $id){
            DB::table('livetvs')->where('id', $id)->update(['status' => 0]);

            $notification = array(
                'success' => 'Live Tv Deactivated Successfully',
                'alert-type' => 'success'
            );

            // showing notefication using jS.
            return redirect()->back()->with($notification);

        }


        // Edit Notice Setting
        public function noticeSetting(){
            $notice = DB::table('notices')->first();
            return view('backend.setting.notice', compact('notice'));
        }

 // Update Notice Setting
 public function updateNotice(Request $request, $id){
    $data = array();
    $data['notice'] = $request->notice;
    DB::table('notices')->where('id', $id)->update($data);


    $notification = array(
        'success' => 'Notices Settings Are Updated Successfully',
        'alert-type' => 'success'
    );

    // showing notefication using jS.
    return redirect()->route('notice.setting')->with($notification);

}



   // Active Live Tv
   public function activeNotice(Request $request, $id){
    DB::table('notices')->where('id', $id)->update(['status' => 1]);

    $notification = array(
        'success' => 'Notefication Activate Successfully',
        'alert-type' => 'success'
    );

    // showing notefication using jS.
    return redirect()->back()->with($notification);

}

// Deactive Live Tv
public function deactiveNotice(Request $request, $id){
    DB::table('notices')->where('id', $id)->update(['status' => 0]);

    $notification = array(
        'success' => 'Notefication Deactivated Successfully',
        'alert-type' => 'success'
    );

    // showing notefication using jS.
    return redirect()->back()->with($notification);

}


// website Setting for index
    public function websiteSetting(){
        $website = DB::table('websites')->orderBy('id', 'desc')->paginate(5);
        return view('backend.website.index', compact('website'));
    }


    // create form for websites link
    public function addWebsiteLink(){
        return view('backend.website.create');
    }


    // store a Website Links and name  in database
 public function StoreWebsiteLink(Request $request){

 $data = array();
 $data['website_name'] = $request->website_name;
 $data['website_link'] = $request->website_link;
 DB::table('websites')->insert($data);


 $notification = array(
    'success' => 'Websites Name&Links Inserted Successfully',
    'alert-type' => 'success'
 );

// showing notefication using jS.
 return redirect()->route('all.website')->with($notification);
}

// Edit website Setting
public function editeWebsiteLink($id){
    $website = DB::table('websites')->where('id', $id)->first();
    return view('backend.website.edit', compact('website'));
}

// Update Website Settings
 public function updateWebsiteLink(Request $request, $id){
     $data = array();
     $data['website_name'] = $request->website_name;
     $data['website_link'] = $request->website_link;
     DB::table('websites')->where('id', $id)->update($data);

     return redirect()->route('all.website');

    $notification = array(
        'success' => 'Notices Settings Are Updated Successfully',
        'alert-type' => 'success'
    );
 }

  public function deleteWebsite($id){
      DB::table('websites')->where('id', $id)->delete();
      $notification = array(
        'success' => 'Website Settings deleted Successfully',
        'alert-type' => 'warning'
     );
     return redirect()->route('all.website')->with($notification);

}


  }


