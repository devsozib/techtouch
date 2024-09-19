{{-- <!doctype html>
<html lang="en">
  <head>
  	<title>Login 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #03</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
		      		<div class="w-100">
		      			<h3 class="mb-4">Sign In</h3>
		      		</div>
							<div class="w-100">
								<p class="social-media d-flex justify-content-end">
									<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
									<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
								</p>
							</div>
		      	</div>
						<form method="post" action="{{route('customerLogin')}}" class="login-form">
							@csrf
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" class="form-control rounded-left" name="email" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>
	            </div>
	            <div class="form-group d-flex align-items-center">
	            	<div class="w-100">
	            		<label class="checkbox-wrap checkbox-primary mb-0">Save Password
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-100 d-flex justify-content-end">
		            	<button type="submit" class="btn btn-primary rounded submit">Login</button>
	            	</div>
	            </div>
	            <div class="form-group mt-4">
								<div class="w-100 text-center">
									<p class="mb-1">Don't have an account? <a href="{{route('customersignUpPage')}}">Sign Up</a></p>
									<p><a href="#">Forgot Password</a></p>
								</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Login</title>
        <link rel="shortcut icon" href="{{ asset('frontend') }}/images/webLogo/Logo/Bashundhara-Foundation-LOGO-MARK.png" />
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('frontend/login') }}/perfect-scrollbar.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="{{ asset('frontend/login') }}/main.min.css" rel="stylesheet">
        <link href="{{ asset('frontend/login') }}/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login-page">        
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-4">
                    <div class="card login-box-container">
                        <div class="card-body">
                            <div class="authent-logo">
                                <img  width="150" src="{{ asset('frontend') }}/images/webLogo/Logo/Bashundhara-Foundation.png" alt="" />
                            </div>
                            <div class="authent-text">                                
                                <p>Please Sign-in to your account.</p>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <label for="floatingInput">Email address</label>
                                      </div>
                                      @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="floatingPassword">Password</label>
                                      </div>
                                </div>
                                <div class="mb-3 form-check">                                                        
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <div class="d-grid">
                                <button type="submit" class="btn btn-info m-b-xs">Sign In</button>                                
                            </div>
                              </form>
                              {{-- <div class="authent-reg">
                                  <p>Not registered? <a href="{{ route('register') }}">Create an account</a></p>
                              </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        
        <!-- Javascripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="{{ asset('frontend/login') }}/perfect-scrollbar.min.js"></script>
        <script src="{{ asset('frontend/login') }}/main.min.js"></script>
    </body>
</html>
