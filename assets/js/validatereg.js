/*window.onload=function(){
	var submit=document.getElementById("signup");
	submit.addEventListener("click", function(event){
		event.preventDefault();
		var fname=document.getElementById("form-first");
		var lname=document.getElementById("form-last");
		var uname=document.getElementById("form-usern");
		var passwo=document.getElementById("form-passw");
		var passwo2=document.getElementById("form-passw2");
		var email=document.getElementById("form-emaila");
		var passf=false,passl=false,passu=false,passw=false,passa=false;
		
		if (fname.value=="")
		{
			fname.style.borderColor="#b2497d";
			passf=false;
		}
		else if (!/^[a-zA-Z]+$/.test(fname.value))
		{
			fname.style.borderColor="#19b9e7";
			alert("Only letters in the firstname");
			passf=false;
		}
		else{
			passf=true;
		}
		
		if (lname.value=="")
		{
			lname.style.borderColor="#b2497d";
			passl=false;
		}
		else if (!/^[a-zA-Z]+$/.test(lname.value))
		{
			lname.style.borderColor="#19b9e7";
			alert("Only letters in the lastname");
			passl=false;
		}
		else{
			passl=true;
		}
		
		if (uname.value=="")
		{
			uname.style.borderColor="#b2497d";
			passu=false;
		}
		else{
			passu=true;
		}
		
		if (passwo.value==""||passwo2.value=="")
		{
			passwo.style.borderColor="#19b9e7";
			passw=false;
		}
		else if(!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/.test(passwo.value))
		{
			passwo.style.borderColor="#b2497d";
			passw=false;			
			alert("Password must be atleast 8 characters with 1 number,1 upper case and 1 lowercase");
		}
		else if(passwo==passwo2)
		{	
			passw=true;					
		}
		else{
			passwo.style.borderColor="#b2497d";
			passwo2.style.borderColor="#b2497d";
			passw=false;
			alert("Passwords didnt match");
		}
		
		if (email=="")
		{
			email.style.borderColor="#b2497d";
			passa=false;
		}
		else{
			passa=true;
		}
		
		if (passf==true && passl==true &&passu==true && passw==true && passa==true)
		{
			alert("ENTERED");
			$.ajax({
			url: "/Egov-proj/assets/php/insertuser.php",
			type: "POST",
			data: $("#form-register").serialize(),
			success : function (result) {
				alert("User successfully created: "+result); 
			 },
			 error : function () {
				alert("Error: ");
			 }
			});
		}
	
	});
};

19b9e7*/

window.onload=function(){
	var submit=document.getElementById("signup");
	submit.addEventListener("click", function(event){
		event.preventDefault();
		let fname=document.getElementById("form-first");
		let lname=document.getElementById("form-last");
		let uname=document.getElementById("form-usern");
		let passw=document.getElementById("form-passw");
		let passw2=document.getElementById("form-passw2");
		var email=document.getElementById("form-emaila");
		let passf=false,passl=false,passu=false,pass=false, passa=false;
		
		if (fname.value=="")
		{
			fname.style.borderColor="#b2497d";
			passf=false;
		}
		else if (!/^[a-zA-Z]+$/.test(fname.value))
		{
			fname.style.borderColor="#19b9e7";
			alert("Only letters in the first name");
			passf=false;
		}
		else{
			fname.style.borderColor="";
			passf=true;
		}
		
		if (lname.value=="")
		{
			lname.style.borderColor="#b2497d";
			passl=false;
		}
		else if (!/^[a-zA-Z]+$/.test(lname.value))
		{
			lname.style.borderColor="#19b9e7";
			alert("Only letters in the last name");
			passl=false;
		}
		else{
			lname.style.borderColor="";
			passl=true;
		}
		
		if (uname.value=="")
		{
			uname.style.borderColor="#b2497d";
			passu=false;
		}
		else{
			uname.style.borderColor="";
			passu=true;
		}
		
		if (passw.value=="" || passw2.value=="")
		{
			passw.style.borderColor="#b2497d";
			passw2.style.borderColor="#b2497d";
			pass=false;
		}
		else if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.test(passw.value))
		{
			passw.style.borderColor="#b2497d";
			pass=false;			
			alert("Password must be at least 8 characters with 1 number,1 upper case and 1 lowercase");
		}
		
		else if(passw.value!=passw2.value)
		{	
			passw.style.borderColor="#b2497d";
			passw2.style.borderColor="#b2497d";
			pass=false;
			alert("passwords did not match");				
		}
		else{
			passw.style.borderColor="";
			passw2.style.borderColor="";
			pass=true;
		}
		
		if (email=="")
		{
			email.style.borderColor="#b2497d";
			passa=false;
		}
		else{
			passa=true;
		}
		
		if (passf==true && passl==true && passu==true && pass==true && passa==true)
		{
			$.ajax({
				url: "/Egov-proj/assets/php/insertuser.php",
				type: "POST",
				data: $("#form-register").serialize(),
				success: function(data){
					var result=JSON.parse(data);
					console.log(JSON.stringify(result));
					if (result.hasOwnProperty("id") && result.id=="password")
					{	
						if (result.result=="Password too short")
						{
							$("#word").html("<h3 style='color:white'>Password was too short<h3>");
						}
						else if (result.result=="Password must be at least 8 characters with 1 number,1 upper case and 1 lowercase")
						{
							$("#word").html("<h3 style='color:white'>Password not correct format<h3>");
						}
						else if (result.result=="Passwords dont match")
						{
							$("#word").html("<h3 style='color:white'>Password do not match<h3>");
						}
					}
					if (result.hasOwnProperty("result") && result.result=="User entered"){
						$("#word").html("<h3 style='color:white'>User added<h3>");
					}
					else if (result.hasOwnProperty("result") && result.result=="Could not add user")
					{
						$("#word").html("<h3 style='color:white'>Error adding using<h3>");
					}
				},
				error: function(data){
					console.log ("Error posting");
				}
			});
		}
	});
};
