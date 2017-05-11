<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Zwolek">
	<link rel="icon" href="../img/favicon.ico">
	<title>Vega Admin</title>
	<!-- Plugins Styles -->
	<link href="/assets/admin/css/plugins.min.css" rel="stylesheet">
	<!-- Core Styles -->
	<link href="/assets/admin/css/app.min.css" rel="stylesheet">
</head>

<body class="style">

<!-- ////////// Preloader //////////-->
<div id="preloader"></div>

<!-- ////////// Header ////////// -->
<div id="header" class="">
	
	<div class="header-left">
		<button id="mobile-menu" class="mobile hamburger hamburger--squeeze is-active" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span> <!-- /hamburger-box -->
		</button> <!-- /hamburger -->
		<div id="brand">
			<a href="../index.html" class="brand-wrapper">
				<img src="/assets/admin/img/logo.png" class="img-fluid" alt="">
				<span class="title">Vega</span>
			</a> <!-- /brand-wrapper -->
		</div> <!-- /brand -->
		<button id="mobile-btn" type="button" class="btn"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
	</div> <!-- /header-left -->

	<div class="header-toggle">
	<div class="header-content header-hidden">   
	
	<div class="left">

		<button id="menu-btn" class="hamburger hamburger--squeeze is-active" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span> <!-- /hamburger-box -->
		</button> <!-- /hamburger -->

	</div> <!-- /left -->
	
	<div class="right">

		<div class="input-group">
			<input id="search" type="text" class="form-control" placeholder="Search for...">
			<span class="input-group-btn">
			  <button id="search-btn" class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</span> <!-- /input-group-btn -->
		</div> <!-- /input-group -->

		<ul class="nav">
	
			<li class="nav-item hidden-sm-down"><button id="btn-slide" class="btn"><i class="fa fa-cog" aria-hidden="true"></i></button></li>

			<!-- alerts -->
			<li class="nav-item alerts dropdown">

			<a class="dropdown-toggle mobile-link" href="#" id="notification_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i id="icon-notification" class="fa fa-bell" aria-hidden="true"></i>
				<span class="status status-pulse hidden-sm-down"></span>
				<span class="hidden-md-up">Notifications</span>
			</a> <!-- /dropdown-toggle -->

			<div class="dropdown-menu">

			  <div class="dropdown-title">latest notifications
				<button type="button" id="btn-mute" class="btn"><i class="fa fa-bell-slash" aria-hidden="true"></i>
				</button></div>

				<div class="notifications-scroll">

					<!--  item 1 -->
					<div class="list-group-item">
						<a href="#" class="item">
							<div class="item-media">
								<img src="../img/notification/1.jpg" class="img-flex" alt="">
							</div> <!-- /item-media -->
							<div class="item-content">
								<p><strong>Anna Moe</strong> share your post: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, optio.</p>
								<div class="info"> 1 min ago</div>
							</div> <!-- /item-content -->
						</a> <!-- /item -->
					</div> <!-- /list-group-item -->               

					<!--  item 2 -->
					<div class="list-group-item">
						<a href="#" class="item">
							<div class="item-media"> 
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</div> <!-- /item-media -->
							<div class="item-content">
								<p>You have new follow on twitter.</p>
								<div class="info"> 15 min ago</div>
							</div> <!-- /item-content -->
						</a> <!-- /item -->
					</div> <!-- /list-group-item -->               

					<!--  item 3 -->
					<div class="list-group-item">
						<a href="#" class="item">
							<div class="item-media"> 
								<img src="../img/notification/2.jpg" class="img-flex" alt="">
							</div> <!-- /item-media -->
							<div class="item-content">
								<p><strong>Dennis Willson</strong> share your post: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, optio.</p>
								<div class="info"> 30 min ago</div>
							</div> <!-- /item-content -->
						</a> <!-- /item -->
					</div> <!-- /list-group-item -->               

					<!--  item 4 -->
					<div class="list-group-item">
						<a href="#" class="item success">
							<div class="item-media"> 
								<i class="fa fa-check" aria-hidden="true"></i>
							</div> <!-- /item-media -->
							<div class="item-content">
								<p><strong>Success:</strong> Your file is upload on server</p>
								<div class="info"> 45 min ago</div>
							</div> <!-- /item-content -->
						</a> <!-- /item -->
					</div> <!-- /list-group-item -->              

					<!--  item 5 -->
					<div class="list-group-item">
						<a href="#" class="item">
							<div class="item-media"> 
								<img src="../img/notification/3.jpg" class="img-flex" alt="">
							</div> <!-- /item-media -->
							<div class="item-content">
								<p><strong>Matthew Bond</strong> share your post: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, optio.</p>
								<div class="info"> 1 hour ago</div>
							</div> <!-- /item-content -->
						</a> <!-- /item -->
					</div> <!-- /list-group-item -->               

					<!--  item 6 -->
					<div class="list-group-item">
						<a href="#" class="item warning">
							<div class="item-media"> 
								<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
							</div> <!-- /item-media -->
							<div class="item-content">
								<p><strong>Warning!</strong> DDos attack on servers.</p>
								<div class="info"> 1 hour 15 min ago</div>
							</div> <!-- /item-content -->
						</a> <!-- /item -->
					</div> <!-- /list-group-item -->

				</div> <!-- /notifications-scroll -->

				<div class="dropdown-footer">
					<a href="#" class="all">see all</a>
				</div> <!-- /dropdown-footer -->

			</div> <!-- /dropdown-menu -->

			</li> <!-- /alerts -->              

			<!-- profile -->
			<li class="nav-item profile dropdown hidden-sm-down">
			<a class="dropdown-toggle" href="#" id="profile_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="../img/profile/profile-header.jpg" class="img-fluid" alt="">
			</a> <!-- /dropdown-toggle -->
				<div class="dropdown-menu" aria-labelledby="profile_dropdown">
					<div class="profile-detalis ">
						<div class="profile-img">
							<img src="../img/profile/profile-drop.jpg" class="img-fluid" alt="">
						</div> <!-- /profile-img -->
						<a class="dropdown-item profile-name" href="#">Matthew Doe</a>
						<div class="profile-links">
							<a href="#" class="link">Edit Image </a>
							<a href="#" class="link">View Profile</a>   
						</div> <!-- /profile-links -->
					</div> <!-- /profile-detalis -->                      
					<a class="dropdown-item single-link" href="#">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						Inbox
					</a> <!-- /dropdown-item -->                           
					<a class="dropdown-item single-link" href="#">
						<i class="fa fa-lock" aria-hidden="true"></i>
						Lockscreen
					</a> <!-- /dropdown-item -->     
					<div class="dropdown-divider"></div>            
					<a class="dropdown-item single-link" href="#">
						<i class="fa fa-sign-out" aria-hidden="true"></i>
						Sign Out
					</a> <!-- /dropdown-item -->           
				</div> <!-- /dropdown-menu -->
			</li> <!-- /profile -->
			
			<li class="nav-item hidden-md-up"><a href="#" class="mobile-link"><i class="fa fa-users" aria-hidden="true"></i>Profile</a></li>
			<li class="nav-item hidden-md-up"><a href="#" id="mobile-slide" class="mobile-link"><i class="fa fa-cog" aria-hidden="true"></i>Settings</a></li>
			<li class="nav-item hidden-md-up"><a href="#" class="mobile-link"><i class="fa fa-envelope" aria-hidden="true"></i>Inbox</a></li>
			<li class="nav-item hidden-md-up"><a href="#" class="mobile-link"><i class="fa fa-sign-out" aria-hidden="true"></i>Sign Out</a></li>

		</ul> <!-- /nav -->
	</div> <!-- /navbar-right -->

	</div> <!-- /header-content -->
	</div> <!-- /header-toggle -->

</div> <!-- /header -->

<!-- ////////// Page ////////// -->
<div id="page">

	<!-- ////////// Left Sidebar ////////// -->
	<div id="left-sidebar" class="">
	<div class="bg"></div>
	<nav id="nav" class="sidebar-nav menu-scroll">

		<ul id="menu" class="side-nav metismenu">
			<!-- header section -->
			<li class="sidebar-header">Menu</li>

			<!-- single link -->
			<li><a href="../index.html" class="collapse"><i class="fa fa-home" aria-hidden="true"></i><span class="drop-header">Home</span></a></li>
			<li><a href="widgets.html" class="collapse"><i class="fa fa-th" aria-hidden="true"></i><span class="drop-header">Widgets</span>
			<div class="badge badge-primary">15</div></a></li>    

			<!-- dropdown -->
			<li class="dropdown">
			<a class="chevron collapse" href="#" aria-expanded="true"><i class="fa fa-sliders" aria-hidden="true"></i>
			<span class="drop-header">Layouts</span></a>  
				<ul class="drop-menu one-drop" aria-expanded="true">
					<li><a href="default-layout.html">Default Header & Sidebar</a></li>
					<li><a href="hidden-sidebar.html">Hidden Sidebar</a></li>
					<li><a href="fixed-header.html">Fixed Header</a></li>
					<li><a href="primary-header.html">Primary Header</a></li>
					<li><a href="fixed-sidebar.html">Fixed Header & Sidebar</a></li>
					<li><a href="sticky-sidebar.html">Sticky Sidebar</a></li>
					<li><a href="fixed-footer.html">Fixed Footer</a></li>
				</ul> <!-- /drop-menu -->
			</li> <!-- /dropdown -->  
		  
			<!-- header section -->
			<li class="sidebar-header">Components</li>

			<!-- dropdown -->
			<li class="dropdown">
				<a class="chevron collapse" href="#" aria-expanded="true"><i class="fa fa-magic" aria-hidden="true"></i><span class="drop-header">Ui Elements</span></a>
				<ul class="drop-menu one-drop" aria-expanded="true">
					<li><a href="alerts.html">Alerts</a></li>
					<li><a href="badges.html">Badges</a></li>
					<li><a href="buttons.html">Buttons</a></li>
					<li><a href="cards.html">Cards</a></li>
					<li><a href="grid.html">Grid</a></li>
					<li><a href="lists.html">Lists</a></li>
					<li><a href="modals.html">Modals</a></li>
					<li><a href="navs.html">Navs</a></li>
					<li><a href="popover.html">Popover</a></li>
					<li><a href="progress-bars.html">Progress Bars</a></li>
					<li><a href="spinners.html">Spinners</a></li>
					<li><a href="sweet-alert.html">Sweet Alert 2</a></li>
					<li><a href="tooltips.html">Tooltips</a></li>
					<li><a href="typography.html">Typography</a></li>
				</ul> <!-- /drop-menu -->
			</li> <!-- /dropdown -->         

			<!-- dropdown -->
			<li class="dropdown">
				<a class="chevron collapse" href="#" aria-expanded="true"><i class="fa fa-list" aria-hidden="true"></i><span class="drop-header">Forms</span></a>
				<ul class="drop-menu one-drop" aria-expanded="true">
					<li><a href="basic-forms.html">Basic Forms</a></li>
					<li><a href="dropzone-upload.html">Dropzone Upload</a></li>
					<li><a href="forms-layout.html">Forms Layout</a></li>
					<li><a href="forms-mask.html">Forms Mask</a></li>
					<li><a href="forms-upload.html">Forms Upload</a></li>
					<li><a href="forms-validation.html">Forms Validation</a></li>
					<li><a href="wysiwyg-editor.html">Wysiwyg Editor</a></li>
				</ul> <!-- /drop-menu -->
			</li> <!-- /dropdown -->         

			<!-- dropdown -->
			<li class="dropdown">
				<a class="chevron collapse" href="#" aria-expanded="true"><i class="fa fa-suitcase" aria-hidden="true"></i><span class="drop-header">Material Design</span></a>
				<ul class="drop-menu one-drop" aria-expanded="true">
					<li><a href="material-forms.html">Basic Forms</a></li>
					<li><a href="material-buttons.html">Buttons</a></li>
					<li><a href="material-forms-validation.html">Forms Validation</a></li>
					<li><a href="material-icons.html">Material Icons</a></li>
					<li><a href="material-progress-bar.html">Progress Bar</a></li>
				</ul> <!-- /drop-menu -->
			</li> <!-- /dropdown -->         

			<!-- dropdown -->
			<li class="dropdown">
				<a class="chevron collapse" href="#" aria-expanded="true"><i class="fa fa-font" aria-hidden="true"></i><span class="drop-header">Icons</span></a>
				<ul class="drop-menu one-drop" aria-expanded="true">
					<li><a href="font-awesome.html">Font Awesome</a></li>
					<li><a href="ionicons.html">Ionicons</a></li>
					<li><a href="weather-icons.html">Weather Icons</a></li>
				</ul> <!-- /drop-menu -->
			</li> <!-- /dropdown -->         
			
			<!-- dropdown -->
			<li class="dropdown">
				<a class="chevron collapse" href="#" aria-expanded="true"><i class="fa fa-table" aria-hidden="true"></i><span class="drop-header">Tables</span></a>
				<ul class="drop-menu one-drop" aria-expanded="true">
					<li><a href="basic-tables.html">Basic Tables</a></li>
					<li><a href="data-tables.html">DataTables</a></li>     
					<li><a href="responsive-tables.html">Responsive Tables</a></li>
				</ul> <!-- /drop-menu -->
			</li> <!-- /dropdown -->         

			<!-- dropdown -->
			<li class="dropdown">
				<a class="chevron collapse" href="#" aria-expanded="true"><i class="fa fa-line-chart" aria-hidden="true"></i><span class="drop-header">Charts</span></a>
				<ul class="drop-menu one-drop" aria-expanded="true">
					<li><a href="chart-js.html">Chart.js</a></li>     
					<li><a href="flot-js.html">Flot.js</a></li>
					<li><a href="morris-js.html">Morris.js</a></li>     
				</ul> <!-- /drop-menu -->
			</li> <!-- /dropdown -->         

			<!-- dropdown -->
			<li class="dropdown">
				<a class="chevron collapse" href="#" aria-expanded="true"><i class="fa fa-map" aria-hidden="true"></i><span class="drop-header">Maps</span></a>
				<ul class="drop-menu one-drop" aria-expanded="true">
					<li><a href="google-maps.html">Google Maps</a></li>
					<li><a href="vector-maps.html">Vector Maps</a></li>     
				</ul> <!-- /drop-menu -->
			</li> <!-- /dropdown -->    

			<!-- header section -->
			<li class="sidebar-header">Pages</li>

			<!-- dropdown -->
			<li class="dropdown">
				<a class="chevron collapse" href="#" aria-expanded="true"><i class="fa fa-lock" aria-hidden="true"></i><span class="drop-header">Authentication</span></a>
				<ul class="drop-menu one-drop" aria-expanded="true">
					<li><a href="forgot-password.html">Forgot Password</a></li>     
					<li><a href="forgot-password2.html">Forgot Password 2</a></li>     
					<li><a href="lockscreen.html">Lockscreen</a></li>
					<li><a href="lockscreen2.html">Lockscreen 2</a></li>
					<li><a href="sign-in.html">Sign in</a></li>
					<li><a href="sign-in2.html">Sign in 2</a></li>
					<li><a href="register.html">Register</a></li>
					<li><a href="register2.html">Register 2</a></li>
				</ul> <!-- /drop-menu -->
			</li> <!-- /dropdown -->  

			<!-- dropdown -->
			<li class="dropdown">
				<a class="chevron collapse" href="#" aria-expanded="true"><i class="fa fa-envelope" aria-hidden="true"></i><span class="drop-header">Inbox</span></a>
				<ul class="drop-menu one-drop" aria-expanded="true">
					<li><a href="inbox.html">Inbox</a></li>
					<li><a href="message-detalis.html">Message Detalis</a></li>
					<li><a href="create-message.html">Create Message</a></li>     
				</ul> <!-- /drop-menu -->
			</li> <!-- /dropdown -->    

			<!-- dropdown -->
			<li class="dropdown">
				<a class="chevron collapse active" href="#" aria-expanded="true"><i class="fa fa-external-link" aria-hidden="true"></i><span class="drop-header">Other Pages</span></a>
				<ul class="drop-menu one-drop" aria-expanded="true">
					<li><a class="active" href="blank-page.html">Blank Page</a></li>     
					<li><a href="profile.html">Profile Page</a></li>     
					<li><a href="403.html">403 Error</a></li>
					<li><a href="404.html">404 Error</a></li>
					<li><a href="500.html">500 Error</a></li>     
				</ul> <!-- /drop-menu -->
			</li> <!-- /dropdown -->    

		</ul> <!-- /menu -->

	</nav> <!-- /sidebar-nav -->

	</div> <!-- /left-sidebar -->

	<!-- ////////// Content ////////// -->
	<div id="content">

		<!-- ////////// Page Title & Breadcrumbs //////////-->
		<div class="row">
			<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<h4>Blank Page</h4>
				 <!-- /breadcrumb -->
				@yield('breadcrumb')
				@yield('content')

			</div> <!-- /col -->
		</div> <!-- /row -->

	</div> <!-- /content -->
	
	<!-- ////////// Right Sidebar ////////// -->
	<div id="right-sidebar">

	<!-- Nav tabs -->
	<ul id="sidebar-tabs" class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" data-toggle="tab" href="#chat" role="tab">chat</a>
		</li> <!-- /nav-item -->

		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#todo" role="tab">todo</a>
		</li> <!-- /nav-item -->
	</ul> <!-- /sidebar-tabs -->

	<!-- Tab panes -->
	<div class="tab-content">

	<div id="chat" class="tab-pane active" role="tabpanel">

		<div class="tab-header">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search">
				<span class="input-group-btn">
					<button class="btn btn-secondary" type="button">
						<i class="fa fa-search" aria-hidden="true"></i>
					</button> <!-- /btn -->
				</span> <!-- input-group-btn -->
			</div> <!-- /input-group -->
		</div> <!-- /tab-header -->
		
		<div class="chat-wrapper">
			<div class="chat-scroll">

				<div class="conversation">
				<h6 class="chat-title">Latest Conversation</h6>
					<a href="#" class="chat-item">
						<div class="chat-media">
							<img src="../img/chat/chat-profile1.jpg" class="rounded-circle" alt="">
						</div> <!-- /chat-media -->
						<div class="chat-message">
							<div class="name">Andrew Doe</div> 
							<div class="status status-online"></div> 
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
						</div> <!-- /chat-message -->
					</a> <!-- /chat-item -->                
					<a href="#" class="chat-item">
						<div class="chat-media">
							<img src="../img/chat/chat-profile2.jpg" class="rounded-circle" alt="">
						</div> <!-- /chat-media -->
						<div class="chat-message">
							<div class="name">Anna Doe</div> 
							<div class="status status-busy"></div> 
							<p>Nunc sit amet ante lobortis</p>
						</div> <!-- /chat-message -->
					</a> <!-- /chat-item -->                     
					<a href="#" class="chat-item">
						<div class="chat-media">
							<img src="../img/chat/chat-profile3.jpg" class="rounded-circle" alt="">
						</div> <!-- /chat-media -->
						<div class="chat-message">
							<div class="name">Barbara Doe</div> 
							<div class="status status-away"></div> 
							<p>Donec suscipit lacus in sem interdum lacinia.</p>
						</div> <!-- /chat-message -->
					</a> <!-- /chat-item -->  
				</div> <!-- /conversation -->
				
				<div class="contact">
				<h6 class="chat-title">Contacts</h6>
					<a href="#" class="chat-item">
						<div class="chat-media">
							<img src="../img/chat/chat-profile4.jpg" class="rounded-circle" alt="">
						</div> <!-- /chat-media -->
						<div class="chat-message">
							<div class="name">Andrew Doe</div> 
							<div class="status status-offline"></div> 
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
						</div> <!-- /chat-message -->
					</a> <!-- /chat-item -->                     
					<a href="#" class="chat-item">
						<div class="chat-media">
							<img src="../img/chat/chat-profile5.jpg" class="rounded-circle" alt="">
						</div> <!-- /chat-media -->
						<div class="chat-message">
							<div class="name">Anna Doe</div> 
							<div class="status status-offline"></div> 
							<p>Nunc sit amet ante lobortis</p>
						</div> <!-- /chat-message -->
					</a> <!-- /chat-item -->                     
					<a href="#" class="chat-item">
						<div class="chat-media">
							<img src="../img/chat/chat-profile6.jpg" class="rounded-circle" alt="">
						</div> <!-- /chat-media -->
						<div class="chat-message">
							<div class="name">Barbara Doe</div> 
							<div class="status status-offline"></div> 
							<p>Donec suscipit lacus in sem interdum lacinia.</p>
						</div> <!-- /chat-message -->
					</a> <!-- /chat-item -->
				</div> <!-- /contact -->

			</div> <!-- /chat-scroll -->
		</div> <!-- /chat-wrapper -->

		<div class="tab-footer">
			<div class="wrapper">  
				<h6>Matthew Doe</h6>
				<div class="dropdown dropup">
					<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="status status-online"></span>Online</button>
					<div class="dropdown-menu">
						<a href="#" class="dropdown-item"><span class="status status-away"></span>Away</a>
						<a href="#" class="dropdown-item"><span class="status status-busy"></span>Busy</a>
						<a href="#" class="dropdown-item"><span class="status status-offline"></span>Offline</a>
						<a href="#" class="dropdown-item"><span class="status status-online"></span>Online</a>
					</div> <!-- /dropdown-menu -->
				</div> <!-- /dropdown -->
			</div> <!-- /wrapper -->
		</div> <!-- /tab-footer -->
		
		<div class="chat-msg">

			<div class="contact-detalis">
				<h6>Andrew Doe</h6>
				<button id="close_chat" class="btn"><i class="fa fa-times" aria-hidden="true"></i></button>
				<p>last active 2 Hours ago</p>
			</div> <!-- /contact-detalis -->
			
			<div class="msg-content">
			<div class="msg-wrapper">
				<div class="msg-scroll">   
					<ul class="list-unstyled">
						<li class="quest">
							<div class="msg">Lorem ipsum.</div>
						</li> <!-- /quest -->      
						<li class="self"> 
							<div class="msg"> Phasellus auctor volutpat ante, ac tincidunt lacus ullamcorper. </div>
						</li> <!-- /self -->               
						<li class="quest">
							<div class="msg"> Aliquam elementum non eget. </div> 
						</li> <!-- /quest -->    
						<li class="self"> 
							<div class="msg"> Cras condimentum. </div> 
						</li> <!-- /self -->                      
					</ul> <!-- /ul -->
				</div> <!-- /msg-scroll -->
			</div> <!-- /msg-wrapper -->
			</div> <!-- /msg-content -->

			<div class="tab-footer">
				<div class="wrapper">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Message">
						<span class="input-group-btn">
							<button class="btn btn-secondary" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
						</span> <!-- /input-group-btn -->
					</div> <!-- /input-group -->
				</div> <!-- /wrapper -->
			</div> <!-- /tab-footer -->  

		</div> <!-- /chat-msg -->

		</div> <!-- /tab-pane -->

		<div class="tab-pane" id="todo" role="tabpanel">

			<div class="tab-header">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Add new task">
					<span class="input-group-btn">
						<button class="btn btn-secondary" type="button">
							<i class="fa fa-plus" aria-hidden="true"></i>
						</button> <!-- /btn -->
					</span> <!-- input-group-btn -->
				</div> <!-- /input-group -->
			</div> <!-- /tab-header -->

			<div class="todo-content">
				<div class="todo-wrapper">
					<div class="todo-scroll">

						<div class="todo-item">
							<h6>Today</h6>
							<div class="form-check">
								<div class="checkbox checkbox-primary">   
									<input id="checkbox01" class="check" type="checkbox"/>
									<label for="checkbox01">Upload images</label>
								</div> <!-- /checkbox -->
							</div> <!-- /form-check -->                        
							<div class="form-check">
								<div class="checkbox checkbox-primary">   
									<input id="checkbox02" class="check" type="checkbox"/>
									<label for="checkbox02">Change password for admin</label>
								</div> <!-- /checkbox -->
							</div> <!-- /form-check -->                        
							<div class="form-check">
								<div class="checkbox checkbox-primary">   
									<input id="checkbox03" class="check" type="checkbox"/>
									<label for="checkbox03">Update database</label>
								</div> <!-- /checkbox -->
							</div> <!-- /form-check -->          
						</div> <!-- /todo-item -->                  

						<div class="todo-item">
							<h6>Done</h6>
							<div class="form-check done">
								<div class="checkbox checkbox-primary">   
									<input id="checkbox04" class="check" type="checkbox"/>
									<label for="checkbox04">Send e-mail for Barbara</label>
								</div> <!-- /checkbox -->
							</div> <!-- /form-check -->                       
							<div class="form-check done">
								<div class="checkbox checkbox-primary">   
									<input id="checkbox05" class="check" type="checkbox"/>
									<label for="checkbox05">Create new database</label>
								</div> <!-- /checkbox -->
							</div> <!-- /form-check -->                        
							<div class="form-check done">
								<div class="checkbox checkbox-primary">   
									<input id="checkbox06" class="check" type="checkbox"/>
									<label for="checkbox06">Add new post</label>
								</div> <!-- /checkbox -->
							</div> <!-- /form-check -->
						</div> <!-- /todo-item -->    

					</div> <!-- /todo-scroll -->
				</div> <!-- /todo-wrapper -->
			</div> <!-- /todo-content -->

		</div> <!-- /tab-pane -->

	</div> <!-- /tab-content -->

	</div> <!-- /right-sidebar -->

</div> <!-- /page -->

<!-- Core Plugins (necessary for Vega plugins)  -->
<script src="/assets/admin/js/app.min.js"></script>
<!-- Custom Scripts -->
<script src="/assets/admin/js/custom.min.js"></script>

</body>
</html>