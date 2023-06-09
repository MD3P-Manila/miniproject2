@extends('layouts.app')

@section('content')

    <div class="container-login">
      <div class="row justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3"><span>Log In </span><span>Register</span></h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h4 class="mb-3 pb-3">LOGIN</h4>
                        <div class="form-group mt-2">
                          <input id="email" type="email" class="form-style @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                          <i class="input-icon uil uil-at"></i>

                          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <br>
                        <div class="form-group mt-2">
                          <input id="password" type="password" class="form-style @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn mt-4" name="send">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                      </form>
                  </div>
                </div>
                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                        <h4 class="mb-3 pb-3">Register</h4>
                        <div class="form-group">
                          <input id="name" type="text" class="form-style @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
                          <i class="input-icon uil uil-user"></i>
                          @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                        <div class="form-group mt-2">
                          <input id="email" type="email" class="form-style @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                          <i class="input-icon uil uil-at"></i>
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                        <div class="form-group mt-2">
                          <input id="password" type="password" class="form-style @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                          <i class="input-icon uil uil-lock-alt"></i>
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                        <div class="form-group mt-2">
                          <input id="password-confirm" type="password" class="form-style" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <button type="submit" class="btn mt-4" name="send">
                            {{ __('Register') }}
                        </button>
                      </form>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection



