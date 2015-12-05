<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Latest compiled and minified CSS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
<title>Online Registration</title>
<style>
p, h1 {
  text-align: center;
}
</style>
</head>
<body>
<div class = "container">
<?php
    
    /* validation
     $name = $email = $gender = $comment = $website = "";
     $nameval=$emailval=$contactval=$rollnoval=$deptval=$collegeval"";
     
     
     
     if(empty($name))
     $nameval="Empty field";
     else if(!preg_match("/^[a-zA-Z ]{4,}$/",$name))
     $nameval="ImproperName";
     if(empty($email))
     $emailval="Empty Field";
     if(empty($contact))
     $phoneval="Empty Field";
     if(empty($rollno))
     $rollnoval="Empty Field";
     else if(!preg_match("/^[0-9]{10}$/",$contact))
     $contactval="Enter 10-digit no.";
     if(empty($dept))
     $deptval="Empty Address";
     
     
     if(!preg_match("/^[a-zA-z][A-Za-z0-9]*@[A-Za-z]+\.[a-zA-Z]{2,3}/",$email))
     $emailval="Invalid email";
     if(!preg_match("/^[0-9]{2}[A-Za-z][0-9]{2}[A-Za-z][0-9]{4}$/",$rollno))
     $rollnoval="Invalid roll no";
     
     
     }
     
     
     
     function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
     }
     */
    
    $name = $_POST["name"];
    $email =  $_POST["email"];
    $contact =  $_POST["contact"];
    $rollno = $_POST["roll"];
    $dept = $_POST["dept"];
    $college = $_POST["institution"];
    if($dept == "Other")
      $dept = $_POST["dept-other"];
    
    // using files
    $fp = fopen("eventdata.txt", "r");
    $filename = fgets($fp);
    $filename = substr($filename, 0, -1);
    fclose($fp);
    substr($filename, 0, -2);
    $fcount = fopen("regcount.txt", "r");
    fscanf($fcount, "%d", $count);
    fclose($fcount);
    $count = $count + 1;
    $fcount = fopen("regcount.txt", "w");
    fwrite($fcount, $count);
    fclose($fcount);
    $fp = fopen($filename." participants.csv", "a");
    fwrite($fp, $count . "," . $name . "," . $email . "," . $roll . "," . $contact . "," . $dept . "\n");
    fclose($fp);
    
    // using database
    /*
    $dbhost = 'localhost:3036';
    $dbuser = 'root';
    $dbpass = 'root';
    $dbdata='user';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass,$dbdata);
    if(! $conn )
    {
        die('Could not connect: ' . mysql_error());
    }
    
    
    
    $sql = "INSERT INTO user ".
    "(name,email,contact,college,rollno,department) ".
    "VALUES ".
    "('$name','$email','$contact','$college','$rollno','$dept')";
    mysql_select_db('user');
    $retval = $conn->mysql_query( $sql);
    $result = mysql_query("SELECT * FROM user", $conn);
    
    echo $result->num_rows;
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $getemail=$row["email"];
            if(!strcmp($getmail,$email)){
                echo "email already entered";
            }
        }
    echo "Entered data successfully\n";
    mysql_close($conn);
    }*/
?>
<br>
<p>You are successfully registered as</p>
<h1><?php echo $count ?></h1>
</div>
</body>
</html>
