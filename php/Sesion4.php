<?php
/**
 * Created by PhpStorm.
 * User: cpuscas
 * Date: 7/20/2018
 * Time: 12:13 PM
 */

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

</body>
</html>