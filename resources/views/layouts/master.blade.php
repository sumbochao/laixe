<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.master.cs')
</head>
<body id="top">
@include('layouts.master.header')
<div class="wrapper">
@yield('content')
</div>
@include('layouts.master.js')
</div>
</body>
</html>