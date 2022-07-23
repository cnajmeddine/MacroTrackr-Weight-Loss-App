<?php 
@include 'config.php';
session_start();

?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>A-propos - macrotrackr</title>
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
      <link href="./about.css" rel="stylesheet" />

      <div class="about-container">
        <header data-role="Header" class="about-header">
          <a href="main-dashboard.php"><img
            alt="logo"
            src="public/playground_assets/logo-200h.png"
            class="about-image"
          /></a>
          <div class="about-nav">
            <nav
              class="navigation-links-out-nav navigation-links-out-root-class-name18"
            >
              <span class="navigation-links-out-f-a-q">
                <a href="catalogue-calorique.php"><span>Catalogue calorique</span></a>
              </span>
              <span class="navigation-links-out-f-a-q1">
                <a href="#top"><span>À propos</span></a>
              </span>
              <span class="navigation-links-out-f-a-q2">
                <a href="faq.php"><span>FAQ</span></a>
              </span>
            </nav>
          </div>
        </header>
        <div class="about-about">
          <h1 class="about-text">
            <span>Perdre du poids facilement</span>
            <span></span>
            <span>avec macrotrackr !</span>
            <span></span>
          </h1>
          <span class="about-text05"></span>
          <span class="about-text06 about">
            <span>
              Perdre du poids, ce n&apos;est pas facile, nous le savons bien.
              Mais en utilisant MacroTrackr, vous disposerez des outils dont
              vous avez besoin pour perdre du poids et ne pas en reprendre. Et
              l&apos;intégralité de notre site est entièrement gratuite ! Rangez
              votre carte de crédit car vous ne débourserez pas un centime.
            </span>
            <br />
            <span></span>
            <br />
            <span>​</span>
            <span></span>
            <br />
            <span>
              De nombreuses études ont confirmé qu&apos;il est bénéfique de
              garder une trace de vos activités et des aliments que vous
              consommez. C&apos;est simple : plus le suivi de votre consommation
              alimentaire est constant, plus vous avez de chances de perdre du
              poids. C&apos;est pour cette raison que tous les programmes de
              régime procèdent de tenir un journal répertoriant vos aliments et
              vos activités. Mais consigner tout ce que vous mangez sans
              disposer des bons outils peut s&apos;avérer fastidieux, voire même
              impossible dans le pire des cas.
            </span>
            <br />
            <span></span>
            <br />
            <span>
              Chez MacroTrackr, nous nous assurons que vous pourrez ajouter
              rapidement et facilement vos repas dans votre journal. En effet,
              une utilisation facile est synonyme de régularité et donc de
              réussite dans vos objectifs de perte de poids.
            </span>
            <span></span>
          </span>
        </div>
        <footer class="about-footer">
          <img
            alt="logo"
            src="public/playground_assets/logo2-200h.png"
            class="about-image1"
          />
          <span class="about-text19">
            © 2022 MacroTrackr, All Rights Reserved.
          </span>
        </footer>
      </div>
    </div>
  </body>
</html>
