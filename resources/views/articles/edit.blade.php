@extends('layouts.master')

@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit Artike Baru</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
          <form role="form" name="editArtikel" method="Post" action="/artikel/{{$article->id}}" >
            @method('patch')
            @csrf
            
            <div class="form-group">
              <label for="judul">Judul</label>
              <input id="judul" type="text" class="form-control" name="judul" value="{{$article->judul}}" required="">
              @error('judul') <div class="invalid-feedback">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
              <label for="isi">Isi Artikel</label>
              <textarea class="form-control" rows="3" name="isi" >{{$article->isi}}</textarea>
              @error('isi') <div class="invalid-feedback">{{$message}}</div>@enderror

              <input placeholder="Judul Artikel" id="slug" type="hidden" class="form-control" name="slug" value="kosong" required="">
              <input placeholder="Judul Artikel" id="tag" type="hidden" class="form-control" name="tag" value="kosong" required="">
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
      </div>
      <!-- /.card-body -->
</div>

@endsection