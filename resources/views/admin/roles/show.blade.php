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

    <form method="POST" action="{{ route('roles.store') }}">@csrf
        <div class="col-12">						
            <div class="card mb-3">
                <div class="card-header">
                    <h3><i class="fa fa-table mr-2"></i>Permisos {{$rol->role_name}}</h3>
                    Se encuentran listados los distintos permisos con los que cuenta el rol {{$rol->role_name}}
                </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($permissions as $permission) 
                                <div class="offset-md-1 col-md-2">
                                <input type="checkbox" name="permission_{{$permission->name}}" id="{{$permission->name}}" @if($permission->has_permission){{'checked'}}@endif>
                                    <label style="font-size:17px;" for="permission_{{$permission->name}}">{{$permission->name}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="pull-right">
                            <button class="btn btn-primary"><span class="btn-label"><i class="fa fa-check"></i></span>Guardar cambios</button>
                            <button class="btn btn-danger"><span class="btn-label"><i class="fa fa-exclamation"></i></span>Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection