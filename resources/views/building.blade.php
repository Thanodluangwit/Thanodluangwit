@extends('layouts.app')

{{-- Web site Title --}}
@section('title') {!! $title !!} {{ $info->scname }}  @parent @endsection

@section('descrip') {{ $info->description }}  @parent @endsection
@section('key') {{ $info->keyword }}  @parent @endsection
@section('content')
<div class="container">
<div class="jumbotron">
<div class="row">
<div class="col-lg-9">
 <ul class="breadcrumb" style="margin-left: 10px;border-right-width: 1px;margin-right: 10px;margin-top: 10px;">
        <li><a href="{{ URL::to('/') }}">หน้าเเรก</a></li>
        <li class="active">ข้อมูลอาคารสถานที่ </li>
  </ul>
    <h2 style="
    margin-left: 10px;
">ข้อมูลอาคารสถานที่</h2>
<div style="margin-left: 10px; padding: 15px;">
    @foreach  ($building as $data )
    <div class="panel panel-default">
        <div class="panel-body">
			<div class="col-sm-6">
              <img class="img-responsive" src="{{ url('/public/building') }}/{{ $data->img }}" width="300px" height="100px" >
            </div>
            <div class="col-sm-6">
                <h4>อาคาร/สถานที่ : {{ $data->buildings }}</h4>
                <h4>ปี พ.ศ. สร้าง โรงเรียน : {{ $data->buildyears }}</h4>
                <h4>งบประมาณโรงเรียน : {{ $data->prices }}</h4>
                
            </div>    
        </div>
    <div class="panel-footer">
        <a href="#" > เพิ่มเติม </a>   
    </div>
    </div>
    @endforeach


</div>
</div>
</div>
</div>
</div>


@endsection
