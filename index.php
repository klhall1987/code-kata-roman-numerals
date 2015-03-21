include 'roman-numerals.php'

$tests = array( 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII', 'XIII', 'XIV', 'XV' );

foreach( $tests as $test ) {
	echo $test . ' is ' . roman_numerals( $test ) . "\n";
}
