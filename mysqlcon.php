<?php
// Return a fake 404 if page is being accessed directly
if ($_SERVER['PHP_SELF'] == '/' . basename(__FILE__))
{
  header('HTTP/1.0 404 Not Found');
  echo "
<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL " . $_SERVER['PHP_SELF'] . " was not found on this server.</p>
<p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p>
</body></html>
";
  exit();
}

// If true is passed in, display error message and exit if failed  to connect to database
// If no parameters, or false is passed in, no error checking will be done, false will
// be returned since mysqli_connect() returns false on error.
function getSQLConnection($exitOnError = false)
{
  $con = mysqli_connect("mysql.jack-l.com", "seng403", "WeHave4Js", "s403_project");
 //$con = mysqli_connect("localhost", "localhost", "", "test");
  // Check connection
  if($exitOnError && mysqli_connect_errno($con))
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

  return $con;
}
?>
