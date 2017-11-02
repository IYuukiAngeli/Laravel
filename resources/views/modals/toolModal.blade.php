<script>

	$(document).ready(function(){
/*		$.ajaxSetup({
		  headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});*/
		$(document).on('click','.btnEdit',function () {
			var id = $(this).find('#toolId').val();
						
			$('#title').text('Edit tool');
			$('#deletetool').show('400');
			$('#savetool').show('400');
			$('#addtool').hide();
			$('#idtool').val(id);
	
			console.log(id);
		});


		$(document).on('click','#addNewtool', function(event){
			$('#title').text('Add New tool');
			$('#deletetool').hide();
			$('#savetool').hide();
			$('#addtool').show('400');
		});

		$('#addtool').click(function(event){
			var tool_code = $('#txttoolcode').val();
			var tool_desc = $('#txttooldesc').val();
			var tool_file = $('#txttoolfile').val();
			if(tool_code==""){
				alert('Invalid input');
			}else{
				$.post('tool', {'tool_code': tool_code,  'tool_desc': tool_desc, 'tool_file' : tool_file, '_token':$('input[name=_token]').val()}, function(data) {
					console.log(tool_code + tool_desc );
					$('#tools').load(location.href + ' #tools');
				});

			}
		});	

		$('#deletetool').click(function(event){
			var idU = $("#idtool").val();
			$.post('tool/delete',{'id': idU, '_token':$('input[name=_token]').val()}, function(data){
				console.log(data);
				$('#tools').load(location.href + ' #tools');
			});

		});

		$('#savetool').click(function(event){
			var idU = $("#idtool").val();
			var tool_code = $("#txttoolcode").val();
			var tool_desc = $("#txttooldesc").val();

			$.post('tool/update',{'id': idU, 'tool_code': tool_code,  'tool_desc': tool_desc, 'too_file' : tool_file , '_token':$('input[name=_token]').val()}, function(data){
				console.log(data);
				$('#tools').load(location.href + ' #tools');
			});

		});	

	});
</script>