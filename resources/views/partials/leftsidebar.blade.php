
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
						<a href="/category/create">
							<i class="fas fa-folder-plus"></i><span>Nueva categoría</span><span class="menu-arrow"></span></a>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	