<?php session_start(); ?>

<html>
<body>
<form action ="displayview.php" method="post">
    <p>
        <label for="personid">Enter the personid you want to find</label>
        <input type="text" name="personid" id="personid" placeholder="person id" autocomplete="off"
               required value="<?php if(ISSET($_SESSION['personid'])) echo $_SESSION['personid']?>"/>
    </p>
    <p>
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" id="firstName" placeholder="First Name"
               disabled value="<?php if(ISSET($_SESSION['firstname'])) echo $_SESSION['firstname']?>"/>
    </p>
    <p>
        <label for="surname">Last Name</label>
        <input type="text" name="surname" id="surname" placeholder="Surname"
               disabled value="<?php if(ISSET($_SESSION['surname'])) echo $_SESSION['surname']?>"/>
    </p>
    <p>
        <label for="dob">Date of Birth</label>
        <input type="text" name="dob" id="dob" placeholder="Date of Birth"
               disabled value="<?php if(ISSET($_SESSION['dob'])) echo $_SESSION['dob']?>"/>
    </p>
	<p>
		<label for="email">Email</label>
		<input type="email" name="email" id="email" placeholder="Email"
			   disabled value="<?php if(ISSET($_SESSION['email'])) echo $_SESSION['email']?>"/>
	</p>
	<p>
		<label for="phone">Phone Number</label>
		<input type="number" name="phone" id="phone" placeholder="Phone Number"
			   disabled value="<?php if(ISSET($_SESSION['phone'])) echo $_SESSION['phone']?>"/>
	</p>
    <br> <br>

    <input type="submit" value="Submit">
</form>
<?php
if(!ISSET($_SESSION['firstname']) and ISSET($_SESSION['personid'])){
    echo '<p style="color: red; tect-align: center; font-size:20px">
        No record found for a person with id..' . $_SESSION['personid'] . '
    </p>';
    unset($_SESSION['personid']);
}
?>
</body>
</html>   
