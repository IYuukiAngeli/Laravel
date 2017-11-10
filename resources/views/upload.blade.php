<!DOCTYPE html>
<html>
<head>
	<title>testing</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<form method="POST" enctype="multipart/form-data" action="{{ route('upload.store') }}">
	    {{ csrf_field() }}
	       <div class="modal-body">
	        <div class="container">
	            <div class="row">
	                <div class="row form-group">
	                    <div class="col-sm-1">
	                        <h5 > Tool Code: </h5>
	                    </div>
	                    <div class="col-sm-5">
	                        <input type="text" name = "txttoolcode" class="form-control" />
	                    </div>
	                </div>
	                <div class="row form-group">
	                    <div class="col-sm-1">
	                        <h5 > Tool Desc: </h5>
	                    </div>
	                    <div class="col-sm-5">
	                        <input type="text" name ="txttooldesc" class="form-control" />
	                    </div>

	                </div>
	                <div class="row form-group">
	                    <div class="col-sm-1">
	                        <h5 > File: </h5>
	                    </div>
	                    <div class="col-sm-5">                          
	                        <input type="file" id ="toolfile" class="form-control" />
	                    </div>
	                </div>

	        </div>

	    </div>

	    <div class="modal-footer">
	        <input type="Submit" class="btn btn-primary" id="addTool" data-dismiss="modal" value="Add Tool"/>
	    </div>
	</div>
	   
	

	</form>

	
</body>
</html>