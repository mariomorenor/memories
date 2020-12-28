@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 mx-auto">
                <h3>Perfil de Usuario</h3>
                <div class="bg-white rounded shadow p-3">
                    <div class="form-group">
                        <a href="{{ route('user.profile.edit', ['user'=>$user]) }}" class="btn btn-primary">Editar <i class="fas fa-user-edit"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-7 col-md-5 mx-auto">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" autocomplete="off" readonly value="{{$user->name}}" name="name" id="input_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Email:</label>
                                <input type="email" autocomplete="off" readonly value="{{$user->email}}" name="email" id="input_email" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-5 col-md-5 mx-auto">
                            <div class="form-group">
                                <div class=" d-flex justify-content-center">
                                    <img class="shadow rounded border border-black" id="img_user_profile_img" src="{{ $user->image_url }}" alt="Profile_image"> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/user/profile/edit.css') }}">
@endpush

@push('js')
    <script src="{{ asset('js/user/profile/edit.js') }}"></script>
@endpush