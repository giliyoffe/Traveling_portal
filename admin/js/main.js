

function ueberpruefe(elem) {
	var inhalt = elem.value;
	// var aktuellesZeichnen = inhalt.charAt(inhalt.length - 1);
	// alert(aktuellesZeichnen);
	var counter = inhalt.length - 1;

	if(isNaN(inhalt[counter])) { //aktuellesZeichnen
		elem.value = inhalt.substr(0, inhalt.length-1)
		
		// mine:
		//
		// function removeLast(){
		// 	var removeChar = elem.value.indexOf(elem.value.length - 1)
		// 	elem.value = elem.value.slice(0, removeChar);
		// }

		// removeLast();

		// if (elem.value.length == 5 && aktuellesZeichnen == ".") {
		// 	removeLast();
		// }
	}

	if (elem.value.length == 2 || elem.value.length == 5) {
		elem.value = elem.value + "."; 
		// if (elem.value.length == 5 && aktuellesZeichnen == ".") {
		// 	removeLast();
		// }
	}

	if (checkTaste(event) == 8){ // 8 == backspace
		elem.value  = inhalt.substr(0, inhalt.length)
		// if (elem.value.length == 2 || elem.value.length == 5) {
		// 	elem.value = elem.value.splice((elem.value.length -1), 0,"."); 
		// }
	}

	if (elem.value == ".") {
		elem.value = "";
	}

	if (elem.value.length > 10) {
		elem.value = elem.value.slice(0, 10);
	}
}

function checkTaste(event){
	var KeyID = event.keyCode;
	return KeyID;
}
