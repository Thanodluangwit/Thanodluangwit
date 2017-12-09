<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function setting()
    {
        $info = DB::table('cms_setting')->where('id','=',1)->first();
        return view('admin.setting')->with(array('info'=>$info));
    }
    public function history(){
        $histo = DB::table('cms_history')->where('id','=',1)->first();
        return view('admin.his')->with(array('histo'=>$histo));
    }
    public function management(){
        $execu = DB::table('cms_executives')->get();
        return view('admin.executives')->with(array('execu'=>$execu));
    }
    public function exlink(){
        $link = DB::table('cms_extlink')->get();
        return view('admin.exlink')->with(array('link'=>$link));
    }
    public function news(){
        $news = DB::table('cms_news')->get();
        return view('admin.news')->with(array('news'=>$news));
    }
    public function intro(){
        $intro = DB::table('cms_intro')->where('id','=',1)->first();
        return view('admin.intro')->with(array('intro'=>$intro));
    }
    public function Webinfo()
	{
        $row = DB::table('cms_info')->where('id','=', 1)->first();
        $info = DB::table('cms_setting')->where('id','=', 1)->first();
		return View('admin.detail')->with(array('data' => $row , 'info' => $info));
	}
  public function gallery(){
      $gallery = DB::table('cms_gallery')->get();
      return view('admin.gallery')->with(array('gallery'=>$gallery));
  }
  public function symbol(){
      $symbol = DB::table('cms_symbol')->where('id','=',1)->first();
      return view('admin.symbol')->with(array('symbol'=>$symbol));
  }
  public function vision(){
      $vision = DB::table('cms_vision')->where('id','=',1)->first();
      return view('admin.vision')->with(array('vision'=>$vision));
  }
  public function mission(){
      $mission = DB::table('cms_mission')->where('id','=',1)->first();
      return view('admin.mission')->with(array('mission'=>$mission));
  }
    public function course(){
      $course = DB::table('cms_course')->where('id','=',1)->first();
      return view('admin.course')->with(array('course'=>$course));
  }
  public function calendar(){
      $calen= DB::table('cms_calendar')->get();
      return view('admin.calendar')->with(array('calen'=>$calen));
  }
  public function building(){
      $building= DB::table('cms_building')->get();
      return view('admin.building')->with(array('building'=>$building));
  }
  public function director(){
      return view('admin.directors');
  }
    
}
