<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mr erisso - Simple website Template</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <script type="text/javascript"></script>
</head>
<body>

	@yield('navbar')

	<main>
		@yield('content')
	</main>	

	@yield('footer')

</body>
</html>