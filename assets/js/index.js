window.onload = function() {
	var logn = document.getElementById("loginBtn");
	logn.addEventListener("click", function(event) {
		event.preventDefault();
		if ($("#form-username") == '') {
			alert("Enter username ");
			$("#form-username").css("borderColor", "#19b9e7");
		} else if ($("#form-password") == '') {
			alert("Enter password ");
			$("#form-password").css("borderColor", "#19b9e7");
		}
		else{
		$.ajax({
			url: "/Egov-proj/assets/php/validation.php",
			type: "POST",
			data: $("#login-form").serialize(),
			success: function(result) {
				var data=JSON.parse(result);
				var data2=JSON.stringify(data);
				console.log ("Success "+result);
				console.log(data2);
				if (data.hasOwnProperty("id") && data.id=="Error")
				{
					if (data.result=="Please fill both username and password")
					{
						$("#word").html("<h3 style='color:white'>Please fill both username and password<h3>");
					}
					else if(data.result=="Failed to populate login table")
					{
						$("#word").html("<h3 style='color:white'>Failed to populate login table</h3>");
					}
					else if(data.result=="User name not found")
					{
						$("#word").html("<h3 style='color:white'>User name not found</h3>");
					}
					else if(data.result=="Issue with password")
					{
						$("#word").html("<h3 style='color:white'>Issue with password</h3>");
					}
				}
				else if (data.hasOwnProperty("id") && data.id=="Success")
				{
					if (data.result=="Contact Manager"){
						$("#word").html("<h3 style='color:white'>Inserted into log in table but issue redirecting</h3>");
					}
					else{
						$("#word").html("<h3 style='color:white'>Issue redirecting, contact manager</h3>");
					}
				}
				else if (data.result=="Programmer"){
					window.location.href="ptemplate.html";
				}
				else if (data.result=="Manager"){
					window.location.href="mtemplate.html";
				}
			},
			error: function() {
				console.log ("Error "+data2);
			}
		});
	}
	});
};