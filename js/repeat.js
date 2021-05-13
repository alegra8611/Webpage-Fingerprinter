document.getElementById("repeat").onclick = 
function () {
	var classes = $(this).parent().attr("class");
	$(this).parent().attr("class", "animate");
	var indicator = $(this);
	setTimeout(function () {
		$(indicator).parent().addClass(classes);
		}, 20);
};	