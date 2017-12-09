@extends('layouts.admin')
@section('show') open  @parent @endsection
@section('history') open  @parent @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">		
            <div class="panel-heading">ประวัติโรงเรียน</div>		
            <div class="panel-body">			
                <form method="post" class="form-horizontal" action="{{ URL::to('/admin/history') }}" enctype="multipart/form-data">		
                    {{ csrf_field() }}
                    <div class="form-group">			
                        <label class="col-sm-2 control-label"></label>					
                        <div class="col-sm-12">
                            <textarea id="ckeditor" class="form-control ckeditor" rows="10" name="history">{{ $histo->history }}</textarea>  
                            <script type="text/javascript">  
                                        CKEDITOR.replace( 'ckeditor' );  
                            </script>  
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
    </div>
    
</div>


@endsection
