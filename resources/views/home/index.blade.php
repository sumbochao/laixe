<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
@include('layouts.content.banner')
@include('layouts.content.features')
@include('layouts.content.counter')
@include('layouts.content.portfolio')
@include('layouts.content.play-video')
@include('layouts.content.team')
@include('layouts.content.pricing-table')
@include('layouts.content.blog')
@include('layouts.content.testimonial')
@include('layouts.content.client-logo')
@include('layouts.content.contact-form')
@endsection