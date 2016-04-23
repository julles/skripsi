@extends('layouts.auth')
@section('content')

<div class="row">
    <div class="col-sm-8 col-sm-push-1 col-md-4 col-md-push-4 col-lg-4 col-lg-push-4">
      <div class="center m-a-2">
        <div class="icon-block img-circle">
          <i class="material-icons md-36 text-muted">lock</i>
        </div>
      </div>
      <div class="card bg-transparent">
        <div class="card-header bg-white center">
          <h4 class="card-title">Login</h4>
          <p class="card-subtitle">Access your account</p>
        </div>
        <div class="p-a-2">
          <form action="http://learnplus.themekit.io/index.html" method="get">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group ">
              <button type="submit" class="btn  btn-primary  btn-block btn-rounded">
                Login
              </button>
            </div>
            <div class="center">
              <a href="#">
                <small>Forgot Password?</small>
              </a>
            </div>
          </form>
        </div>
        <div class="card-footer center bg-white">
          Belum punya akun? <a href="{{ url('auth/sign-up') }}">Daftar</a>
        </div>
      </div>
    </div>
  </div>
  @endsection