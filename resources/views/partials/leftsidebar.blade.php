
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
							<a href="#"><i class="fa fa-fw fa-bars"></i><span>{{ucfirst($category->category_name)}}</span> </a>
						</li>
					@else
						<li class="submenu">
							<a href="#"><i class="fa fa-fw fa-table"></i> <span>{{ucfirst($category->category_name)}}</span><span class="menu-arrow"></span></a>

							<ul class="list-unstyled">
								@foreach ($category->sons as $subCategory)
									<li><a href="category/{{$category->category_name.'/'.$subCategory->category_name}}">{{$subCategory->category_name}}</a></li>
								@endforeach
							</ul>
						</li>
					@endif
                @endforeach
                <li class="submenu">
                        <a href="dashboard"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                    </li>

                    <li class="submenu">
                            <a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="forms-general">General Elements</a></li>
                                <li><a href="forms-select2">Select2</a></li>
                                <li><a href="forms-validation">Form Validation</a></li>
                                <li><a href="forms-upload">Multiple File Upload</a></li>
                                <li><a href="forms-datetime-picker">Date and Time Picker</a></li>

                            </ul>
                        </li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
