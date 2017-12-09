@extends('layouts.app')

{{-- Web site Title --}}
@section('title') {!! $title !!} {{ $info->scname }}  @parent @endsection

@section('descrip') {{ $info->description }}  @parent @endsection
@section('key') {{ $info->keyword }}  @parent @endsection
@section('content')
<div class="container">
<div class="jumbotron">
<div class="row">
<div class="col-lg-9">
 <ul class="breadcrumb" style="margin-left: 10px;border-right-width: 1px;margin-right: 10px;margin-top: 10px;">
        <li><a href="{{ URL::to('/') }}">หน้าเเรก</a></li>
        <li class="active">ปฏิทินกิจกรรม </li>
  </ul>
    <h2 style="
    margin-left: 10px;
"> ปฏิทินกิจกรรม</h2>
<div style="margin-left: 10px; padding: 15px;">

								<table class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>

											<th>วัน เดือน ปี </th>
                                            <th>กิจกรรม </th>
                                            <th>การแต่งการ / สถานที่</th>
                                            <th>ผู้รับผิดชอบ</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach  ($calen as $dbs)
										<tr>
                                            <td>{{ $dbs->startdate }}  ถึง {{ $dbs->enddate }}</td>
                                            <td>{{ $dbs->inputtitle }} <br> {{ $dbs->message }} </td>
                                            <td>{{ $dbs->location }}</td>
                                            <td>{{ $dbs->eventwho }}</td>
										</tr>
                                       @endforeach  
									</tbody>
								</table>
</div>
</div>
</div>
</div>
</div>


@endsection
