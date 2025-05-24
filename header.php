<?php 
?>

<!DOCTYPE html>
<html lang="sv">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
 </head>

<body>
<header>
   <div class="navbar">
      <div class="websitename">
         <a href="index.php">
            <h1>
               <span class="white-text">Campus</span>
               <span class="pink-text">Meal</span>
            </h1>
         </a>
      </div>
   </div>

   <div class="header-buttons">
      <a href="registration.php">
         <button id="signup-button" onclick="skapa_click()">Sign up</button>
      </a>
      <a href="inloggning.php">
         <i id="user-icon" class="fa-solid fa-user"></i>
      </a>
   </div>
</header>
</body>