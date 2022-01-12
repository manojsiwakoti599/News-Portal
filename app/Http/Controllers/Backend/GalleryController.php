<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class GalleryController extends Controller
{
        // index page for show a photo gallery
    public function photoGallery(){
        $photo = DB::table('photos')->orderBy('id', 'desc')->paginate(5);
        return view('backend.gallery.photos', compact('photo'));
    }

    public function Addphoto(){
        Return view('backend.gallery.create');
    }

    // Store a photo in database
    public function storePhoto(Request $request){
        $data = array();
        $data['title'] = $request->title;
        $data['type'] = $request->type;

        $image = $request->photo;
        if ($image) {
            $image_one = uniqid().'.'. $image->getClientOriginalExtension();
            Image::make($image)->resize(500,300)->save('image/photoGallery/'. $image_one);

        $data['photo'] = 'image/photoGallery/'. $image_one;
        DB::table('photos')->insert($data);

        $notification = array(
            'success' => 'Photo Inserted Successfully',
            'alert-type' => 'success'
         );

        // showing notefication using jS.
         return redirect()->route('photo.gallery')->with($notification);
        }
        else{
             return back();
        }
    }

    // Edit Photo In Photo Gallery
    public function editPhoto($id){
        $photo = DB::table('photos')->where('id', $id)->first();
        return view('backend.gallery.edit', compact('photo'));
    }

      //UPDATE Image Gallery
      public function updatePhoto(Request $request, $id){


        $data = array();
        $data['title'] = $request->title;
        $data['type'] = $request->type;
        DB::table('photos')->where('id', $id)->update($data);

        $oldimage = $request->oldimage;
        $image = $request->photo;
        if ($image) {
            $image_one = uniqid().'.'. $image->getClientOriginalExtension();
            Image::make($image)->resize(500,300)->save('image/photoGallery/'. $image_one);
        $data['photo'] = 'image/photoGallery/'. $image_one;
        DB::table('photos')->where('id', $id)->update($data);


        unlink($oldimage);

        $notification = array(
            'success' => 'Image Gallery Updated Successfully',
            'alert-type' => 'success'
         );

        // showing notefication using jS.
         return redirect()->route('photo.gallery')->with($notification);
        }
        else{
            $data['photo'] = $oldimage;
            DB::table('photos')->where('id', $id)->update($data);

            $notification = array(
                'success' => 'Image Gallery Updated Successfully',
                'alert-type' => 'success'
             );

            }
        }


        // delete Photo From Photo Gallery
        public function deletePhoto($id){
          $photo =  DB::table('photos')->where('id', $id)->first();
            unlink($photo->photo);
            DB::table('photos')->where('id', $id)->delete();

            $notification = array(
                'success' => 'Photo Gallery Deleted Successfully',
                'alert-type' => 'success'
             );
             return redirect()->route('photo.gallery');
        }


        //  Index Video in video gallery
        public function videoGallery(){
            $video = DB::table('videos')->orderBy('id', 'desc')->paginate(5);
            return view('backend.gallery.video', compact('video'));
        }

        // create a video Gallery
        public function AddVideo(){
            return view('backend.gallery.createvideo');
        }


        // Store Video In Video Gallery
        public function storeVideo(Request $request){
        $data = array();
        $data['title'] = $request->title;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;
        DB::table('videos')->insert($data);

        $notification = array(
            'success' => 'Video Inserted Successfully',
            'alert-type' => 'success'
         );
        // showing notefication using jS.
         return redirect()->route('video.gallery')->with($notification);
    }


    // Edit a Video Gallery
    public function editVideo($id){
       $video =  DB::table('videos')->where('id', $id)->first();
        return view('backend.gallery.videoedit', compact('video'));
    }


    // update Video In video Gallery.
    public function updateVideo(Request $request, $id){
        $data = array();
        $data['title'] = $request->title;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;
        DB::table('videos')->where('id', $id)->update($data);

        $notification = array(
            'success' => 'Video Inserted Successfully',
            'alert-type' => 'success'
         );

        return redirect()->route('video.gallery')->with($notification);
    }

    // Delete Video In video Gallery
    public function deleteVideo($id){
        DB::table('videos')->where('id', $id)->delete();

        $notification = array(
            'success' => 'Video Inserted Successfully',
            'alert-type' => 'success'
         );

        return redirect()->route('video.gallery')->with($notification);
    }
        }

