
<div class="left main-sidebar">
	<div class="sidebar-inner leftscroll">
		<div id="sidebar-menu">
			<ul>
				<li class="submenu">
					<a class="button-menu-mobile open-left" style="padding:15px 0px; text-align: center;">
						<i class="fa fa-arrow-left" aria-hidden="true"></i>
						<i class="fa fa-arrow-right" aria-hidden="true"></i>
					</a>
				</li>
				@foreach ($categories as $category)
					@if(!isset($category->sons))
						<li class="submenu">
							<a href="{{ ucfirst($category->category_name) }}"><i class="fa fa-fw fa-bars"></i><span> {{ ucfirst($category->category_name) }} </span> </a>
						</li>
					@else
						<li class="submenu">
							<a href="{{ ucfirst($category->category_name) }}"><i class="fa fa-fw fa-table"></i> <span> {{ ucfirst($category->category_name) }} </span> <span class="menu-arrow"></span></a>
							
							<ul class="list-unstyled">
								@foreach ($category->sons as $subCategory)									
									<li><a href="{{$subCategory->category_name}}">{{$subCategory->category_name}}</a></li>
								@endforeach
							</ul>
						</li>
					@endif
				@endforeach
				<li class="submenu">
					<a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
					<ul class="list-unstyled">
						<li><a href="forms-general">General Elements</a></li>
						
					</ul>
				</li>
			</ul>

			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>

</div>
