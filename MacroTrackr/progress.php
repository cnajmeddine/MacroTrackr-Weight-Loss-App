<?php
  @include 'config.php';  
  session_start();

  $email = $_SESSION['email'];
  $result= mysqli_query($conn, "SELECT * FROM  weight_log where email='$email' order by day; ");
  $query=mysqli_query($conn,"SELECT add_meal.date_repas as day, SUM(add_meal.calories) as sum, infopers.calo as total FROM add_meal, infopers where add_meal.email='$email' and infopers.email='$email' and add_meal.date_repas=CURRENT_DATE() order by day");
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Progressions - macrotrackr</title>
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
      <link href="./progress.css" rel="stylesheet" />

      <div class="progress-container">
        <header data-role="Header" class="progress-header">
          <a href="main-dashboard.php"><img
            alt="logo"
            src="public/playground_assets/logo-1400w.png"
            class="progress-image"
          /></a>
          
          <div class="progress-nav">
            <nav
              class="navigation-links-in-nav navigation-links-in-root-class-name8"
            >
              <span class="navigation-links-in-text">
                <a href="#top"><span>Voir la progression</span></a>
              </span>
              <span class="navigation-links-in-text1">
                <a href="catalogue-calorique.php"><span>Catalogue calorique</span></a>
              </span>
              <span class="navigation-links-in-text2">
                <a href="about.php"><span>À propos</span>
              </span>
              <span class="navigation-links-in-text3">
                  <a href="faq.php"><span>FAQ</span></span></a>
            </nav>
          </div>
          <div class="progress-btn-group">
            <a href="logout.php"><button class="button">Déconnexion</button></a>
          </div>
        </header>
        <h1 class="progress-text"><span>Suivre vos progrès</span></h1>
        <span>
          Gardez une trace du nombre de calories que vous avez consommées
          quotidiennement par rapport à votre apport calorique
        </span>

        <!--Calories------------------------------------------------------->
        <div id="columnchart_materiall" class="progress-calories">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">
        </script>
          <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart','bar']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
              var data = new google.visualization.arrayToDataTable([
                ['Jour','Consommées','Total'],
                ['Vos calories',0,0],
                <?php
                 if(mysqli_num_rows($query)>0){
                    while($row =mysqli_fetch_array($query)){
                      echo "['".$row['day']."',['".$row['sum']."'],['".$row['total']."']]";
                    }
                 }    
              ?>
              ]);
      
              var options = {
                chart: {
                  title: ' ',
                  vAxis: {
                    title: 'Vos calories'
                  }
                }
              };
              var chart = new google.charts.Bar(document.getElementById('columnchart_materiall'));
              chart.draw(data, google.charts.Bar.convertOptions(options));
            }
          </script>

        </div>

        <div class="progress-line"></div>
        <span class="progress-text3">
          Suivre l&apos;évolution de votre poids
        </span>

        <!--Poids------------------------------------------------------------------------->
        <div id="columnchart_material" class="progress-calories1">
          <script type="text/javascript">
            google.charts.setOnLoadCallback(drawChart);
      
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['day','poids'],
                ['Votre poids',0],
                <?php
                 if(mysqli_num_rows($result)>0){
                    while($row =mysqli_fetch_array($result)){
                      echo "['".$row['day']."',['".$row['poids']."']],";
                    }
                 }    
              ?>
               
              ]);
      
              var options = {
                chart: {
                  title: ' ',
                 
                }
              };
      
              var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
              chart.draw(data, google.charts.Bar.convertOptions(options));
            }
          </script>
        </div>
        <footer class="progress-footer">
          <img
            alt="logo"
            src="public/playground_assets/logo2-200h.png"
            class="progress-image1"
          />
          <span class="progress-text4">
            © 2022 MacroTrackr, All Rights Reserved.
          </span>
        </footer>
      </div>
    </div>
  </body>
</html>
