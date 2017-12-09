@extends('layouts.admin')
@section('detail') open  @parent @endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2 class="page-title">ตั้งค่าข้อมูลโรงเรียน</h2>
        <div class="row">
		      <div class="col-md-12">
			     <div class="panel panel-default">
				        <div class="panel-heading">ตั้งค่าข้อมูลโรงเรียน</div>
				        <div class="panel-body">
					       <form method="post" class="form-horizontal" action="{{ URL::to('/admin/school.info') }}">
                               {{ csrf_field() }}
						      <div class="form-group">
							     <label class="col-sm-2 control-label">ชื่อโรงเรียน (ไทย)</label>
							     <div class="col-sm-10">
								        <input type="text" name="school_th" class="form-control" value="{{ $info->scname }}" required>
							     </div>
						      </div>
                                <div class="form-group">
							     <label class="col-sm-2 control-label">ชื่อโรงเรียน (อังกฤษ)</label>
							     <div class="col-sm-10">
								        <input type="text" name="school_en" class="form-control" value="{{ $data->school_en }}" required>
							     </div>
						      </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">สังกัด</label>
				        <div class="col-sm-10">
				        <input type="text" name="school_cate" class="form-control" value="{{ $data->school_cate }}" required>
                        </div>
                        </div>
                            <div class="form-group">
				                <label class="col-sm-2 control-label">ระดับที่เปิดสอน</label>
				                <div class="col-sm-10">
								<input type="text" name="course" class="form-control" value="{{ $data->course }}" required>
								</div>
				            </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ประเภท รัฐ/เอกชน</label>
												<div class="col-sm-10">
													<select name="schooltype" class="form-control">
                                                         <option <?php if($data->schooltype==1){ echo 'selected="selected"'; }?>  value="1">รัฐบาล</option>
                                                        <option <?php if($data->schooltype==2){ echo 'selected="selected"'; }?>  value="2">เอกชน</option>

                                                    </select>
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">วัน-เดือน-ปี ก่อตั้ง</label>
												<div class="col-sm-10">
													<input type="text" name="bday" class="form-control" value="{{ $data->bday }}" required>
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ผู้ก่อตั้ง (เฉพาะ ร.ร.เอกชน)</label>
												<div class="col-sm-10">
													<input type="text" name="founder_name" class="form-control" value="{{ $data->founder_name }}">
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ผู้รับใบอนุญาต (เฉพาะ ร.ร.เอกชน)	</label>
												<div class="col-sm-10">
													<input type="text" name="llicensee_name" class="form-control" value="{{ $data->llicensee_name }}">
												</div>
											</div>
                                             <div class="form-group">
												<label class="col-sm-2 control-label">ที่อยู่		</label>
												<div class="col-sm-10">
													<textarea type="text" name="address" class="form-control" required>{{ $data->address }}</textarea>
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ตำบล	</label>
												<div class="col-sm-10">
													<input type="text" name="tumbol" class="form-control" value="{{ $data->tumbol }}" required>
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">อำเภอ	</label>
												<div class="col-sm-10">
													<input type="text" name="amphur" class="form-control" value="{{ $data->amphur }}" required>
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">จังหวัด	</label>
												<div class="col-sm-10">
													<input type="text" name="province" class="form-control" value="{{ $data->province }}" required>
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">รหัสไปรษณีย์	</label>
												<div class="col-sm-10">
													<input type="text" name="zipcode" class="form-control" value="{{ $data->zipcode }}" required>
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">โทรศัพท์</label>
												<div class="col-sm-10">
													<input type="text" name="phone" class="form-control" value="{{ $data->phone }}" required>
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">โทรสาร</label>
												<div class="col-sm-10">
													<input type="text" name="fax" class="form-control" value="{{ $data->fax }}" required>
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ชื่อผู้บริหาร	</label>
												<div class="col-sm-10">
													<input type="text" name="manager" class="form-control" value="{{ $data->manager }}" required>
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">เบอร์ติดต่อ</label>
												<div class="col-sm-10">
													<input type="text" name="phone_dir" class="form-control" value="{{ $data->phone_dir }}" required>
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">Email	</label>
												<div class="col-sm-10">
													<input type="text" name="email" class="form-control" value="{{ $data->email }}" required>
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ที่URL เว็บไซต์</label>
												<div class="col-sm-10">
													<p class="form-control-static"><a href="{{ URL::to('/') }}" target="_blank" >{{ URL::to('/') }}</a> </p>
												</div>
											 </div>
											<div class="hr-dashed"></div>
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

</div>


@endsection
