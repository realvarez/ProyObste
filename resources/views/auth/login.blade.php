@extends('layouts.master')
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
                {{ csrf_field() }}
                <login-component></login-component>
        </div>
    </div>
@endsection
