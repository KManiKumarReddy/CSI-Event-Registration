<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link href="style.css" rel = 'stylesheet' type = 'text/css'>
<script src = 'https://code.jquery.com/jquery-1.11.3.min.js'></script>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<title>Online Registration</title>
<meta http-equiv="content-type"
content="text/html; charset=utf-8"/>
</head>
<body>
<div class="wrapper">
<h1>Online Registration</h1>
<?php
    $fp = fopen("eventdata.txt", "r");
    $string = fgets($fp);
    echo "<p>".$string."</p>";
    $string = fgets($fp);
    echo "<p>".$string."</p>";
    $string = fgets($fp);
    echo "<p>".$string."</p>";
    fclose($fp);
    ?>
<form class="form" name = "register" method="post" action="submit.php" onsubmit="return validateForm()">
<input type="text" class="name" name = "name" placeholder="Name">
<div>
<p class="name-help">Please enter your first and last name.</p>
</div>
<input type="email" class="email" name = "email" placeholder="Email">
<div>
<p class="email-help">Please enter your current email address.</p>
</div>
<input type="text" class="roll" name = "roll" placeholder="Roll Number">
<div>
<p class="roll-help">Please enter your college roll number.</p>
</div>
<input type="tel" class="contact" name = "contact" placeholder="Contact Number">
<div>
<p class="contact-help">Please enter your contact number.</p>
</div>
<input type="text" class="dept" name = "dept" placeholder="Department">
<div>
<p class="dept-help">Mention your deartment, Eg: CSE/IT.</p>
</div>
<input type="submit" class="submit" value="Register">
</form>
</div>

<script>
$(".name").focus(function(){
    $(".name-help").slideDown(500);
                 }).blur(function(){
                         $(".name-help").slideUp(500);
});
$(".email").focus(function(){
        $(".email-help").slideDown(500);
    }).blur(function(){
            $(".email-help").slideUp(500);
            });
$(".roll").focus(function(){
                 $(".roll-help").slideDown(500);
                 }).blur(function(){
                         $(".roll-help").slideUp(500);
                         });

$(".contact").focus(function(){
                    $(".contact-help").slideDown(500);
                    }).blur(function(){
                            $(".contact-help").slideUp(500);
                            });
$(".dept").focus(function(){
                    $(".dept-help").slideDown(500);
                    }).blur(function(){
                            $(".dept-help").slideUp(500);
                            });
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
    var roll = document.forms["register"]["roll"].value;
    if (roll == null || roll == "") {
        alert("Roll Number is mandatory, Enter NA if not applicable");
        return false;
    }
    var contact = document.forms["register"]["contact"].value;
    if (contact == null || contact == "") {
        alert("Contact number must be filled out");
        return false;
    }
    var dept = document.forms["register"]["dept"].value;
    if (dept == null || dept == "") {
        alert("Please mention your branch");
        return false;
    }
}
</script>
</body>
</html>