<?php

function check( $function_to_test, $test, $accepted_answer ) {
  return ( $accepted_answer == call_user_func( $function_to_test, $test) ) ? 'correct' : 'incorrect' ;
}
