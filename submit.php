<?php 
//mysql db connection information
$hostname = "localhost";        //database host name
$database = "address";    //name of your database
$username = "root"; //username for your database
$password = "kaidranzer"; //password

$site = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
mysql_select_db($database, $site)
or die("Could not select examples");


$server_name = "http://".$_SERVER['HTTP_HOST']."/";

$address=$_POST["address"];

$string= substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 5);


mysql_query("INSERT INTO urls (link, short) VALUES

    (
    '".$address."',
    '".$string."'
    )

");
echo"<h1>The Shortened url is:</h1> <h2><a href=$server_name$string>$server_name$string </a></h2><br>";
echo"Kindly put the above url when you intend to go to your website using the shorter url.";



?> 

<html>
<head>
<style type="text/css">
a:link {text-decoration: none; color:white}
a:visited {text-decoration: none;color:green}
a:active {text-decoration: none;color:purple}
a:hover {text-decoration: none; color: gray;}
</style>
<title>URL shrinker</title>
</head>

<body leftmargin="50" topmargin="50" background="bg.jpg">

<h1></h1>
<br />
<br />

</body>
</html>