@extends('template.templateedit')

@section('content')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                        </div>
                        
                        <div class="col-md-12 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <h4><i class="fa fa-edit"></i> Tes Gambar</h4><hr>
                                    <form method="POST" action="{{route('tes-admin-tambah')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}

                                        <div class="form-group row">
                                            <label for="gambar" class="col-md-2 col-form-label text-md-right">Gambar </label>

                                            <div class="col-md-6">
                                                <input id="gambar" type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" value=""  autocomplete="" autofocus>

                                                @error('gambar')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="nama" class="col-md-2 col-form-label text-md-right">Judul</label>

                                            <div class="col-md-6">
                                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="judul" value="" required autocomplete="" autofocus>

                                                @error('nama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label for="deskripsi" class="col-md-2 col-form-label text-md-right">Deskripsi Creative Video & Broadcasting</label>

                                            <div class="col-md-6">
                                                <textarea  class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="" required ="" autofocus id="" cols="30" rows="7"></textarea>
                                                @error('deskripsi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        {{-- <div class="form-group row">
                                            <label for="nama" class="col-md-2 col-form-label text-md-right">Link Creative Video & Broadcasting</label>

                                            <div class="col-md-6">
                                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="link_video" value="" autocomplete="" placeholder="boleh diisi boleh tidak" autofocus>

                                                @error('nama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-2">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-save"></i> Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection