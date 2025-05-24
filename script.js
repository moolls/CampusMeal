const searchBtn = document.getElementById('search-btn');
const mealList = document.getElementById('meal');
const mealDetailsContent = document.querySelector('.meal-details-content');
const recipeCloseBtn = document.getElementById('recipe-close-btn');


searchBtn.addEventListener('click', getMealList);
mealList.addEventListener('click', getMealRecipe);
recipeCloseBtn.addEventListener('click',()=> {
    mealDetailsContent.parentElement.classList.remove('showRecipe');});

function getMealList(){
    let searchInputTxt = document.getElementById('search-input').value.trim();
    fetch("https://www.themealdb.com/api/json/v1/1/search.php?s="+searchInputTxt)
    .then(response => response.json())
    .then(data=> {
        let html = "";
        if(data.meals){
            data.meals.forEach(meal => {
               html+= `
               <div class="meal-item" data-id = "${meal.idMeal}">
                <div class="meal-img">
                   <img id="food" src="${meal.strMealThumb}" alt = "food">
                </div>
                <div class="meal-name">
                   <h3>${meal.strMeal}</h3>
                   <a href="#" class="recipe-btn">Get recipe</a>
                 </div>
           </div> 
           `;

                });
                mealList.classList.remove('notFound');
        } else {
            html = "Sorry, we couldn't find any meal :(";
            mealList.classList.add('notFound');  
          }

        mealList.innerHTML = html;
    })
}

function getMealRecipe(e){
e.preventDefault();
if(e.target.classList.contains('recipe-btn')){
let mealItem = e.target.parentElement.parentElement;
fetch("https://www.themealdb.com/api/json/v1/1/lookup.php?i="+mealItem.dataset.id)
.then(response => response.json())
.then(data => mealRecipeModal(data.meals));

}

}

function mealRecipeModal(meal){
console.log(meal);
meal = meal[0];
let html = `<h2 class ="recipe-title">${meal.strMeal}</h2>
<p class="recipe-category">${meal.strCategory}</p>
<div class="recipe-instruct">
    <h3>Instructions:</h3>
    <p>${meal.strInstructions} </p>
 </div> 
 `;
mealDetailsContent.innerHTML = html;
mealDetailsContent.parentElement.classList.add('showRecipe');


}

function a(){
    var query = document.getElementById('searchinput').value;
    var apiKey = 'vMIcNe5Px9VCxvWvcjqlUg==OwDmEIqh3SX0HASO';

    fetch('https://api.api-ninjas.com/v1/nutrition?query=' + query, {
      method: 'GET',
      headers: {
        'X-Api-Key': apiKey,
        'Content-Type': 'application/json'
      }
    })
    .then(function(response) {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json();
    })
    .then(function(result) {
      console.log(result);
      var resultContainer = document.getElementById('sökResultat');
      resultContainer.innerHTML = '';

      result.forEach(function(item) {
        var itemContainer = document.createElement('div');

        for (var key in item) {
          var property = document.createElement('p');
          property.textContent = key + ': ' + item[key];
          property.id = 'pId';
          itemContainer.appendChild(property);
        }
        resultContainer.appendChild(itemContainer);
      
        document.getElementById("sökResultat").style.display = "block";
});
    })
    .catch(function(error) {
      console.error('Error:', error);
    });
  }