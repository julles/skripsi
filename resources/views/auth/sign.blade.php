@extends('layouts.auth')
@section('content')
<div class="row">
    <div class="col-sm-8 col-sm-push-1 col-md-4 col-md-push-3 col-lg-4 col-lg-push-4">
      <div class="center m-a-2">
        <div class="icon-block img-circle">
          <i class="material-icons md-36 text-muted">edit</i>
        </div>
      </div>
      <div class="card">
        <div class="card-header bg-white center">
          <h4 class="card-title">Sign Up</h4>
          <p class="card-subtitle">Create a new account</p>
        </div>
        <div class="p-a-2">
          {!! Form::open() !!}
            <div class="form-group">
              {!! Form::text('name',null,['placeholder'=>'Full Name','class'=>'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::text('email',null,['placeholder'=>'Email','class'=>'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::password('password',['placeholder'=>'Password','class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::password('verify_password',['placeholder'=>'Verify Password','class'=>'form-control']) !!}
            </div>
            <!--div class="form-group center">
              <label class="c-input c-checkbox">
                <input type="checkbox" checked>
                <span class="c-indicator"></span> I agree to the <a href="#">Terms of Use</a>
              </label>
            </div-->
            <p class="center">
              <button type="submit" class="btn btn-primary btn-rounded btn-block">Sign Up</button>
            </p>
            <div class="center"><a href="{{ url('auth/login') }}">Login</a></div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
  {!! Helper::flashValidation() !!}
  {!! Helper::flashSuccess() !!}

 @endsection

