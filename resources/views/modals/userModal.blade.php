<script>

	
	$(document).ready(function(){
/*		$.ajaxSetup({
		  headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});*/
		$(document).on('click','.btnEdit',function () {
			var id = $(this).find('#userId').val();
						
			$('#title').text('Edit User');
			$('#deleteUser').show('400');
			$('#saveUser').show('400');
			$('#addUser').hide();
			$('#idUser').val(id);
	
			console.log(id);
		});


		$(document).on('click','#addNewUser', function(event){
			$('#title').text('Add New User');
			$('#deleteUser').hide();
			$('#saveUser').hide();
			$('#addUser').show('400');
		});

		$('#addUser').click(function(event){
			var username = $('#txtusername').val();
			var fullname = $('#txtfullname').val();
			var password = $('#txtpassword').val();
			var usertype = 2;
			if(username==""){
				alert('Invalid input');
			}else{
				$.post('user', {'username': username,  'fullname': fullname, 'password': password, 'usertype': usertype, '_token':$('input[name=_token]').val()}, function(data) {
					console.log(username + fullname + password);
					$('#users').load(location.href + ' #users');
				});

			}
		});	

		$('#deleteUser').click(function(event){
			var idU = $("#idUser").val();
			$.post('user/delete',{'id': idU, '_token':$('input[name=_token]').val()}, function(data){
				console.log(data);
				$('#users').load(location.href + ' #users');
			});

		});

		$('#saveUser').click(function(event){
			var idU = $("#idUser").val();
			var username = $("#txtusername").val();
			var fullname = $("#txtfullname").val();
			var password = $("#txtpassword").val();
			var usertype = 2;

			$.post('user/update',{'id': idU, 'username': username,  'fullname': fullname, 'password': password, 'usertype': usertype, '_token':$('input[name=_token]').val()}, function(data){
				console.log(data);
				$('#users').load(location.href + ' #users');
			});

		});	

	});
</script>