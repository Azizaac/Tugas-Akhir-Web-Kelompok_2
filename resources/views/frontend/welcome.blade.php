@extends('layouts.Frontend.app')
@section('title')
    Sekolahku
@endsection

@section('content')
    
    {{-- Slider --}}
    @section('slider')
        @include('frontend.content.slider')
    @endsection

    {{-- About --}}
    @section('about')
        @include('frontend.content.about')
    @endsection

    {{-- Video --}}
    @section('video')
        @include('frontend.content.video')
    @endsection

    {{-- Contact Info --}}
    @section('contact-info')
        @include('frontend.content.contact-info')
    @endsection

     {{-- Berita & Event --}}
     @section('beritaEvent')
        @include('frontend.content.beritaEvent')
    @endsection
@endsection