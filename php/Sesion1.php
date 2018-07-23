<?php
/**
 * Created by PhpStorm.
 * User: cpuscas
 * Date: 7/20/2018
 * Time: 11:48 AM
 */
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

$_SESSION["favsport"]="Football";
$_SESSION['favteam']="Barcelona";
echo "Session variables are set.";
?>



</body>





</html>

