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
              <th width="30%">#</th>
              <th width="35%">Name</th>
              <th width="35%">Manage</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 0;
            ?>
            @foreach($teams as $team)
            <?php
            $no++;
            ?>  
              <tr class="{{ helper()->zebra($no) }}">
                <td><img class = 'img-circle' src = "{{ asset('contents/thumbnails/'.$team->avatar) }}" /></td>
                <td>{{ $team->name }}</td>
                <td><a href = "{{ url('team/manage/'.$team->slug) }}" class = 'btn btn-danger btn-sm'>Manage</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="col-sm-7">
        <div class="dataTables_paginate paging_simple_numbers" id="datatable-example_paginate">
          {!! $pagination->render() !!}
         </div>
      </div>
    </div>
  </div>
  {!! Helper::flashSuccess() !!}
@endsection
