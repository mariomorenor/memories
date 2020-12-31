@extends('adminlte::page')

@section('title', 'Memories | Home')

@section('content_header')

@stop

@push('css')
    <link rel="stylesheet" href="{{ asset('css/books.css') }}">
@endpush

@section('content')
<div class="container pb-2">
    {{ $books->render() }}  
        <div class="row">
            @foreach ($books as $book)
        <div class="col-12 col-sm-4 col-md-3">
            <div class="card">
                <div class="card-header">
                    {{$book->name}}
                </div>
                <div class="card-body pb-0 book_body">
                    <img src="{{$book->cover}}" class="cover-book rounded shadow border" alt="image_book">
                    <div class="form-group mt-2">
                        <label for="date">Fecha: <span class="font-weight-normal">{{$book->date}}</span></label>
                        <p class="book_description mb-0" >{{$book->description}}</p>
                    </div>  
                </div>
            </div>
        </div>
        @endforeach
        </div>
        {{ $books->render() }}
</div>

@endsection
