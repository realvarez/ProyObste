@extends('layouts.master')
@section('content')

<div class="container-fluid">



 <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
	<div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-holder">
                    <h1 class="main-title float-left"> Nueva Categoría</h1>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Nueva Categoría</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

	<div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="margin: auto auto;">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="fas fa-folder-plus"></i></i> Añadir Categorías</h3>
                    </div>
                    @csrf
                        <div class="card-body container col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="category_name">Nombre de la categoría</label>
                                    <input  type="text" name="category_name"class="form-control " id="category_name" placeholder="Ingrese el nombre">
                                </div>

                            </div>
                        </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary pull-right "><i class="fas fa-long-arrow-alt-up"></i> Guardar</button>
                    </div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger"  lang="es">
                            <strong>Ups!</strong> Ha ocurrido un error al crear la categoria <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
            </div>
        </div>


 </form>



</div>
@endsection
