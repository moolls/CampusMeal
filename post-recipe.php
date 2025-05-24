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
<?php include "loggedInHeader.php"; ?>

<div class=title2-container>
<h2 class="title2">Add a post!</h2>
</div>

<br>
<div class="postContainer">
<div class="PostContainerText">
<p> Before submitting your recipe, carefully read and understand any guidelines, requirements, or rules outlined by the website. These guidelines may include the preferred format, any specific information required, and any restrictions on content or ingredients. Make sure your recipe complies with these guidelines. 
 <br>
 <br>
 <b> Gather Recipe Information </b>
<br>
Collect all the necessary information related to your recipe. This typically includes:
<br><br>
<b>Recipe Title:</b> Choose a descriptive and appealing title for your recipe. <br>
<b>Ingredients:</b> List all the ingredients required for your recipe, along with their respective quantities. <br>
<b>Instructions:</b> Write clear, step-by-step instructions on how to prepare the recipe. <br>
<b>Cooking Time and Yield:</b> Specify the approximate cooking time and the number of servings the recipe yields. <br>
<b>Additional Details:</b> Some websites may ask for additional information, such as difficulty level, dietary restrictions, or special tips.
</p>
</div>

<div class="post-form-container">
<form class="post-form" action="db.php" method="POST" autocomplete="off">
<label for="name">Recipes name: </label>
<input type="text" name="title" class="text-input" required value="">
<label for="content"> Tell us step by step how you make this delicious meal! </label>
<input type="text" name="content" class="post-content">
<label for="category"> Choose what category </label>
<select name="food-type" id="food-type">
    <option value="Breakfast">Breakfast</option>
    <option value="Lunch">Lunch</option>
    <option value="Salad">Salad</option>
    <option value="Main-course">Main-course</option>
    <option value="Sidedish">Side-dish</option>
    <option value="Dessert">Dessert</option>
    <option value="Soup">Soup</option>
    <option value="Vegetarian">Vegetarian</option>
  </select>
<button type="submit" id="add-post"name="add-post" class="add-post">Add post</button>
</form>
</div>
<a href="posts.php"><button id="form2-button" onclick="skapa_click()">Go back</button></a>
</div>

<br>
<?php
include 'footer.php';
?>