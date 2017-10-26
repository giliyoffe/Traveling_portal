var loop = 1;
function checkField(){
	// Teste ob Feld angezeigt wird oder nicht
	var checkFormClass1 = checkFormClass();
	var searchfield = document.getElementsByClassName("search-field")[0];
	var searchform = document.getElementsByClassName("search-form")[0];

	if (searchfield.value != "" && searchfield.value.length >= 3 ) {
		searchform.submit();
	}


	if (searchfield.value.length < 3 && !checkFormClass1 && loop == 1) {

		document.getElementsByClassName("search-list")[0].innerHTML = "Mind. 3 Zeichen eingeben" + document.getElementsByClassName("search-list")[0].innerHTML;

		setTimeout(function(){
			document.getElementsByClassName("search-list")[0].innerHTML = document.getElementsByClassName("search-list")[0].innerHTML.replace("Mind. 3 Zeichen eingeben", "");
				loop = 1;
		 }, 5000);

		loop++;
	}

	// setTimeout(function(){ searchfield.value = "";  }, 3000);

	if(checkFormClass1){
		document.getElementsByClassName("search-form")[0].className ="search-form";
	} else {
		document.getElementsByClassName("search-form")[0].className ="hide search-form";

	}

	// Zugriff auf Feld (Wert aus Feld)

	// Prüfen ob Feldwert eingetragen oder nicht

 	// Abschicken des Formulars

}

function checkFormClass(){
	// Greife auf das element Form zu und schaue ob Klasse hide gesetzt ist
	//Wenn ja dann check = true
	var formClass = document.getElementsByClassName("search-form")[0].className;

	if (formClass.indexOf("hide") >= 0 ) {
		check = true;
	} else {
	//Ansonst check = false
		check = false;
	}

	return check;

}

/*
my solution with timeOut


if (searchfield.value.length < 3 && !checkFormClass1) { // && loop == 1

		var org = document.getElementsByClassName("search-list")[0].innerHTML;

		document.getElementsByClassName("search-list")[0].innerHTML = "Mind. 3 Zeichen eingeben" + document.getElementsByClassName("search-list")[0].innerHTML;

		setTimeout(function(){ document.getElementsByClassName("search-list")[0].innerHTML = org;  }, 2000);

		// document.getElementsByClassName("search-list")[0].innerHTML = "Mind. 3 Zeichen eingeben" + document.getElementsByClassName("search-list")[0].innerHTML;
		// loop++;
	}

*/
