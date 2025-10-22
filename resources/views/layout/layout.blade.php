<!DOCTYPE HTML>
<html>

<head>
  <title>Website Informatika - Matana University</title>
  <meta name="description" content="Program Studi Informatika Matana University" />
  <meta name="keywords" content="informatika, computer science, programming, IT, technology" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="{{ asset('style/style.css') }}" title="style"/>
</head>


<body>
  <div id="main">
    @include('layout.header')
    @yield('header')
<!--header-->
    <div id="site_content">
        @include('layout.sidebar')
<!--sidebar-->
      <div id="content">
        @yield('content')
      </div>
    </div>
    <div id="content_footer"></div>
    @include('layout.footer')
<!--footer-->
</div>
</body>
</html>
