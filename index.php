<?php

$con = mysql_connect("pp.sula.ro","sula_roti","ciceropisi1");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("sula_pp", $con);

$sql="INSERT INTO login(user,mail)
VALUES
('$_POST[user]','$_POST[mail]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>
