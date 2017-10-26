@include('components.header')
	    
	</head>

  	<body>
    	@include ('components.navheader')

	    <div class="container-fluid">
	    	
	    	@include('components.navside')
			<div class="row">
				<main class="col-sm-12 ml-sm-auto col-md-15 pt-3" role="main">
	    			@yield('content')
	    		</main>
	    	</div>
	    </div>
	        <!-- @include('components.analytics') -->

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>



		<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>

		@include ('modals.userModal')
	</body>
</html>
