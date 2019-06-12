<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="{{ asset('dashboard-style/vendors/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="{{ asset('dashboard-style/vendors/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/nouislider/distribute/nouislider.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/owl.carousel/dist/assets/owl.theme.default.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/summernote/dist/summernote.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/animate.css/animate.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/jstree/dist/themes/default/style.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/chartist/dist/chartist.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/vendors/flaticon/css/flaticon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/vendors/metronic/css/styles.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/vendors/fontawesome5/css/all.min.css') }}" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles -->
		<link href="{{ asset('dashboard-style/assets/demo/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="{{ asset('dashboard-style/assets/demo/base/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->

		<!--begin::Page Vendors Styles -->
		<link href="{{ asset('dashboard-style/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="{{ asset('dashboard-style/assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->

		<!--end::Page Vendors Styles -->
		<link rel="shortcut icon" href="{{ asset('dashboard-style/assets/demo/media/img/logo/favicon.ico') }}" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
        <!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">

						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.html" class="m-brand__logo-wrapper">
										<img alt="" src="assets/demo/media/img/logo/logo_default_dark.png" />
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">

									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>

									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>

						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">

                                        <li class="m-nav__item m-topbar__languages m-dropdown m-dropdown--small m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--mobile-full-width" m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-text">
                                                    <i class="fa fa-user"></i>  {{ Auth::user()->name }}<i class="m-menu__hor-arrow la la-angle-down"></i>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">

													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__item m-nav__item--active">
																	<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="m-nav__link m-nav__link--active">
																		<span class="m-nav__link-icon"><i class="fa fa-door-open"></i></span>
																		<span class="m-nav__link-title m-topbar__language-text m-nav__link-text">Logout</span>
                                                                    </a>
                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                        @csrf
                                                                    </form>
																</li>

															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>

			<!-- END: Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
                    @include('layouts.sidemenu')
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->


					<!-- END: Subheader -->
                    @yield('content')
				</div>
			</div>

			<!-- end:: Body -->

			<!-- begin::Footer -->
			<footer class="m-grid__item		m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2019 &copy; all Rights Reserved  To <a href="https://www.linkedin.com/in/ahmed-abo-zaid/" target="_blank" class="m-link">Ahmed Abo Zaid</a>
							</span>
						</div>

					</div>
				</div>
			</footer>

			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->


		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->



		<!--begin:: Global Mandatory Vendors -->
		<script src="{{ asset('dashboard-style/vendors/jquery/dist/jquery.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/moment/min/moment.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/wnumb/wNumb.js') }}" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="{{ asset('dashboard-style/vendors/jquery.repeater/src/lib.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/jquery.repeater/src/jquery.input.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/jquery.repeater/src/repeater.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/jquery-form/dist/jquery.form.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-switch/dist/js/bootstrap-switch.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-select/dist/js/bootstrap-select.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/typeahead.js/dist/typeahead.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/handlebars/dist/handlebars.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/inputmask/dist/jquery.inputmask.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/nouislider/distribute/nouislider.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/owl.carousel/dist/owl.carousel.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/autosize/dist/autosize.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/clipboard/dist/clipboard.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/ion-rangeslider/js/ion.rangeSlider.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/dropzone/dist/dropzone.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/summernote/dist/summernote.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/markdown/lib/markdown.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/jquery-validation/dist/jquery.validate.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/jquery-validation/dist/additional-methods.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/forms/jquery-validation.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-notify/bootstrap-notify.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/jstree/dist/jstree.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/raphael/raphael.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/morris.js/morris.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/chartist/dist/chartist.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/chart.js/dist/Chart.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/charts/chart.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/vendors/jquery-idletimer/idle-timer.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/waypoints/lib/jquery.waypoints.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/counterup/jquery.counterup.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/es6-promise-polyfill/promise.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/base/sweetalert2.init.js') }}" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle -->
		<script src="{{ asset('dashboard-style/assets/demo/base/scripts.bundle.js') }}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="{{ asset('dashboard-style/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="{{ asset('dashboard-style/assets/app/js/dashboard.js') }}" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
