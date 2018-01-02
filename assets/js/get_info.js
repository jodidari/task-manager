$.ajax( {
		url: "/Egov-proj/assets/php/getsub.php/",
		type: "GET",
		success: function( result ) {
			$( "#form-programmers" ).html( result );
		},
		error: function( result ) {
			console.log( "RESULT" + result );
		}
	} );
	
	$.ajax( {
		url: "/Egov-proj/assets/php/getman.php/",
		type: "GET",
		success: function( result ) {
			$( "#form-managers" ).html( result );
		},
		error: function( result ) {
			console.log( "RESULT" + result );
		}
	} );
	
	$.ajax( {
		url: "/Egov-proj/assets/php/getproj_name.php/",
		type: "GET",
		success: function( result ) {
			$( "#form-project").html( result );
		},
		error: function( result ) {
			console.log( "RESULT" + result );
		}
	} );
	
	$.ajax( {
		url: "/Egov-proj/assets/php/getuser_name.php/",
		type: "GET",
		success: function( result ) {
			$( "#user-name").html( result );
		},
		error: function( result ) {
			console.log( "RESULT" + result );
		}
	} );
