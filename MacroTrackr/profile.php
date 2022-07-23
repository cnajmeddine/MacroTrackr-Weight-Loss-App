<?php
@include 'config.php';
session_start();

if(isset($_POST['submit'])){
  
    $age = mysqli_real_escape_string($conn,$_POST['age']);
    $taille = mysqli_real_escape_string($conn,$_POST['taille']);
    $poid = mysqli_real_escape_string($conn,$_POST['poid']);
    $sexe = mysqli_real_escape_string($conn,$_POST['sexe']);
    $calo = mysqli_real_escape_string($conn,$_POST['calo']);
    $email = $_SESSION['email'];

    $insert ="UPDATE infopers SET age='$age',taille='$taille',poid='$poid',sexe='$sexe',calo='$calo',email='$email' WHERE email='$email'";
    mysqli_query($conn , $insert);
    header('location:main-dashboard.php');
   
    }
    
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Profile - macrotrackr</title>
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
      .apport {
    bottom: 95px;
     width: 70%;
     margin: auto;
     display: flex;
     top:100px;
     margin-top:1000px;
     text-align: center;
     border-style: outset;
        }
        .caloinput {
  color: var(--dl-color-gray-black);
  width: 250px;
  cursor: auto;
  padding: var(--dl-space-space-unit);
  border-top: 0;
  margin-top: 100px;
  top:20px;
  border-left: 0;
  /*margin-left: var(--dl-space-space-fiveunits);*/
  margin-left:200px;
  border-color: var(--dl-color-gray-black);
  border-width: 1px;
  margin-right: 20px;
  border-radius: 4px;
  margin-bottom: 15px;
  background-color: var(--dl-color-gray-white);
}
.calcule-footer {
  width: 100%;
  display: flex;
  margin-top:300px;
  align-items: center;
  padding-top: var(--dl-space-space-twounits);
  padding-left: var(--dl-space-space-threeunits);
  padding-right: var(--dl-space-space-threeunits);
  padding-bottom: var(--dl-space-space-twounits);
  justify-content: space-between;
  background-color: #ECF1F4;
}
.btn {
        display: inline-block;
        background-color: #14A9FF;
        border-radius: 10px;
        border: 4px double #cccccc;
        color: #eeeeee;
        text-align: center;
        font-size: 28px;
        padding: 20px;
        width: 200px;
        height:75px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }
      .btn span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      .btn span:after {
        content: "\00bb";
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }
      .btn:hover {
        background-color: #14A9D1;
      }
      .btn:hover span {
        padding-right: 25px;
      }
      .btn:hover span:after {
        opacity: 1;
        right: 0;
      }
      #resultcal{
        top:100px;
        margin-right:-10px;
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
      <link href="./calcule.css" rel="stylesheet" />

      <div class="calcule-container">
        <header data-role="Header" class="calcule-header">
          <a href="logout.php"><img
            alt="logo"
            src="public/playground_assets/logo-200h.png"
            class="calcule-image"
          /></a>
          <div class="calcule-nav">
            <nav
              class="navigation-links-out-nav navigation-links-out-root-class-name25"
            >
              <span class="navigation-links-out-f-a-q">
                <a href="catalogue-calorique.php"><span>Catalogue calorique</span></a>
              </span>
              <span class="navigation-links-out-f-a-q1">
                <a href="about.php"><span>À propos</span></a>
              </span>
              <span class="navigation-links-out-f-a-q2">
                  <a href="faq.php"><span>FAQ</span></a>
                </span>
            </nav>
          </div>
          <div class="calcule-btn-group">
            <a href="logout.php"><button class="calcule-logout button">Déconnexion</button></a>
          </div>
        </header>
        <h1 class="calcule-text">
          <span>Votre page de profile</span>
        </h1>
        <span>
          Vous pouvez changer d'objectif si vous avez l'impression d'avoir atteint vos objectifs précédents
        </span>
        <form method="post">
        <div class="calcule-background">
          <button type="button"  onclick="calculateCalorie(this)" class="calcule-button button">
            Calculer votre apport calorique quotidien
            
          </button>
        </div>
        <h2   id="resultcal" class="resultcal"> Veuillez-vous assurer que les valeurs que vous avez saisies sont correctes :</h2>

        <div class="calcule-age">
          <span class="calcule-age1 form_text">
            <span>Quel âge avez-vous?</span>
          </span>
          <input
          type="number"
          placeholder="Votre âge"
          class="calcule-textinput input"
          name="age"
          id="age"
          required
          />
          <span class="calcule-text04">Ans</span>
        </div>
        <div class="calcule-sexe">
          <span class="calcule-sexe1 form_text">
            <span>Quel est votre sexe ?</span>
          </span>
          <input type="radio" name="sexe" value="h" id="h" class="calcule-radiobutton" required/>
          <input type="radio" name="sexe" value="f" id="f" class="calcule-radiobutton1" required/>
          <img
            alt="image"
            src="public/playground_assets/woman-300h.png"
            class="calcule-image01"
          />
          <img
            alt="image"
            src="public/playground_assets/man-300h.png"
            class="calcule-image02"
          />
          <span class="calcule-text06">homme</span>
          <span class="calcule-text07">femme</span>
        </div>
        <div class="calcule-poids">
          <span class="calcule-poids1 form_text">
            <span>Combien pèsez-vous ?</span>
          </span>
          <input
            type="number"
            placeholder="Votre poids"
            class="calcule-textinput1 input"
            name="poid"
            id="p"
            required
          />
          <span class="calcule-text09">Kg</span>
        </div>
        <div class="calcule-taille">
          <span class="calcule-taille1 form_text">
            <span>Quelle est votre taille ?</span>
          </span>
          <input
            type="number"
            placeholder="Votre taille"
            class="calcule-textinput2 input"
            name="taille"
            id="tail"
            required
          />
          <span class="calcule-text11">Cm</span>
        </div>
        <div class="calcule-activitylevel">
          <span class="calcule-act form_text">
            À quel point êtes-vous actif au quotidien ?
          </span>
          <button type="button" id="ac" name="activiti" value="1" class="calcule-button1 button">
            <span class="calcule-text12"><span>Pas très actif</span></span>
          </button>
          <button type="button" id="ac" name="activiti" value="2" class="calcule-button2 button">
            <span class="calcule-text14"><span>Modérément actif</span></span>
          </button>
          <button type="button" id="ac" name="activiti" value="3" class="calcule-button3 button">
            <span class="calcule-text16"><span>Actif</span></span>
          </button>
          <button type="button" id="ac" name="activiti" value="4" class="calcule-button4 button">
            <span class="calcule-text18">Très actif</span>
          </button>
          <img
            alt="image"
            src="public/playground_assets/act1-200w.png"
            class="calcule-image03"
          />
          <img
            alt="image"
            src="public/playground_assets/act2-200w.png"
            class="calcule-image04"
          />
          <img
            alt="image"
            src="public/playground_assets/act3-500h.png"
            class="calcule-image05"
          />
          <img
            alt="image"
            src="public/playground_assets/act4-500h.png"
            class="calcule-image06"
          />
          <span class="calcule-text19">
            <span>
              Vous passez la majeure partie de la journée en position assise.
            </span>
            <br />
            <span>(ex: emploi de bureau)</span>
          </span>
          <span class="calcule-text22">
            <span>
              Vous passez une bonne partie de la journée à faire des activités
              physique.
            </span>
            <br />
            <span>(ex: serveur)</span>
          </span>
          <span class="calcule-text25">
            <span>
              Vous passez une bonne partie de la journée à faire des activités
              très physique.
            </span>
            <br />
            <span>(ex: coursier à vélo)</span>
          </span>
          <span class="calcule-text28">
            <span></span>
            <br />
            <span>Vous passez une bonne partie de la journée debout.</span>
            <br />
            <span>(ex: enseignant)</span>
          </span>
        </div>


        <div class="calcule-objectif">
          <span class="calcule-act1 form_text">
            Quelle est votre objective de poids ?
          </span>
          <button type="button" name="object" id="obj" value="-1" class="calcule-button5 button">
            <span class="calcule-text33"><span>Perdre du poids</span></span>
          </button>
          <button type="button" name="object" id="obj" value="0" class="calcule-button6 button">
            <span class="calcule-text35"><span>Maintenir le poids</span></span>
          </button>
          <button type="button" name="object" id="obj" value="1" class="calcule-button7 button">
            <span class="calcule-text37"><span>Prendre du poids</span></span>
          </button>
          <img
            alt="image"
            src="public/playground_assets/lose%20weight-200h.png"
            class="calcule-image08"
          />
          <img
            alt="image"
            src="public/playground_assets/maintain%20weight-200h.png"
            class="calcule-image09"
          />
          <img
            alt="image"
            src="public/playground_assets/gain%20weight-500h.png"
            class="calcule-image10"
          />
          <span class="calcule-text39">
            <span>
              Votre nouveau régime vous permettra de perdre du poids chaque
              semaine
            </span>
          </span>
          <span class="calcule-text41">
            <span>
              Votre nouveau régime vous permettra d&apos;être en surplus
              calorique et de prendre du poids
            </span>
          </span>
          <span class="calcule-text43">
            <span>
              Votre nouveau régime vous permettra de maintenir votre poids
              actuel
            </span>
          </span>

          <div class="apport">
        <input type="number" class="caloinput" placeholder="    Votre apport calorique" name="calo" />
        
      </div>
      <button name="submit" type="submit" class="btn"><a href="main-dashbord.php">
      <span>Enregistrer</span></a>
    </button>
    </form>
    
    </div>
    
    <footer class="calcule-footer">
          <img
            alt="logo"
            src="public/playground_assets/logo2-200h.png"
            class="calcule-image07"
          />
          <span class="calcule-text32">
            © 2021 MacroTrackr, All Rights Reserved.
          </span>
        </footer>
    <script src="calcule.js" ></script>
  </body>
</html>
