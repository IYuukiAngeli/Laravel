<script type="text/javascript">
	$(document).ready(function(){
		var id = '';

		$(document).on('click','.btnEdit',function () {
			id = $(this).attr('data-id');
			$("#txteditusertypecode").val($('#usertype-code-'+id).text());
			$("#txteditusertypedesc").val($('#usertype-desc-'+id).text());
		});


		$('#addUsertype').click(function(event){
			var usertype_code = $('#txtusertypecode').val();
			var usertype_desc = $('#txtusertypedesc').val();
			var created_by = $('#userName').val();

			if(usertype_code == "" || usertype_desc == ""){
				alert('Invalid input');
			}else{
				$.post('usertype', {'usertype_code': usertype_code,  'usertype_desc': usertype_desc, 'created_by': created_by, '_token':$('input[name=_token]').val()}, function(data) {
				$('#usertypes').load(location.href + ' #usertypes');
				});

			}
		});	

		$('#deleteUsertype').click(function(event){
			$.post('usertype/delete',{'id': id, '_token':$('input[name=_token]').val()}, function(data){
				$('#usertypes').load(location.href + ' #usertypes');
			});

		});

		$('#saveUsertype').click(function(event){
			var usertype_code = $("#txteditusertypecode").val();
			var usertype_desc = $("#txteditusertypedesc").val();
			var edited_by = $('#userName').val();

			$.post('usertype/update',{'id': id, 'usertype_code': usertype_code,  'usertype_desc': usertype_desc, 'edited_by': edited_by, '_token':$('input[name=_token]').val()}, function(data){
				$('#usertypes').load(location.href + ' #usertypes');
			});

		});	

	});
</script>