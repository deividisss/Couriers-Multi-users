@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Priregistruoti transporto priemonę</h1>
                <div class="card">
                    <div class="card-header">{{ __('Transporto priemonės registravimo forma') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('storeTransport') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}</label>
    
                                <div class="col-md-6">
                                    <input id="brand" type="text" class="form-control{{ $errors->has('brand') ? ' is-invalid' : '' }}" name="brand" value="{{ old('brand') }}" required autofocus>
    
                                    @if ($errors->has('brand'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('brand') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="model" class="col-md-4 col-form-label text-md-right">{{ __('Model') }}</label>
    
                                <div class="col-md-6">
                                    <input id="model" type="text" class="form-control{{ $errors->has('model') ? ' is-invalid' : '' }}" name="model" value="{{ old('model') }}" required autofocus>
    
                                    @if ($errors->has('model'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('model') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="registration_number" class="col-md-4 col-form-label text-md-right">{{ __('Registration number') }}</label>
    
                                <div class="col-md-6">
                                    <input id="registration_number" type="text" class="form-control{{ $errors->has('registration_number') ? ' is-invalid' : '' }}" name="registration_number" value="{{ old('registration_number') }}" required autofocus>
    
                                    @if ($errors->has('registration_number'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('registration_number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>
    
                                <div class="col-md-6">
                                    <input id="year" type="date" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" name="year" value="{{ old('year') }}" required autofocus>
    
                                    @if ($errors->has('year'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('year') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
          
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection