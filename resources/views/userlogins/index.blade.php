@include('components/header')
</head>
<body>

	@include('components.navheader')

    <div class="container-fluid">
    	<div class="row">
        	<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 main">
        		<div class="col-sm-10"></div>
         		<div class="panel panel-primary">
					<div class="panel-heading">
						<strong> Login</strong>
					</div>
					<div class="panel-body">
						<form method="POST" action="/userlogins">

							{{ csrf_field() }}
							<label class="control-label">
								Username:
							</label>
							<input type="text" id="txtusername" class="form-control" />
							<label class="control-label">
								Password:
							</label>
							<input type="password" id="txtpassword" class="form-control" />
							<br/>
							<input type="Submit" Value="Login" name="btnsubmit" class="btn btn-primary"/>
					
							<input type="Reset" Value="Clear" class="btn btn-danger"/>
						</form>
						</div>
					</div>
        	</div>
      	</div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
