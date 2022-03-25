<!DOCTYPE html>
<html>
    <body>
        <div>
            <h1>Amend/View a Student</h1>
            <h4>Please select a student and then click the <span>amend</span> button if you wish to update</h4>
            <div>
                <?php
                    include 'listbox.php';
                ?>

                <script>
                    function populate()
                    {
                        var sel = document.getElementById("listbox");
                        var result;
                        result = sel.options[sel.selectedIndex].value;
                        var studentDetails = result.split(',');

                        document.getElementById("display").innerHTML = "The details of the selected student are: " + result;
                        document.getElementById("amendId").value = studentDetails[0];
                        document.getElementById("amendName").value = studentDetails[1];
                        document.getElementById("amendAddress").value = studentDetails[2];
                        document.getElementById("amendPhone").value = studentDetails[3];
                        document.getElementById("amendGrade").value = studentDetails[4];
                        document.getElementById("amendDOB").value = studentDetails[5];
                        document.getElementById("amendYear").value = studentDetails[6];
                        document.getElementById("amendCode").value = studentDetails[7];
                    }

                    function toggleLock()
                    {
                        if(document.getElementById("amendViewButton").value == "Amend Details")
                        {
                            document.getElementById("amendName").disabled = false;
                            document.getElementById("amendAddress").disabled = false;
                            document.getElementById("amendPhone").disabled = false;
                            document.getElementById("amendGrade").disabled = false;
                            document.getElementById("amendDOB").disabled = false;
                            document.getElementById("amendYear").disabled = false;
                            document.getElementById("amendCode").disabled = false;
                            document.getElementById("amendViewButton").disabled = "View Details";
                        }

                        else
                        {
                            document.getElementById("amendName").disabled = true;
                            document.getElementById("amendAddress").disabled = true;
                            document.getElementById("amendPhone").disabled = true;
                            document.getElementById("amendGrade").disabled = true;
                            document.getElementById("amendDOB").disabled = true;
                            document.getElementById("amendYear").disabled = true;
                            document.getElementById("amendCode").disabled = true;
                            document.getElementById("amendViewButton").disabled = "Amend Details";
                        }
                    }

                    function confirmChanges()
                    {
                        var response;

                        response = confirm('Are you sure you want to save these changes?')
                        if(response)
                        {
                            document.getElementById("amendId").disabled = false;
                            document.getElementById("amendName").disabled = false;
                            document.getElementById("amendAddress").disabled = false;
                            document.getElementById("amendPhone").disabled = false;
                            document.getElementById("amendGrade").disabled = false;
                            document.getElementById("amendDOB").disabled = false;
                            document.getElementById("amendYear").disabled = false;
                            document.getElementById("amendCode").disabled = false;
                        }

                        else
                        {
                            populate();
                            toggleLock();
                            return false;
                        }
                    }
                </script>

                <p id="display"></p>

                <input type="button" value="Amend Details" id="amendViewButton" onclick="toggleLock()">

                <br><br>

                <form name="myForm" action="AmendView.php" onsubmit="return confirmChanges()" method="post">
                    <label for="amendId">Student Id</label><br>
                    <input type="text" name="amendId" id="amendId" disabled>

                    <br><br>

                    <label for="amendName">Student Name</label><br>
                    <input type="text" name="amendName" id="amendName" disabled>

                    <br><br>

                    <label for="amendAddress">Student Address</label><br>
                    <input type="text" name="amendAddress" id="amendAddress" disabled>

                    <br><br>

                    <label for="amendPhone">Student Phone Number</label><br>
                    <input type="tel" name="amendPhone" pattern="[0][8][0-9]{8}" placeholder="08X XXXXXXX"id="amendPhone" disabled>

                    <br><br>

                    <label for="amendGrade">Student Grade Point Average</label><br>
                    <input type="number" min="0" max="100" step="0.01" pattern="^\d*(\.\d{0,2})?$" name="amendGrade" id="amendGrade" placeholder="Values to 2 decimal places" disabled>

                    <br><br>

                    <label for="amendDOB">Student Date of Birth</label><br>
                    <input type="text" name="amendDOB" id="amendDOB" disabled>

                    <br><br>

                    <label for="amendYear">Student Year Began Course</label><br>
                    <input type="number" min="2000" max="2022" step="1" name="amendYear" id="amendYear" disabled>

                    <br><br>

                    <label for="amendCode">Student Course Code</label><br>
                    <input type="text" name="amendCode" id="amendCode" disabled>
					
					<br><br>
					
                    <input type="submit" value="Save Changes">

                </form>
            </div>
        </div>
    </body>
</html>