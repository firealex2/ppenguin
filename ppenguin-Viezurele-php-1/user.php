<?php

$con = mysql_connect("pp.sula.ro","sula_ncoaste","Muist!1523");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("sula_pp", $con);

$sql="INSERT INTO login(User,mail)
VALUES
('$_POST[User]','$_POST[mail]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>
