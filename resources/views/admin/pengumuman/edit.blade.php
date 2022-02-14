@extends('layouts.index')

@section('content')
    <div class="section-header">
        <h1> Edit Pengumuman</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Pengumuman</a></div>
            <div class="breadcrumb-item"><a href="#">Edit</a></div>
            {{-- <div class="breadcrumb-item">Advanced Forms</div> --}}
        </div>
    </div>

    <div class="card">
        <form  action="/pengumuman.update" method="POST" enctype="multipart/form-data">
            @csrf

          <div class="card-header">
            <h4>Buat Pengumuman</h4>
          </div>
          <div class="card-body">

            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" id="judul" name="judul " value="{{ $pengumuman->judul }}">

            </div>
            <div class="form-group mb-0">
              <label>Pengumuman</label>
              <textarea class="form-control" name="deskripsi"  style="height: 131px;"> {{ $pengumuman->deskripsi }}</textarea>

            </div>
          </div>
          <div class="card-footer text-right">
            <button class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
@endsection
