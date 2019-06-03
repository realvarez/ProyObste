@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left"> {{$rol->role_name}}</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Administrador</li><li class="breadcrumb-item active">Roles</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="col-12">						
        <div class="card mb-3">
            <div class="card-header">
                <h3>
                    <i class="fa fa-table mr-2"></i>Permisos {{$rol->role_name}}
                </h3>
                Se encuentran listados los distintos permisos con los que cuenta el rol {{$rol->role_name}}
            </div>
            <div class="card-body">
                @foreach ($permissions as $permission)    
                    <div class="col-md-3">
                        <input type="checkbox" name="permission_{{$permission->name}}" id="permission_{{$permission->name}}">
                        <label for=""></label>
                    </div>
                @endforeach

            </div>							
        </div>
    </div>
</div>
@endsection