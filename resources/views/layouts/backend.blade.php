<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<!-- ================== GOOGLE FONTS ==================-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<!-- ======================= GLOBAL VENDOR STYLES ========================-->
	<link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/metismenu/dist/metisMenu.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/switchery-npm/index.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
	<!-- ======================= LINE AWESOME ICONS ===========================-->
	<link rel="stylesheet" href="{{asset('assets/css/icons/line-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/icons/simple-line-icons.css')}}">
	<!-- ======================= DRIP ICONS ===================================-->
	<link rel="stylesheet" href="{{asset('assets/css/icons/dripicons.min.css')}}">
	<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
	<link rel="stylesheet" href="{{asset('assets/css/icons/material-design-iconic-font.min.css')}}">
	<!-- ======================= PAGE VENDOR STYLES ===========================-->
	<link rel="stylesheet" href="{{asset('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
	<!-- ======================= GLOBAL COMMON STYLES ============================-->
	<link rel="stylesheet" href="{{asset('assets/css/common/main.bundle.css')}}">
	<!-- ======================= LAYOUT TYPE ===========================-->
	<link rel="stylesheet" href="{{asset('assets/css/layouts/vertical/core/main.css')}}">
	<!-- ======================= MENU TYPE ===========================-->
	<link rel="stylesheet" href="{{asset('assets/css/layouts/vertical/menu-type/default.css')}}">
	<!-- ======================= THEME COLOR STYLES ===========================-->
    <link rel="stylesheet" href="{{asset('assets/css/layouts/vertical/themes/theme-a.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/sweetalert.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/ico.png') }}" />
    @yield('css')
</head>
<body>
	<!-- START APP WRAPPER -->
	<div id="app">
		<!-- START MENU SIDEBAR WRAPPER -->
        @include('part.side')
		<!-- END MENU SIDEBAR WRAPPER -->
		<div class="content-wrapper">
			<!-- START LOGO WRAPPER -->
            @include('part.nav-mobile')
			<!-- END LOGO WRAPPER -->
			<!-- START TOP TOOLBAR WRAPPER -->
            @include('part.nav-desk')
			<!-- END TOP TOOLBAR WRAPPER -->
			<div class="content">
				<!--START PAGE HEADER -->
				<header class="page-header">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h1 class="separator">Admin Dashboard</h1>
                            @yield('header')
                        </div>
                    </div>
                </header>
				<!--END PAGE HEADER -->
				<!--START PAGE CONTENT -->
				<section class="page-content container-fluid">
					<div class="row">
                        @include('layouts._flash')
                        @yield('content')
                    </div>
                </section>
            <!--END PAGE CONTENT -->
            </div>
        </div>
	</div>
    <!-- END CONTENT WRAPPER -->
    <!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
    <script src="{{asset('assets/vendor/modernizr/modernizr.custom.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/js-storage/js.storage.js')}}"></script>
    <script src="{{asset('assets/vendor/js-cookie/src/js.cookie.js')}}"></script>
    <script src="{{asset('assets/vendor/pace/pace.js')}}"></script>
    <script src="{{asset('assets/vendor/metismenu/dist/metisMenu.js')}}"></script>
    <script src="{{asset('assets/vendor/switchery-npm/index.js')}}"></script>
    <script src="{{asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- ================== PAGE LEVEL VENDOR SCRIPTS ==================-->
    <script src="{{asset('assets/vendor/countup.js/dist/countUp.min.js')}}"></script>
    <script src="{{asset('assets/vendor/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('assets/vendor/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets/vendor/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('assets/vendor/flot.curvedlines/curvedLines.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <!-- ================== GLOBAL APP SCRIPTS ==================-->
    <script src="{{asset('assets/js/global/app.js')}}"></script>
    <!-- ================== PAGE LEVEL SCRIPTS ==================-->
    <script src="{{asset('assets/js/components/countUp-init.js')}}"></script>
    <script src="{{asset('assets/js/cards/counter-group.js')}}"></script>
    <script src="{{asset('assets/js/cards/recent-transactions.js')}}"></script>
    <script src="{{asset('assets/js/cards/monthly-budget.js')}}"></script>
    <script src="{{asset('assets/js/cards/users-chart.js')}}"></script>
    <script src="{{asset('assets/js/cards/bounce-rate-chart.js')}}"></script>
    <script src="{{asset('assets/js/cards/session-duration-chart.js')}}"></script>
    {{-- <script src="{{asset('assets/js/components/sweetalert2.js')}}"></script> --}}
    <script src="{{asset('assets/js/components/sweetalert.min.js')}}"></script>
    <script src="{{ asset('assets/js/delete.js') }}"></script>
    {{--  @include('sweet::alert')  --}}
    {{-- <script> (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-46627904-1', 'authenticgoods.co');
        ga('send', 'pageview');
    </script> --}}
    @yield('js')
    @stack('scripts')
</body>
</html>
