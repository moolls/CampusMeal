<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutritional values</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

    <script src = "script.js" defer></script>

</head>
<body>
<?php include "loggedInHeader.php"; ?>

    <div class="container">
       <div class="meal-wrapper">
        <div class="meal-search">
            <h2 class="title">Search for a raw material to view its nutritional values</h2>
            <div class="meal-search-box">
                <input type="text" class="search-control"
                placeholder="Enter a raw material" id="searchinput">
                <button type="submit" class="search-btn btn" id="search" onclick="a()">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <div class="meal-result">
            <h2 class="title">Your Search Results:</h2>
            <div id="nutrition">
            <ul id="sökResultat"></ul>
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
<button type="button" class="btn recipe-close-btn" id="nutrition-close-btn">
    <i class="fas fa-times"></i>
</button>

<div class ="nutrition-details-content">

 
   </div>
 
 </div>
</div>

 
</body>
