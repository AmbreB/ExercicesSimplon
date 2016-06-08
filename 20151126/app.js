/*

var foo = "je suis une chaîne de caractère";
var bar = foo.toUpperCase();

if ( foo != bar ) {
	alert(foo);
}

var toto = "UN STRIIIIING !";
var tata = toto.toUpperCase();

if ( toto == tata ) {
	alert("Hey, je suis " + toto);
} else {
	alert("Je suis " + tata);
} 

*/

function compareStr (str) {
	var maj = str.toUpperCase();

	if ( str == maj ) {
		document.writeln("<br>" + str + " : Le string est en majuscule");
	} else {
		document.writeln("<br>" + str + " : Le string n'est pas en majuscule")
	}
}

compareStr("COUCOU")
var foo = "salut";
compareStr(foo); 
foo = "ARRETE";
compareStr(foo);
foo = "DE";
compareStr(foo);
foo = "jouer";
compareStr(foo);
foo = "AVEC";
compareStr(foo);
foo = "les fonctions !";
compareStr(foo);