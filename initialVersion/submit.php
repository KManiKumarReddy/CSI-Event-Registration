<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link href='style.css' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<title>Online Registration</title>
<meta http-equiv="content-type"
content="text/html; charset=utf-8"/>
</head>
<div class = "wrapper">
<body>
<?php
    $name = $_POST["name"];
    $email =  $_POST["email"];
    $contact =  $_POST["contact"];
    $roll = $_POST["roll"];
    $dept = $_POST["dept"];
    $fcount = fopen("regcount.txt", "r");
    fscanf($fcount, "%d", $count);
    fclose($fcount);
    $count = $count + 1;
    $fcount = fopen("regcount.txt", "w");
    fwrite($fcount, $count);
    fclose($fcount, $count);
    fclose($fcount);
    $fp = fopen("details.csv", "a");
    fwrite($fp, $count . "," . $name . "," . $email . "," . $roll . "," . $contact . "," . $dept . "\n");
    fclose($fp);
?>
<p>You are successfully registered as</p>
<h1><?php echo $count ?></h1>
</div>
</body>
</html>