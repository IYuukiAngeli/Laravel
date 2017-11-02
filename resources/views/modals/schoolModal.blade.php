<script>

	$(document).ready(function(){
/*		$.ajaxSetup({
		  headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});*/
		$(document).on('click','.btnEdit',function () {
			var id = $(this).find('#schoolId').val();
						
			$('#title').text('Edit school');
			$('#deleteschool').show('400');
			$('#saveschool').show('400');
			$('#addschool').hide();
			$('#idschool').val(id);
	
			console.log(id);
		});


		$(document).on('click','#addNewschool', function(event){
			$('#title').text('Add New school');
			$('#deleteschool').hide();
			$('#saveschool').hide();
			$('#addschool').show('400');
		});

		$('#addschool').click(function(event){
			var school_code = $('#txtschoolcode').val();
			var school_desc = $('#txtschooldesc').val();
			if(school_code==""){
				alert('Invalid input');
			}else{
				$.post('school', {'school_code': school_code,  'school_desc': school_desc, '_token':$('input[name=_token]').val()}, function(data) {
					console.log(school_code + school_desc );
					$('#schools').load(location.href + ' #schools');
				});

			}
		});	

		$('#deleteprogram').click(function(event){
			var idU = $("#idschool").val();
			$.post('school/delete',{'id': idU, '_token':$('input[name=_token]').val()}, function(data){
				console.log(data);
				$('#schools').load(location.href + ' #schools');
			});

		});

		$('#saveschool').click(function(event){
			var idU = $("#idschool").val();
			var school_code = $("#txtschoolcode").val();
			var school_desc = $("#txtschooldesc").val();

			$.post('school/update',{'id': idU, 'school_code': school_code,  'school_desc': school_desc, '_token':$('input[name=_token]').val()}, function(data){
				console.log(data);
				$('#schools').load(location.href + ' #schools');
			});

		});	

	});
</script>