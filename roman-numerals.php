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

	// Converting the arrays into strings 
	$imp = implode('' , $arabic_Numbers);

	//count to find the position of the numeral. 
	$result = strlen($imp);

	//varible for I.
	$empty_Numeral = '';

	//find the position of numeral I. 
	$str_pos = stripos($imp, $empty_Numeral);

	// being used for debug, Remove once code is complete
	var_dump($str_pos);

	$answer = 0;

	if($empty_Numeral = 'i' && $str_pos <= 0  ){

	}
	return $empty_Numeral;
}
