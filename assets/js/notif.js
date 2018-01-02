/* global $ */

window.onload = function(){
	
	$.ajax({
      url: "assets/js/logout.js",
      dataType: "script",
    });
	
    $("#message-form").submit(function(event){
		alert("clicked");
        event.preventDefault();
		if ($("#recipients")==""){
			alert("Enter a username or type all ");
			$("#recipients").css("borderColor", "#19b9e7");
		}
		if ($("#subject")==""){
			alert("Enter a subject ");
			$("#subject").css("borderColor", "#19b9e7");
			if ($("#subject").val().length>300)
			{
				alert("Subject must be less than 300 characters");
				$("#subject").css("borderColor", "#19b9e7");
			}
		}
		if ($("#message")==""){
			alert("Enter a message ");
			$("#message").css("borderColor", "#19b9e7");
		}
		
        $.ajax({
				url: "/Egov-proj/assets/php/notif.php/",
				type: "POST",
				data: $("#message-form").serialize(), //try test next
				success: function(result) {
					var data=JSON.parse(result);
					var data2=JSON.stringify(data);
					console.log(data2);
					console.log(result);
					if (data.result=="Successful")
					{
						alert ("Notification created");
					}
					else if (data.result=="Could not create notification")
					{
						alert ("Could not create notification,recheck all fields");
					}
					else if (data.result=="Did you enter a recipient")
					{
						alert ("Did you enter a recipient?");
					}
					else if (data.result=="Subject needed")
					{
						alert ("Subject needed");
					}
					else if (data.result=="Body needed")
					{
						alert ("Body needed");
					}
				},
				error: function(result) {
					var data=JSON.parse(result);
					var data2=JSON.stringify(data);
					console.log(data2);
					alert("Error posting");
				}
        });
    });
};