
<div class="left main-sidebar">
		<div class="sidebar-inner leftscroll">
			<div id="sidebar-menu">
				<ul>
					<li class="submenu">
						<a class="subdrop" href="javascript:;"><i class="fas fa-folder-open"></i><span>Favoritos</span><span class="menu-arrow"></span></a>
						<ul class="list-unstyled" style="display: block;">
							@foreach (Auth::user()->favorite_categories as $category)
								<li><a href="/category/{{$category->id}}"><i class="fa fa-list-alt" aria-hidden="true"></i>{{ucfirst($category->category_name)}}</a></li>
							@endforeach
						</ul>
					</li>
					<li class="submenu">
						<a class="subdrop" href="javascript:;"><i class="fas fa-folder-open"></i><span>Ultimas Visitadas</span></a>
						<ul class="list-unstyled" style="display: block;">
							@foreach (Auth::user()->recorded_categories_tolist() as $category)
								<li><a href="/category/{{$category->id}}"><i class="fa fa-list-alt" aria-hidden="true"></i>{{ucfirst($category->category_name)}}</a></li>
							@endforeach
						</ul>
					</li>
					<li class="submenu">
						<a data-toggle="modal" data-target="#categoryModal" style="cursor: pointer;"><i class="fas fa-folder-plus"></i><span>Nueva categoría</span></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

<!-- Modal CATEGORIA -->
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Categoría</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


   <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">

	<div class="row container">
    @csrf

    <div class="form-group row">
        <div class="col-md-12">
            <label for="category_name">Nombre de la categoría</label>
            <input  data-toggle="tooltip" data-placement="right" title="Ingrese el nombreque tendrá la categoría o subcategoría" type="text" name="category_name"class="form-control " id="category_name" placeholder="Ingrese el nombre">
        </div>
        <div class="col-md-12" style="margin-top: 10px;">
        	<label>Seleccione una categoría padre:</label>
							<select data-toggle="tooltip" data-placement="right" title="Seleccione a la categoría a la que pertenece o seleccione nueva categoría" name="superior_category_id" class="form-control form-control-sm ">
							<option id ="superior_category_id" value = 0 selected >Categoría Nueva</option>
						@foreach ($categories as $category)
							<option  id="superior_category_id"  value="{{$category->id}}">{{$category->category_name}}  </option>
						@endforeach
							</select>
        </div>

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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary "><i class="fas fa-long-arrow-alt-up"></i> Guardar</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal SUBIR ARCHIVO -->
<div class="modal fade" id="fileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subir archivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      	<form action="{{route('files.store')}}" method="post" enctype="multipart/form-data">
						@csrf


	<div class="row container">

		<div class="form-group row">
			<input class="col-md-8 col-lg-8 col-xl-8" type="file" name="file" id="file">
			<div style="margin-top: 20px;" class="col-md-8 col-lg-8 col-xl-8">
				<label>Seleccione una categoría:</label>
				<select data-toggle="tooltip" data-placement="right" title="Ingrese la categoría a la que pertenece el documento" name="category_id" class="form-control form-control-sm ">
			@foreach ($categories as $category)
				<option  id="category_id"  value="{{$category->id}}">{{$category->category_name}}  </option>
			@endforeach
				</select>
			</div>
			<div style="margin-top: 20px; "class="col-md-4 col-lg-4 col-xl-4">
				<label>Año</label>
					<input type="number" min="2016" max="2030" step="1"  name="file_year" data-toggle="tooltip" data-placement="right" title="Ingrese el año del documento" class="form-control form-control-sm">
			</div>
            <div style="margin-top: 20px; "class="col-md-4 col-lg-4 col-xl-4">
				<label>Tags</label>
					<input type="text" name="file_tags" data-toggle="tooltip" data-placement="right" title="Ingrese tags del documento" class="form-control form-control-sm" data-role="tagsinput">
			</div>
                @if (count($errors) > 0)
                <div style="margin-top: 20px">
                    <div class="alert alert-danger" >
                        <strong>Ups!</strong> Ha ocurrido un error con la subida de su documento <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
				@endif

	</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary pull-right"><i class="fas fa-long-arrow-alt-up"></i> Subir</button>
      </div>
    </form>
    </div>
  </div>
</div>
</div>
