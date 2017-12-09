@extends('layouts.app')

{{-- Web site Title --}}
@section('title') {{ $info->scname }} | {{ $info->school_en  }}  @parent @endsection

@section('descrip') {{ $info->description }}  @parent @endsection
@section('key') {{ $info->keyword }}  @parent @endsection

@section('content')

<div class="jumbotron">
<div class="row">

<!--  -->
<div class="col-lg-6">
 
<div class="block-panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">ข่าวประชาสัมพันธ์</h3>
  </div>
  <div class="block-body">
	  @if ($newss == 0 )
	  <p style="text-align:center; font-size: 16px; margin-top : 15px;">ไม่มีข่าวประชาสัมพันธ์</p>
	  @else
    <marquee width="100%" height="150" onmouseover="this.scrollAmount=0" onmouseout="this.scrollAmount=1" scrollAmount="2" scrollDelay="35" truespeed direction="up">
   @foreach  ($news as $data )
    <li><a href="">{{ $data->toppic}}   /  {{ $data->date}}  </a></li>
   @endforeach
      </marquee>
	 @endif 
  </div>
  <div class="panel-footer">
    <div align="right" >
        <a href="#" > ดูทั้งหมด >>> </a>
    </div>
  </div>
</div>

<div class="block-panel panel-primary" >
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-picture-o" aria-hidden="true"></i> ภาพกิจกรรม</h3>
        </div>
        <div class="panel-body  ">
        @if ($gallerys == 0 )
	        <p style="text-align:center; font-size: 16px; margin-top : 15px;">ไม่มีภาพกิจกรรม</p>
	       @else
           @foreach  ($gallery as $data )
            <div class="col-lg-6 ">
                <img src="{{ url('/public/gallery') }}/{{ $data->img }}"  class="img-thumbnail displayed">
                <h5 align="center"> <a href="" >{{ $data->activaty }}</a></h5>
            </div>
            @endforeach
        @endif
        </div>
        <div class="panel-footer">
        <div align="right" >
            <a href="#" > ดูทั้งหมด >>> </a>
        </div>
        </div>
</div>

<div class="block-panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">ดาวน์โหลด</h3>
  </div>
  <div class="block-body">
   <p style="text-align:center; font-size: 16px; margin-top : 15px;">ไม่มีเอกสาราวน์โหลด</p>
  </div>
  <div class="panel-footer">
    <div align="right" >
        <a href="#" > ดูทั้งหมด >>> </a>
    </div>
  </div>
</div>

<div class="block-panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">ข่าวการศึกษา</h3>
  </div>
  <div class="block-body">
   <iframe src="http://www.kruwandee.com/news_col3.php" style="width:100%;height:500px;border-style:none">
      </iframe>
  </div>
  <div class="panel-footer">
    <div align="right" >
        <a href="http://www.kruwandee.com/" target="_blank"> ดูทั้งหมด >>> </a>
    </div>
  </div>
</div>
<div class="block-panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">หนังสือราชการแจ้งสำนักงานเขตพื้นที่การศึกษา</h3>
  </div>
  <div class="block-body">
   <iframe id="blockrandom" name="" src="http://www.obec.go.th/embed/documents?wmode=transparent" scrolling="no" width="100%" height="250" frameborder="0">ไม่มี ไอเฟรม (iFrame)</iframe>
  </div>
  <div class="panel-footer">
    <div align="right" >
        <a href="http://www.obec.go.th/list/obec/official" target="_blank"> ดูทั้งหมด >>> </a>
    </div>
  </div>
</div>
</div>

<div class="col-lg-3">


<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa calendar-check-o"></i> ปฏิทินกิจกรรม</h3>
  </div>
  <div class="panel-body">
  <p style="text-align:center; font-size: 14px; margin-top : 15px;">ไม่มีเอกสาราวน์โหลด</p>
  </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Facebook โรงเรียน</h3>
    </div>
    <div class="panel-body ">

           <iframe src="https://www.facebook.com/plugins/page.php?href={{ $info->facebook }}/%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=683618265174173" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" ></iframe>
    </div>
</div>
</div>
</div>
</div>



@endsection
