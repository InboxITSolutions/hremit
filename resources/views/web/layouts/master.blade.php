<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		@yield('title')
	</title>
	@include('web.includes.header')
</head>
<body>
	@include('web.includes.navigation')
	<div class="main-container">
		@yield('content')
	</div>
	@include('web.includes.footer')
</body>
</html>