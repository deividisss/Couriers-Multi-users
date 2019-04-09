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
                     <h1>Hi courier {{Auth::user()->courier->name}}</h1>
                      <ul>
                          <li><strong>Address : </strong>{{Auth::user()->courier->address}}</li>
                          <li><strong>City : </strong>{{Auth::user()->courier->city}}</li>
                          <li><strong>Postcode : </strong>{{Auth::user()->courier->postcode}}</li>
                          <li><strong>Country : </strong>{{Auth::user()->courier->country}}</li>
                          <li><strong>Registration code : </strong>{{Auth::user()->courier->registration_code}}</li>
                          <li><strong>VAT : </strong>{{Auth::user()->courier->VAT}}</li>
                          <li><strong>Telephone : </strong>{{Auth::user()->courier->telephone}}</li>
                          <li><strong>Logo : </strong>{{Auth::user()->courier->logo}}</li>
                      </ul>
                      <h3>Transporto priemonės</h3>
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
                        @foreach ($transports as $transport)
                              <tr onclick="window.location='home/transports/{{$transport->id}}';" style="cursor: pointer;">
                                <td>{{$transport->brand}}</td>
                                <td>{{$transport->model}}</td>
                                <td>{{$transport->registration_number}}</td>
                                <td>{{$transport->year}}</td>
                              </tr>
                         @endforeach
                            </tbody>
                          </table>
                          <p></p>
                          <a href="{{ route('createTransport') }}"><button type="button" class="btn btn-success">Pridėti transporto priemonę</button></a>

                    @else
                      Hi Customer
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
