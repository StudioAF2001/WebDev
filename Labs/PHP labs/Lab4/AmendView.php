<?php
    include 'db.inc.php';

    date_default_timezone_set('UTC');

    $dbDate = date("Y-m-d", strtotime($_POST['amendDOB']));

    $sql = "UPDATE Student SET  StudentName='$_POST[amendName]' ,StudentAddress='$_POST[amendAddress]', 
                   StudentPhone='$_POST[amendPhone]', GradePointAverage='$_POST[amendGrade]', DateOfBirth='$dbDate', 
                   YearBeganCourse='$_POST[amendYear]', CourseCode='$_POST[amendCode]' 
					WHERE StudentId='$_POST[amendId]' ";

    if (!mysqli_query($con, $sql))
    {
        echo "Error " . mysqli_error($con);
    }

    else
    {
        if (mysqli_affected_rows($con) != 0)
        {
            echo mysqli_affected_rows($con) ." record(s) updated <br>";
            echo "Student Id " . $_POST['amendId'] . " - " . $_POST['amendName'] . " has been updated"; 
        }

        else
        {
            echo "No records were changed";
        }
    }
?>

<form action="AmendView.html.php" method="post">
    <input type ="submit" value="Return to Previous Screen">
</form>