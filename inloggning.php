<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	



</head>
<body>
<?php include 'header.php' ?>

        <div class="form-container">
            <div class="form">

            <h2 class="center">Login</h2>
            <form name="login" action="db.php" method="Post" onsubmit="return test()" > 
                <label for="username">Username: </label><br>
                <input type="text" name="username" id="username" placeholder="Enter your username"> <br><br>
                <label for="password">Password: </label><br>
                <input type="password" name="password" id="password" placeholder="Enter your password"><br><br>
                <input class="submit" type="submit" id="LogIn" name="LogIn" value="Login">
            </form>
            <br>
            <h6>Don´t have an account?</h6> 
            <a href="registration.php"><button id="form-button" onclick="skapa_click()">Create account</button></a>
            
            </div>

        </div>
        <br>  


</body>
