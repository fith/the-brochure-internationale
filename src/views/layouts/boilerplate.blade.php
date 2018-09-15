<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>HTML5 boilerplate – all you really need…</title>

    @include('components.materializecss')
    @include('components.basicscroll')
    @include('components.fonts')

    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script src="js/app.min.js"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

    @include('sections.navbar')

    @yield('body')
    
    @include('sections.footer')

</body>
</html>