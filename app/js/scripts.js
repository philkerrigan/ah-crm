// Nav



	$( ".nav-btn" ).click(function() {
	  $( "aside" ).animate({
	    opacity: 0.25,
	    left: "-=260",
	    height: "toggle"
	  }, 5000, function() {
	    // Animation complete.
	  });
	});






// Tabs
// $(document).ready(function() {
// 	$('#tabs > ul').tabs({ fx: { height: 'toggle', opacity: 'toggle' } });
// });
