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
        <li class="active">สัญลักษณ์โรงเรียน</li>
  </ul>
    <h2 style="
    margin-left: 10px;
"> สัญลักษณ์โรงเรียน </h2>
<div style="margin-left: 10px; padding: 15px;">
    <?php
       echo "$symbol->symbol";
       ?>
    </div>

</div>
</div>
</div>
</div>



@endsection
