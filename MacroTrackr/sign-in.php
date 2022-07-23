<?php
@include 'config.php';
session_start();

if(isset($_POST['submit'])){
  

  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = md5($_POST['password']);
  $emailadm="admin@gmail.com";
  $pwdadm="adm123";
  $email_saisie=htmlspecialchars($_POST['email']);
  $pwd_saisie=htmlspecialchars($_POST['password']);

  $select = " SELECT * FROM users WHERE   email = '".$_POST['email']."'  ";
  $result = mysqli_query($conn,$select);

  if(mysqli_num_rows($result) > 0){
    $_SESSION['email'] =$_POST['email'];
    header('location:main-dashboard.php');
    
    
  }
  
  elseif(($email_saisie==$emailadm) and ($pwd_saisie==$pwdadm)){
       
    header('location:admin-dashboard.php');
  }else{
      
    echo "<script>alert('Incorrect email')</script>";
}

}
?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Authentification - macrotrackr</title>
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
      <link href="./sign-in.css" rel="stylesheet" />

      <div class="sign-in-container">
        <header data-role="Header" class="sign-in-header">
          <a href="index.php"><img
            alt="logo"
            src="public/playground_assets/logo-1400w.png"
            class="sign-in-image"
          /></a>
          <div class="sign-in-nav">
            <nav
              class="navigation-links-out-nav navigation-links-out-root-class-name12"
            >
              
              <span class="navigation-links-out-f-a-q1">
                <a href="about.php"><span>À propos</span></a>
              </span>
              <span class="navigation-links-out-f-a-q2">
                <a href="faq.php"><span>FAQ</span></a>
              </span>
            </nav>
          </div>
        </header>
        <form method="post" action="" class="sign-in-form form">
          <h1 class="form_title"><span>Connectez-vous</span></h1>
          <input
          type="email"
          placeholder="E-mail"
          class="sign-in-email input"
          name="email"
          required
        />
        <input
          type="password"
          placeholder="Mot de passe"
          class="sign-in-password input"
          name="password"
          required
          />
          <a href="sign-up.php"><span class="sign-in-text2">Vous n&apos;avez pas de compte?</span></a>
          <button name="submit" class="sign-in-button button signin">Connexion</button>
        </form>
        <footer class="sign-in-footer">
          <img
            alt="logo"
            src="public/playground_assets/logo2-200h.png"
            class="sign-in-image1"
          />
          <span class="sign-in-text3">
            © 2022 MacroTrackr, All Rights Reserved.
          </span>
        </footer>
      </div>
    </div>
  </body>
</html>
