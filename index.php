<?php 
//mysql db connection information
$hostname = "localhost";//database host name
$database = "address";//name of your database, chosen address for convinience
$username = "root"; //username for your database
$password = "kaidranzer"; //password

$site = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>" Used this for testing the database connection;
mysql_select_db($database, $site)
or die("Could not select examples");
//echo"selected $database"Used this for testing the database connection;
//

$server_name = "http://".$_SERVER['HTTP_HOST']."/";
//echo "Server: $server_name";Used this for checking if server was detected properly.

//create the urls table if it's not already there link stores original links, short stores their corresponding shortened strings:
mysql_query("CREATE TABLE IF NOT EXISTS `urls` (
  `id` int(11) NOT NULL auto_increment,
  `link` varchar(255) default NULL,
  `short` varchar(6) default NULL,

  PRIMARY KEY  (`id`)
)");


?> 

<html>
<head>
<title>URL shrinker</title>
</head>

<body leftmargin="50" topmargin="50" background="bg.jpg">

<h1> URL Shortening service, on localhost. </h1>
<h2>Please give a url to Shrink.</h2>
<form action="submit.php" method="post">
  <input name="address" type="text" id="address" value="http://" size="75" />
  <input type="submit" name="Submit" value="Go" />
</form>
<br />
<br />

</body>
</html>