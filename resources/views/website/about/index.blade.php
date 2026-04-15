@extends('layouts.website')

@section('title', 'About Us | MSME Chamber of Commerce and Industy of India')

@section('content')
    @include('website.about.partials.hero')
    @include('website.about.partials.who_we_are')
    @include('website.about.partials.mission_vision')
    @include('website.about.partials.core_values')
    @include('website.about.partials.leadership')

@endsection
