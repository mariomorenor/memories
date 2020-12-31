@extends('adminlte::page')

@section('title', 'Memories | Home')

@section('content_header')
    
    <img src="{{$pictures[0]->book->cover}}" class="cover-book-banner" alt="">
    <div class="book-name-container">
        <h2 class="book-name">{{$pictures[0]->book->name}}</h2>
        <a href="#" class="btn btn-sm btn-outline-info rounded-pill btn_edit_book m-2 "><i class="fas fa-edit"></i></a>
    </div>

@stop

@push('css')
    <link rel="stylesheet" href="{{ asset('css/books.css') }}">
@endpush

@section('content')
<div class="container pb-2">
    <div class="row container_pic">
        @foreach ($pictures as $picture)
            <div class="col-10 col-sm-3 col-md-3 col-lg-2 mx-auto">
                <div class="card picture-card">
                    <div class="card-body">
                        <img src="{{$picture->photo_url}}" alt="img">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $pictures->links() }}
</div>




@endsection
