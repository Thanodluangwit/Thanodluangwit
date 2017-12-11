<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;

use Session;
use App\User;
class SavedataController extends Controller
{

   public function Setting(Request $request){

       DB::table('cms_setting')->where('id','=' , 1 )->update(array('scname' => Input::get('scname'),
        'description' => Input::get('description'),
        'keyword' => Input::get('keyword'),
        'marqu' => Input::get('marqu'),
        'facebook' => Input::get('facebook'),
        'bgcolor' => Input::get('bgcolor'),
        'footer' => Input::get('footer')));
        return Redirect('/admin/setting');

   }

   public function Imgbg(Request $request){
       if(isset($request->imgbg)){
        $imagebg = time().'.'.$request->imgbg->getClientOriginalExtension();
        $request->imgbg->move(public_path('setting'), $imagebg);
      }else{
        $imagebg ='No image';
      }
       DB::table('cms_setting')->where('id','=' , 1 )->update(array('imgbg' => $imagebg ));
        return Redirect('/admin/setting');

   }
    
    public function gray(){
      
       DB::table('cms_setting')->where('id','=' , 1 )->update(array('gray' => Input::get('gray')));
        return Redirect('/admin/setting');

   }

   public function Imghead(Request $request){
       if(isset($request->imghead)){
        $imagehead = time().'.'.$request->imghead->getClientOriginalExtension();
        $request->imghead->move(public_path('setting'), $imagehead);
      }else{
        $imagehead ='No image';
      }
       DB::table('cms_setting')->where('id','=' , 1 )->update(array('imghead' => $imagehead ));
        return Redirect('/admin/setting');

   }

   public function Imglogo(Request $request){
       if(isset($request->imglogo)){
        $imagelogo = time().'.'.$request->imglogo->getClientOriginalExtension();
        $request->imglogo->move(public_path('setting'), $imagelogo);
      }else{
        $imagelogo ='No image';
      }
       DB::table('cms_setting')->where('id','=' , 1 )->update(array('imglogo' => $imagelogo ));
        return Redirect('/admin/setting');

   }

   public function history(){

       DB::table('cms_history')->where('id','=' , 1 )->update(array('history' => Input::get('history')));
        return Redirect('/admin/history');

   }
   public function symbol(){

       DB::table('cms_symbol')->where('id','=' , 1 )->update(array('symbol' => Input::get('symbol')));
        return Redirect('/admin/symbol');

   }
    public function vision(){

       DB::table('cms_vision')->where('id','=' , 1 )->update(array('vision' => Input::get('vision')));
        return Redirect('/admin/vision');

   }
   public function mission(){

       DB::table('cms_mission')->where('id','=' , 1 )->update(array('mission' => Input::get('mission')));
        return Redirect('/admin/mission');

   }
    public function course(){

       DB::table('cms_course')->where('id','=' , 1 )->update(array('course' => Input::get('course')));
        return Redirect('/admin/course');

   }
    public function calendar(){


        DB::table('cms_calendar')->insert(array('inputtitle' => Input::get('inputtitle'),
            'message' =>  Input::get('message'),
            'startdate' =>  Input::get('startdate'),
            'starttime' =>  Input::get('starttime'),
            'enddate' =>  Input::get('enddate'),
            'enstime' =>  Input::get('enstime'),
            'eventwho' =>  Input::get('eventwho'),
            'location' =>  Input::get('location')));
        Session::flash('alert-success', 'บันทึกสำเร็จชิกสำเร็จ!');
		return Redirect('/admin/calendar');

    }
     public function building(Request $request){
       if(isset($request->img)){
        $image = time().'.'.$request->img->getClientOriginalExtension();
        $request->img->move(public_path('building'), $image);
      }else{
        $image ='';
      }

       DB::table('cms_building')->insert(array('building' => Input::get('building'),
        'buildyear' =>  Input::get('buildyear'),
        'price' =>  Input::get('price'),
        'img' =>  $image ,   
        'detail' =>  Input::get('detail')));
        return Redirect('/admin/building');

   }

   public function executives(Request $request){
       if(isset($request->imgdir)){
        $imagedir = time().'.'.$request->imgdir->getClientOriginalExtension();
        $request->imgdir->move(public_path('executives'), $imagedir);
      }else{
        $imagedir ='No image';
      }
       DB::table('cms_executives')->insert(array('name' => Input::get('name'),
        'position' => Input::get('position'),
        'education' => Input::get('education'),
        'major' => Input::get('major'),
        'img' => $imagedir ,
        'status' => Input::get('cerrent')));
        return Redirect('/admin/executives');

   }

   public function exlink(){

       DB::table('cms_extlink')->insert(array('name' => Input::get('name'),'link' => Input::get('link')));
        return Redirect('/admin/exlink');

   }
   public function news(){
       DB::table('cms_news')->insert(array('toppic' => Input::get('toppic'),
        'content' => Input::get('content'),
        'date' => Input::get('date')));
       return Redirect('/admin/news');
   }

   public function intro(Request $request){
       if(isset($request->button)){
        $imagelogo = time().'.'.$request->button->getClientOriginalExtension();
        $request->button->move(public_path('setting'), $imagelogo);
      }else{
        $imagelogo ='No image';
      }
       DB::table('cms_intro')->where('id','=' , 1 )->update(array('intro' => Input::get('content'),
            'colorbg' => Input::get('bgcolor'),
            'status' => Input::get('status'),
            'button' => $imagelogo ,
            'manage' => Input::get('manage')));
        return Redirect('/admin/intro');

   }


public function Updateinfo()
	{
       DB::table('cms_setting')->where('id','=' , 1 )->update(array('scname' => Input::get('school_th')));
       DB::table('cms_info')->where('id','=' , 1 )->update(array('school_th' => Input::get('school_th'),
            'school_en' => Input::get('school_en'),
            'school_cate' => Input::get('school_cate'),
            'course' => Input::get('course'),
            'schooltype' => Input::get('schooltype'),
            'bday' => Input::get('bday'),
            'founder_name' => Input::get('founder_name'),
            'llicensee_name' => Input::get('llicensee_name'),
            'address' => Input::get('address'),
            'tumbol' => Input::get('tumbol'),
            'amphur' => Input::get('amphur'),
            'province' => Input::get('province'),
            'zipcode' => Input::get('zipcode'),
            'phone' => Input::get('phone'),
            'fax' => Input::get('fax'),
            'manager' => Input::get('manager'),
            'phone_dir' => Input::get('phone_dir'),
            'email' => Input::get('email')));
           Session::flash('alert-success', 'ทำรายการสำเร็จ!');
           return Redirect('/admin/school.info');
	}
  public function gallery(Request $request){
      if(isset($request->img)){
       $imagemain = time().'.'.$request->img->getClientOriginalExtension();
       $request->img->move(public_path('gallery'), $imagemain);
     }else{
       $imagemain ='No image';
     }
      DB::table('cms_gallery')->insert(array('galleryid' => Input::get('galleryid'),
         'date' => Input::get('date'),
          'activaty' => Input::get('activaty'),
          'description' => Input::get('description'),
          'img' => $imagemain ));
       return Redirect('/admin/gallery');

  }
    
 public function directors(Request $request){
      if(isset($request->img)){
       $imagemain = time().'.'.$request->img->getClientOriginalExtension();
       $request->img->move(public_path('directors'), $imagemain);
     }else{
       $imagemain ='No image';
     }
      DB::table('cms_directors')->insert(array('name' => Input::get('name'),
          'position' => Input::get('position'),
          'education' => Input::get('education'),
          'major' => Input::get('major'),
          'phone' => Input::get('phone'),
          'email' => Input::get('email'),      
          'status' => Input::get('status'),                                   
          'img' => $imagemain ));
       return Redirect('/admin/directors');

  }   

}
