@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="mx-auto col-12 col-sm-8 col-md-10 col-lg-10">
                <h3>Cambio de Contraseña</h3>
                <form id="form_change_user_password" action="{{ route('user.profile.update', ['user'=>$user]) }}" class="bg-white rounded shadow p-3" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-success" id="btn_change_password">Guardar <i class="far fa-save"></i></button>
                    </div>
                    <div class="row">
                        <div class="col-12 mx-auto col-sm-5 col-md-5 col-lg-5">
                            <div class="form-group">
                                <label for="password">Contraseña Actual:</label>
                                <div class="input-group">
                                    <input type="password" autofocus required class="form-control @error('actual_password') is-invalid @enderror" name="actual_password" id="input_actual_password">
                                    <span class="input-group-addon"><button id="btn_see_actual_password" class="btn btn-outline-info ml-2" type="button"><i class="fas fa-eye"></i></button></span>
                                    @error('actual_password')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Nueva Contraseña:</label>
                                <div class="input-group">
                                    <input type="password" required class="form-control @error('password') is-invalid @enderror" name="password" id="input_password">
                                    <span class="input-group-addon"><button id="btn_see_password" class="btn btn-outline-info ml-2" type="button"><i class="fas fa-eye"></i></button></span>
                                    @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Repetir Contraseña:</label>
                                <div class="input-group">
                                    <input type="password" required class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="input_password_confirmation">
                                    <span class="input-group-addon"><button id="btn_see_password_confirmation" class="btn btn-outline-info ml-2" type="button"><i class="fas fa-eye"></i></button></span>
                                    @error('password_confirmation')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script src="{{ asset('js/user/profile/change_password.js') }}"></script>
@if (session("message") == "success")
    <script>
        Toast.fire({
            icon: 'success',
            title:'Operación Realizada con Éxito!'
        });
    </script>
@endif
@endpush

