@extends('layouts.backend.app')

@section('title')
   Edit Pengajar
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
                        <h4>Edit Pengajar</h4>
                    </div>
                    <div class="card-body">
                        <form action=" {{route('backend-pengguna-pengajar.update', $pengajar->id)}} " method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Nama</label> <span class="text-danger">*</span>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value=" {{$pengajar->name}} " placeholder="Nama" />
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
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value=" {{$pengajar->email}} " placeholder="Email" />
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
            <option value="Matematika" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Matematika' ? 'selected' : '' }}>Matematika</option>
            <option value="Sejarah" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Sejarah' ? 'selected' : '' }}>Sejarah</option>
            <option value="Bahasa Indonesia" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Bahasa Indonesia' ? 'selected' : '' }}>Bahasa Indonesia</option>
            <option value="Bahasa Inggris" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Bahasa Inggris' ? 'selected' : '' }}>Bahasa Inggris</option>
            <option value="Bahasa Jawa" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Bahasa Jawa' ? 'selected' : '' }}>Bahasa Jawa</option>
            <option value="Bimbingan Konseling" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Bimbingan Konseling' ? 'selected' : '' }}>Bimbingan Konseling (BK)</option>
            <option value="Produk Kreatif dan Kewirausahaan" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Produk Kreatif dan Kewirausahaan' ? 'selected' : '' }}>Produk Kreatif dan Kewirausahaan (PKKWU)</option>
            <option value="Pendidikan Pancasila" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Pendidikan Pancasila' ? 'selected' : '' }}>Pendidikan Pancasila</option>
            <option value="Pendidikan Agama dan Budi Pekerti" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Pendidikan Agama dan Budi Pekerti' ? 'selected' : '' }}>Pendidikan Agama dan Budi Pekerti</option>
            <option value="PJOK" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'PJOK' ? 'selected' : '' }}>Pendidikan Jasmani, Olahraga, dan Kesehatan (PJOK)</option>
            <option value="" disabled>------</option>
            <option value="Desain Pemodelan dan Informasi Bangunan (DPIB)" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Desain Pemodelan dan Informasi Bangunan (DPIB)' ? 'selected' : '' }}>Desain Pemodelan dan Informasi Bangunan (DPIB)</option>
            <option value="Teknik Konstruksi dan Perumahan (TKP)" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Teknik Konstruksi dan Perumahan (TKP)' ? 'selected' : '' }}>Teknik Konstruksi dan Perumahan (TKP)</option>
            <option value="Teknik Mesin (TM)" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Teknik Mesin (TM)' ? 'selected' : '' }}>Teknik Mesin (TM)</option>
            <option value="Teknik Kendaraan Ringan Otomotif (TKRO)" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Teknik Kendaraan Ringan Otomotif (TKRO)' ? 'selected' : '' }}>Teknik Kendaraan Ringan Otomotif (TKRO)</option>
            <option value="Teknik dan Bisnis Sepeda Motor" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Teknik dan Bisnis Sepeda Motor' ? 'selected' : '' }}>Teknik dan Bisnis Sepeda Motor</option>
            <option value="Teknik Elektronika Industri" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Teknik Elektronika Industri' ? 'selected' : '' }}>Teknik Elektronika Industri</option>
            <option value="Teknik Ketenagalistrikan (TK)" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Teknik Ketenagalistrikan (TK)' ? 'selected' : '' }}>Teknik Ketenagalistrikan (TK)</option>
            <option value="Teknik Otomasi Industri (TOI)" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Teknik Otomasi Industri (TOI)' ? 'selected' : '' }}>Teknik Otomasi Industri (TOI)</option>
            <option value="Pengembangan Perangkat Lunak dan Gim (PPLG)" {{ old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Pengembangan Perangkat Lunak dan Gim (PPLG)' ? 'selected' : '' }}>Pengembangan Perangkat Lunak dan Gim (PPLG)</option>
        </select>
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
                                        <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value=" {{$pengajar->userDetail->nip}} " placeholder="NIP" />
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
                                        <small class="text-danger">Kosongkan jika tidak ingin mengubah.</small>
                                        @error('foto_profile')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Status</label> <span class="text-danger">*</span>
                                        <select name="status" class="form-control @error('status') is-invalid @enderror">
                                            <option value="Aktif" {{$pengajar->status == 'Aktif' ? 'selected' : ''}} >Aktif</option>
                                            <option value="Tidak Aktif" {{$pengajar->status == 'Tidak Aktif' ? 'selected' : ''}} >Tidak Aktif</option>
                                        </select>
                                        @error('status')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Website</label>
                                        <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" value=" {{$pengajar->userDetail->website}} " placeholder="Website" />
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
                                        <input type="text" class="form-control @error('linkedln') is-invalid @enderror" name="linkedln" value=" {{$pengajar->userDetail->linkidln}} " placeholder="Linkedln" />
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
                                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value=" {{$pengajar->userDetail->instagram}} " placeholder="Instagram" />
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
                                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value=" {{$pengajar->userDetail->facebook}} " placeholder="Facebook" />
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
                                        <input type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube" value=" {{$pengajar->userDetail->youtube}} " placeholder="Youtube" />
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
                                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value=" {{$pengajar->userDetail->twitter}} " placeholder="Twitter" />
                                        @error('twitter')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                              
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                            <a href="{{route('backend-pengguna-pengajar.index')}}" class="btn btn-warning">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection