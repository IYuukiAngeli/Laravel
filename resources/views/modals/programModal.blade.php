<script type="text/javascript">

	$(document).ready(function(){
		var id = '';

		$(document).on('click','.btnEdit',function () {
			id = $(this).attr('data-id');
			console.log(id);
			
			$("#txteditprogramcode").val($('#program-code-'+id).text());
			$("#txteditprogramdesc").val($('#program-desc-'+id).text());
		});


		$('#addProgram').click(function(event){
			var program_code = $('#txtprogramcode').val();
			var program_desc = $('#txtprogramdesc').val();
			var created_by = $('#userName').val();

			if(program_code==""){
				alert('Invalid input');
			}else{
				$.post('program', {'program_code': program_code,  'program_desc': program_desc, 'created_by' : created_by, '_token':$('input[name=_token]').val()}, function(data) {
							$('#programs').load(location.href + ' #programs');

				});
			}
		});	

		$('#deleteProgram').click(function(event){
			$.post('program/delete',{'id': id, '_token':$('input[name=_token]').val()}, function(data){
				$('#programs').load(location.href + ' #programs');
			});

		});

		$('#saveProgram').click(function(event){
			var program_code = $("#txteditprogramcode").val();
			var program_desc = $("#txteditprogramdesc").val();
			var edited_by = $('#userName').val();

			$.post('program/update',{'id': id, 'program_code': program_code,  'program_desc': program_desc,'edited_by': edited_by, '_token':$('input[name=_token]').val()}, function(data){
				$('#programs').load(location.href + ' #programs');
			});

		});	

	});
</script>