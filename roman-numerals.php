<?php

/**
 * Roman Numerals
 *
 * @param string $numerals
 * @return integer
 */
 
function roman_numerals( $numerals ) {
	// Set the numerals array to all lower case.  
	$numerals = strtolower( $numerals );

	// Split the numerals array into an array of stings for each line. 
	$arabic_Numbers = str_split( $numerals );

	// Convert the arrays into strings 
	$imp = implode('' , $arabic_Numbers);

	//count to find the length of the string. 
	$result = strlen($imp);

	// An empty varible to set the numeral in.
	$empty_Numeral = 'i';

	// find the position of the numeral. 
	$numeral_Pos = stripos($imp, $empty_Numeral);

	

	// being used for debug, Remove once code is complete
	var_dump($imp);
	return $imp;

}
