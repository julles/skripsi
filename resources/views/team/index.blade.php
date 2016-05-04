@extends('layouts.layout')
@section('content')
  <!-- Content -->
  <div class="layout-content" data-scrollable>
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">My team</li>
      </ol>
      
      <a href = "{{ url('teams/create') }}" class = "btn btn-success btn-sm" style="margin-bottom:1%;">Add New Team</a>

      <div class="card">
        <div class="card-header">All My Teams</div>
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-success">
              <td>Column content</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>
  {!! Helper::flashSuccess() !!}
@endsection
