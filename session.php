
<?php
session_start();
echo isset($_SESSION['licznik']);
$_SESSION['licznik'] = 1;
if (isset($_SESSION['licznik'])) {
    $_SESSION['licznik'] = $_SESSION['licznik'] + 1;
} else {
    $_SESSION['licznik'] = 1;
}
echo $_SESSION['licznik'];
echo "<p> Identyfikator sesji to: " . session_id() . "</p>";
$id = session_id();
?>
	

