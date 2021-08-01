	
		function valpassword(str)
		{
			var errorstring ="";
			var oldpass = document.getElementById('oldpass').value;
			var newpass = document.getElementById('newpass').value;
			var newpass1 = document.getElementById('newpass1').value;
			

			if((oldpass == "") || ((newpass == "") || (newpass1 == "")))
				errorstring = errorstring + "Please enter all the fields<br>";
						
			if(newpass != newpass1)
				errorstring = errorstring + "The new passwords do not match";
			
			if(errorstring != "")
			{
				document.getElementById("card-body").innerHTML = '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Error!</strong><br>'+ errorstring +'</div>';
				return false;
			}
			else
			{
				document.getElementById("card-body").innerHTML = "";
				return true;
			}
		}
		
