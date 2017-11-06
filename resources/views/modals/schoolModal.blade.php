<script type="text/javascript">

	$(document).ready(function(){
		var id = '';

		$(document).on('click','.btnEdit',function () {
			id = $(this).attr('data-id');
			$("#txteditschoolcode").val($('#school-code-'+id).text());
			$("#txteditschooldesc").val($('#school-desc-'+id).text());
		});

		
		$('#addSchool').click(function(event){
			var school_code = $('#txtschoolcode').val();
			var school_desc = $('#txtschooldesc').val();
			var created_by = $('#userName').val();
			
			if(school_code==""){
				alert('Invalid input');
			}else{
				$.post('school', {'school_code': school_code, 'school_desc': school_desc, 'created_by': created_by, '_token':$('input[name=_token]').val()}, function(data) {
					$('#schools').load(location.href + ' #schools');
				});

			}
		});	

		$('#deleteSchool').click(function(event){
			$.post('school/delete',{'id': id, '_token':$('input[name=_token]').val()}, function(data){
				$('#schools').load(location.href + ' #schools');
			});
		});

		$('#saveSchool').click(function(event){
			var school_code = $("#txteditschoolcode").val();
			var school_desc = $("#txteditschooldesc").val();
			var edited_by = $('#userName').val();
			$.post('school/update',{'id': id, 'school_code': school_code,  'school_desc': school_desc,'edited_by': edited_by, '_token':$('input[name=_token]').val()}, function(data){
				$('#schools').load(location.href + ' #schools');
			});

		});	

	});
</script>