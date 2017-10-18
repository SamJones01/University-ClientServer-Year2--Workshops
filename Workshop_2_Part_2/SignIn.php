<?php
    $username=$_POST['username'];
    $password=$_POST['passwordBox'];
    $havePassword="";
    $haveUsername="";

    if($password==null)
    {
        $havePassword="You do not have a password.";
    }

    else{
        $havePassword="Your password has been set!";
    }

    if ($username==null)
    {
        $haveUsername="You do not have a username.";
    }
    else
    {
        $haveUsername="Welcome ".$username;
    }
    echo  $haveUsername.". ".$havePassword;
?>
<html>
<!--Link to the CSS file for this page-->
<link href="SignIn.css" type="text/css" rel="stylesheet"/>
<body>
<!--The first line of the document-->
<div class="SignIn"
<div class="LineOne">
    <p><strong>Please enter your details below:-</strong></p>
</div>
<!--The link to the form that this one proceeds (passingdata.php)-->
<form name="form2" method="post" action="passingdata.php">
    <!--The second line will contain two labels and two input boxes that require the user to type into-->
    <div class="LineTwo">
        <label>First Name: </label>
        <input type="text" name="firstname">
        <label>Surname: </label>
        <input type="text" name="surname">
    </div>
    <div class="birthday">
        <label>Birthday (DD/MM/YYYY): </label>
        <input type="date" name="birthday">
    </div>

    <!--Three radio buttons are used to select which course the user takes-->
    <div class="RadioButtons">
        <label>CS</label><input type="radio" name="course" value="CS">
        <label>SE</label><input type="radio" name="course" value="SE">
        <label>MIT</label><input type="radio" name="course" value="MIT">
    </div>
    <!--The final line has a checkbox to investigate if the user lives on campus or not-->
    <div class="LineFour">
        <label>Living on the Salford Campus</label>
        <input type="checkbox" name="campus" value="Campus">
    </div>
    <!--This contains two buttons which are used to either reset the form or move onto the next (passingdata.php)-->
    <div class="LineFive">
        <input type="submit" name="Submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
    </div>
    </div>
</form>
</body>