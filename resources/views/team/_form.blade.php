@extends('layouts.layout')
@section('content')
  <!-- Content -->
  <div class="layout-content" data-scrollable>
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">My team</a></li>
        <li class="active">Create</li>
      </ol>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-block">
              {!! Form::model($model,['files'=>true]) !!}
                <fieldset class="form-group">
                  <label>Name</label>
                  {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Your Team Name']) !!}
                </fieldset>
                <fieldset class="form-group">
                  <label>Description</label>
                  {!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Your Team Description']) !!}
                </fieldset>
                <fieldset class="form-group">
                  <label>Avatar</label>
                  {!! Form::file('avatar',['class'=>'form-control']) !!}
                </fieldset>
                <button class="btn btn-success" type="submit">Add New Team</button>
              {!! Form::close() !!}
            </div>
          </div>
      </div>
    </div>
  </div>
  {!! Helper::flashValidation() !!}
@endsection
