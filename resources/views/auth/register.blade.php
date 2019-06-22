@extends('layouts.login_register')

@section('content')
<div class="auth-2-outer row align-items-center h-p100 m-0">
  <div class="auth-2">
    <div class="auth-logo font-size-30">
    <a href="../index-2.html" class=""><b>ADMIN</b>SKULLS</a>
    </div>
    <div class="auth-logo font-size-30">
    <img src="images/keyhole.png" width="20%"/>
    </div>
    <!-- /.login-logo -->
    <div class="auth-body">
    <p class="auth-msg -50"><b>¡Bienvenido!</b> Ingresa tus datos para registrarte</p>

    <form action="{{ route('register') }}" method="post" class="form-element">
      @csrf
      <div class="form-group has-feedback">
      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombre Completo" required>
      <span class="ion ion-person form-control-feedback "></span>
      @if ($errors->has('name'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('name') }}</strong>
          </span>
      @endif
      </div>
      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo Electronico" required>
        <span class="ion ion-email form-control-feedback "></span>
      @if ($errors->has('email'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
      </div>
      <div class="form-group has-feedback">
      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
      @if ($errors->has('password'))
      <span class="invalid-feedback">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif
      <span class="ion ion-locked form-control-feedback "></span>
      </div>
      <div class="form-group has-feedback">
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirma tu Contraseña" required>
      <span class="ion ion-log-in form-control-feedback "></span>
      </div>
      <div class="row">
      <div class="col-12">
        <div class="checkbox">
        <input type="checkbox" id="basic_checkbox_1" >
        <label for="basic_checkbox_1" class=" ">Estoy de Acuerdo con los<a href="#" class="text-danger"><b> Terminos y Condiciones</b></a></label>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-rounded mt-10 btn-success">{{ __('Registrar') }}</button>
      </div>
      <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->

    <div class="margin-top-30 text-left" style="margin-top:30px;">
      <p>Ya estas registrado ? <a href="{{route('login')}}" class="text-info m-l-5">Ingresa</a></p>
    </div>

    </div>
  </div>

</div>
@endsection
