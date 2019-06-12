<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Login Page - 4</title>
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
		<link href="{{ asset('dashboard-style/vendors/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="{{ asset('dashboard-style/vendors/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/nouislider/distribute/nouislider.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/owl.carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/owl.carousel/dist/assets/owl.theme.default.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/animate.css/animate.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/jstree/dist/themes/default/style.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/chartist/dist/chartist.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/vendors/flaticon/css/flaticon.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/vendors/metronic/css/styles.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard-style/vendors/vendors/fontawesome5/css/all.min.css')}}" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles -->
		<link href="{{ asset('dashboard-style/assets/demo/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="{{ asset('dashboard-style/assets/demo/base/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->
		<link rel="shortcut icon" href="{{ asset('dashboard-style/assets/demo/media/img/logo/favicon.ico')}}" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url({{ asset('dashboard-style/assets/app/media/img//bg/bg-2.jpg')}});">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img src="{{ asset('dashboard-style/assets/app/media/img/logos/logo-1.png')}}">
							</a>
						</div>
							<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">Sign In To Admin</h3>
							</div>
							<form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" required autocomplete="current-password">
								</div>
								<div class="m-login__form-action">
									<button  type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">Sign In</button>
								</div>
                            </form>
                            <div class="m-login__form-action">
                                <a href="{{ url('/register') }}">
                                    <button  class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">Cancel</button>
                                </a>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="{{ asset('dashboard-style/vendors/jquery/dist/jquery.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/popper.js/dist/umd/popper.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js-cookie/src/js.cookie.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/moment/min/moment.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/tooltip.js/dist/umd/tooltip.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/perfect-scrollbar/dist/perfect-scrollbar.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/wnumb/wNumb.js')}}" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="{{ asset('dashboard-style/vendors/jquery.repeater/src/lib.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/jquery.repeater/src/jquery.input.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/jquery.repeater/src/repeater.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/jquery-form/dist/jquery.form.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/block-ui/jquery.blockUI.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-switch/dist/js/bootstrap-switch.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-select/dist/js/bootstrap-select.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/select2/dist/js/select2.full.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/typeahead.js/dist/typeahead.bundle.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/handlebars/dist/handlebars.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/inputmask/dist/jquery.inputmask.bundle.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/nouislider/distribute/nouislider.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/owl.carousel/dist/owl.carousel.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/autosize/dist/autosize.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/clipboard/dist/clipboard.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/ion-rangeslider/js/ion.rangeSlider.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/dropzone/dist/dropzone.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/summernote/dist/summernote.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/markdown/lib/markdown.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/jquery-validation/dist/jquery.validate.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/jquery-validation/dist/additional-methods.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/forms/jquery-validation.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/bootstrap-notify/bootstrap-notify.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/toastr/build/toastr.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/jstree/dist/jstree.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/raphael/raphael.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/morris.js/morris.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/chartist/dist/chartist.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/chart.js/dist/Chart.bundle.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/charts/chart.init.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/vendors/jquery-idletimer/idle-timer.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/waypoints/lib/jquery.waypoints.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/counterup/jquery.counterup.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/es6-promise-polyfill/promise.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
		<script src="{{ asset('dashboard-style/vendors/js/framework/components/plugins/base/sweetalert2.init.js')}}" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle -->
		<script src="{{ asset('dashboard-style/assets/demo/base/scripts.bundle.js')}}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts -->
		<script src="{{ asset('dashboard-style/assets/snippets/custom/pages/user/login.js')}}" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
