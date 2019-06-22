<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crmx-admin-template.multipurposethemes.com/main-ltr/pages/auth_user_pass.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jun 2019 04:48:05 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://crmx-admin-template.multipurposethemes.com/images/favicon.ico">

    <title>CrmX Admin - Recover Password</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- theme style -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Admin skins -->
	<link rel="stylesheet" href="../css/skin_color.css">

</head>

<body class="hold-transition theme-fruit ">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
            <div class="auth-logo font-size-30">
      			<a href="{{ route('inicio') }}" class=""><b>ADMIN</b>Skulls</a>
      		  </div>
            <div class="auth-logo font-size-30">
            <img src="../images/keyhole.png" width="20%"/>
      		  </div>
						<div class="content-top-agile p-10">
							<h3 class="mb-0 ">Recupera tu Contraseña</h3>
						</div>
						<div class="p-30 rounded30 box-shadowed b-2 b-dashed">
              @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif
							<form action="{{ route('password.email') }}" method="post">
                @csrf
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent "><i class="ti-email"></i></span>
										</div>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo Electronico" required>
									</div>
								</div>
								  <div class="row">
									<div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Enviar') }}
                    </button>
									</div>
									<!-- /.col -->
								  </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- jQuery 3 -->

  <script src="../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	<!-- fullscreen -->

  <script src="../assets/vendor_components/screenfull/screenfull.js"></script>
	<!-- popper -->
	<script src="../assets/vendor_components/popper/dist/popper.min.js"></script>

	<!-- Bootstrap 4.0-->
	<script src="../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

<!-- Mirrored from crmx-admin-template.multipurposethemes.com/main-ltr/pages/auth_user_pass.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jun 2019 04:48:05 GMT -->
</html>
