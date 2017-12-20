window.onload = function() {
	var submit = document.getElementById("sub");
	submit.addEventListener("click", function(event) {
		$("#word").remove();
		event.preventDefault(event);	
		var name = document.getElementById("form-proj-name");	
		var desc=document.getElementById("form-desc");
		var start=document.getElementById("form-start-date");
		var end=document.getElementById("form-end-date");
		start= new Date(start.value);
		end= new Date(end.value);
		
		var t=document.getElementById("proj-man-name").value;
		var first=t[0];
		var last=t[1];
		
		var passname = true,
			passf = true,
			passl = true,
			pdate= true,
			passd = true;
	
		if (name.value == "") {
			name.style.borderColor = "#b2497d";
			passname = false;
		} else {
			passname = true;
		}
		
		if (first.value == "") {
			first.style.borderColor = "#b2497d";
			passf = false;
		} else if (!/^[a-zA-Z]+$/.test(first.value)) {
			first.style.borderColor = "#19b9e7";
			alert("Only letters in the firstname");
			passf = false;
		} else {
			passf = true;
		}
		
		if (last.value == "") {
			last.style.borderColor = "#b2497d";
			passl = false;
		} else if (!/^[a-zA-Z]+$/.test(last.value)) {
			last.style.borderColor = "#19b9e7";
			alert("Only letters in the lastname");
			passl = false;
		} else {
			passl = true;
		}
		
		if (desc.value == "") {
			desc.style.borderColor = "#b2497d";
			passd = false;
		} else {
			passd = true;
		}
		
		if (start>end){
			document.getElementById("form-start-date").style.borderColor = "#b2497d";
			document.getElementById("form-end-date").style.borderColor = "#b2497d";
			alert("Start date must come before end date");
			pdate=false;
		}
		else{
			pdate=true;
		}
		
		if (passname == true && passl == true && passf == true && passd == true && pdate==true) {
			$.ajax({
				url: "/Egov-proj/assets/php/submitproj.php/",
				type: 'POST',
			
				data: $("#createp-form").serialize(), //try test next
				success: function(result) {
					var data=JSON.parse(result);
					var data2=JSON.stringify(data);
					console.log("Success"+data2);
					if (data.result=="Success"){
						$("#word").html("<h3 style='color:black'>Form created<h3>");
					}
					else if (data.result=="Error entering into database"){
						$("#word").html("<h3 style='color:black'>Error entering into database<h3>");
					}
					else if (data.result=="Please fill out first name"){
						$("#word").html("<h3 style='color:black'>Please fill out first name<h3>");
					}
					else if (data.result=="Please fill out last name"){
						$("#word").html("<h3 style='color:black'>Please fill out last name<h3>");
					}
					else if (data.result=="Please fill out project desciption"){
						$("#word").html("<h3 style='color:black'>Please fill out project desciption<h3>");
					}
					else if (data.result=="Please fill out project name"){
						$("#word").html("<h3 style='color:black'>Please fill out project names<h3>");
					}
					
				},
				error: function(result) {
					var data=JSON.parse(result);
					var data2=JSON.stringify(data);
					console.log(data2);
					alert("Error posting");
				}
			});
		}
		else{
			alert("Double check that you entered all information , correctly");
		}
	});
}
