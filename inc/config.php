<?PHP
session_start();

DEFINE ("path", "http://localhost/cache-stories/" );
DEFINE ("salt", "$6\$rounds=5000\$Hog$");

require("html.php");


date_default_timezone_set("America/New_York");

include "../assets/svg/svgcontainer.svg";
?>