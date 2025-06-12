@extends('ppdb::layouts.master')

@section('title')
    PPDB SMK NEGERI 5 SURAKARTA
@endsection

@section('alur_pendaftaran')
    {!! $alur_pendaftaran !!}
@endsection

@section('content')
    @section('slider')
        @include('ppdb::frontend.content.slider')
    @endsection

    @section('studi')
        @include('ppdb::frontend.content.studi')
    @endsection

    @section('count')
        @include('ppdb::frontend.content.count')
    @endsection

    @section('why')
        @include('ppdb::frontend.content.why')
    @endsection

    @section('video')
        @include('ppdb::frontend.content.video')
    @endsection
@endsection
