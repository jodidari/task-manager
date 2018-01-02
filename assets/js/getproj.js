window.onload=function(){	

	$.ajax({
      url: "assets/js/get_info.js",
      dataType: "script",
    });

	$.ajax({
      url: "assets/js/logout.js",
      dataType: "script",
    });
	
    let table = document.getElementById("projects");
    let request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(request.readyState === 4 && request.status === 200){
            table.innerHTML+= request.responseText;
        }
    };
    request.open("GET","assets/php/getproj.php",true);
    request.send();
	
	$("#results").remove;
	$('#projects').on("click", "td.projname", function(e) {
        alert ("Scroll down to see the project info");
		var proj_clicked= $(e.target).closest("td").text();
		console.log(proj_clicked);
		$.ajax( {
		url: "/Egov-proj/assets/php/getproj_info.php/",
		type: "POST",
		data: {projectname: proj_clicked},
		success: function( result ) {
			$( "#result" ).html( result );
		},
		error: function( result ) {
			console.log( "RESULT" + result );
		}
	} );
    });
};