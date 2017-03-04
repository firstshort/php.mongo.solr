<?php
/*
 *
 */
//checks whether a value is present in @_POST superglobal and returns it
//.. will return false if the value is not found
function check_post_value($name) {
	return (isset($_POST[$name]) ? $_POST[$name] : false);
// 	if (isset($_POST[$name])) {
// 		return $_POST[$name];
// 	} else {
// 		return false;
// 	}
}
/*
 * calculates how many seconds old is the person who submitted the form
 *
 * @access public
 * @param $age integer
 * @return int
 */
function age_in_seconds($age) {
	return $age * 365 * 24 * 60 * 60;
}

//calculates how many minutes old is the person who submitted the form
function age_in_minutes($age) {
	return $age * 365 * 24 * 60;
}
?>