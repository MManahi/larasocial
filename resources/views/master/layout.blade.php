<!-- master Layout for the whole cart app -->
<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- title and meta data section -->
  <title>Larasocial</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="shopping, cart, buy, online, electronics, mobile, pc, laptop" />
  <!-- loading all css and js assets to layout file -->
  <link href="{{URL::asset('/assets/css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{URL::asset('/assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />

  <!--fonts-->
  <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Varela+Round')}}" rel='stylesheet' type='text/css'>
  <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic')}}" rel='stylesheet' type='text/css'>
</head>
<body>
  <header>
    @include('includes.header')
  </header>
  @yield('content')
  <footer>
    @include('includes.footer')
  </footer>
<script src="{{URL::asset('/assets/js/bootstrap.js')}}"></script>
<script src="{{URL::asset('/assets/js/classie.js')}}"></script>
<script src="{{URL::asset('/assets/js/easyResponsiveTabs')}}"></script>