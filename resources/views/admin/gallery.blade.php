@extends('layouts.admin')

@section('content')
<div class="row">
<div class="col-md-12">
	<!-- Zero Configuration Table -->
    <div class="panel panel-default">
            <div class="panel-heading">เพิ่มภาพกิจกรรม</div>
            <div class="panel-body">
                <form method="post" class="form-horizontal" action="{{ URL::to('/admin/gallery') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
										<div class="form-group">
                        <label class="col-sm-2 control-label">อัลบั้มไอดี </label>
                        <div class="col-sm-3 ">
                            <input type="text" class="form-control" name="galleryid"  value=" gallery-<?php echo  rand(1,99999); ?>"  readonly="readonly">
                        </div>
                            <label  class="col-lg-2 control-label">วันที่/เวลา</label>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" name="date" value="<?php echo date("d/m/Y :  H:i:s", time())   ?>" readonly="readonly">
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">กิจกรรม </label>
                        <div class="col-sm-10 col-md-3">
                            <input type="text" class="form-control " name="activaty" >
                        </div>
                        <label class="col-sm-2 control-label">รายละเอียด </label>
                        <div class="col-sm-10 col-md-3">
														<textarea class="form-control" name="description"> </textarea>
                        </div>
                    </div>
										<div class="form-group">
                        <label class="col-sm-2 control-label">ภาพหลัก </label>
                        <div class="col-sm-3 ">
                            <input type="file" class="form-control" name="img" >
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


	<div class="panel panel-default">
		<div class="panel-heading"> ภาพกิจกรรม</div>
		<div class="panel-body">
			<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>อัลบั้มไอดี</th>
						<th>กิจกรรม</th>
						<th>วันที่โพสต์</th>
						<th>เพิ่มรูปกิจกรรม</th>
						<th>ลบ</th>
					</tr>
				</thead>
				<tbody>
					@foreach  ($gallery as $data )
					<tr>
						<td>{{ $data->galleryid }}</td>
            <td>{{ $data->activaty}}</td>
						<td>{{ $data->date}}</td>
						<td><input type="button" value="เพิ่มรูปถ่าย" class="btn btn-primary btn-sm"onclick="window.open('#','popUpWindow','height=850,width=700,left=100,top=0,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');"></td>
						<td> ลบ</td>
					</tr>
                    @endforeach

				</tbody>
			</table>
        </div>
    </div>
</div>
</div>



@endsection
