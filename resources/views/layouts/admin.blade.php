<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>ระบบจัดการเว็บไซต์โรงเรียน</title>

    <link href="{{ asset('public/admin/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/bootstrap-social.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/bootstrap-select.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/fileinput.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet">


    <script src="{{ asset('public/admin/js/jquery.min.js') }}"></script>
	<script src="{{ asset('public/admin/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('public/admin/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/admin/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('public/admin/js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/admin/js/Chart.min.js') }}"></script>
	<script src="{{ asset('public/admin/js/fileinput.js') }}"></script>
	<script src="{{ asset('public/admin/js/chartData.js') }}"></script>
	<script src="{{ asset('public/admin/js/main.js') }}"></script>
    <script src="{{ asset('public/js/jscolor.js') }}"></script>
    <script src="{{ asset('admin/public/ckeditor/ckeditor.js') }}"></script>

	<style>
        .textme{
            font-size: 16px;
            color: #ffffff;
        }
    </style>
    

</head>

<body>
	<div class="brand clearfix">
		<div class="logo textme">ระบบจัดการเว็บไซต์</div>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li><a href="#donate" data-toggle="modal" class="btn btn-danger "><i class="fa fa-cc-paypal" aria-hidden="true"></i> สนับสนุนโปรแกรม</a></li>
            <li><a href="{{ url('/') }}" target="_blank">ชมเว็บไซต์</a></li>
			<li class="ts-account">
				<a href="#"><img src="{{ asset('public/admin/img/ts-avatar.jpg') }}" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="{{ url('/change-password') }}">เปลี่ยนรหัส่าน</a></li>
					<li><a href="{{ route('logout') }}"                                            onclick="event.preventDefault();                                                     document.getElementById('logout-form').submit();">                            Logout </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                    </li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="ts-label">Main</li>
				<li class="@section('detail')  @show"><a href="{{ url('/admin/school.info') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="@section('intro')  @show"><a href="{{ url('/admin/intro') }}"><i class="fa fa-table"></i> Intro เว็บไซต์</a></li>
                <li class="@section('news')  @show"><a href="{{ url('/admin/news') }}"><i class="fa fa-table"></i> ข่าวประชาสัมพันธ์</a></li>

                <li  class="@section('show')  @show"><a href="#"><i class="fa fa-desktop"></i>เมนูหลัก</a>
                    <ul>
				    <li class="@section('history')  @show"><a href="{{ url('/admin/history') }}"><i class="fa fa-table"></i> ประวัติโรงเรียน</a></li>
                    <li class="@section('symbol')  @show"><a href="{{ url('/admin/symbol') }}"><i class="fa fa-star" aria-hidden="true"></i> สัญลักษณ์โรงเรียน</a></li>
                    <li class="@section('vision')  @show"><a href="{{ url('/admin/vision') }}"><i class="fa fa-cog" aria-hidden="true"></i> วิสัยทัศน์ / ปรัชญา</a></li>
                    <li class="@section('mission')  @show"><a href="{{ url('/admin/mission') }}"><i class="fa fa-flag" aria-hidden="true"></i> พันธกิจ / เป้าหมาย</a></li>
                    <li class="@section('course')  @show"><a href="{{ url('/admin/course') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> หลักสูตรที่เปิดสอน</a></li>
                    <li class="@section('calendra')  @show"><a href="{{ url('/admin/calendar') }}"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> ปฏิทินกิจกรรม</a></li>
                    <li class="@section('building')  @show"><a href="{{ url('/admin/building') }}"><i class="fa fa-building" aria-hidden="true"></i> ข้อมูลอาคารสถานที่</a></li>
                    <li class="@section('execu')  @show"><a href="{{ url('/admin/executives') }}"><i class="fa fa-table"></i> ทำเนียบผู้บริหาร</a></li>
                    <li class="@section('manage')  @show"><a href="{{ url('/admin/') }}"><i class="fa fa-user" aria-hidden="true"></i> คณะกรรมการสถานศึกษา</a></li>
                    <li class="@section('manahestu')  @show"><a href="{{ url('/admin/') }}"><i class="fa fa-child" aria-hidden="true"></i> คณะกรรมการนักเรียน</a></li>
                    <li class="@section('student')  @show"><a href="{{ url('/admin/') }}"><i class="fa fa-info" aria-hidden="true"></i> ข้อมูลนักเรียน</a></li>
					</ul>
				</li>

				<li  class="@section('preson')  @show"><a href="#"><i class="fa fa-desktop"></i>ฝ่ายบริหารเเละบุคลากร</a>
                    <ul>
				    <li class="@section('direct')  @show"><a href="{{ url('/admin/directors') }}"><i class="fa fa-table"></i> คณะผู้บริหาร</a></li>
                    
				</ul>
				</li>

				<li><a href="{{ url('/admin/gallery') }}"><i class="fa fa-table"></i> ภาพกิจกรรม</a></li>
                <li><a href="{{ url('/admin/exlink') }}"><i class="fa fa-table"></i> ลิงค์ภายนอก</a></li>
                <li><a href="{{ url('/admin/') }}"><i class="fa fa-table"></i> ลิงค์น่าสนใจ</a></li>
                
				<li class="@section('setting')  @show"><a href="{{ url('/admin/setting') }}"><i class="fa fa-table"></i> ตั้งค่าเว็บไซต์</a></li>
				<!-- Account from above -->
				<ul class="ts-profile-nav">
					<li><a href="#">Help</a></li>
					<li><a href="#">Settings</a></li>
					<li class="ts-account">
						<a href="#"><img src="{{ asset('public/admin/img/ts-avatar.jpg') }}" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
						<ul>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Edit Account</a></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>

			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">
				@yield('content')
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
<!-- Login -->
                <div class="modal" id="donate">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><i class="fa fa-cc-paypal" aria-hidden="true"></i> สนับสนุนโปรแกรม </h4>
                            </div>
                            <div class="modal-body">
                            <h2> สบับสนุนโปรแกรมได้ที่ </h2>
                            <h3>เลขที่บัญชี : 025-1-50809-7 ธนาคาร กสิกรไทย</h3> 
                            <h3>ชื่อบัญชี : นาย พชร มีฤทธิ์</h3>  
                            <h3>พร้อมเพย์ : 062-7195015</h3>    
                        </div>
                            
                    </div>
                        </div>
                 </form>
                </div>

                <!-- End Login  -->

</body>

</html>
