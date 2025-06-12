@extends('layouts.Frontend.app')

@section('title')
Profile Sekolah
@endsection

@section('about')
<div class="container py-5">
    @if ($profile)
    <div class="row justify-content-center mb-5">
    <div class="col-12 d-flex justify-content-center">
        <img src="{{ asset('/storage/app/public/images/profileSekolah/' . $profile->image) }}"
             alt="Profile Sekolah"
             class="img-fluid rounded shadow-sm profile-img">
    </div>
</div>


    <div class="text-center mb-4">
        <h2 class="fw-semibold">{{ $profile->title }}</h2>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10 col-md-11">
            <div class="px-md-4">
                <p class="text-justify lh-lg" style="font-size: 1.1rem;">
                    {!! nl2br(e($profile->content)) !!}
                </p>
            </div>
        </div>
    </div>

    <!-- Struktur Organisasi Section -->
    <div class="struktur-organisasi mt-5">
        <div class="text-center mb-4">
            <h2 class="fw-semibold">Struktur Organisasi</h2>
            <p class="text-muted">SMKN 5 Surakarta Tahun Ajaran 2023/2024</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="struktur-img-container">
                            <img src="{{ asset('storage/images/profileSekolah/Struktur-Smkn5.png') }}"
                                alt="Struktur Organisasi SMKN 5 Surakarta"
                                class="img-fluid struktur-img">
                        </div>
                    </div>
                    <div class="card-footer bg-light text-center py-3">
                        <button class="btn btn-primary" onclick="window.open('{{ asset('storage/images/profileSekolah/Struktur-Smkn5.png') }}', '_blank')">
                            <i class="fa fa-search-plus me-2"></i>Lihat Gambar Lebih Besar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="text-center">
        <img src="{{ asset('Assets/Frontend/img/empty.svg') }}"
             alt="Empty"
             class="img-fluid my-4"
             style="max-height: 300px;">
        <p class="text-muted">Belum ada data profil sekolah.</p>
    </div>
    @endif
</div>

<style>
    .struktur-organisasi {
        background: #f8f9fa;
        padding: 60px 0;
        margin-top: 40px;
    }

    .struktur-organisasi .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        max-width: 1200px;
        margin: 0 auto;
    }

    .struktur-img-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        min-height: 400px;
    }

 
    .profile-img {
        max-height: 300px;
        object-fit: contain;
        display: block;
        margin: 0 auto; /* <-- ini penting untuk fallback center */
    }



    .struktur-img {
        max-width: 1000px;
        width: auto;
        height: auto;
        object-fit: contain;
        margin: 0 auto;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .struktur-img:hover {
        transform: scale(1.02);
    }

    .text-justify {
        text-align: justify;
        text-indent: 2em;
    }

    @media (max-width: 1200px) {
        .struktur-img {
            max-width: 100%;
        }
    }

    @media (max-width: 768px) {
        .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .text-justify {
            text-align: left;
        }

        .struktur-organisasi .card {
            margin: 0 15px;
        }
    }
</style>
@endsection

@section('guru')
@include('frontend.content.guru')
@endsection
