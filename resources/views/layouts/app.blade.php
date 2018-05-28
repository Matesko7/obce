<!DOCTYPE html>
<html>
	<head>
	 <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>OBEC</title>
	 <link rel="stylesheet" href="/css/app.css">
	 <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
	</head>
	<body>
	@include('inc.navbar')
		@yield('content')		
	
	
   <footer class="footer">
      <div class="container">
        @include('inc.footer')
      </div>
    </footer>
	
	</body>
</html>	