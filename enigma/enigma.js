var Enigma = function(){
	this.encrypt = function(messageToEncrypt) {
		var letter = messageToEncrypt;

	letter = letter.replace("a","j");
	letter = letter.replace("b","d");
	letter = letter.replace("c","w");
	letter = letter.replace("d","o");
	letter = letter.replace("e","v");
	letter = letter.replace("f","a");
	letter = letter.replace("g","r");
	letter = letter.replace("h","i");
	letter = letter.replace("i","g");
	letter = letter.replace("j"," ");
	letter = letter.replace("k","x");
	letter = letter.replace("l","u");
	letter = letter.replace("m","n");
	letter = letter.replace("n","s");
	letter = letter.replace("o","y");
	letter = letter.replace("p","q");
	letter = letter.replace("q","c");
	letter = letter.replace("r","p");
	letter = letter.replace("s","'");
	letter = letter.replace("t","f");
	letter = letter.replace("u","m");
	letter = letter.replace("v","z");
	letter = letter.replace("w","t");
	letter = letter.replace("x","k");
	letter = letter.replace("y","h");
	letter = letter.replace("z","b");
	letter = letter.replace(" ","e");
	letter = letter.replace("'","l");
	letter = letter.replace(".",".");
	letter = letter.replace(",",",");
	letter = letter.replace(":",":");
	letter = letter.replace(";",";");
	return letter;	
	}

	this.decrypt = function(messageToDecrypt) {
		var letter = messageToDecrypt;

	letter = letter.replace("j","a");
	letter = letter.replace("d","b");
	letter = letter.replace("w","c");
	letter = letter.replace("o","d");
	letter = letter.replace("v","e");
	letter = letter.replace("a","f");
	letter = letter.replace("r","g");
	letter = letter.replace("i","h");
	letter = letter.replace("g","i");
	letter = letter.replace(" ","j");
	letter = letter.replace("x","k");
	letter = letter.replace("u","l");
	letter = letter.replace("n","m");
	letter = letter.replace("s","n");
	letter = letter.replace("y","o");
	letter = letter.replace("q","p");
	letter = letter.replace("c","q");
	letter = letter.replace("p","r");
	letter = letter.replace("'","s");
	letter = letter.replace("f","t");
	letter = letter.replace("m","u");
	letter = letter.replace("z","v");
	letter = letter.replace("t","w");
	letter = letter.replace("k","x");
	letter = letter.replace("h","y");
	letter = letter.replace("b","z");
	letter = letter.replace("e"," ");
	letter = letter.replace("l","'");
	letter = letter.replace(".",".");
	letter = letter.replace(",",",");
	letter = letter.replace(":",":");
	letter = letter.replace(";",";");
	return letter;	
	}

}
