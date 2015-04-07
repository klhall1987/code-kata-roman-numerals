<?php

/**
 * Roman Numerals
 *
 * @param string $numerals
 * @return integer
 */
 
function roman_numerals( $numerals ) {

	$numerals = strtolower( $numerals );
	$numbers = str_split( $numerals );
	$count = count( $numbers );

	foreach( $numbers as $key => $value ) {
		if( $value == 'i' ) {
			$numbers[ $key ] = 1;
		} elseif( $value == 'v' ) {
			$numbers[ $key ] = 5;
		} elseif( $value == 'x' ) {
			$numbers[ $key ] = 10;
		} elseif ($value == 'l' ){
			$numbers[ $key ] = 50;
		}
	}

	if ( $count == 1 ) {
		$result = $numbers[ 0 ];
		return $result;
	} elseif ( $count == 2 && ( ( $numbers[ 0 ] > $numbers[ 1 ] ) || ( $numbers[ 0 ] == $numbers[ 1 ] ) ) ) {
		$result = $numbers[ 0 ] + $numbers[ 1 ];
		return $result;
	} elseif ( $count == 2 && ( $numbers[ 0 ] < $numbers[ 1 ] ) ) {
		$result = $numbers[ 1 ] - $numbers[ 0 ];
		return $result;
	} elseif ( $count == 3 && ( $numbers[ 1 ] < $numbers[ 2 ] ) ) {
		$result = $numbers[ 2 ] - $numbers[ 1 ];
		$result = $result + $numbers[ 0 ];
		return $result;
	} elseif ( $count == 3 ) {
		$result = $numbers[ 0 ] + $numbers[ 1 ] + $numbers[ 2 ];
		return $result;
	
	} elseif ( $count == 4 ) {
		$result = $numbers[ 0 ] + $numbers[ 1 ] + $numbers[ 2 ] + $numbers[ 3 ];
		return $result;
	}
}
