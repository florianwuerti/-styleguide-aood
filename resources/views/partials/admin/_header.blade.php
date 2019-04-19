<!-- Header start -->
<header id="masthead">
    <div class="navbar">
        <div class="branding">
            <img class="branding__logo" src="{{asset('images/logo.svg')}}" alt="">
        </div>
    </div>
    <!-- Header hero start -->
    <div class="header-hero">
        <div class="signup">
            <img class="branding__logo" src="{{asset('images/logo.svg')}}" alt="">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email"
                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif

                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                <input id="password" type="password"
                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                       name="password"
                       required autocomplete="current-password">

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif


                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-default">
                    {{ __('Login') }}
                </button>
            </form>
            <div class="external-login">
                <div class="help">
                    <a href="javascript:;" class="lnk btn-lost-password">Lost Your Password?</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Header hero end -->
</header>
<!-- Header end -->