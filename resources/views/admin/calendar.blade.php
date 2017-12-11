@extends('layouts.admin')
@section('show') open  @parent @endsection
@section('calendar') open  @parent @endsection
@section('content')
<div class="row">
    <div class="col-md-12"> 
        <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">ปฏิทินกิจกรรม</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="{{ URL::to('/admin/calendar') }}">
                                {{ csrf_field() }}
                                 <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">หัวข้อ</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="inputtitle" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textArea" class="col-lg-2 control-label">กิจกรรม</label>
                                    <div class="col-lg-10">
                                       
                                        <textarea class="col-lg-12" rows="8" name="message" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">เริ่มวันที่</label>
                                    <div class="col-lg-3">
                                        <input type="date" class="form-control" name="startdate" required>
                                    </div>
                                     <label for="inputEmail" class="col-lg-2 control-label">เริ่มเวลา</label>
                                    <div class="col-lg-3">
                                        <input type="time" class="form-control" name="starttime">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">สิ้นสุดวันที่</label>
                                    <div class="col-lg-3">
                                        <input type="date" class="form-control" name="enddate" >
                                    </div>
                                    <label for="inputEmail" class="col-lg-2 control-label">สิ้นสุดเวลา</label>
                                    <div class="col-lg-3">
                                        <input type="time" class="form-control" name="enstime">
                                    </div>
                                </div>
                                 
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">สถานที่ / การเเต่งกาย</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="location" required>
                                    </div>
                                 </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">หน่วยงานเจ้าของเรื่อง</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="eventwho" required>
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
							<div class="panel-heading">ปฏิทินกิจกรรม</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>หัวข้อ</th>
											<th>เริ่มวันที่ / เวลา</th>
                                            <th>สิ้นสุดวันที่ / เวลา </th>
                                            <th>การแต่งการ / สถานที่</th>
                                            <th>ผู้รับผิดชอบ</th>
											<th>แก้ไข / ลบ</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach  ($calen as $dbs)
										<tr>
                                            <td>{{ $dbs->inputtitle }}</td>
                                            <td>{{ $dbs->startdate }} / {{ $dbs->starttime }}</td>
                                            <td>{{ $dbs->enddate }} / {{ $dbs->enstime }}</td>
                                            <td>{{ $dbs->location }}</td>
                                            <td>{{ $dbs->eventwho }}</td>
                                            <td><a href="" class="btn btn-info">แก้ไข</a>  / <a href="#" class="btn btn-info">ลบ</a></td>
										</tr>
                                       @endforeach  
									</tbody>
								</table>
							</div>
						</div>
        
    </div>

</div>


@endsection
