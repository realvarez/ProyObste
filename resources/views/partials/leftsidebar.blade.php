
<div class="left main-sidebar">
		<div class="sidebar-inner leftscroll">
			<div id="sidebar-menu">
				<ul>
					
					@foreach ($categories as $category)
						@if(!isset($category->sons))
							<li class="submenu">
								<a href="/category/{{$category->id}}"><i class="fa fa-fw fa-bars"></i><span>{{ucfirst($category->category_name)}}</span> </a>
							</li>
						@else
							<li class="submenu">
								<a><i class="fas fa-folder-open"></i><span>{{ucfirst($category->category_name)}}</span><span class="menu-arrow"></span></a>
								<ul class="list-unstyled">
									@foreach ($category->sons as $subCategory)
										<li><a href="/category/{{$subCategory->id}}">{{$subCategory->category_name}}</a></li>
									@endforeach
								</ul>
							</li>
						@endif
					@endforeach
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
	