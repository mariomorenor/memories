@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="mx-auto col-12 col-sm-8 col-md-7 col-lg-7">
                <h3>Cambio de Contraseña</h3>
                <form id="form_change_user_password" action="{{ route('user.profile.update', ['user'=>$user]) }}" class="bg-white rounded shadow p-4" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <a href="{{ route('user.profile.index') }}" class="btn btn-secondary">Regresar <i class="fas fa-sign-out-alt"></i></a>
                        <button type="button" class="btn btn-success" id="btn_change_password">Guardar <i class="far fa-save"></i></button>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña Actual:</label>
                        <input type="password" required class="form-control" name="actual_password" id="input_actual_password">
                    </div>
                    <div class="form-group">
                        <label for="password">Nueva Contraseña:</label>
                        <input type="password" required class="form-control" name="password" id="input_password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Repetir Contraseña:</label>
                        <input type="password" required class="form-control" name="password_confirmation" id="input_password_confirmation">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script src="{{ asset('js/user/profile/edit.js') }}"></script>
@endpush