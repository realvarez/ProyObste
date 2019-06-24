@if(\Request::route()->getName() != 'login')
<div class="col-xl-12">
    <div class="breadcrumb-holder">
        @switch(\Route::currentRouteName())
            @case('category.show')
                <h1 class="main-title float-left">
					<a href="/" class="breadcrumb-item" style="color:#212529;">Categorias</a>
					@if (isset($_category_father))
						@if ($_category_father->category_level != 1)
							<a class="breadcrumb-item" style="color:#212529;">...</a>						
						@endif
						<a href="/category/{{$_category_father->id}}" class="breadcrumb-item" style="color:#212529;">{{ucfirst($_category_father->category_name)}}</a>
					@endif
					<a class="breadcrumb-item active" style="color:#212529;">{{ucfirst($_category->category_name)}}</a>
				</h1>
				<ol class="breadcrumb float-right">
                    <li >
                        <a data-toggle="modal" data-target="#categoryModal" style="color:black; cursor: pointer; margin-right: 15px; padding: 2px !important;">
                            <i class="fas fa-folder-plus"></i> Nueva sub-categoría
                        </a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#fileModal" style="color:black; cursor: pointer; margin-right: 15px;" class="button">
                            <i class="fas fa-upload"></i> Subir Archivo
                        </a>
                    </li>
				</ol>
                @break
            @case('')
                <h1 class="main-title float-left">
					<a href="/" class="breadcrumb-item" style="color:#212529;">Categorias</a>
                </h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                </ol>
                @break
            @case('roles.index')
                <h1 class="main-title float-left">
					<a href="/roles" class="breadcrumb-item" style="color:#212529;">Roles</a>
                </h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Administración</li>
                </ol>
                @break
            @case('roles.show')
                <h1 class="main-title float-left">
                    <a href="/roles" class="breadcrumb-item" style="color:#212529;">Roles</a>
                    <a class="breadcrumb-item active" style="color:#212529;">{{$rol->role_name}}</a>
                    <a class="breadcrumb-item active" style="color:#212529;">Permisos</a>
                </h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Administración</li>
                    <li class="breadcrumb-item">Roles</li>
                </ol>
                @break
            @case('users.index')
                @break
            @case('users.show')
                @break
                
            @default
                @break
        @endswitch        
        <div class="clearfix"></div>
    </div>
</div>			
@endif