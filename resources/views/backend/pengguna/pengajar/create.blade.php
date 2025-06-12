@extends('layouts.backend.app')

@section('title')
   Tambah Pengajar
@endsection

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <div class="alert-body">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        </div>
    @elseif($message = Session::get('error'))
        <div class="alert alert-danger" role="alert">
            <div class="alert-body">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        </div>
    @endif
<div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2> Pengajar</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header header-bottom">
                        <h4>Tambah Pengajar</h4>
                    </div>
                    <div class="card-body">
                        <form action=" {{route('backend-pengguna-pengajar.store')}} " method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Nama</label> <span class="text-danger">*</span>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value=" {{old('name')}} " placeholder="Nama" />
                                        @error('name')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Email</label> <span class="text-danger">*</span>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value=" {{old('email')}} " placeholder="Email" />
                                        @error('email')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Mengajar</label> <span class="text-danger">*</span>
                                        <select name="mengajar" class="form-control @error('mengajar') is-invalid @enderror">
                                            <option value="">-- Pilih --</option>
                                            <option value="Matematika">Matematika</option>
                                            <option value="Sejarah">Sejarah</option>
                                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                                            <option value="Bahasa Jawa">Bahasa Jawa</option>
                                            <option value="Bimbingan Korseling">Bimbingan Korseling (BK)</option>
                                            <option value="Produk Kreatif dan Kewirausahaan">Produk Kreatif dan Kewirausahaan (PKKWU)</option>
                                            <option value="Pendidikan Pancasila">Pendidikan Pancasila</option>
                                            <option value="Pendidikan Agama dan Budi Pekerti">Pendidikan Agama dan Budi Pekerti</option>
                                            <option value="PJOK">Pendidikan Jasmani, Olahraga, dan Kesehatan (PJOK)</option>
                                            <option value="">------</option>
                                            <option value="Desain Pemodelan dan Informasi Bangunan (DPIB)">Desain Pemodelan dan Informasi Bangunan (DPIB)</option>
                                            <option value="Teknik Konstruksi dan Perumahan (TKP)">Teknik Konstruksi dan Perumahan (TKP)</option>
                                            <option value="Teknik Mesin (TM)">Teknik Mesin (TM)</option>
                                            <option value="Teknik Kendaraan Ringan Otomotif (TKRO)">Teknik Kendaraan Ringan Otomotif (TKRO)</option>
                                            <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                                            <option value="Teknik Elektronika Industri">Teknik Elektronika Industri</option>
                                            <option value="Teknik Ketenagalistrikan (TK)">Teknik Ketenagalistrikan (TK)</option>
                                            <option value="Teknik Otomasi Industri (TOI)">Teknik Otomasi Industri (TOI)</option>
                                            <option value="Pengembangan Perangkat Lunak dan Gim (PPLG)">Pengembangan Perangkat Lunak dan Gim (PPLG)</option>
                                            
                                        @error('mengajar')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">NIP</label> <span class="text-danger">*</span>
                                        <input type="number" class="form-control @error('nip') is-invalid @enderror" name="nip" value=" {{old('nip')}} " placeholder="NIP" />
                                        @error('nip')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Foto Profile</label>  <span class="text-danger">*</span>
                                        <input type="file" class="form-control @error('foto_profile') is-invalid @enderror" name="foto_profile"/>
                                        @error('foto_profile')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Website</label>
                                        <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" value=" {{old('website')}} " placeholder="Website" />
                                        @error('website')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Linkedln</label>
                                        <input type="text" class="form-control @error('linkedln') is-invalid @enderror" name="linkedln" value=" {{old('linkidln')}} " placeholder="Linkedln" />
                                        @error('linkedln')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Instagram</label>
                                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value=" {{old('instagram')}} " placeholder="Instagram" />
                                        @error('instagram')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Facebook</label>
                                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value=" {{old('facebook')}} " placeholder="Facebook" />
                                        @error('facebook')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Youtube</label>
                                        <input type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube" value=" {{old('youtube')}} " placeholder="Youtube" />
                                        @error('youtube')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Twitter</label>
                                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value=" {{old('twitter')}} " placeholder="Twitter" />
                                        @error('twitter')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                              
                            </div>
                            <button class="btn btn-primary" type="submit">Tambah</button>
                            <a href="{{route('backend-pengguna-pengajar.index')}}" class="btn btn-warning">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection