<?php
@include 'Config.php';
session_start();

if( isset($_POST['submit'])  ){
  
  $aliment =  mysqli_real_escape_string($conn,$_POST['aliment']);
  $type_alim =  mysqli_real_escape_string($conn,$_POST['type_alim']);
  $calories =  mysqli_real_escape_string($conn,$_POST['calories']);
  $protein =  mysqli_real_escape_string($conn,$_POST['protein']);
  $carbs =  mysqli_real_escape_string($conn,$_POST['carbs']);
  $fats =  mysqli_real_escape_string($conn,$_POST['fats']);
 
  $quer = "INSERT INTO cata(categorie,aliment,calories,protein,carbs,fats) VALUES ('$type_alim','$aliment','$calories','$protein','$carbs','$fats')";
  $quer_run = mysqli_query($conn, $quer);

}
?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <title>AddMeal - macrotrackr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
      #table{
        
       table-layout: fixed;
       width: 100%;
       border-collapse: collapse;
       border: 3px solid purple;

      }
    </style>
    <link
      rel="shortcut icon"
      href="/playground_assets/favicon-32x32.png"
      type="icon/png"
      sizes="32x32"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./add-meal.css" rel="stylesheet" />

      <div class="add-meal-container">
        <header data-role="Header" class="add-meal-header">
          <a href="admin-dashboard.php"><img
            alt="logo"
            src="public/playground_assets/logo-1400w.png"
            class="add-meal-image"
          /></a>
          <div class="add-meal-nav">
            <nav
              class="navigation-links-in-nav navigation-links-in-root-class-name10"
            >
              
              <span class="navigation-links-in-text2">
                <a href="about.php"><span>À propos</span></a>
              </span>
              <span class="navigation-links-in-text3">
                <a href="faq.php"><span>FAQ</span></a>
              </span>
            </nav>
          </div>
          <div class="add-meal-btn-group">
            <button class="button"><a href="logout.php">Déconnexion</a></button>
          </div>
        </header>
        <form method="post" action="" class="add-meal-form form">
          <h1 class="add-meal-text form_title">Ajouter un repas personnalisé</h1>
         <br><br>
         <span class="add-meal-text1">
            Ajouter l&apos;infos de votre repas personnalisé au catalogue:
          </span>
          <input
            type="text"
            placeholder="Aliment"
            class="add-meal-aliment input"
            id="alim"
            name="aliment"
            required
          />
          <input
            type="text"
            placeholder="Categorie"
            class="add-meal-aliment input"
            name="type_alim"
            id="type"
            required
          />
          <input
            type="number"
            placeholder="Calories"
            class="add-meal-calories input"
            name="calories"
            id="calories"
            required
          />
          <input
            type="number"
            placeholder="Protéine"
            class="add-meal-protein input"
            name="protein"
            id="protein"
            required
          />
          <input
            type="number"
            placeholder="Glucides"
            class="add-meal-carbs input"
            name="carbs"
            id="carbs"
            required
          />
          <input
           type="number"
            placeholder="Lipides"
            class="add-meal-fats input"
            name="fats"
            id="fats"
            required
          />

          <button name="submit" class="add-meal-button button signin">Ajouter</button>
          
        </form>

        <footer class="add-meal-footer">
          <img
            alt="logo"
            src="public/playground_assets/logo2-200h.png"
            class="add-meal-image1"
          />
          
          <span class="add-meal-text4">
            © 2022 MacroTrackr, All Rights Reserved.
          </span>
          
        </footer>
        
      </div>
    </div>
  </body>
</html>