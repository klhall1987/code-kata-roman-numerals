<?php

require_once 'functions.php';
require_once 'roman-numerals.php';

$numerals = array(
	'I'    => 1,
	'ii'   => 2,
	'III'  => 3,
	'IV'   => 4,
	'V'    => 5,
	'vi'   => 6,
	'VII'  => 7,
	'VIII' => 8,
	'ix'   => 9,
	'X'    => 10,
	'XI'   => 11,
	'xii'  => 12,
	'XIII' => 13,
	'XIV'  => 14,
	'XV'   => 15,
	'L'	   => 50,
	'lxi'  => 61
);

?> 

Input Your Numerals Here:<br>
<input type="text" name="convert" id="convert">
<input type="submit" id="mySubmit" method="post" hidden="hidden">
<button onclick="calculate()">Calculate</button>
<p id="demo"></p>
</form>

<script>
function calculate(){
	var x =document.getElementById("convert").value;
	document.getElementById("demo").innerHTML = x; 
}
</script>
<?php



foreach( $numerals as $test => $answer ) {
	echo $test . ' is ' . roman_numerals( $test ) . ". " . check('roman_numerals', $test, $answer) . "\n";
}
