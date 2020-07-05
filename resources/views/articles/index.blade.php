@extends('layouts.master')

@section('content')
    <div class="row wrap">
        <div class="col-sm-12">
            @foreach($articles as $a)
            <div class="row">
                <div class="col-xs-12">
                    <h2>{{$a->judul}}</h2>
                    <p>{{$a->isi}}</p>
                    <div>
                        <a href="/artikel/{{$a->id}}" class="btn btn-sm btn-info">Show</a>
                        <a href="/artikel/{{$a->id}}/edit" class="btn btn-sm btn-info">Edit</a>
                        <form action="/artikel/{{$a->id}}" method="post" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <hr />
            @endforeach
        </div>
    </div>

@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>

@endpush