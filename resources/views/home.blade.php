@extends('layouts.main')
@section('content')
    @if(Session::has('success'))
        <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
            <div id="charge-message" class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    @endif
        <div class="row" id="app">
            <gallery-component></gallery-component>
        </div>
@endsection




