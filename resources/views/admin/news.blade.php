@extends('layouts.admin')
@section('news') open  @parent @endsection
@section('content')
<div class="row">
<div class="col-md-12">
	<h2 class="page-title">ข่าวประชาสัมพันธ์</h2>
    <a href="#news" class="btn btn-primary btn-sm" data-toggle="modal">เพิ่มข้อมูล</a>

	<!-- Zero Configuration Table -->
	<div class="panel panel-default">
		<div class="panel-heading">ข่าวประชาสัมพันธ์</div>
		<div class="panel-body">
			<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>#</th>
						<th>หัวข้อ</th>
                        <th>วันที่</th>
						<th>ลบ / แก้ไข</th>
					</tr>
				</thead>
				<tbody>
                   @foreach  ($news as $data )
					<tr>
						<td></td>
						<td>{{ $data->toppic}}</td>
                        <th>{{ $data->date}}</th>
						<td> </td>
					</tr>
                   @endforeach
				</tbody>
			</table>
        </div>
    </div>
</div>
</div>

<div class="modal" id="news">
   <form class="form-horizontal" role="form" method="POST" action="{{ URL::to('/admin/news') }}" enctype="multipart/form-data">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title">เพิ่มข่าวประชาสัมพันธ์ </h4>
           </div>
           <div class="modal-body">

                        {{ csrf_field() }}
       <div class="form-group">
       <label class="col-sm-2 control-label">หัวข้อข่าวประชาสัมพันธ์</label>
       <div class="col-sm-10">
           <input type="text" class="form-control" name="toppic"  >
       </div>
       </div>
        <label class="col-sm-2 control-label">รายละเอียด</label>
       <div class="col-sm-10">
                <textarea id="ckeditor" class="form-control ckeditor" rows="10" name="content"></textarea>
                <script type="text/javascript">
                     CKEDITOR.replace( 'ckeditor' );
                </script>
        </div>
        <div class="form-group">
       <label class="col-sm-2 control-label">วันที่ลงข่าว</label>
       <div class="col-sm-3">
           <input type="text" name="date" class="form-control"  value="<?php echo date("d/m/Y ")   ?>" readonly="readonly" >
       </div>
       </div>

           <div class="modal-footer">
               <button type="submit" class="btn btn-primary">บันทึก</button>
           </div>

       </div>
   </div>
       </div>
</form>
</div>

@endsection
