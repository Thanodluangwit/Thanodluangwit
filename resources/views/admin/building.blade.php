@extends('layouts.admin')
@section('show') open  @parent @endsection
@section('building') open  @parent @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">ข้อมูลอาคารสถานที่</div>
            <div class="panel-body">
                <form method="post" class="form-horizontal" action="{{ URL::to('/admin/building') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ชื่ออาคาร/สถานที่</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="building"  >
                        </div>
                        <label class="col-sm-1 control-label">ปีที่สร้าง</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="buildyear"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">งบประมาณ</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="price"  >
                        </div>
                         <label class="col-sm-1 control-label">ภาพ</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" name="img"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ข้อมูลเพิ่มเติม</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="4" name="detail"></textarea>
                            
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
		<div class="panel-heading"></div>
		<div class="panel-body">
			<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>#</th>
						<th>อาคาร</th>
                        <th>ปีที่สร้าง</th>
                        <th>งบประมาณ</th>
						<th>แก้ไข / ลบ</th>
					</tr>
				</thead>
				<tbody>
                    @foreach  ($building as $data )
                  <tr>
                        <td></td>
						<td>{{ $data->building }}</td>
						<td>{{ $data->buildyear }}</td>
                        <th>{{ $data->price }}</th>
                        <td>
                       <a href="#" class="btn btn-warning">แก้ไข</a>
                       <a href="#" class="btn btn-danger">ลบ</a>
                      </td>
					</tr>
                   @endforeach 
				</tbody>
			</table>
        </div>
    </div>    
    </div>

</div>


@endsection
