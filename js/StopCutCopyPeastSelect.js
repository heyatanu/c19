$(document).ready(function() {
	$('body').bind('cut copy paste', function (e) {
		e.preventDefault();
	})
	$("body").on("contextmenu", function(e) {
		return false;
	})
document.body.onselectstart = function() {
   return false;
}

document.body.ondragstart = function () {
    
    return false;
    }

})
``