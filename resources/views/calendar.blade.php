<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Pike Admin - Free Bootstrap 4 Admin Template</title>
		<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
		<meta name="author" content="Pike Web Development - https://www.pikephp.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">
		
		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" />

		<!-- Modernizr -->
		<script src="assets/js/modernizr.min.js"></script>

		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>

		<!-- Moment -->
		<script src="assets/js/moment.min.js"></script>
		
		<!-- BEGIN CSS for this page -->
		<link href="assets/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" /> 
		<style>	
		#external-events .fc-event {
			margin: 10px 0;
			cursor: pointer;
		}
				
		#calendar {
			width: 100%;
		}

		.fc-event {
		font-size: 1em;
		border-radius: 2px;
		border: none;
		padding: 5px;
		}
		
		.fc-day-grid-event .fc-content {
		color: #fff;
		}	
		
		.fc-button {
		background: #eaeaea;
		border: none;
		color: #666b6f;
		margin: 0 3px !important;
		padding: 5px 12px !important;    
		text-transform: capitalize;
		height: auto !important;
		box-shadow: none !important;
		border-radius: 3px !important;    
		}
		
		.fc-state-down, .fc-state-active, .fc-state-disabled {
		background-color: #009ffc !important;
		color: #ffffff !important;
		text-shadow: none !important;
		}
		
		.fc-toolbar h2 {
		font-size: 20px;
		font-weight: 600;
		line-height: 28px;
		text-transform: uppercase;
		}
		
		.fc th.fc-widget-header {
		background: #e6e6e6;
		font-size: 13px;
		text-transform: uppercase;
		line-height: 18px;
		padding: 10px 0px;
		}
		
		.fc-unthemed th, .fc-unthemed td, .fc-unthemed thead, .fc-unthemed tbody, .fc-unthemed .fc-divider, .fc-unthemed .fc-row, .fc-unthemed .fc-popover {
		border-color: #eff1f3;
		}
		</style>
		<!-- END CSS for this page -->
				
</head>

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="index.html" class="logo"><img alt="Logo" src="assets/images/logo.png" /> <span>Admin</span></a>
        </div>

        <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">

						<li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-question-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small>Help and Support</small></h5>
                                </div>

                                <!-- item-->
                                <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Do you want custom development to integrate this theme?</b>
                                        <span>Contact Us</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Do you want PHP version of the theme that save dozens of hours of work?</b>
                                        <span>Try Pike Admin PRO</span>
                                    </p>
                                </a>                               

                                <!-- All-->
                                <a title="Clcik to visit Pike Admin Website" target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item notify-all">
                                    <i class="fa fa-link"></i> Visit Pike Admin Website
                                </a>

                            </div>
                        </li>
						
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">12</span>Contact Messages</small></h5>
                                </div>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Jokn Doe</b>
                                        <span>New message received</span>
                                        <small class="text-muted">2 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Michael Jackson</b>
                                        <span>New message received</span>
                                        <small class="text-muted">15 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Foxy Johnes</b>
                                        <span>New message received</span>
                                        <small class="text-muted">Yesterday, 13:30</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>
                        
						<li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
								<!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">5</span>Allerts</small></h5>
                                </div>
								
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>John Doe</b>
                                        <span>User registration</span>
                                        <small class="text-muted">3 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michael Cox</b>
                                        <span>Task 2 completed</span>
                                        <small class="text-muted">12 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michelle Dolores</b>
                                        <span>New job completed</span>
                                        <small class="text-muted">35 minutes ago</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                    View All Allerts
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="pro-profile.html" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>Logout</span>
                                </a>

								<!-- item-->
                                <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">
                                    <i class="fa fa-external-link"></i> <span>Pike Admin</span>
                                </a>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
								<i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

	</div>
	<!-- End Navigation -->
	
 
	<!-- Left Sidebar -->
	<div class="left main-sidebar">
	
		<div class="sidebar-inner leftscroll">

			<div id="sidebar-menu">
        
			<ul>

					<li class="submenu">
						<a href="index.html"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                    </li>

					<li class="submenu">
                        <a href="charts.html"><i class="fa fa-fw fa-area-chart"></i><span> Charts </span> </a>
                    </li>
					
					<li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								<li><a href="tables-basic.html">Basic Tables</a></li>
								<li><a href="tables-datatable.html">Data Tables</a></li>
							</ul>
                    </li>
										
                    <li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-tv"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-collapse.html">Collapse</a></li>
                                <li><a href="ui-icons.html">Icons</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-tooltips.html">Tooltips and Popovers</a></li>
                            </ul>
                    </li>

					<li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="forms-general.html">General Elements</a></li>
								<li><a href="forms-select2.html">Select2</a></li>
                                <li><a href="forms-validation.html">Form Validation</a></li>
                                <li><a href="forms-text-editor.html">Text Editors</a></li>
								<li><a href="forms-upload.html">Multiple File Upload</a></li>
								<li><a href="forms-datetime-picker.html">Date and Time Picker</a></li>
								<li><a href="forms-color-picker.html">Color Picker</a></li>
                            </ul>
                    </li>
					
                    <li class="submenu">
						<a href="#" class="active"><i class="fa fa-fw fa-th"></i> <span> Plugins </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="star-rating.html">Star Rating</a></li>
								<li><a href="range-sliders.html">Range Sliders</a></li>
								<li><a href="tree-view.html">Tree View</a></li>
								<li><a href="sweetalert.html">SweetAlert</a></li>
								<li class="active"><a href="calendar.html">Calendar</a></li>
								<li><a href="gmaps.html">GMaps</a></li>
								<li><a href="counter-up.html">Counter-Up</a></li>
                            </ul>
                    </li>

					<li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-image"></i> <span> Images and Galleries </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								<li><a href="media-fancybox.html"><span class="label radius-circle bg-danger float-right">cool</span> Fancybox </a></li>								
								<li><a href="media-masonry.html">Masonry</a></li>
								<li><a href="media-lightbox.html">Lightbox</a></li>
								<li><a href="media-owl-carousel.html">Owl Carousel</a></li>
								<li><a href="media-image-magnifier.html">Image Magnifier</a></li>
								
							</ul>
                    </li>
					
                    <li class="submenu">
                        <a href="#"><span class="label radius-circle bg-danger float-right">20</span><i class="fa fa-fw fa-copy"></i><span> Example Pages </span></a>
                            <ul class="list-unstyled">								
                                <li><a href="page-pricing-tables.html">Pricing Tables</a></li>
                                <li><a target="_blank" href="page-coming-soon.html">Countdown</a></li>								
                                <li><a href="page-invoice.html">Invoice</a></li>                        
								<li><a href="page-login.html">Login / Register</a></li>								
								<li><a href="page-blank.html">Blank Page</a></li>
                            </ul>
                    </li>

					<li class="submenu">
                        <a href="#"><span class="label radius-circle bg-primary float-right">9</span><i class="fa fa-fw fa-indent"></i><span> Menu Levels </span></a>
                            <ul>
								<li>
                                    <a href="#"><span>Second Level</span></a>
                                </li>
                                <li class="submenu">
                                    <a href="#"><span>Third Level</span> <span class="menu-arrow"></span> </a>
                                        <ul style="">
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                        </ul>
                                </li>                                
                            </ul>
                    </li>

					<li class="submenu">
                        <a class="pro" href="#"><i class="fa fa-fw fa-star"></i><span> Pike Admin PRO </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">								
                                <li><a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro">Admin PRO features</a></li>
								<li><a href="pro-settings.html">Settings</a></li>
								<li><a href="pro-profile.html">My Profile</a></li>
                                <li><a href="pro-users.html">Users</a></li>
                                <li><a href="pro-articles.html">Articles</a></li>
                                <li><a href="pro-categories.html">Categories</a></li>
								<li><a href="pro-pages.html">Pages</a></li>								
                                <li><a href="pro-contact-messages.html">Contact Messages</a></li>
								<li><a href="pro-slider.html">Slider</a></li>
                            </ul>
                    </li>
					
            </ul>

            <div class="clearfix"></div>

			</div>
        
			<div class="clearfix"></div>

		</div>

	</div>
	<!-- End Sidebar -->


    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">


                        <div class="row">
							<div class="col-xl-12">
								<div class="breadcrumb-holder">
                                    <h1 class="main-title float-left">Calendar</h1>
                                    <ol class="breadcrumb float-right">
										<li class="breadcrumb-item">Home</li>
										<li class="breadcrumb-item active">Calendar</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
							<div class="col-xs-12 col-md-4 col-lg-4 col-xl-3">
								<div class="card-box tilebox-one noradius">
									<div id='external-events'>
									<h4>Draggable Events</h4>
									<p>Drag and drop your event in the calendar</p>
									<div class='fc-event bg-primary'>New meeting</div>
									<div class='fc-event bg-warning'>My Event 2</div>
									<div class='fc-event bg-danger'>My Event 3</div>
									<div class='fc-event bg-primary'>Meeting 2</div>
									<div class='fc-event bg-info'>Task number 2</div>
									<p>
										<input type='checkbox' id='drop-remove' />
										<label for='drop-remove'>remove after drop</label>
									</p>
									<div class="clearfix"></div>
									</div>
								</div>
							</div>	
		
                            <div class="col-xs-12 col-md-8 col-lg-8 col-xl-9">
                                <div class="card-box tilebox-one noradius">
                                    <div id="calendar"></div>
									<div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->




            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<footer class="footer">
		<span class="text-right">
		Copyright <a target="_blank" href="#">Your Website</a>
		</span>
		<span class="float-right">
		Powered by <a target="_blank" href="https://www.pikeadmin.com"><b>Pike Admin</b></a>
		</span>
	</footer>

</div>
<!-- END main -->

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<script>
$(document).ready(function() {
	
		/* initialize the external events
		-----------------------------------------------------------------*/
		$('#external-events .fc-event').each(function() {

			// store data so the calendar knows to render an event upon drop
			$(this).data('event', {
				title: $.trim($(this).text()), // use the element's text as the event title
				stick: true // maintain when user navigates (see docs on the renderEvent method)
			});

			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});

		});

		/* initialize the calendar
		-----------------------------------------------------------------*/
		var date = new Date();
		var d    = date.getDate();
        m    = date.getMonth();
        y    = date.getFullYear();
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				var title = prompt('Event Title:');
				var eventData;
				if (title) {
					eventData = {
						title: title,
						start: start,
						end: end
					};
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
				}
				$('#calendar').fullCalendar('unselect');
			},
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
					{
					  title          : 'All Day Event',
					  start          : new Date(y, m, 2),
					  className: 'bg-primary',
					},
					{
					  title          : 'Long Event',
					  start          : new Date(y, m, d - 4),
					  end            : new Date(y, m, d - 2),
					  className: 'bg-info',
					},
					{
					  title          : 'Meeting John',
					  start          : new Date(y, m, d, 15, 20),
					  allDay         : false,
					  className: 'bg-primary',
					},
					{
					  title          : 'New Task',
					  start          : new Date(y, m, d, 12, 0),
					  end            : new Date(y, m, d, 16, 0),
					  allDay         : false,
					  className: 'bg-danger',
					},
					{
					  title          : 'Birthday Party',
					  start          : new Date(y, m, d + 2, 15, 0),
					  end            : new Date(y, m, d + 2, 20, 40),
					  allDay         : false,
					  className: 'bg-warning',
					},
					{
					  title          : 'Alice Birthday',
					  start          : new Date(y, m, d + 4, 15, 0),
					  end            : new Date(y, m, d + 4, 18, 30),
					  allDay         : false,
					  className: 'bg-info',
					},
					{
					  title          : 'Click for Google',
					  start          : new Date(y, m, 27),
					  end            : new Date(y, m, 28),
					  url            : 'http://google.com/',
					  className: 'bg-danger', 
					}
				
			],
			droppable: true, // this allows things to be dropped onto the calendar
			drop: function() {
		
				if ($('#drop-remove').is(':checked')) {
					// if so, remove the element from the "Draggable Events" list
					$(this).remove();
				}
			}
		});
});
</script>
<!-- END Java Script for this page -->

</body>
</html>