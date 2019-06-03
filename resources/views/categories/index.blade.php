@extends('layouts.master')
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left"> Categorías</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        @for ($i = 0; $i <= count($categories)-1; $i++)
            @foreach($allCategories as $categoria)
                @if($categoria->superior_category_id==$categories[$i]->id)
                    <a href="category/{{$categories[$i]->id}}" class="tarjetacategoria col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box noradius noborder bg-success" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    
                    <h6 class="text-white text-uppercase m-b-20 text-center" style="text-shadow: 1px 1px 6px #185b6b;">
                    <i class="fas fa-folder" style="font-size: 20px;"></i>&nbsp&nbsp{{ucfirst($categories[$i]->category_name)}}</h6>
                
                </div>
            </a>
                    @php
                    $i=$i+1;
                    @endphp
                     @break
                

                @endif
            @endforeach
            <a href="category/{{$categories[$i]->id}}" class="tarjetacategoria col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box noradius noborder bg-info" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    
                    <h6 class="text-white text-uppercase m-b-20 text-center" style="text-shadow: 1px 1px 6px #185b6b;">
                    <i class="fas fa-folder" style="font-size: 20px;"></i>&nbsp&nbsp{{ucfirst($categories[$i]->category_name)}}</h6>
                
                </div>
            </a>
       @endfor
        <a data-toggle="modal" data-target="#categoryModal" class="tarjetacategoria col-xs-12 col-md-6 col-lg-6 col-xl-3" style="cursor: pointer;">
            <div class="card-box noradius noborder bg-warning" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                
                <h6 class="text-white text-uppercase m-b-20 text-center" style="text-shadow: 1px 1px 6px #a87e2a;">
                <i class="fas fa-folder-plus" style="font-size: 20px;"></i>&nbsp&nbsp Nueva Categoría</h6>
            </div>
        </a>
    </div>
</div>
@endsection