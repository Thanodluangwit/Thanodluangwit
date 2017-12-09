@extends('layouts.admin')
@section('active') open  @parent @endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">ตั้งค่าเว้บไซต์</div>
            <div class="panel-body">
                <form method="post" class="form-horizontal" action="{{ URL::to('/admin/setting') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ชื่อเว็บไซต์</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="scname" value="{{ $info->scname }}" >
                        </div>
                    </div>
                   	<div class="form-group">
                        <label class="col-sm-2 control-label">คำอธิบายเว็บไซต์</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3"  name="description" >{{ $info->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">คีย์เวิร์ด</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3"  name="keyword" >{{ $info->keyword }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ข้อความวิ่ง</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="marqu" value="{{ $info->marqu }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Facebook</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="facebook" value="{{ $info->facebook }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">สีพื้นหลัง </label>
                        <div class="col-sm-10 col-md-3">
                            <input type="text" class="form-control jscolor" name="bgcolor" value="{{ $info->bgcolor }}" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">ข้อความล่างเว็บไซต์</label>
                        <div class="col-sm-10">
                            <textarea class="form-control ckeditor" rows="3"  name="footer" >{{ $info->footer }}</textarea>
                        </div>
                    </div>

                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">บันทึกข้อมูล</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">ภาพพื้นหลัง</div>
            <div class="panel-body">
                <form method="post" class="form-horizontal" action="{{ URL::to('/admin/imgbg') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-sm-3 control-label">ภาพพื้นหลัง </label>
                        <div class="col-sm-9 ">
                            <input type="file" class="form-control" name="imgbg" >
                            <span class="help-block m-b-none">{{ $info->imgbg }}</span>
                        </div>
                    </div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">บันทึกข้อมูล</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">โลโก้โรงเรียน</div>
            <div class="panel-body">
                <form method="post" class="form-horizontal" action="{{ URL::to('/admin/imglogo') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-sm-3 control-label">โลโก้โรงเรียน </label>
                        <div class="col-sm-9 ">
                            <input type="file" class="form-control" name="imglogo"  >
                            <span class="help-block m-b-none">{{ $info->imglogo }}</span>
                        </div>
                    </div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">บันทึกข้อมูล</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">ภาพ Headder</div>
            <div class="panel-body">
                <form method="post" class="form-horizontal" action="{{ URL::to('/admin/imghead') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-sm-3 control-label">ภาพ Headder </label>
                        <div class="col-sm-9 ">
                            <input type="file" class="form-control" name="imghead" >
                            <span class="help-block m-b-none">{{ $info->imghead }}</span>
                        </div>
                    </div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">บันทึกข้อมูล</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">ภาพ Headder</div>
            <div class="panel-body">
                <form method="post" class="form-horizontal" action="{{ URL::to('/admin/gray') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-sm-3 control-label">ภาพ Headder </label>
                        <div class="col-sm-9 ">
                            <select class="form-control" name="gray">
                               @if ($info->gray==1)
								<option value="1" selected>ปิดการใช้งาน</option>
								<option value="0">เปิดการใช้งาน</option>
                               @else if ($info->gray==0)
                                <option value="1" >ปิดการใช้งาน</option>
								<option value="0" selected>เปิดการใช้งาน</option>
                                @endif
							</select>
                        </div>
                    </div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">บันทึกข้อมูล</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

</div>


@endsection
