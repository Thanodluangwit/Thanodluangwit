@extends('layouts.admin')
@section('preson') open  @parent @endsection
@section('direct') open  @parent @endsection
@section('content')
<div class="row">
    <div class="col-md-12"> 
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">คณะผู้บริหาร</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="{{ URL::to('/admin/directors') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                 <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">ชื่อ - สกุล</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="name" >
                                    </div>
                                
                                    <label for="inputEmail" class="col-lg-1 control-label">ตำแหน่ง</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="position" >
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">วุฒิการศึกษา</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="education" >
                                    </div>
                                
                                    <label for="inputEmail" class="col-lg-1 control-label">วิชาเอก</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="major" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">เบอร์โทร</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="phone" >
                                    </div>
                                
                                    <label for="inputEmail" class="col-lg-1 control-label">อีเมลล์</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="email" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">รูป</label>
                                    <div class="col-lg-4">
                                        <input type="file" class="form-control" name="img" >
                                    </div>
                                    
                                <div class="form-group">
                               <div class="checkbox col-lg-1 control-label">
				                        <input id="checkbox9" type="checkbox" value="1" name="status">
				                        <label for="checkbox9">ผู้บริหารสถานศึกษา	</label>
                                </div>
                                </div>
                                </div>    
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">คณะผู้บริหาร</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>ชื่อ</th>
											<th>ตำแหน่าง</th>
                                            <th> รูป</th>
											<th>แก้ไข / ลบ</th>
										</tr>
									</thead>
									<tbody>
                                       @foreach  ($directors as $dbs)
										<tr>
                                            <td>{{ $dbs->name }}</td>
                                            <td>{{ $dbs->position }}</td>
                                            <td><center><img src="{{ asset('public/directors') }}/{{ $dbs->img}}" width="150px" height="200px" ></center> </td>
                                            <td><center><a href="" class="btn btn-info  btn-lg">แก้ไขข้อมูล</a> <p><p> <a href="#" class="btn btn-info  btn-lg">ลบข้อมูล</a></center></td>
										</tr>
                                       @endforeach  
									</tbody>
								</table>
							</div>
						</div>
        
    </div>

</div>

@endsection