<!DOCTYPE html>
<html lang="es">
    <!-- head -->
@include('layout.head')
<body>
	<!-- SideBar -->
	@include('layout.sidebar')

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">

		<!-- NavBar -->
		@include('layout.navbar')

		<!-- Content page -->
		@yield('content')
	</section>

	<!-- Notifications area -->
	@include('layout.notifications')

	<!-- Dialog help -->
	@include('layout.dialog')

	<!--====== Scripts -->
	@include('layout.script')
</body>
</html>