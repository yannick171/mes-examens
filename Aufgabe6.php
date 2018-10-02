<!DOCTYPE html>
<html>
<body>
 Eingabe: <input type="text" >
	<?php
$eingabe = (isset($_GET["eingabe"]) &&
 is_string($_GET["eingabe"])) ? $_GET["eingabe"] : "";
$ergebnis = "";
if ($eingabe != null && $eingabe !== "") {
 $ergebnis = strtoupper($eingabe);
}
echo $ergebnis;
?>
</body>
</html>