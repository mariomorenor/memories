@extends('adminlte::page')

@section('title', 'Memories | Home')

@section('content_header')
    
    <img src="{{$pictures[0]->book->cover}}" class="cover-book-banner" alt="">
    <div class="book-name-container">
        <h2 class="book-name">{{$pictures[0]->book->name}}</h2>
        <a href="{{ route('books.edit', ['book'=>$pictures[0]->book]) }}" class="btn btn-outline-info rounded-pill btn_edit_book m-2 "><i class="fas fa-edit"></i></a>
    </div>

@stop

@push('css')
    <link rel="stylesheet" href="{{ asset('css/books.css') }}">
@endpush

@section('content')

@endsection
