<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="UcNOMK6E6mWdwJX5IV_nwEhx7AsRn575KMCjcLIgdRw" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109834300-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109834300-1');
</script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@section('title')  @show</title>
    <meta name="description" content="@section('descrip')  @show">
    <meta name="keywords" content="@section('key')  @show">
	 @if ($intro->manage==1)
    <script langquage='javascript'>
        window.location="{{ URL::to('/') }}";
    </script>
    @endif
    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/1/js-image-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('public/fullcalendar/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('public/fullcalendar/fullcalendar.print.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/jquery.bxslider.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    <!-- JS -->
    <script src="{{ asset('public/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('public/1/js-image-slider.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('public/admin/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/main.js') }}"></script>
   <style>
body {
    font-family: 'Trirong', serif;
    background-color: #{{ $info->bgcolor }} ;
	background-image: url("{{ url('/public/setting') }}/{{ $info->imgbg }}");
    background-repeat:repeat;
    background-attachment:fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;;
}
.footer {
  min-height: 20px;
  padding: 0px;
  background-color: #15a1f8;
  border: 1px solid #e8e8e8;
  border-radius: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.panel-primary {
  border-color: #005B7A;
}
.displayed {
    display: block;
    margin-left: auto;
    margin-right: auto ;
.panel-primary > .panel-heading {
  color: #ffffff;
  background-color: #005B7A;
  border-color: #005B7A;
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #005B7A;
}
.panel-primary > .panel-heading .badge {
  color: #005B7A;
  background-color: #ffffff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #005B7A;
}

.block-panel {
  margin-bottom: 0px;
  padding-left: 5px;
  padding-right: 5px;
  background-color: #ffffff;
  border: 1px solid transparent;
  border-radius: 0;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}

</style>
  @if ($info->gray==0) 
<style>
		img {
		-webkit-filter: grayscale(100%); 
        filter: grayscale(100%);
		}
		html {
		-webkit-filter: grayscale(100%);
		}
       body {
		-webkit-filter: grayscale(100%);
		}
	</style>
@endif
<script>
    // Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
    </script>
</head>
<body>
    <div id="app">
        <div class="container">
             <div class="well well-sm">
                <marquee> {{ $info->marqu }}</marquee>
            </div>
                <img class="img-responsive" src="{{ url('/public/setting') }}/{{ $info->imghead }}" width="100%">
       <!-- เมนูด้านบน -->
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> หน้าแรก</a></li>
                <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> ข่าวประชาสัมพันธ์</a></li>
                <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> คณะผู้บริหาร</a></li>
                <li><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> ภาพกิจกรรม</a></li>
                <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i> สมุดเยี่ยมชม</a></li>
                <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> ติดต่อโรงเรียน</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Administrator <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
              @if (Route::has('login'))

                    @if (Auth::check())
                        <li><a href="{{ url('/admin/school.info') }}">เข้าระบบจัดการเว็บไซต์</a></li>
                        <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                    @else
                        <li><a href="#Login" data-toggle="modal">Login</a></li>
                    @endif

              @endif
              </ul>
            </li>

          </ul>
            </div>
        </div>
    </nav>

<div class="jumbotron">
<div class="row">
<div class="col-lg-3">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-home"></i> ผู้บริหารสถานศึกษา</h3>
  </div>
  <div class="panel-body">
      <div class="dirctor">
      @if ($direct == 0  &&  $director != 1)
      <img src="{{ asset('public/img') }}/nopic_person.png" width="150px" height="200px" >
          <h5>รอเจ้าหน้าที่บันทึกข้อมูล</h5>

      @else
        <img src="{{ asset('public/directors') }}/{{ $director->img}}" width="150px" height="200px" >
          <h5> {{ $director->name}}</h5>
          <h5> {{ $director->position}}</h5>
      @endif    
      </div>
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-home"></i> เมนูหลัก</h3>
  </div>
  <div class="panel-body">
    <div class="list-group table-of-contents">
        <a class="list-group-item" href="{{ url('/history.html') }}"><i class="fa fa-id-card"></i> ประวัติโรงเรียน</a>
        <a class="list-group-item" href="{{ url('/data054.html') }}"><i class="fa fa-star" aria-hidden="true"></i> สัญลักษณ์โรงเรียน</a>
        <a class="list-group-item" href="{{ url('/data055.html') }}"><i class="fa fa-cog" aria-hidden="true"></i> วิสัยทัศน์ / ปรัชญา</a>
        <a class="list-group-item" href="{{ url('/data056.html') }}"><i class="fa fa-flag" aria-hidden="true"></i> พันธกิจ / เป้าหมาย</a>
        <a class="list-group-item" href="{{ url('/data057.html') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> หลักสูตรที่เปิดสอน</a>
        <a class="list-group-item" href="{{ url('/data058.html') }}"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> ปฏิทินกิจกรรม</a>
        <a class="list-group-item" href="{{ url('/data059.html') }}"><i class="fa fa-building" aria-hidden="true"></i> ข้อมูลอาคารสถานที่</a>
        <a class="list-group-item" href="{{ url('/data056.html') }}"><i class="fa fa-users" aria-hidden="true"></i> ทำเนียบผู้บริหาร</a>
        <a class="list-group-item" href="{{ url('/data056.html') }}"><i class="fa fa-user" aria-hidden="true"></i> คณะกรรมการสถานศึกษา</a>
        <a class="list-group-item" href="{{ url('/data056.html') }}"><i class="fa fa-child" aria-hidden="true"></i> คณะกรรมการนักเรียน</a>
        <a class="list-group-item" href="{{ url('/data056.html') }}"><i class="fa fa-info" aria-hidden="true"></i> ข้อมูลนักเรียน</a>
    </div>
  </div>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-users"></i> ฝ่ายบริหารและบุคลากร</h3>
  </div>
  <div class="panel-body">
    <div class="list-group table-of-contents">
    <a href="#" class="list-group-item">คณะบริหาร</a>
    <a href="#" class="list-group-item">สาระฯ ภาษาไทย</a>
    <a href="#" class="list-group-item">สาระฯ คณิตศาสตร์</a>
    <a href="#" class="list-group-item">สาระฯ วิทยาศาสตร์</a>
    <a href="#" class="list-group-item">สาระฯ สังคมศึกษาฯ</a>
    <a href="#" class="list-group-item">สาระฯ สุขศึกษาฯ</a>
    <a href="#" class="list-group-item">สาระฯ การงานอาชีกฯ</a>
    <a href="#" class="list-group-item">สาระฯ ภาษาต่างประเทศ</a>
    </div>
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-users"></i> ลิงค์ภายนอก</h3>
  </div>
  <div class="panel-body">
    <div class="list-group table-of-contents">
      @foreach  ($link as $data )
    <a href="{{ $data->link}}" class="list-group-item" target="_blank">{{ $data->name}}</a>
    @endforeach

    </div>
  </div>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-users"></i>  ลิ้งค์น่าสนใจ</h3>
  </div>
  <div class="panel-body">
    <div class="list-group table-of-contents center">
        <a href="http://www.moe.go.th/" target="_blank" ><img src="{{ asset('public/img/04-moe.gif') }}" > </a>
        <a href="http://www.moe.go.th/" target="_blank" ><img src="{{ asset('public/img/04-moe.gif') }}" > </a>
        <a href="http://www.moe.go.th/" target="_blank" ><img src="{{ asset('public/img/04-moe.gif') }}" > </a>
        <a href="http://www.moe.go.th/" target="_blank" ><img src="{{ asset('public/img/04-moe.gif') }}" > </a>
        <a href="http://www.moe.go.th/" target="_blank" ><img src="{{ asset('public/img/04-moe.gif') }}" > </a>
        <a href="http://www.moe.go.th/" target="_blank" ><img src="{{ asset('public/img/04-moe.gif') }}" > </a>
        <a href="http://www.moe.go.th/" target="_blank" ><img src="{{ asset('public/img/04-moe.gif') }}" > </a>
    </div>
  </div>
</div>
</div>
        @yield('content')

<div class="footer footer-lg">
    <?php
       echo "$info->footer";
       ?>
</div>
</div>
    </div>
</div>
 </div>


    <!-- Login -->
                <div class="modal" id="Login">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">เข้าสู่ระบบ </h4>
                            </div>
                            <div class="modal-body">

                        {{ csrf_field() }}
                        <div class="form-group">

                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                                            </div>
                        </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>

                        </div>
                    </div>
                        </div>
                 </form>
                </div>

                <!-- End Login  -->
                <a id="myBtn" title="Back to top" href="#"><i class="fa fa-chevron-circle-up fa-3x" aria-hidden="true"></i></a>
<script>
/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#myBtn').fadeIn();
    } else {
        $('#myBtn').fadeOut();
    }
});
$(document).ready(function() {
    $("#myBtn").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
</script>                
</body>
</html>
