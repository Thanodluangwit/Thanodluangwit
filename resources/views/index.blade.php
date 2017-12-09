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

    <title>{{ $info->scname }}  | {{ $info->school_en  }} </title>
    <meta name="description" content="{{ $info->description }}">
    <meta name="keywords" content="{{ $info->keyword }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    @if ($intro->status==0 && $intro->manage==0)
    <script langquage='javascript'>
        window.location="{{ URL::to('/home') }}";
    </script>
    @endif
    <style>
       html, body  {
          background-color: #{{ $intro->colorbg }} ;
          font-family: 'Kanit', sans-serif;
          font-weight: 100;
          height: 100vh;
          margin: 0;
          background-repeat:repeat;
          background-attachment:fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;;
          }
    .center{
    text-align: center;       
       }    
    .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                color: #ffffff;
            }
			 .subtitle {
                font-size: 64px;
                 color: #ffffff;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
    </style>
</head>
<body>
@if ($intro->manage==0)    
   <?php
       echo "$intro->intro";
       ?>
    <div class="center" >
        <a href="{{ URL::to('/home') }}" ><img src="{{ url('/public/setting') }}/{{ $intro->button }}" height="34px" width="177px" border="0" alt="เข้าสู่เว็บไซต์"></a>
    </div>
 @else
    <div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="title m-b-md">
						โรงเรียนโตนดหลวงวิทยา สพม.10
                </div>
				<div class="subtitle m-b-md">
						ขณะนี้เว็บไซต์กำลังบันทึกข้อมูล ...
                </div>
				

                
            </div>
        </div>
 @endif   
</body>
</html>
