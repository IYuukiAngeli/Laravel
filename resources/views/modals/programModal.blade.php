<script>

	$(document).ready(function(){
/*		$.ajaxSetup({
		  headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});*/
		$(document).on('click','.btnEdit',function () {
			var id = $(this).find('#programId').val();
						
			$('#title').text('Edit program');
			$('#deleteprogram').show('400');
			$('#saveprogram').show('400');
			$('#addprogram').hide();
			$('#idprogram').val(id);
	
			console.log(id);
		});


		$(document).on('click','#addNewprogram', function(event){
			$('#title').text('Add New program');
			$('#deleteprogram').hide();
			$('#saveprogram').hide();
			$('#addprogram').show('400');
		});

		$('#addprogram').click(function(event){
			var program_code = $('#txtprogramcode').val();
			var program_desc = $('#txtprogramdesc').val();
			if(program_code==""){
				alert('Invalid input');
			}else{
				$.post('program', {'program_code': program_code,  'program_desc': program_desc, '_token':$('input[name=_token]').val()}, function(data) {
					console.log(program_code + program_desc );
					$('#programs').load(location.href + ' #programs');
				});

			}
		});	

		$('#deleteprogram').click(function(event){
			var idU = $("#idprogram").val();
			$.post('program/delete',{'id': idU, '_token':$('input[name=_token]').val()}, function(data){
				console.log(data);
				$('#programs').load(location.href + ' #programs');
			});

		});

		$('#saveprogram').click(function(event){
			var idU = $("#idprogram").val();
			var program_code = $("#txtprogramcode").val();
			var program_desc = $("#txtprogramdesc").val();

			$.post('program/update',{'id': idU, 'program_code': program_code,  'program_desc': program_desc, '_token':$('input[name=_token]').val()}, function(data){
				console.log(data);
				$('#programs').load(location.href + ' #programs');
			});

		});	

	});
</script>