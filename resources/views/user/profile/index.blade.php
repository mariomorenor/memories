@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 mx-auto">
                <h3>Perfil de Usuario</h3>
                <form action="#" class="bg-white rounded shadow p-3">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-12 col-sm-10 col-md-10 col-lg-10">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" autocomplete="off" required name="name" id="input_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="nombre">Email:</label>
                                        <input type="email" autocomplete="off" required name="name" id="input_name" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-2 col-md-2 col-lg-2">
                            <div class=" d-flex justify-content-center border">
                                <img id="img_user_profile_img" src="{{ Auth::user()->image_url }}" alt="Profile_image">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex float-right">
                            <input type="file" name="image_url" id="input_file_user_profile_image">
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