<!DOCTYPE HTML>
<html>

<head>
  <title>black &amp; white</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="{{ asset('style/style.css') }}" title="style" />
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
