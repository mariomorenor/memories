@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 mx-auto">
                <h3>Perfil de Usuario</h3>
                <form id="form_user_profile" action="{{ route('user.profile.update', ['user'=>$user]) }}" method="POST" class="bg-white rounded shadow p-3" enctype="multipart/form-data">
                    <div class="form-group">
                        <a href="{{ route('user.profile.index') }}" class="btn btn-primary">Regresar <i class="fas fa-sign-out-alt"></i></a>
                        <button type="button" user_id="{{$user->id}}" id="btn_update_user" class="btn btn-success shadow">Guardar <i class="far fa-save"></i></button>
                    </div>
                    @csrf
                    @method("PUT")
                    <div class="row">
                        <div class="col-12 col-sm-7 col-md-5 mx-auto">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" autocomplete="off" required value="{{$user->name}}" name="name" id="input_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Email:</label>
                                <input type="email" autocomplete="off" required value="{{$user->email}}" name="email" id="input_email" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-5 col-md-5 mx-auto">
                            <div class="form-group">
                                <div class=" d-flex justify-content-center">
                                    <img class="shadow" id="img_user_profile_img" src="{{ $user->image_url }}" alt="Profile_image"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-10 custom-input-file">
                                    <input type="file" name="profile_photo" id="input_file_user_profile_image" class="input-file">
                                    Elegir...
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row mb-2">
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
                        </div>
                        <div class="col-12 col-sm-2 col-md-2 col-lg-2">
                            <div class="form-group">
                                <div class=" d-flex justify-content-center">
                                    <img class="shadow" id="img_user_profile_img" src="{{ $user->image_url }}" alt="Profile_image"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-10 custom-input-file">
                                    <input type="file" name="profile_photo" id="input_file_user_profile_image" class="input-file">
                                    Elegir...
                                </div>
                            </div>
                        </div>
                    </div>   --}}
                </form>
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