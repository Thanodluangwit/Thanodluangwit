@extends('layouts.admin')

@section('content')
<div class="row">
<div class="col-md-12">



	<!-- Zero Configuration Table -->
    <div class="panel panel-default">
            <div class="panel-heading">เพิ่มลิงค์ภายนอก</div>
            <div class="panel-body">
                <form method="post" class="form-horizontal" action="{{ URL::to('/admin/exlink') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ชื่อ </label>
                        <div class="col-sm-10 col-md-3">
                            <input type="text" class="form-control " name="name" >
                        </div>
                        <label class="col-sm-2 control-label">ลิงค์ </label>
                        <div class="col-sm-10 col-md-3">
                            <input type="text" class="form-control" name="link" >
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
		<div class="panel-heading"> ลิงค์ภายนอก</div>
		<div class="panel-body">
			<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>#</th>
						<th>ชื่อ</th>
						<th>ลิงค์</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach  ($link as $data )
					<tr>
                        <td></td>
						<td>{{ $data->name}}</td>
						<td>{{ $data->link}}</td>
						<td>แก้ไข / ลบ</td>
					</tr>
                    @endforeach

				</tbody>
			</table>
        </div>
    </div>
</div>
</div>



@endsection
