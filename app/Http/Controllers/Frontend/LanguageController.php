<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
     public function LangNepali(){
         session()->get('lang');
         session()->forget('lang');
         session()->put('lang', 'nepali');
         return redirect()->back();
     }

     public function LangEnglish(){
         session()->get('lang');
         session()->forget('lang');
         session()->put('lang', 'english');
         return redirect()->back();
     }
}
