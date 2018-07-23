<?php
/**
 * Created by PhpStorm.
 * User: cpuscas
 * Date: 7/20/2018
 * Time: 12:02 PM
 */

session_start();
?>

<!DOCTYPE>
<html>
<body>
<?php
echo "Favorit sport is: ".$_SESSION["favsport"]."<br>";
echo "Favorit team si:".$_SESSION["favteam"].".";

?>

</body>
</html>
