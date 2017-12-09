@extends('layouts.admin')
@section('intro') open  @parent @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Intro เข้าเว็บไซต์</div>		
            <div class="panel-body">
                <form method="post" class="form-horizontal" action="{{ URL::to('/admin/intro') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ปรับแต่งหน้า Intro</label>
                        <div class="col-sm-10">
                            <textarea id="ckeditor" class="form-control ckeditor" rows="10" name="content">{{ $intro->intro }}</textarea>
                            <script type="text/javascript">
                                        CKEDITOR.replace( 'ckeditor' );
                            </script>
                        </div>
                    </div>
                    <div class="form-group">
                         <label class="col-sm-2 control-label">สีพื้นหลัง </label>
                        <div class="col-sm-10 col-md-3">
                            <input type="text" class="form-control jscolor" name="bgcolor" value="{{ $intro->colorbg }}" >
                        </div>
                        <label class="col-sm-2 control-label">ปุ่มกด </label>
                        <div class="col-sm-3 ">
                            <input type="file" class="form-control" name="button" >
                            <span class="help-block m-b-none">{{ $intro->button }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">การใช้งาน Intro</label>
						<div class="col-sm-3">
							<select class="form-control" name="status">
                               @if ($intro->status==0)
								<option value="0" selected>ปิดการใช้งาน</option>
								<option value="1">เปิดการใช้งาน</option>
                               @else if ($intro->status==1)
                                <option value="0" >ปิดการใช้งาน</option>
								<option value="1" selected>เปิดการใช้งาน</option>
                                @endif
							</select>
						</div>
                        <label class="col-sm-2 control-label">โหมดปรับปรุง</label>
						<div class="col-sm-3">
							<select class="form-control" name="manage">
                               @if ($intro->manage==0)
								<option value="0" selected>ปิดการใช้งาน</option>
								<option value="1">เปิดการใช้งาน</option>
                               @else if ($intro->manage==1)
                                <option value="0" >ปิดการใช้งาน</option>
								<option value="1" selected>เปิดการใช้งาน</option>
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
