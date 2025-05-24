<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find new recipes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

    <script src = "script.js" defer></script>

</head>
<body>
<?php include "loggedInHeader.php"; ?>

    <div class="container">
       <div class="meal-wrapper">
        <div class="meal-search">
            <h2 class="title">Search for recipes:</h2>
            <div class="meal-search-box">
                <input type="text" class="search-control"
                placeholder="Enter a meal" id="search-input">
                <button type="submit" class="search-btn btn" id="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <div class="meal-result">
            <h2 class="title">Your Search Results:</h2>
            <div id="meal">

               <!-- <div class="meal-item">
                    <div class="meal-img">
                        <img id="food" src="food.jpg" alt = "food">
                    </div>
                    <div class="meal-name">
                        <h3>Maträtt namn</h3>
                        <a href="#" class="recipe-btn">Hämta recept</a>
                    </div>
                </div> --->

            
                </div>
            </div>
        </div>

<div class="meal-details">
<button type="button" class="btn recipe-close-btn" id="recipe-close-btn">
    <i class="fas fa-times"></i>
</button>

<div class ="meal-details-content">

 
   </div>
 
 </div>
</div>

</body>

