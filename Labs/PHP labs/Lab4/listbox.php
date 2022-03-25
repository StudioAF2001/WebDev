<?php
    include "db.inc.php";
    date_default_timezone_set('UTC');

    $sql = "SELECT StudentId, StudentName, StudentAddress, StudentPhone, GradePointAverage, 
            DateOfBirth, YearBeganCourse, CourseCode FROM Student";

    if (!$result = mysqli_query($con, $sql))
    {
        die( 'Error in querying the database' . mysqli_error($con) );
    }

    echo "<br><select name = 'listbox' id = 'listbox' onclick = 'populate()'>";

    while ($row = mysqli_fetch_array($result))
    {
        $id = $row['StudentId'];
        $sName = $row['StudentName'];
        $sAddress = $row['StudentAddress'];
        $sPhone = $row['StudentPhone'];
        $sGrade = $row['GradePointAverage'];
        $sDob = $row['DateOfBirth'];
        $dob = date_create( $row['DateOfBirth'] );
        $dob = date_format( $dob, "Y-m-d");
        $yearBegan = $row['YearBeganCourse'];
        $sCode = $row['CourseCode'];
        
        $allText = "$id,$sName,$sAddress,$sPhone,$sGrade,$dob,$yearBegan,$sCode";

        echo "<option value='$allText'>$id - $sName</option>";
    }

    echo "</select>";

    mysqli_close($con);

