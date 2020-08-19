<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.master.cs')
</head>
<body id="top">
@include('layouts.master.header')
<div class="wrapper">
@yield('content')
@include('layouts.master.footer')
</div>
@include('layouts.master.js')
</body>
</html>