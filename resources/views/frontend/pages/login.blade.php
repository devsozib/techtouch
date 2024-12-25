@extends('frontend.layouts.app')
@section('content')
<link rel="shortcut icon" href="{{ asset('frontend') }}/images/webLogo/Logo/Bashundhara-Foundation-LOGO-MARK.png" />
<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
<link href="{{ asset('frontend/login') }}/perfect-scrollbar.css" rel="stylesheet">


<!-- Theme Styles -->
<link href="{{ asset('frontend/login') }}/main.min.css" rel="stylesheet">
<link href="{{ asset('frontend/login') }}/custom.css" rel="stylesheet">
<style>
    svg.w-5 {
        width: 20px;
    }
    input[type=text], input[type=password], input[type=email], input[type=number], input[type=tel], textarea {
    font-size: var(--font-size-b2);
    font-weight: 400;
    height: auto;
    line-height: 28px;
    background: #d1d1d136;
    -webkit-box-shadow: none;
    box-shadow: none;
    padding: 0 15px;
    outline: none;
    border: var(--border-width) solid var(--color-border);
    border-radius: var(--radius);
}
</style>

    <div class="rts-blog-grid-area rts-section-gap">
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
                            <form method="post" action="{{route('customerLogin')}}">
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
                              
                                <div class="d-grid">
                                <button type="submit" class="btn btn-info m-b-xs">Sign In</button>                                
                            </div>
                              </form>
                              <div class="authent-reg">
                                  <p>Not registered? <a href="{{route('customersignUpPage')}}">Create an account</a></p>
                              </div>
                        </div>
                    </div>
                </div>
            </div>         
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="{{ asset('frontend/login') }}/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('frontend/login') }}/main.min.js"></script>
@endsection