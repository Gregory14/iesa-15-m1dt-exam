var Enigma = function(){
	this.encrypt = function(messageToEncrypt) {
		var letter = messageToEncrypt;

		splitLetter = letter.split('');
			splitLetter[0] = "j";
			splitLetter[1] = "d";
			splitLetter[2] = "w";
			splitLetter[3] = "o";
			splitLetter[4] = "v";
			splitLetter[5] = "a";
			splitLetter[6] = "r";
			splitLetter[7] = "i";
			splitLetter[8] = "g";
			splitLetter[9] = " ";
			splitLetter[10] = "x";
			splitLetter[11] = "u";
			splitLetter[12] = "n";
			splitLetter[13] = "s";
			splitLetter[14] = "y";
			splitLetter[15] = "q";
			splitLetter[16] = "c";
			splitLetter[17] = "p";
			splitLetter[18] = "'";
			splitLetter[19] = "f";
			splitLetter[20] = "m";
			splitLetter[21] = "z";
			splitLetter[22] = "t";
			splitLetter[23] = "k";
			splitLetter[24] = "h";
			splitLetter[25] = "b";
			splitLetter[26] = "e";
			splitLetter[27] = "l";
			splitLetter[28] = ".";
			splitLetter[29] = ",";
			splitLetter[30] = ":";
			splitLetter[31] = ";";

	var encrypt ="";
	for (i=0; i<32; i++){
		encrypt += splitLetter[i];
	} 
	return encrypt;
		
	}

	this.decrypt = function(messageToDecrypt) {
		var letter = messageToDecrypt;

		splitLetter = letter.split('');
			splitLetter[0] = "a";
			splitLetter[1] = "b";
			splitLetter[2] = "c";
			splitLetter[3] = "d";
			splitLetter[4] = "e";
			splitLetter[5] = "f";
			splitLetter[6] = "g";
			splitLetter[7] = "h";
			splitLetter[8] = "i";
			splitLetter[9] = "j";
			splitLetter[10] = "k";
			splitLetter[11] = "l";
			splitLetter[12] = "m";
			splitLetter[13] = "n";
			splitLetter[14] = "o";
			splitLetter[15] = "p";
			splitLetter[16] = "q";
			splitLetter[17] = "r";
			splitLetter[18] = "s";
			splitLetter[19] = "t";
			splitLetter[20] = "u";
			splitLetter[21] = "v";
			splitLetter[22] = "w";
			splitLetter[23] = "x";
			splitLetter[24] = "y";
			splitLetter[25] = "z";
			splitLetter[26] = " ";
			splitLetter[27] = "'";
			splitLetter[28] = ".";
			splitLetter[29] = ",";
			splitLetter[30] = ":";
			splitLetter[31] = ";";

	var decrypt ="";
	for (i=0; i<32; i++){
		decrypt += splitLetter[i];
	} 
	return decrypt;
	}
}
