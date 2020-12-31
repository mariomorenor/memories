@extends('adminlte::page')

@section('title', 'Memories | Home')

@section('content_header')
<div class="container_cover">
    <img src="{{$book->cover}}" class="cover-book-banner" alt="">
    <h2 class="book-name">{{$book->name}}</h2>
</div>
@stop

@push('css')
    <link rel="stylesheet" href="{{ asset('css/books.css') }}">
@endpush

@section('content')
<div class="container pb-2">
    
</div>

@endsection
