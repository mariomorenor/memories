@extends('adminlte::page')

@section('content_header')
    
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-sm-7">
            <form action="#" method="POST" class="bg-white">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Título:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </form>
        </div>
    </div>
@endsection