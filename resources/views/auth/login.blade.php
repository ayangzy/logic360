@extends('auth.layouts.app')

@section('content')

<div class="container container-login animated fadeIn shadow rounded">
    <h3 class="text-center">Logic360 - Admin</h3>
    <div class="login-form ss">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group form-floating-label">
                <input id="phone_number" name="phone_number" type="text" class="form-control input-border-bottom @error('phone_number') is-invalid @enderror"
                value="{{ old('phone_number') }}" autocomplete="phone_number" autofocus required>
                <label for="phone_number" class="placeholder">Phone Number</label>
                @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group form-floating-label">
                <input id="password" name="password" type="password" class="form-control input-border-bottom @error('password') is-invalid @enderror"
                autocomplete="current-password" required>
                <label for="password" class="placeholder">Password</label>
                <div class="show-password">
                    <i class="icon-eye"></i>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="row form-sub m-0">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="remember" id="rememberme" value="" {{ old('remember') ? 'checked' : '' }} >
                    <label class="custom-control-label" for="rememberme">Remember Me</label>
                </div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="link float-right text-primary">Forget Password ?</a>
                @endif
            </div>
            <div class="form-action mb-3">
                <button type="submit" class="btn btn-primary btn-rounded btn-login"> <i class="fas fa-sign-in-alt mr-2"></i>Sign In</button>
            </div>
        </form>
       
    </div>
</div>
@endsection
