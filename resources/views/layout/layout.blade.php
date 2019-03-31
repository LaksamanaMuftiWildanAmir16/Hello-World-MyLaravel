<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?php echo asset('css/wildan.css')?>" type="text/css">
<title>@yield('title')</title>
</head>
<body>

<header>
@include('layout.header')
</header>
<ul>
@section('sidebar')
<li>HTML</li>
<li>CSS</li>

<li>JS</li>
@show

</ul>

<div class="container">
@yield('content')
</div>
</body>

</html>
