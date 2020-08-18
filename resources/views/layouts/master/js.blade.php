<!-- load Js -->
<?php
$filenames = \App\Helper\Helpers::get_css_file_name();
?>
@foreach ($filenames as $filename)
    <script src="{{URL::asset('')}}/{{$filename}}"></script>
    @if (($filename) === bootstrap.min.js)
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
    @endif
@endforeach
