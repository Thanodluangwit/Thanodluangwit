<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
class MainController extends Controller
{

    public function index()
    {
        $info = DB::table('cms_setting')->where('id','=',1)->first();
        $link = DB::table('cms_extlink')->get();
        $news = DB::table('cms_news')->orderBy('id', 'DESC')->get();
        $gallery = DB::table('cms_gallery')->orderBy('id', 'desc')->take(4)->get();
        $gallerys = DB::table('cms_gallery')->count();
		$intro = DB::table('cms_intro')->where('id','=',1)->first();
        $newss = DB::table('cms_news')->count();
        $direct = DB::table('cms_directors')->count();
        $director = DB::table('cms_directors')->where('status','=',1)->first();
        return view('home')->with(array('info'=>$info ,'director'=>$director,'direct'=>$direct ,'link'=>$link, 'news'=>$news , 'gallery'=>$gallery, 'gallerys'=>$gallerys,'intro'=>$intro,'newss'=>$newss));
    }
    public function history()
    {
        $title = "ประวัติ";
        $info = DB::table('cms_setting')->where('id','=',1)->first();
        $histo = DB::table('cms_history')->where('id','=',1)->first();
        $link = DB::table('cms_extlink')->get();
        $intro = DB::table('cms_intro')->where('id','=',1)->first();
        $direct = DB::table('cms_directors')->count();
        $director = DB::table('cms_directors')->where('status','=',1)->first();
        return view('history', compact('title'))->with(array('info'=>$info , 'histo'=>$histo,'director'=>$director,'direct'=>$direct ,'link'=>$link,'intro'=>$intro));
    }

    public function welcome()
    {
        $intro = DB::table('cms_intro')->where('id','=',1)->first();
        $info = DB::table('cms_setting')->where('id','=',1)->first();
        $intro = DB::table('cms_intro')->where('id','=',1)->first();
       return view('index')->with(array('intro'=>$intro,'info'=>$info,'intro'=>$intro));
    }
    public function symbol()
    {
        $title = "สัญลักษณ์โรงเรียน";
        $info = DB::table('cms_setting')->where('id','=',1)->first();
        $symbol = DB::table('cms_symbol')->where('id','=',1)->first();
        $link = DB::table('cms_extlink')->get();
        $intro = DB::table('cms_intro')->where('id','=',1)->first();
        $direct = DB::table('cms_directors')->count();
        $director = DB::table('cms_directors')->where('status','=',1)->first();
        return view('symbol', compact('title'))->with(array('info'=>$info , 'symbol'=>$symbol,'director'=>$director,'direct'=>$direct ,'link'=>$link,'intro'=>$intro));
    }
    public function vision()
    {
        $title = "วิสัยทัศน์ / ปรัชญา";
        $info = DB::table('cms_setting')->where('id','=',1)->first();
        $vision = DB::table('cms_vision')->where('id','=',1)->first();
        $link = DB::table('cms_extlink')->get();
        $intro = DB::table('cms_intro')->where('id','=',1)->first();
        $direct = DB::table('cms_directors')->count();
        $director = DB::table('cms_directors')->where('status','=',1)->first();
        return view('vision', compact('title'))->with(array('info'=>$info , 'vision'=>$vision,'director'=>$director,'direct'=>$direct ,'link'=>$link,'intro'=>$intro));
    }
    public function mission()
    {
        $title = "พันธกิจ / เป้าหมาย";
        $info = DB::table('cms_setting')->where('id','=',1)->first();
        $mission = DB::table('cms_mission')->where('id','=',1)->first();
        $link = DB::table('cms_extlink')->get();
        $intro = DB::table('cms_intro')->where('id','=',1)->first();
        $direct = DB::table('cms_directors')->count();
        $director = DB::table('cms_directors')->where('status','=',1)->first();
        return view('mission', compact('title'))->with(array('info'=>$info , 'mission'=>$mission,'director'=>$director,'direct'=>$direct ,'link'=>$link,'intro'=>$intro));
    }
    public function course()
    {
        $title = "พันธกิจ / เป้าหมาย";
        $info = DB::table('cms_setting')->where('id','=',1)->first();
        $course = DB::table('cms_course')->where('id','=',1)->first();
        $link = DB::table('cms_extlink')->get();
        $intro = DB::table('cms_intro')->where('id','=',1)->first();
        $direct = DB::table('cms_directors')->count();
        $director = DB::table('cms_directors')->where('status','=',1)->first();
        return view('course', compact('title'))->with(array('info'=>$info , 'course'=>$course,'director'=>$director,'direct'=>$direct ,'link'=>$link,'intro'=>$intro));
    }
    public function calendar()
    {
        $title = "ปฏิทินกิจกรรม";
        $info = DB::table('cms_setting')->where('id','=',1)->first();
        $calen= DB::table('cms_calendar')->get();
        $link = DB::table('cms_extlink')->get();
        $intro = DB::table('cms_intro')->where('id','=',1)->first();
        $direct = DB::table('cms_directors')->count();
        $director = DB::table('cms_directors')->where('status','=',1)->first();
        return view('calendar', compact('title'))->with(array('info'=>$info , 'calen'=>$calen,'director'=>$director,'direct'=>$direct ,'link'=>$link,'intro'=>$intro));
    }
    public function building()
    {
        $title = "ข้อมูลอาคารสถานที่";
        $info = DB::table('cms_setting')->where('id','=',1)->first();
        $building= DB::table('cms_building')->get();
        $link = DB::table('cms_extlink')->get();
        $intro = DB::table('cms_intro')->where('id','=',1)->first();
        $direct = DB::table('cms_directors')->count();
        $director = DB::table('cms_directors')->where('status','=',1)->first();
        return view('building', compact('title'))->with(array('info'=>$info , 'building'=>$building,'director'=>$director,'direct'=>$direct ,'link'=>$link,'intro'=>$intro));
    }
}
