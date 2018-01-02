var t = {
	text: "logout"
};

$( "a#log" ).click( function( event ) {
	event.preventDefault();
	if ( confirm( "Are you sure you want to log out?" ) ) {
		$.post( "assets/php/log_out.php", t, function( t, status, xhr ) {
			window.location.href = "index.php";
		} );

	};
} );