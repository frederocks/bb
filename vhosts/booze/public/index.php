
<?php

 // configuration
    require("../includes/config.php");
    //require("../includes/ip2locationlite.class.php");
    
    
// getting users location with ip2locationlite

include('../includes/ip2locationlite.class.php');
render("portfolio.php"); 
//Load the class
$ipLite = new ip2location_lite;
$ipLite->setKey('50f3af0d2d15920be96a94c3d12a52e2c69ea20e0689c426e14dd25fa94d5a91');
 
//Get errors and locations
//$locations = $ipLite->getCity($_SERVER['REMOTE_ADDR']);
$locations = $ipLite->getCity('24.220.159.224');
$errors = $ipLite->getError();
 
//Getting the result
echo "<p>\n";
echo "<strong>First result</strong><br />\n";
if (!empty($locations) && is_array($locations)) {
  foreach ($locations as $field => $val) {
    echo $field . ' : ' . $val . "<br />\n";
  }
}
echo "</p>\n";
 
//Show errors
echo "<p>\n";
echo "<strong>Dump of all errors</strong><br />\n";
if (!empty($errors) && is_array($errors)) {
  foreach ($errors as $error) {
    echo var_dump($error) . "<br /><br />\n";
  }
} else {
  echo "No errors" . "<br />\n";
}
echo "</p>\n";
#$rows = query("SELECT * FROM shares WHERE id = ?", $_SESSION["id"]);
#$cash = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
#$positions = [];
#foreach ($rows as $row)
#{
#    $stock = lookup($row["symbol"]);
#    if ($stock !== false)
#    {
#        $positions[] = [
#            "name" => $stock["name"],
#            "price" => $stock["price"],
#            "shares" => $row["shares"],
#            "symbol" => $row["symbol"],
#        ];
#    }
#}
#    // render portfolio
#    render("portfolio.php", ["positions" => $positions, "title" => "Portfolio", "cash" => $cash]); 

 ?>

