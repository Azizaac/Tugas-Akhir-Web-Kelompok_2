@extends('layouts.Frontend.app')
@section('title')
    Visi dan Misi
@endsection

@section('content')
    @section('about')
        <div class="container">
            @if ($visimisi)
                <div class="row about-page1-inner" style="margin-top: 5%">
                  <!-- Teks Visi & Misi -->
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3" style="font-size: 2rem;">Visi</h2>
                    <p class="text-justify lh-lg" style="font-size: 1.3rem;">
                        {!! nl2br(e($visimisi->visi)) !!}
                    </p>

                    <h2 class="fw-bold mt-4 mb-3" style="font-size: 2rem;">Misi</h2>
                    <p class="text-justify lh-lg" style="font-size: 1.3rem;">
                        {!! nl2br(e($visimisi->misi)) !!}
                    </p>
                </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-page-img-holder">
                            <img src="{{asset('storage/app/public/images/visimisi/'.$visimisi->image)}}" class="img-responsive" alt="visimisi">
                        </div>
                    </div>
                </div>
            @else
                <img src="{{asset('Assets/Frontend/img/empty.svg')}}" class="img-responsive" style="object-fit:cover; margin-top:5% !important; display: block;
            margin: 0 auto;">
            @endif
        </div>
    @endsection

   
@endsection
