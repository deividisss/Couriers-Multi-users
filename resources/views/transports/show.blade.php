@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->courier)
                     <h1>{{$transport->brand}} {{$transport->model}}</h1>
                      <ul>
                          <li><strong>Brand : </strong>{{$transport->brand}}</li>
                          <li><strong>Model : </strong>{{$transport->model}}</li>
                          <li><strong>Registration number : </strong>{{$transport->registration_number}}</li>
                          <li><strong>Year : </strong>{{$transport->year}}</li>
                      </ul>
                      <div class="btn-group" role="group" aria-label="Basic example">


                            <form method="GET" action="/home/transports/{{$transport->id}}/edit">
                                @csrf
                                <button type="submit" class="btn btn-warning">Atnaujinti informaciją</button>
                            </form>


                            <form method="POST" action="/home/transports/{{$transport->id}}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Ištrintį transporto priemonę</button>
                            </form>


                          </div>
                          <hr>
     
    
                      <h3>Maršrutai</h3>
                      <table class="table table-dark table-hover">
                            <thead>
                              <tr>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Registration number</th>
                                <th>Date</th>
                              </tr>
                            </thead>
                            <tbody>
        
                              <tr onclick="window.location='home/transports/{{$transport->id}}';" style="cursor: pointer;">
                                <th>Test</th>
                                <th>Test</th>
                                <th>Test</th>
                                <th>Test</th>
                              </tr>
         
                            </tbody>
                          </table>
                          <a href="{{ route('home') }}"><button type="button" class="btn btn-primary">Atgal</button></a>

                    @else
                      Hi Customer
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
