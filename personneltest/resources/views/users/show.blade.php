@extends('layouts.app')

@section('content')

  <a href="{{URL::to('user')}}"> Back to lists</a>

<div class="col-md-12">
  <h4 style="text-align: center;">{{$users->user}}</h4>

  <div class="col-md-6">
    <p style="text-align: center;">Average User Score </p>
                <div class="card">

                <div class="card-body">
<!-- <div id="interactive-chart" class="height-sm"></div>
<canvas id="myChart"></canvas> -->
                </div>

            </div>
        
  </div>

  <div class="col-md-6">
    <table class="table table-bordered	">
      <thead>
        <tr>
          <th>Client</th> 
          <th> Client Type</th> 
          <th>Date</th>
          <th>Duration</th>
          <th>Type of Call</th>
          <th>External Call Score</th>
        </tr>
      </thead>
      <tbody>
        @foreach($lastCall as $key => $last)
        <tr>
          <td> {{ $last->client }} </td>
          <td> {{ $last->clientType }} </td>
          <td> {{ $last->date }} </td>
          <td> {{ $last->duration }} </td>
          <td> {{ $last->typeOfCall }} </td>
          <td> {{ $last->externalCallScore }} </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection