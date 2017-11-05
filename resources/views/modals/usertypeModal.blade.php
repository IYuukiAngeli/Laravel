<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('click','.btnEdit',function () {
			var id = $("#usertypeId").val();
			$.post('usertype/show', {'id': id, '_token':$('input[name=_token]').val()}, function(data){
				console.log(data);

				$('#usertypes').load(location.href + ' #usertypes');
			});

		});


		$('#addUsertype').click(function(event){
			var usertype_code = $('#txtusertypecode').val();
			var usertype_desc = $('#txtusertypedesc').val();
			var created_by = $('#userName').val();
			if(usertype_code == "" || usertype_desc == ""){
				alert('Invalid input');
			}else{
				$.post('usertype', {'usertype_code': usertype_code,  'usertype_desc': usertype_desc, 'created_by': created_by, '_token':$('input[name=_token]').val()}, function(data) {
					console.log(usertype_code + usertype_desc);
					$('#usertypes').load(location.href + ' #usertypes');
				});

			}
		});	

		$('#deleteUsertype').click(function(event){
			var idU = $("#idusertype").val();
			$.post('usertype/delete',{'id': idU, '_token':$('input[name=_token]').val()}, function(data){
				console.log(data);
				$('#usertypes').load(location.href + ' #usertypes');
			});

		});

		$('#saveUsertype').click(function(event){
			var idU = $("#idusertype").val();
			var usertype_code = $("#txtusertypecode").val();
			var usertype_desc = $("#txtusertypedesc").val();

			$.post('usertype/update',{'id': idU, 'usertype_code': usertype_code,  'usertype_desc': usertype_desc, '_token':$('input[name=_token]').val()}, function(data){
				console.log(data);
				$('#usertypes').load(location.href + ' #usertypes');
			});

		});	

	});
</script>