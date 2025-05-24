<?php
session_start();
$email = $_SESSION['email'];
$userN=  $_SESSION['user'];

if(isset($_SESSION['email']))
{

if(isset($_POST['filter-post'])){
    $category = $_POST["filter-type"];

    $db = new SQLite3 ("pg18.db");
    $sql = 'SELECT * FROM Posts WHERE category = :category';
    $stmt = $db->prepare ($sql); 
    $stmt->bindValue (':category', $category, SQLITE3_TEXT);
    $filterResult = $stmt->execute();
    while ($filter = $filterResult->fetchArray()){
        
        echo'<div class="post-item"';   
        echo'<div class="post-title">';
        echo "<h1> " . $filter["title"] . "</h1>";
        echo '</div>';   
        echo '<div class="category">';   
        echo "<b>" . $filter['category'] ."</b>";  
        echo '</div>';    
        echo "<p>" . $filter["content"] . "</p>";
        echo'<br> '; 
        echo "<p> a recipe by " . $userN . "</p>"; 
        echo'</div> ';

    }
}

if(isset($_SESSION['user'])){
    if($_SESSION['user'] === 'Admin'){
        header('Location: admin-posts.php');
    }
}


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
<?php include "loggedInHeader.php"; ?>

<div class="container">
       <div class="meal-wrapper">
        <div class="meal-search">
            <h2 class="title">Filter by our delicious recipes posted by other users! </h2>
            <a href="post-recipe.php"><div class="post-button-container"><button class="post-button"> Or maybe you want to post your own recipe?</button></div></a>
            <br>
            <form class="filter-form" method="POST" action="filter-posts.php">
            <label for="category"> Filter by category </label>
             <select name="filter-type" id="filter-type">
                 <option value="breakfast">Breakfast</option>
                 <option value="lunch">Lunch</option>
                 <option value="salad">Salad</option>
                 <option value="maincourse">Main-course</option>
                 <option value="sidedish">Side-dish</option>
                 <option value="dessert">Dessert</option>
                 <option value="soup">Soup</option>
                 <option value="vegetarian">Vegetarian</option>
                 </select>
                 <button type="submit" id="filter-post"name="filter-post" class="filter-post">Filter recipes</button>
  
            </div>
        </div>
<?php 
if(isset($_SESSION['email'])){


$db = new SQLite3 ("pg18.db");
$query = "SELECT * FROM Posts";
$result = $db->query($query);

?>

<?php 
if ($result) {
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        echo'<div class="recipeContainer">';
        echo'<div class="post-item"';   
        echo'<div class="post-title">';
        echo "<h1> " . $row["title"] . "</h1>";
        echo '</div>';   
        echo '<div class="category">';   
        echo "<b>" . $row['category'] ."</b>";  
        echo '</div>';    
        echo "<p>" . $row["content"] . "</p>";
        echo'<br> '; 
        echo "<i> A recipe by " . $row["user"] . "</i>"; 
        echo'</div> ';
        echo'</div>';
        echo'<br>';
    }
} else {
    echo "No posts was found. Be the first one to post!";
}

}
} else {
    echo'log in please';
}
?>

<?php
include 'footer.php';
?>

</body>
</html>

