// Opens a hidden div
function openHiddenDiv(key) {

	// Closes allreday opened hidden divs
	closeHiddenDivs();

	// Opens dimmed background
	$("#hidden-div-background").show(500);

	// Opens the div
	$("#hidden-div-"+key).show(500);
}

// Closes all hidden divs in the "keys" list
function closeHiddenDivs() {

	// Closes dimmed background
	$("#hidden-div-background").hide();

	// Close all the open hidden divs
	$(".hidden-div-div").hide();
}

// Initial actions
$(document).ready(function() {

	// Closes dimmed background
	$("#hidden-div-background").hide();

	// Close all the open hidden divs
	$(".hidden-div-div").hide();

	// Setting up clickevent for closing divs.
	$("#hidden-div-background").click(closeHiddenDivs);

	// Stops closing when clicking hidden div
	$(".hidden-div-div").click(function( event ) {
  		event.stopPropagation();
	});
});