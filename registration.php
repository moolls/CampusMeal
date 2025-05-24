<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script>
		function test(){
			let form = document.forms['register'];
			let uname = form['user'].value;
			let email = form['email'].value;
			let psw = form['pass'].value;
			if(uname.length > 3 && passwordChecker(psw)  && validateEmail(email)){
				return true;
			}
			let error= "";
			if(uname.length < 4)
				error += "Username must be at least 4 letters long\r\n";
			if(!validateEmail(email))
				error += "Please enter a valid email address\r\n";
			if(!passwordChecker(psw))
				error += "Password must be longer than 8 characters and contain at least one numeric value, one lowercase letter and one uppercase letter";
			alert(error)
			return false;

		}
		function validateEmail(email){
			if(email.lastIndexOf(".") > email.indexOf("@") + 2 && email.indexOf("@") > 0 && email.length - email.lastIndexOf(".") >2 ){
				return true;
			}
				return false;
		}
		function passwordChecker(psw){
			if(psw.length > 7 && hasNumeric(psw) && hasUppercase(psw) && hasLowercase(psw))
				return true;
			return false;
		}
		function hasNumeric(s){
			for (let i = 0; i < s.length; i++) {
				const c = s[i];
				if(!isNaN(c))
				return true;
			}
			return false;
		}
		function hasUppercase(s){
			for (let i = 0; i < s.length; i++) {
				const c = s[i];
				if(isNaN(c) && c == c.toUpperCase())
				return true;
			}
			return false;
		}
		function hasLowercase(s){
			for (let i = 0; i < s.length; i++) {
				const c = s[i];
				if(isNaN(c) && c == c.toLowerCase())
				return true;
			}
			return false;
		}
	</script>
</head>
<body>
<?php include 'header.php' ?>

	 <div class="form-container">
		<div class="form">

	<h2 class="center">Create account</h2>
	<h4>Please fill in your details in the fields below to create an account</h4>

			<div class="center-flex" id="container"></div>
        		<form name="register" action="db.php" method="Post">
           			<label for="username">Username:</label>
            		<input type="text" name="user" id="user" placeholder="Enter your chosen username">
					<?php 
						if (isset($_GET['isValid'])) {
							if($_GET['isValid']) {
								echo "This username already exists. Please choose another username" . "<br>" . "<br>";
							}
						}
					?>
            		<label for="email">E-mail:</label>
            		<input type="email" name="email" id="email" placeholder="john@smith.com">
					<?php 
						if (isset($_GET['sameEmail'])) {
							if($_GET['sameEmail']) {
								echo "This email already exists. Please choose another email" . "<br>" . "<br>";
							}
						}
					?>
            		<label for="password">Lösenord:</label>
            		<input type="password" name="pass" id="pass" placeholder="Enter your chosen password">
            		<input type="submit" class="submit" name="submit" value="Create account">
        		</form>
            	<a href="inloggning.php"><button id="form-button" onclick="skapa_click()">Go back</button></a>
    		</div>
		<div>
	<div>

</body>
</html>
