@extends('layouts.admin')
@section('show') open  @parent @endsection
@section('execu') open  @parent @endsection
@section('content')
<div class="row">
<div class="col-md-12">
	<h2 class="page-title">คณะผู้บริหาร</h2>
    <a href="#executives" class="btn btn-primary btn-sm" data-toggle="modal">เพิ่มข้อมูล</a>

	<!-- Zero Configuration Table -->
	<div class="panel panel-default">
		<div class="panel-heading">คณะผู้บริหาร</div>
		<div class="panel-body">
			<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>ชื่อ</th>
						<th>ตำแหน่ง</th>
						<th>ดำรงตำแหน่ง</th>
					</tr>
				</thead>
				<tbody>
                    @foreach  ($execu as $data )
					<tr>
						<td>{{ $data->name}}</td>
						<td>{{ $data->position}}</td>
						<td>{{ $data->education}}</td>
					</tr>
                    @endforeach
				</tbody>
			</table>
        </div>
    </div>
</div>
</div>  

<div class="modal" id="executives">
   <form class="form-horizontal" role="form" method="POST" action="{{ URL::to('/admin/executives') }}" enctype="multipart/form-data">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title">เพิ่มคณะผู้บริการ </h4>
           </div>
           <div class="modal-body">
                                
                        {{ csrf_field() }}
       <div class="form-group">			
       <label class="col-sm-3 control-label">ชื่อ-สกุล</label>					
       <div class="col-sm-9">						
           <input type="text" class="form-control" name="name"  >	
       </div>
       </div>
       <div class="form-group">			
       <label class="col-sm-3 control-label">ตำแหน่ง</label>					
       <div class="col-sm-9">						
           <input type="text" class="form-control" name="position"  >	
       </div>
       </div>
       <div class="form-group">			
       <label class="col-sm-3 control-label">ดำรงตำแหน่ง</label>					
       <div class="col-sm-9">						
           <input type="text" class="form-control" name="education" >	
       </div>
       </div>
      
       <div class="form-group">			
            <label class="col-sm-3 control-label">รูปภาพ  </label>					
                <div class="col-sm-9 ">						
                    <input type="file" class="form-control" name="imgdir" >
                    
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