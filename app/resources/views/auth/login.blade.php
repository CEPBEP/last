@extends('layouts.login')

@section('content')

    <link rel="stylesheet" type="text/css" href="css/login.css">
  <div class="login-wrapper columns m">
    <div class="column is-8 is-hidden-mobile hero-banner">
      <section class="hero is-fullheight is-dark">
        <div class="hero-body">
          <div class="container">
<img class="k" src="https://cdn.dribbble.com/users/352214/screenshots/3320239/bf-dribbbleappbuilder.png">
          </div>
          <div class="container section">
            <div class="has-text-right">
              <h1 class="title is-1">- Конструктор</h1> <br>
              <p class="title is-3">Конструируй конструктивно</p>
            </div>
          </div>
        </div>
        <div class="hero-footer">
          <p class="has-text-centered">Image © unsplash</p>
        </div>
      </section>  
    </div>
    <div class="column is-4">
      <section class="hero is-fullheight">
        <div class="hero-heading">
          <div class="section has-text-centered">
              <!--<img src="" alt="logo" width="150px">-->
          </div>
        </div>
        <div class="hero-body">
          <div class="container">
            <div class="columns">
              <div class="column is-8 is-offset-2">
                <h1 class="avatar has-text-centered section">
                  <img src="https://cdn.dribbble.com/users/10549/screenshots/3062682/build.png">
                </h1>

                <form class="form-horizontal login-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    

                    <div class="col-md-6"><p class="control has-icon has-icon-right">
                        <input placeholder="Логин" id="email" type="email" class="form-control input  email-input" name="email" value="{{ old('email') }}" required autofocus>
                        <span class="icon user">
                      <i class="fa fa-user"></i>
                    </span></p>

                        @if ($errors->has('email'))
                            <span class="help-block">
                            <center style="position:absolute;top:0px;padding-left:20%;">
                            <strong class="notification is-danger top is-centered">{{ $errors->first('email') }}</strong>
                            </center>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    

                    <div class="col-md-6">
                        <p class="control has-icon has-icon-right">
                        <input placeholder="Пароль" id="password" type="password" class="form-control input password-input" name="password" required>
                        <span class="icon user">
                      <i class="fa fa-lock"></i>
                    </span>
            </p>

                        @if ($errors->has('password'))
                            <span class="help-block">
                            <center style="position:absolute;top:0px;padding-left:20%;">
                            <strong class="notification is-danger top is-centered">{{ $errors->first('password') }}</strong>
                            </center>
                            </span>
                        @endif
                    </div>
                </div>

                <center>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> запомнить
                            </label>
                        </div>
                    </div>
                </div>
                </center>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <p class="control login">
                        <input type="submit" class="button is-info is-outlined is-large is-fullwidth" value="войти">
                        </button>
                    </p>
                    </div>
                </div>
            </form>

            <div class="section forgot-password">
            <p class="has-text-centered" style="margin-left: 25px;">
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                  
                  </a>
                  <a href="{{ route('password.request') }}" style="padding-right: 0px;">Помощь |</a>
                    <a href="{{ route('register') }}">Регистрация</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>  
    </div>
  </div>


@endsection

