<?php
$id = $_GET['id'];
//mysql db connection information
$hostname = "localhost";        //database host name
$database = "address";    //name of your database
$username = "root"; //username for your database
$password = "kaidranzer"; //password

$site = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");

mysql_select_db($database, $site)
or die("Could not select database");

$query = "SELECT link FROM urls WHERE short = '". $id ."'";
$result = mysql_query($query) or die ("Error in query: $query " . mysql_error());
$row = mysql_fetch_array($result);
$url = $row['link'];
$num_results = mysql_num_rows($result);
if ( $num_results > 0  ) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ". $url );
	exit;
} else {
   
}
mysql_close($site);
?>
<html>
<head>
<title>URL shrinker</title>
</head>

<body leftmargin="50" topmargin="50" background="bg.jpg">

<h1>Sorry, the url you entered does not exist. Please use a correct url.</h1>
<br />
<br />

</body>
</html>