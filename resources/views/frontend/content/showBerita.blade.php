@extends('layouts.Frontend.app')

@section('title')
{{$berita->title}}
@endsection

@section('content')
@section('about')
<div class="news-details-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row news-details-page-inner">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <<div class="news-img-holder">
                            <img src="{{ asset('/storage/app/public/images/berita/' . $berita->thumbnail) }}"
                                class="img-responsive fixed-img"
                                alt="{{ $berita->title }}">
                            <ul class="news-date1">
                                <li>{{ \Carbon\Carbon::parse($berita->created_at)->format('d M') }}</li>
                                <li>{{ \Carbon\Carbon::parse($berita->created_at)->format('Y') }}</li>
                            </ul>
                    </div>

                    <h2 class="title-default-left-bold-lowhight"><a href="#">{{$berita->title}}</a></h2>
                    <ul class="title-bar-high news-comments">
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>By</span> {{$berita->user->name}}</a></li>
                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>{{$berita->kategori->nama}}</a></li>
                    </ul>
                    <div class="px-md-5">
                <p class="text-justify lh-lg" style="font-size: 1.1rem;">
                    {!! nl2br(e($berita->content)) !!}
                </p>
            </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <div class="sidebar-box">
                <div class="sidebar-box-inner">
                    <h3 class="sidebar-title">Kategori</h3>
                    <ul class="sidebar-categories">
                        @foreach ($kategori as $kategoris)
                        <li><a href=""> {{$kategoris->nama}} </a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="sidebar-box">
                <div class="sidebar-box-inner">
                    <h3 class="sidebar-title">Berita Terbaru</h3>
                    <div class="sidebar-latest-research-area">
                        <ul>
                            @foreach ($beritaOther as $beritas)
                            <li>
                                <div class="latest-research-img">
                                    <a href="{{route('detail.berita', $beritas->slug)}}"><img src="{{asset('storage/images/berita/' .$beritas->thumbnail)}}" class="img-responsive" alt="skilled"></a>
                                </div>
                                <div class="latest-research-content">
                                    <h6>{{Carbon\Carbon::parse($beritas->created_at)->format('d M, Y')}}</h6>
                                    <p style="font-size: 12px">{{$beritas->title}}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
@endsection