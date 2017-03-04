<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<?php
	require_once('helpers/common.php');

	//start processing form data, if present
	if (($name = post('username')) && ($age = post('age'))) {
		$result = age_in_seconds();
	}

	?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Simple Age Calculator</title>
</head>
<body>
    <h1>Simple Age Calculator</h1>
    <form action="index.php" method="post">
    <fieldset>
    <legend>Enter name and age and you will get your age in seconds.</legend>
    <label for="username">Your Name: </label>
    <input type="text" name="username" id="username" size="20" value="" />
    <br />
    <label for="age">Your Age: </label>
    <input type="text" name="age" id="age" size="10" value="" />
    <br />
    <br />

    <input type="submit" name="subform"  value="Calculate" />

    </fieldset>
    </form>
    <?php
    if ($name) {
    ?>
    <hr />
    Thank you, <?=$name?>!<br />
    This application calculated your age to be <?=$result?> seconds.

    <?php
    }
    ?>


</body>
</html>