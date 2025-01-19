<!doctype html>
<html lang="en" class="semi-dark">


<!-- Mirrored from codervent.com/rukada/demo/vertical/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jul 2023 12:00:54 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?php echo e(url('frontend/assets/images/favicon-32x32.')); ?>" type="image/png"/>
	<!--plugins-->
	<link href="<?php echo e(url('frontend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet"/>
	<link href="<?php echo e(url('frontend/assets/plugins/simplebar/css/simplebar.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(url('frontend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(url('frontend/assets/plugins/metismenu/css/metisMenu.min.css')); ?>" rel="stylesheet"/>
	<!-- loader-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link href="<?php echo e(url('frontend/assets/css/pace.min.css')); ?>" rel="stylesheet"/>
	
	<script src="<?php echo e(url('frontend/assets/js/pace.min.js')); ?>"></script>
	<!-- Bootstrap CSS -->
	<link href="<?php echo e(url('frontend/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(url('frontend/assets/css/bootstrap-extended.css')); ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="<?php echo e(url('frontend/assets/css/app.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(url('frontend/assets/css/icons.css')); ?>" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="<?php echo e(url('frontend/assets/css/dark-theme.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(url('frontend/assets/css/semi-dark.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(url('frontend/assets/css/header-colors.css')); ?>"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<title>Khyber Pinda Restaurant</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="<?php echo e(url('frontend/assets/images/logo-icon.png')); ?>" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Khybar Pinda</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="home" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					<ul>
						<li> <a href="vmonthlyForm"><i class='bx bx-radio-circle'></i>Monthly Customer</a>
						</li>
						<li> <a href="Voncash"><i class='bx bx-radio-circle'></i>Cash Customer </a>
						</li>
						<li> <a href="Vcosts"><i class='bx bx-radio-circle'></i>Restaurant Costs</a>
						</li>
						<li> <a href="curduserhome"><i class='bx bx-radio-circle'></i>Update Home</a>
						</li>
                        <li> <a href="Vourteam"><i class='bx bx-radio-circle'></i>Our team</a>
						</li>
                    </li>
                    <li> <a href="Vgallery"><i class='bx bx-radio-circle'></i> Gallery</a>
                    </li>
                        </li>
                        <li>
                            <a href="vallmenu"><i class='bx bx-radio-circle'></i> Menu</a>

                        </li>
                        <li>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="checkorder" id="seeUserContactsLink">
                                    <i class="bx bx-radio-circle"></i>Order
                                </a>
                                <?php if(Session::has('new_order_count')): ?>
                                    <div class="new-contact-notification bg-danger text-white rounded-circle">
                                        <?php echo e(session('new_order_count')); ?>

                                        <script>
                                            document.getElementById('seeUserContactsLink').addEventListener('click', function() {
                                                <?php
                                                    Session::forget('new_order_count');
                                                ?>
                                            });
                                        </script>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </li>

                        <li>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="seecontect" id="seeUserContactsLink">
                                    <i class="bx bx-radio-circle"></i> User Contacts
                                </a>
                                <?php if(Session::has('new_contacts_count')): ?>
                                    <div class="new-contact-notification bg-danger text-white rounded-circle">
                                        <?php echo e(session('new_contacts_count')); ?>

                                        <script>
                                            document.getElementById('seeUserContactsLink').addEventListener('click', function() {
                                                <?php
                                                    Session::forget('new_contacts_count');
                                                ?>
                                            });
                                        </script>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </li>
					</ul>
				</li>

			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>

					  <div class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
						<input class="form-control px-5" disabled type="search" placeholder="Search">
						<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5"><i class='bx bx-search'></i></span>
					  </div>



					  <div class="top-menu ms-auto">

					</div>
					
						
							
							
								
                                    <!-- Authentication Links -->
                                    <?php if(auth()->guard()->guest()): ?>
                                        <?php if(Route::has('login')): ?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                            </li>
                                        <?php endif; ?>

                                        <?php if(Route::has('register')): ?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                <?php echo e(Auth::user()->name); ?>

                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    <?php echo e(__('Logout')); ?>

                                                </a>

                                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                                    <?php echo csrf_field(); ?>
                                                </form>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                
							</div>
						

					
				</nav>
			</div>
		</header>

		<!--end header -->
        <?php echo e($customwork); ?>

		<!--start page wrapper -->

				<!--start overlay-->
		 <div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->


	<!-- search modal -->
    <div class="modal" id="SearchModal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
		  <div class="modal-content">
			<div class="modal-header gap-2">
			  <div class="position-relative popup-search w-100">
				<input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search" placeholder="Search">
				<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i class='bx bx-search'></i></span>
			  </div>
			  <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="search-list">
				   <p class="mb-1">Html Templates</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action active align-items-center d-flex gap-2 py-1"><i class='bx bxl-angular fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vuejs fs-4'></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-magento fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-shopify fs-4'></i>eCommerce Html Templates</a>
				   </div>
				   <p class="mb-1 mt-3">Web Designe Company</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-windows fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-dropbox fs-4' ></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-opera fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-wordpress fs-4'></i>eCommerce Html Templates</a>
				   </div>
				   <p class="mb-1 mt-3">Software Development</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-mailchimp fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-zoom fs-4'></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-sass fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vk fs-4'></i>eCommerce Html Templates</a>
				   </div>
				   <p class="mb-1 mt-3">Online Shoping Portals</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-slack fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-skype fs-4'></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-twitter fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vimeo fs-4'></i>eCommerce Html Templates</a>
				   </div>
				</div>
			</div>
		  </div>
		</div>
	  </div>
    <!-- end search modal -->

    <?php if(Session::has('new_contacts_count')): ?>
    <script>
        setTimeout(function() {
            <?php
                Session::forget('new_contacts_count');
            ?>
            location.reload(); // Reload the page to hide the notification
        }, 5000); // Hide the notification after 5 seconds
    </script>
<?php endif; ?>






	<!-- Bootstrap JS -->
	<script src="<?php echo e(url('frontend/assets/js/bootstrap.bundle.min.js')); ?>"></script>
	<!--plugins-->
	<script src="<?php echo e(url('frontend/assets/js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(url('frontend/plugins/simplebar/js/simplebar.min.js')); ?>"></script>
	<script src="<?php echo e(url('frontend/plugins/metismenu/js/metisMenu.min.js')); ?>"></script>
	<script src="<?php echo e(url('frontend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')); ?>"></script>
	<script src="<?php echo e(url('frontend/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
    <script src="<?php echo e(url('frontend/plugins/vectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
	<script src="<?php echo e(url('frontend/plugins/chartjs/js/chart.js')); ?>"></script>
	<script src="<?php echo e(url('frontend/plugins/sparkline-charts/jquery.sparkline.min.js')); ?>"></script>
	<script src="<?php echo e(url('frontend/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')); ?>"></script>
	<script src="<?php echo e(url('frontend/assets/plugins/jquery-knob/excanvas.js')); ?>"></script>
	<script src="<?php echo e(url('frontend/assets/plugins/jquery-knob/jquery.knob.js')); ?>"></script> -
	<script>
		  $(function() {
			  $(".knob").knob();
		  });
	</script>
	
	<!--app JS-->
	
	
</body>


<!-- Mirrored from codervent.com/rukada/demo/vertical/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jul 2023 12:02:05 GMT -->
</html>
<?php /**PATH J:\kpr\resources\views/components/layout.blade.php ENDPATH**/ ?>