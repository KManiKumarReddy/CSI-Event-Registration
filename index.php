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
p, h1, h3, h5 {
  text-align: center;
}
</style>
</head>
<body>
<div class = "container">
<h1>Online Registration</h1>
<br><br>
<?php
    $fp = fopen("eventdata.txt", "r");
    echo '<h5><span class="label label-default">Event Title</span></h5>';
    $string = fgets($fp);
    echo "<h3>".$string."</h3><br>";
    $string = fgets($fp);
    if($string != NULL && $string != "" && $string != "\n") {
        echo '<h5><span class="label label-default">Event Description</span></h5>';
        echo "<h3>".$string."</h3><br>";
    }
    $string = fgets($fp);
    if($string != NULL && $string != "" && $string != "\n") {
        echo '<h5><span class="label label-default">Speaker</span></h5>';
        echo "<h3>".$string."</h3><br>";
    }
    $string = fgets($fp);
    if($string != NULL && $string != "" && $string != "\n") {
        echo '<h5><span class="label label-default">Speaker Profile</span></h5>';
        echo "<h3><a href='".$string."'>".$string."</a></h3><br>";
    }
    $string = fgets($fp);
    if($string != NULL && $string != "" && $string != "\n") {
    echo '<h5><span class="label label-default">Venue</span></h5>';
    echo "<h3>".$string."</h3><br>";
    }
    $string = fgets($fp);
    echo '<h5><span class="label label-default">Date & Time</span></h5>';
    echo "<h3>".$string."</h3><br>";
    $string = fgets($fp);
  fclose($fp);
?>
<br>
<form class="form-horizontal" name = "register" action = "submit.php" method = "post" onsubmit = "return validateForm()">
    <fieldset>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Name</label>
      <div class="col-md-4">
      <input id="name" name="name" type="text" placeholder="Abdul Kalam" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="email">Email address</label>
      <div class="col-md-4">
      <input id="email" name="email" type="email" placeholder="abdulkalam@example.com" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="contact">Contact Number</label>
      <div class="col-md-4">
      <input id="contact" name="contact" type="text" placeholder="9999999999" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group" <?php if($string == "local\n") echo "hidden";?>>
      <label class="col-md-4 control-label" for="contact">Institution</label>
      <div class="col-md-4">
      <input id="institution" name="institution" type="text" placeholder="CVR College of Engineering" value = "CVR College of Engineering" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="roll">Roll Number / Faculty ID</label>
      <div class="col-md-4">
      <input id="roll" name="roll" type="text" placeholder="13B81A0501" class="form-control input-md" required="">
      <span class="help-block">Enter NA if not applicable</span>
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="dept">Department</label>
      <div class="col-md-4">
        <select id="dept" name="dept" class="form-control">
          <option value="CSE">CSE</option>
          <option value="IT">IT</option>
          <option value="Other">Other</option>
        </select>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="dept-other">if Other, please specify department</label>
      <div class="col-md-4">
      <input id="dept-other" name="dept-other" type="text" placeholder="ECE, EIE, etc" class="form-control input-md">

      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-4">
        <input id="submit" name="submit" class="btn btn-default" type = "submit" value = "Submit">
      </div>
    </div>

    </fieldset>
  </form>
<script>
function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}
function validateForm() {
    var name = document.forms["register"]["name"].value;
    if (name == null || name == "") {
        alert("Name must be filled out");
        return false;
    }
    var email = document.forms["register"]["email"].value;
    if (email == null || email == "") {
        alert("Email must be filled out");
        return false;
    }
    if(!validateEmail(email)) {
        alert("Enter a valid email");
        return false;
    }
    var roll = document.forms["register"]["roll"].value;
    if (roll == null || roll == "") {
        alert("Roll Number is mandatory, Enter NA if not applicable");
        return false;
    }
    var contact = document.forms["register"]["contact"].value;
    contact = contact.replace(/[^\d]/g, '');
    if (contact.length < 8 || contact.length > 10) {
        alert("Contact number must be valid");
        return false;
    }
    var college = document.forms["register"]["institution"].value;
    if (college == null || college == "") {
        alert("Contact number must be filled out");
        return false;
    }
    var dept = document.forms["register"]["dept"].value;
    var deptOther = document.forms["register"]["dept-other"].value;
    if (dept == "Other" && (deptOther == "" || deptOther == NULL)) {
        alert("Please mention your branch");
        return false;
    }
}
</script>
</div>
</body>
</html>
