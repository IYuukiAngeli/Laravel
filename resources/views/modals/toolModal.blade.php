<script type="text/javascript">

	$(document).ready(function(){
		var id = '';
		$(document).on('click','.btnEdit',function () {
			id = $(this).attr('data-id');
			$("#txtedittoolcode").val($('#tool-code-'+id).text());
			$("#txtedittooldesc").val($('#tool-desc-'+id).text());
			$("#txtedittoolfile").val($('#tool-file-'+id).text());
		});

		$('#addTool').click(function(event){
			var tool_code = $('#txttoolcode').val();
			var tool_desc = $('#txttooldesc').val();
			var tool_file = $('#txttoolfile').val();
			console.log(tool_code + tool_desc + tool_file);
			if(tool_code=="" || tool_desc==""){
				alert('Invalid input');
			}else{
				$.post('tool', {'tool_code': tool_code,  'tool_desc': tool_desc, 'tool_file' : tool_file, '_token':$('input[name=_token]').val()}, function(data) {
					$('#tools').load(location.href + ' #tools');
				});

			}
		});	

		$('#deleteTool').click(function(event){
			
			$.post('tool/delete',{'id': id, '_token':$('input[name=_token]').val()}, function(data){
				console.log(data);
				$('#tools').load(location.href + ' #tools');
			});

		});

		$('#saveTool').click(function(event){
		
			var tool_code = $("#txtedittoolcode").val();
			var tool_desc = $("#txtedittooldesc").val();

			$.post('tool/update',{'id': id, 'tool_code': tool_code,  'tool_desc': tool_desc, 'too_file' : tool_file , '_token':$('input[name=_token]').val()}, function(data){
				console.log(data);
				$('#tools').load(location.href + ' #tools');
			});

		});	

	});
</script>