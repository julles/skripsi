@extends('layouts.layout')
@section('content')
  <!-- Content -->
  <div class="layout-content" data-scrollable>
    <div class="container-fluid">

      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Edit Account</li>
      </ol>

      <div class="card">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#first" data-toggle="tab">Account</a>
          </li>
          <!--li class="nav-item">
            <a class="nav-link" href="#second" data-toggle="tab">Billing</a>
          </li-->
        </ul>
        <div class="p-a-2 tab-content">
          <div class="tab-pane active" id="first">
            {!! Form::model($model,['files'=>true]) !!}
              <div class="form-group row">
                <label for="avatar" class="col-sm-3 form-control-label">Avatar (max : 1 mb)</label>
                <div class="col-sm-9">
                  <div class="media">
                    <div class="media-body media-middle">
                      <label class="file">
                        <input type="file" id="file" name = 'image'>
                        <span class="file-custom"></span>
                      </label><br/><br/>
                      @if(!empty($model->image))
                        <img src = "{{ asset('contents/'.$model->image) }}" />
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="name" class="col-sm-3 form-control-label">Full Name</label>
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-md-8">
                      {!! Form::text('name',null,['class' => 'form-control']) !!}
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-3 form-control-label">Email</label>
                <div class="col-sm-6 col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                      <i class="material-icons md-18 text-muted">mail</i>
                  </span>
                      {!! Form::text('email',null,['class' => 'form-control','readonly'=>true]) !!}
                    
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="website" class="col-sm-3 form-control-label">Github or Bitbucket</label>
                <div class="col-sm-6 col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2">
                      <i class="material-icons md-18 text-muted">language</i>
                    </span>
                    {!! Form::text('git',null,['class' => 'form-control']) !!}
                    
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-sm-3 form-control-label">Change Password</label>
                <div class="col-sm-6 col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon3">
                       <i class="material-icons md-18 text-muted">lock</i>
                    </span>
                      {!! Form::password('password',['class' => 'form-control']) !!}
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-8 col-sm-offset-3">
                  <div class="media">
                    <div class="media-left">
                      <button type="submit" class="btn btn-success btn-rounded">Save Changes</button>
                    </div>
                    <!--div class="media-body media-middle p-l-1">
                      <label class="c-input c-checkbox">
                        <input type="checkbox" checked>
                        <span class="c-indicator"></span> Subscribe to Newsletter
                      </label>
                    </div-->
                  </div>
                </div>
              </div>
            {!!Form::close()!!}
          </div>

          <!--div class="tab-pane" id="second">
            <form action="#" class="form-horizontal">
              <div class="form-group row">
                <label for="name_on_invoice" class="col-sm-3 form-control-label">Name on Invoice</label>
                <div class="col-sm-6 col-md-4">
                  <input type="text" class="form-control" value="Adrian Demian">
                </div>
              </div>
              <div class="form-group row">
                <label for="address" class="col-sm-3 form-control-label">Address</label>
                <div class="col-sm-6 col-md-4">
                  <input type="text" class="form-control" value="Sunny Street, 21, Miami, Florida">
                </div>
              </div>
              <div class="form-group row">
                <label for="country" class="col-sm-3 form-control-label">Country</label>
                <div class="col-sm-6 col-md-4">
                  <select class="c-select form-control">
                    <option value="1" selected>USA</option>
                    <option value="2">India</option>
                    <option value="3">United Kingdom</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 col-md-4 col-sm-offset-3">
                  <a href="#" class="btn btn-success btn-rounded"> Update Billing</a>
                </div>
              </div>
            </form>
            <div class="card m-t-2">
              <div class="card-header bg-white">
                <div class="media">
                  <div class="media-body media-middle">
                    <h4 class="card-title">Payment Info</h4>
                  </div>
                  <div class="media-right media-middle">
                    <a href="#" class="btn btn-primary-outline"><i class="material-icons">add</i></a>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <ul class="list-group m-b-0">
                  <li class="list-group-item active">
                    <div class="media">
                      <div class="media-left">
                        <span class="btn btn-primary btn-circle"><i class="material-icons">credit_card</i></span>
                      </div>
                      <div class="media-body media-middle">
                        <p class="m-b-0">**** **** **** 2422</p>
                        <small class="text-muted">Updated on 12/02/2016</small>
                      </div>
                      <div class="media-right media-middle">
                        <a href="#" class="btn btn-primary btn-sm">
                          <i class="material-icons">edit</i> EDIT
                        </a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="media-left">
                        <span class="btn btn-white btn-circle"><i class="material-icons">credit_card</i></span>
                      </div>
                      <div class="media-body media-middle">
                        <p class="m-b-0">**** **** **** 6321</p>
                        <small class="text-muted">Updated on 11/01/2016</small>
                      </div>
                      <div class="media-right media-middle">
                        <a href="#" class="btn btn-white btn-sm">
                          <i class="material-icons">edit</i> EDIT
                        </a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div-->
      </div>

    </div>
  </div>
  {!! Helper::flashSuccess() !!}
  {!! Helper::flashValidation() !!}
@endsection