<?php
@include 'Config.php';
session_start();

if(isset($_POST['submit'])){
    $poids =  mysqli_real_escape_string($conn,$_POST['poids']);
    $day = date('Y-m-d', strtotime($_POST['day']));
    $email = $_SESSION['email'];

    $query = "INSERT INTO weight_log (poids,day,email) VALUES ('$poids','$day','$email')";
    $query_run = mysqli_query($conn, $query);
  }
?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <title>AddWeight - macrotrackr</title>
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
      <link href="./add-weight.css" rel="stylesheet" />

      <div class="add-weight-container">
        <header data-role="Header" class="add-weight-header">
          <a href="main-dashboard.php"><img
            alt="logo"
            src="public/playground_assets/logo-200h.png"
            class="add-weight-image"
          /></a>
          <div class="add-weight-nav">
            <nav
              class="navigation-links-in-nav navigation-links-in-root-class-name14"
            >
              <span class="navigation-links-in-text">
                <a href="progress.php"><span>Voir la progression</span></a>
              </span>
              <span class="navigation-links-in-text1">
                <a href="catalogue-calorique.php"><span>Catalogue calorique</span></a>
              </span>
              <span class="navigation-links-in-text2">
                <a href="about.php"><span>À propos</span></a>
              </span>
              <span class="navigation-links-in-text3">
                <a href="faq.php"><span>FAQ</span></a>
              </span>
            </nav>
          </div>
          <div class="add-weight-btn-group">
            <a href="logout.php"><button class="button">Déconnexion</button></a>
          </div>
        </header>
        <form method="post" action="" class="add-weight-form form">
          <h1 class="add-weight-text form_title">Enregistrez votre poids</h1>
          <input
          type="date"
          placeholder="Date"
          class="add-weight-aliment input"
          name="day"
          required
        />
        <input
          type="number"
          placeholder="Votre poids"
          class="add-weight-calories input"
          name="poids"
          required
          />
          <span class="add-weight-text1">
            Enregister et suivez votre poids:
          </span>
          <button type="submit" name="submit" class="add-weight-button button signin">Enregister</button>
        </form>
        <footer class="add-weight-footer">
          <img
            alt="logo"
            src="public/playground_assets/logo2-200h.png"
            class="add-weight-image1"
          />
          <span class="add-weight-text2">
            © 2022 MacroTrackr, All Rights Reserved.
          </span>
        </footer>
      </div>
    </div>
  </body>
</html>
