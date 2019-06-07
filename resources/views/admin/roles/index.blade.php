@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Tables</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

<div class="col-12">						
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col-md-11">    
                    <h3><i class="fa fa-table"></i> Roles del sistema</h3>
                    Se encuentran listados los distintos roles que pueden tener los usuarios en el sistema,
                    para asignar permisos entrar a configurar.
                </div>
                <div class="col-md-1">
                    <button class="pull-right">Crear</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-responsive-xl table-hover">
                <thead>
                    <tr>
                        <th scope="col">Rol</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Numero de Usuarios</th>
                        <th scope="col">Opciónes</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $rol)
                        <tr>
                            <td><a style="color:black" href="">{{ucfirst($rol->role_name)}}</a></td>
                            <td>Aqui deberia ir una descripción</td>
                            <td>{{$rol->cantUsers}}</td>
                            <td>
                                <a href="/roles/{{$rol->id}}" style="color:black"><i class="fa fa-search bigfonts fa-2x" aria-hidden="true"></i></a>
                                <a href="" style="color:black"><i class="fas fa-trash-alt fa-2x"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>							
    </div>
@endsection