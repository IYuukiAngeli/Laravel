<script>

	$(document).ready(function(){
/*		$.ajaxSetup({
		  headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});*/
		$(document).on('click','.btnEdit',function () {
			var id = $(this).find('#usertypeId').val();
						
			$('#title').text('Edit usertype');
			$('#deleteusertype').show('400');
			$('#saveusertype').show('400');
			$('#addusertype').hide();
			$('#idusertype').val(id);
	
			console.log(id);
		});


		$(document).on('click','#addNewusertype', function(event){
			$('#title').text('Add New usertype');
			$('#deleteusertype').hide();
			$('#saveusertype').hide();
			$('#addusertype').show('400');
		});

		$('#addusertype').click(function(event){
			var usertype_code = $('#txtusertypecode').val();
			var usertype_desc = $('#txtusertypedesc').val();
			if(usertype_code==""){
				alert('Invalid input');
			}else{
				$.post('usertype', {'usertype_code': usertype_code,  'usertype_desc': usertype_desc, '_token':$('input[name=_token]').val()}, function(data) {
					console.log(usertype_code + usertype_desc);
					$('#usertypes').load(location.href + ' #usertypes');
				});

			}
		});	

		$('#deleteusertype').click(function(event){
			var idU = $("#idusertype").val();
			$.post('usertype/delete',{'id': idU, '_token':$('input[name=_token]').val()}, function(data){
				console.log(data);
				$('#usertypes').load(location.href + ' #usertypes');
			});

		});

		$('#saveusertype').click(function(event){
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