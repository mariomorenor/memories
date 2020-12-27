@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 mx-auto">
                <h3>Perfil de Usuario</h3>
                <form action="#" class="bg-white rounded shadow p-3" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-12 col-sm-10 col-md-10 col-lg-10">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" autocomplete="off" required value="{{$user->name}}" name="name" id="input_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="nombre">Email:</label>
                                        <input type="email" autocomplete="off" required value="{{$user->email}}" name="email" id="input_email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="nombre">Contraseña:</label>
                                        <input type="password" autocomplete="off" required value="" name="password" id="input_password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="nombre">Confirmar Contraseña:</label>
                                        <input type="password" autocomplete="off" required value="" name="password_confirmation" id="input_password_confirmation" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-2 col-md-2 col-lg-2">
                            <div class=" d-flex justify-content-center border">
                                <img id="img_user_profile_img" src="{{ $user->image_url }}" alt="Profile_image">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex float-right">
                            <input type="file" name="image_url" id="input_file_user_profile_image">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12 col-sm-9 col-md-7 col-lg-5 mx-auto">
                            <button class="btn btn-primary btn-block shadow">GUARDAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/user/profile/index.css') }}">
@endpush