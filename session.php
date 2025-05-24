<<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="style.css">


<?php 
    include "loggedInHeader.php";
?>

</head>
<body>
    <div class="inloggad">
        <h1>
            <?php
                echo "Welcome, " . $_SESSION['user'] . "!";
            ?>
            <br>
        </h1><br><br><br>
        <h4>
            <?php
                echo "Username: &nbsp;&nbsp;" . $_SESSION['user'] . "<br>" . "<br>";
                echo "Email: &nbsp;&nbsp;" . $_SESSION['email'] . "<br>" . "<br>";
            ?>
        </h4>
        <br><br><br>
        <form name="logOut" class=button action="db.php" method="Post">
            <input class="submit" type="submit" id="logOut" name="logOut" value="Log Out">
        </form>
    </div>
</body>

</html>