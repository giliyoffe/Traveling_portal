 $(document).ready(function(){
	$(".glyphicon-search").click(function(){

	// Wenn Formular ausgefült dann Submit - Val() testen

	if($("form .search-field").val() != ""){

	//Schicke es ab!
	$(".search-form").submit();
	} else {

		//Ansonsten Schließen
		$("form.search-form").toggleClass("hide");
		}
	});
});
