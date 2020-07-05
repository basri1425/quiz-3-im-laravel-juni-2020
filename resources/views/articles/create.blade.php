@extends('layouts.master')

@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">Input Artike Baru</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
          <form role="form" id="tambahArtikel" name="tambahArtikel" method="Post" action="{{url('/artikel')}}" >
            @csrf
            <div class="form-group">
              <label for="judul">Judul</label>
              <input placeholder="Judul Artikel" id="judul" type="text" class="form-control" name="judul" value="{{old('judul')}}" required="">
              @error('judul') <div class="invalid-feedback">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
              <label for="isi">Isi Artikel</label>
              <textarea class="form-control" rows="3" name="isi" placeholder="masukkan isi artikel anda disini"></textarea>
              @error('isi') <div class="invalid-feedback">{{$message}}</div>@enderror

              <input placeholder="Judul Artikel" id="slug" type="hidden" class="form-control" name="slug" value="kosong" required="">
              <input placeholder="Judul Artikel" id="tag" type="hidden" class="form-control" name="tag" value="kosong" required="">
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
      </div>
      <!-- /.card-body -->
</div>

@endsection