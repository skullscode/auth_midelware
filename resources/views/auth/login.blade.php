@extends('layouts.login_register')

@section('content')

	<div class="auth-2-outer row align-items-center h-p100 m-0">
		<div class="auth-2">
		  <div class="auth-logo font-size-30">
			<a href="{{ route('inicio') }}" class=""><b>ADMIN</b>Skulls</a>
		  </div>
      <div class="auth-logo font-size-30">
      <img src="images/keyhole.png" width="20%"/>
		  </div>
		  <!-- /.login-logo -->
		  <div class="auth-body">
			<p class="auth-msg"><b>¡Bienvenido!</b> Por Favor, Inicia Sesion para continuar </p>

			<form action="{{ route('login') }}" method="post" class="form-element">
        @csrf
			  <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo Electronico" required >
				<span class="ion ion-email form-control-feedback "></span>
        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
			  </div>
			  <div class="form-group has-feedback">
				<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
				<span class="ion ion-locked form-control-feedback "></span>
        @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
			  </div>
			  <div class="row">
				<div class="col-6">
				  <div class="checkbox">
					<input type="checkbox" id="basic_checkbox_1">
					<label for="basic_checkbox_1" class="">Recuérdame</label>
				  </div>
				</div>
				<!-- /.col -->
				<div class="col-6">
				 <div class="fog-pwd">
					<a href="{{route('password.request')}}" class=""><i class="ion ion-locked"></i> Olvidaste tu Contraseña?</a><br>
				  </div>
				</div>
				<!-- /.col -->
				<div class="col-12 text-center">
          <button type="submit" class="btn btn-primary">
              {{ __('Ingresar') }}
          </button>
				</div>
				<!-- /.col -->
			  </div>
			</form>

			<!--<div class="text-center text-dark">
			  <!-- <p class="mt-50 ">- Sign With -</p>
			  <p class="gap-items-2 mb-20">
				  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-facebook"></i></a>
				  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-twitter"></i></a>
				  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-google-plus"></i></a>
				  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-instagram"></i></a>
				</p>
			</div>-->
			<!-- /.social-auth-links -->

			<div class="text-left" style="margin-top:30px;">
				<p>No tienes una cuenta ? <a href="{{ route('register') }}" class="text-info m-l-5"> Registrate</a></p>
			</div>

		  </div>
		</div>

	</div>
@endsection
