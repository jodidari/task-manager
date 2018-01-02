window.onload = function() {
	
	$.ajax({
      url: "assets/js/get_info.js",
      dataType: "script",
    });
	
	$.ajax({
      url: "assets/js/logout.js",
      dataType: "script",
    });

	$( "#subb" ).click( function( event ) {
		$( "#word" ).remove();
		event.preventDefault( event );
		var name = document.getElementById( "form-proj-name" );
		var desc = document.getElementById( "form-desc" );
		var prog_name = document.getElementById( "form-programmers" );
		var progs = [];
		var manager = document.getElementById( "form-managers" );
		var start = document.getElementById( "form-start-date" );;
		var start2 = new Date( start.value );
		var end = document.getElementById( "form-end-date" );
		var end2 = new Date(end.value);

		for ( var i = 0; i < prog_name.length; i++ ) {
			progs.push( prog_name[ i ].value );
		}

		var passname = true,
			pdate = true,
			passd = true;

		if ( name.value == "" ) {
			name.style.borderColor = "#b2497d";
			passname = false;
		} else {
			passname = true;
		}

		if ( desc.value == "" ) {
			desc.style.borderColor = "#b2497d";
			passd = false;
		} else {
			passd = true;
		}
		
		if ( start2 > end2 ) {
			document.getElementById( "form-start-date" ).style.borderColor = "#b2497d";
			document.getElementById( "form-end-date" ).style.borderColor = "#b2497d";
			alert( "Start date must come before end date" );
			pdate = false;
		} else {
			pdate = true;
		} 
		
		if ( passname == true && passd == true && pdate == true ) {

			var project_info = {
				project_name: name.value,
				project_desc: desc.value,
				start_dtime: start.value,
				end_dtime: end.value,
				project_manager: manager.value,
				project_prog: progs
			}

			console.log(JSON.stringify(project_info ));

			$.ajax( {
				url: "/Egov-proj/assets/php/submitproj.php/",
				type: 'POST',
				data: project_info, //try test next
				success: function( result ) {
					var data = JSON.parse( result );
					var data2 = JSON.stringify( data );
					console.log( "Success" + data2 );
					if ( data.result == "Success" ) {
						$('#modal').modal('hide');
						alert("Successful");
					} else if ( data.result == "Error entering into database" ) {
						$('#modal').modal('hide');
						alert("Error entering into database");
					} else if ( data.result == "Please fill out first name" ) {
						$('#modal').modal('hide');
						alert("Please fill out first name");
					} else if ( data.result == "Please fill out last name" ) {
						$('#modal').modal('hide');
						alert("Please fill out last name");
					} else if ( data.result == "Please fill out project desciption" ) {
						$('#modal').modal('hide');
						alert("Please fill out project desciption<h3>" );
					} else if ( data.result == "Please fill out project name" ) {
						$('#modal').modal('hide');
						alert("Please fill out project names");
					} else if ( data.result == "Error with adding programmers" ) {
						$('#modal').modal('hide');
						alert("Please contact administration about adding programmers");
					}
				},
				error: function( result ) {
					var data = JSON.parse( result );
					var data2 = JSON.stringify( data );
					console.log( data2 );
					alert( "Error posting" );
				}
			} );
		} else {
			alert( "Double check that you entered all information , correctly" );
		}
	} );
}