@extends('adminlte::page')

@section('title', 'Memories | Home')

@section('content_header')

@stop

@push('css')
<link rel="stylesheet" href="{{ asset('css/books/index.css') }}">
@endpush

@section('content')
<div class="container py-2">
    {{ $books->render() }}
    <div class="row">
        @foreach ($books as $book)
        <div class="col-9 mx-auto col-sm-4 col-md-3 p-4">
            <div class="card shadow">
                <div class="card-header pt-3 pb-1 font-weight-bold text-secondary">
                    <h6 class="text-truncate text-uppercase book_header">{{$book->name}}</h6>
                    <div class="d-flex flex-row-reverse">
                        <a type="button" href="{{ route('books.edit', ['book'=>$book]) }}" title="Editar" class="btn btn-outline-success btn-sm"><i class="fas fa-edit"></i></a>
                        <a type="button" href="{{ route('books.show', ['book'=>$book]) }}" title="Ver" class="btn btn-outline-info btn-sm mr-1"><i class="fas fa-eye"></i></a>
                    </div>
                </div>  
                <div class="card-body pb-0 book_body">
                    <img src="{{$book->cover}}" class="cover-book rounded shadow border" alt="image_book">
                    <div class="form-group mt-2">
                        <label for="date">Fecha: <span class="font-weight-normal">{{$book->date}}</span></label>
                        <p class="book_description mb-0">{{$book->description}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{ $books->render() }}
</div>

@endsection
