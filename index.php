<?php

require_once 'functions.php';
require_once 'roman-numerals.php';

$numerals = array(
	'I'    => 1,
	'II'   => 2,
	'III'  => 3,
	'IV'   => 4,
	'V'    => 5,
	'VI'   => 6,
	'VII'  => 7,
	'VIII' => 8,
	'IX'   => 9,
	'X'    => 10,
	'XI'   => 11,
	'XII'  => 12,
	'XIII' => 13,
	'XIV'  => 14,
	'XV'   => 15
);

foreach( $numerals as $test => $answer ) {
	echo $test . ' is ' . roman_numerals( $test ) . ". " . check('roman_numerals', $test, $answer) . "\n";
}
