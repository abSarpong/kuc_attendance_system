@extends('layouts.website.app')

@section('title', 'Login')

@section('main-content')

<div class="row">

  <div class="spacer-20px"></div>
  <div class="spacer-5px"></div>
  <div class="spacer-5px"></div>

  <div class="columns large-6 small-11">
    <div class="" style="padding: 80px 60px 80px 0px">
      <img src="{{ asset('/assets/images/undraw_following_q0cr.svg') }}" alt="Profile image" class="404-image" />

      <div class="spacer-20px"></div>
      <div class="spacer-20px"></div>

      <div class="gray-text text-center">
            <h2 style="color: #F39C12;">Go digital with present sir</h2>
      </div>
      <div class="spacer-px"></div>
      <h3 class="gray-text text-center">
        Present is a web-based attendance system tailored to meet tertiary institutions needs.
      </h3>

    </div>
  </div>
  <div class="columns large-6 small-11">
    <div class="" style="padding: 30px 40px; background-color: #f9f9f9; margin-top: 55px">

      <div class="gray-text">
            <h2>Login to your account to continue.</h2>
      </div>
      <div class="spacer-20px"></div>

      <div class="login-form">
        <form class="ui large form" style="background-color: #f9f9f9;" method="post" action="{{url('auth')}}">
        {{csrf_field()}}
          <div class="field">
            <label class="form-label">Email</label>
            <div class="spacer-5px"></div>
            <input type="text" name="email" placeholder="E. g me@mail.com">
          </div>

          <div class="spacer-5px"></div>

          <div class="field">
            <label class="form-label">Password</label>
            <div class="spacer-5px"></div>
            <input type="text" name="password">
            <a class="very-small-text link">Forgotten password ?</a class="very-small-text">
          </div>
          <div class="spacer-20px"></div>
          <button class="ui big fluid button primary-button" type="submit">Login</button>
        </form>
    </div>
    </div>
  </div>
</div>

@endsection

@section('external-script')
<script language = "JavaScript">
</script>
@endsection