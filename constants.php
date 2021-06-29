<!DOCTYPE html>

<html>
<body>

<?php

//CONSTANTS- note that constants are GLOBAL.

define("GREETING", "Welcome to hraymond.com!"); //CASE SENSITIVE
echo GREETING;


define("Hello", "Greetings, Friends!", true); //CASE INSENSITIVE
echo HelLo;

define("cars",[
	"Alfa Romeo",
	"BMW",
	"Audi"
]);
echo cars[1];

define("milkshake_flavours", [
	"chocolate",
	'vanilla',
	'strawberry',
], true);

echo milkShake_flavours[1];

?>





</body>
</html>