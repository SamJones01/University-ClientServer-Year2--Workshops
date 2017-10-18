<html>
    <link href="passingdata.css" type="text/css" rel="stylesheet"/>
    <div class="text">
        <body>
<?php
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $subject = $_POST['course'];
    $birthday = $_POST['birthday'];
    $today = date("d/m/Y");
    $campus = isset($_POST['campus']);
    $birthday_timestamp = strtotime($birthday);
    $today_timestamp = strtotime($today);
    $attend = "";

    $birthday_year=date('Y', $birthday_timestamp);
    $today_year=date('Y', $today_timestamp);

    $birthday_day=date('m', $birthday_timestamp);
    $today_day=date('m', $today_timestamp);

    $birthday_month=date('d', $birthday_timestamp);
    $today_month=date('d', $today_timestamp);

    $AllowedToJoin = 0;

    if($campus= 1)
    {
        $attend="You live on campus.";
    }
    else
    {
        $attend="You don't live on campus.";
    }

    if($today_day<=$birthday_day && $birthday_month<=$today_month && $birthday_year<=$today_year-18 && $birthday_year>=$today_year-100)
    {
        $AllowedToJoin=1;
    }
    else
    {
        $AllowedToJoin=0;
    }

    if($AllowedToJoin==1)
    {
        echo " You're " . $firstname . " " . $surname . " and you study " . $subject . ". ".$attend." Your birthday is " . $birthday . " and today's date is " . $today . ".";

    }
    else
    {
        echo "You cannot access this section...";
    }
?>      </body>
        <form name="form3" method="post" action="Index.php">
            <div class="return">
                <input type="submit" name="return"  value="Return">
            </div>
        </form>
    </div>
    </html>
