function verifyemail(str)
		{
			var email=str;
			$.ajax({
				type: 'post',
				async: false,
				url: 'verifyajax.php',
				data: {user_email:email,},
				success: function (response) {
					data = response;
					callback.call(data);
				},
				error: function () {}
			});
			return data; // return 
		}
		
		function verifypan(str)
		{
			var pancard=str;
			$.ajax({
				type: 'post',
				async: false,
				url: 'verifyajax.php',
				data: {user_pan:pancard,},
				success: function (resp) {
					datapan = resp;
					callback.call(datapan);
				},
				error: function () {}
			});
			return datapan; // return 
		}
		
		
		function valdonor()
		{
			var errorstring ="";
			var fname = document.getElementById('fname').value;
			var mname = document.getElementById('mname').value;
			var lname = document.getElementById('lname').value;
			var address1 = document.getElementById('address').value;
			var district = document.getElementById('district');
			// var districtval = district.options[district.selectedIndex].value;
			var city = document.getElementById('city').value;
			var mobile = document.getElementById('mobile').value;
			var altmobile = document.getElementById('altmobile').value;
			var altnumber = document.getElementById('altnumber').value;
			var email = document.getElementById('email').value;
			var pancard = document.getElementById('pancard').value;
			// var iscompany = document.getElementById('iscompany').checked;
			var donorcat = document.getElementById('donorcat');
			var donorcatval = donorcat.options[donorcat.selectedIndex].value;
			var details = document.getElementById('details').value;

			if((iscompany == true) && ((mname != "") || (lname != "")))
				errorstring = errorstring + "Please do not enter Middle/Last Name for Company <br>";
			
			if(districtval == "")
				errorstring = errorstring + "Please select District from drop down<br>";
			
			if(mobile.length != 10)
				errorstring = errorstring + "Mobile number should only be 10 digits long<br>";
			
			if (mobile != "")
			{
				if(!(/^[0-9]+$/.test(mobile)))  
					errorstring = errorstring + "Please enter only numbers in Mobile field <br>";
			}
			
			if(landline.length > 13)
				errorstring = errorstring + "Landline number cannot be more than 13 digits <br>";
			
			if (landline != "")
			{
				if(!(/^[0-9]+$/.test(landline)))  
					errorstring = errorstring + "Please enter only numbers in landline field <br>";
			}
				
			if(altnumber.length > 13)
				errorstring = errorstring + "Alternate number cannot be more than 13 digits <br>";
			
			if (altnumber != "")
			{
				if(!(/^[0-9]+$/.test(altnumber)))  
					errorstring = errorstring + "Please enter only numbers in altnumber field <br>";
			}
			
			
			if (email != "")
			{
				if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)))  
					errorstring = errorstring + "Please enter a valid email <br>";
				else
				{
					var emailoutput = verifyemail(email);
					errorstring = errorstring + emailoutput;
				}
			}
			
			if (pancard != "")
			{
				if(!(/[A-Z]{5}[0-9]{4}[A-Z]{1}/.test(pancard)))   
					errorstring = errorstring + "Please enter a valid Pan Card <br>";
				else
				{
					var panoutput = verifypan(pancard);
					errorstring = errorstring + panoutput;
				}
			}
			
			
			if(errorstring != "")
			{
				document.getElementById("erroroutput").innerHTML = '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Error!</strong><br>'+ errorstring +'</div>';
				return false;
			}
			else
			{
				document.getElementById("erroroutput").innerHTML = "";
				return true;
			}
		}

		