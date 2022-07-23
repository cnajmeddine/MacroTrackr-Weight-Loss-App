<?php
@include 'config.php';  
session_start();
$email = $_SESSION['email'];
$resultp= mysqli_query($conn,"SELECT * FROM  weight_log where email='$email' order by day; ");
  

 $query = "SELECT id, count(*) as number FROM users ORDER BY id";  
 $result = mysqli_query($conn, $query);  


  if(!isset($_SESSION['email'])){
   header('location:index.php');
  }
?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Tableau du bord - macrotrackr</title>
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
        border: 3px solid var(--dl-color-primary-500);
 
       }
       
 
 #table td, #table th {
   border: 1px solid #ddd;
   padding: 20px;
   
 }
 
 #table tr:nth-child(even){background-color: #f2f2f2;}
 
 #table tr:hover {background-color: #8FB7D3;}
 
 #table th {
   padding-top: 12px;
   padding-bottom: 12px;
   text-align: left;
   background-color: var(--dl-color-primary-500);
   color: white;
 }
 tr{transition:all .25s ease-in-out}
  tr:hover{background-color:#3B93D6;cursor: pointer}
  td {
  width: 200px;
  height: 50px;
  align-content: center;
  text-align: center;
  background-color: aliceblue;
}
thead {
  background-color: var(--dl-color-primary-500);
  height: 40px;
  color: #ffffff;
}
.main-dashboard-protein {
  top: 133px;
  flex: 0 0 auto;
  left: 640px;
  width: 256px;
  height: 150px;
  display: flex;
  z-index: 1;
  position: absolute;
  box-shadow: 5px 5px 10px 0px #d4d4d4;
  transition: 0.3s;
  align-items: flex-start;
  border-color: #DAE7FE;
  border-style: solid;
  border-width: 2px;
  border-radius: var(--dl-radius-radius-radius8);
  flex-direction: column;
  background-color: #ffffff;
}
.main-dashboard-carbs {
  top: 133px;
  flex: 0 0 auto;
  left: 930px;
  width: 256px;
  height: 150px;
  display: flex;
  z-index: 1;
  position: absolute;
  box-shadow: 5px 5px 10px 0px #d4d4d4;
  transition: 0.3s;
  align-items: flex-start;
  border-color: #DAE7FE;
  border-style: solid;
  border-width: 2px;
  border-radius: var(--dl-radius-radius-radius8);
  flex-direction: column;
  background-color: #ffffff;
}
.main-dashboard-fats {
  top: 133px;
  flex: 0 0 auto;
  right: 33px;
  width: 256px;
  height: 150px;
  display: flex;
  z-index: 1;
  position: absolute;
  box-shadow: 5px 5px 10px 0px #d4d4d4;
  transition: 0.3s;
  align-items: flex-start;
  border-color: #DAE7FE;
  border-style: solid;
  border-width: 2px;
  border-radius: var(--dl-radius-radius-radius8);
  flex-direction: column;
  background-color: #ffffff;
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
      <link href="./main-dashboard.css" rel="stylesheet" />

      <div class="main-dashboard-container">
        <svg viewBox="0 0 1024 1024" class="main-dashboard-icon">
          <path
            d="M512 0c282.857 0 512 229.143 512 512 0 281.143-228 512-512 512-283.429 0-512-230.286-512-512 0-282.857 229.143-512 512-512zM865.714 772c53.143-73.143 85.143-162.857 85.143-260 0-241.714-197.143-438.857-438.857-438.857s-438.857 197.143-438.857 438.857c0 97.143 32 186.857 85.143 260 20.571-102.286 70.286-186.857 174.857-186.857 46.286 45.143 109.143 73.143 178.857 73.143s132.571-28 178.857-73.143c104.571 0 154.286 84.571 174.857 186.857zM731.429 402.286c0-121.143-98.286-219.429-219.429-219.429s-219.429 98.286-219.429 219.429 98.286 219.429 219.429 219.429 219.429-98.286 219.429-219.429z"
          ></path>
        </svg>
        <span class="main-dashboard-text"><?php echo $_SESSION['email']; ?></span>
        <div class="main-dashboard-meals">

         <!-- <h1 class="main-dashboard-text01">Entrées de nourriture</h1>-->
          <table class="table" value="<? $table ?>">
        <thead>
          <tr>
            <th scope="col">id_repas</th>
            <th scope="col">Date_repas</th>
            <th scope="col">aliment</th>
            <th scope="col">type_alim</th>
            <th scope="col">calories</th>
            <th scope="col">glucide</th>
            <th scope="col">proteine</th>
            <th scope="col">lipides</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $email=$_SESSION['email'];
          $sql= "SELECT * FROM add_meal where date_repas=CURRENT_DATE() and email='$email'";
          
          $result=mysqli_query($conn,$sql);
            
          if(!('date_repas'==date('yyyy-mm-dd'))){
            
            if($result){
            
            while( $row=mysqli_fetch_assoc($result)){
              $id_repas=$row['id'];
              $date_repas=$row['date_repas'];
              $aliment=$row['aliment'];
              $type_alim=$row['type_alim'];
              $calories=$row['calories'];
              $glucide=$row['glucide'];
              $proteine=$row['proteine'];
              $lipides=$row['lipides'];
  
              echo'<tr>
              <th scope="row">'.$id_repas.'</th>
              <td>'.$date_repas.'</td>
              <td>'.$aliment.'</td>
              <td>'.$type_alim.'</td>
              <td>'.$calories.' Kcal</td>
              <td>'.$glucide.' g</td>
              <td>'.$proteine.' g</td>
              <td>'.$lipides.' g</td>
              
            </tr>';
            }
            }
          }
         

          ?>
        </tbody>
      </table>

        </div>
        <h1 class="main-dashboard-text02">
          <span>Votre tableau de</span>
          <span></span>
          <span>bord</span>
          <span></span>
        </h1>
        <div class="main-dashboard-welcome">
          <span class="main-dashboard-text07">
            <span class="main-dashboard-text08">
              Bienvenue!<br>
            </span>
            <br />
            <span class="main-dashboard-text10">
            Essayer de maintenir un apport calorique de: <br>
              <b><?php 
                $email=$_SESSION['email'];
                $sql="SELECT * FROM infopers WHERE email='$email'";
                $intake=mysqli_query($conn,$sql);
                if(mysqli_num_rows($intake) > 0){
                  $row=mysqli_fetch_array($intake);
                  $apport=$row['calo'];
  
                  echo "$apport Kcal";
                } else{
                  echo "0 Kcal";
                }
                
                
              ?></b>
            </span>

          </span>
        </div>

        <a href="profile.php">
        <div class="main-dashboard-profile">
            <h1 class="main-dashboard-text11">
            <span>Votre profile</span>
            <span class="main-dashboard-text13"></span>
          </h1>
          <svg
            viewBox="0 0 877.7142857142857 1024"
            class="main-dashboard-icon02"
          >
            <path
              d="M686.286 448c80.571 23.429 191.429 102.857 191.429 362.857 0 117.714-87.429 213.143-194.857 213.143h-488c-107.429 0-194.857-95.429-194.857-213.143 0-260 110.857-339.429 191.429-362.857-28.571-45.143-45.143-98.286-45.143-155.429 0-161.143 131.429-292.571 292.571-292.571s292.571 131.429 292.571 292.571c0 57.143-16.571 110.286-45.143 155.429zM438.857 73.143c-121.143 0-219.429 98.286-219.429 219.429s98.286 219.429 219.429 219.429 219.429-98.286 219.429-219.429-98.286-219.429-219.429-219.429zM682.857 950.857c66.857 0 121.714-62.286 121.714-140 0-180-60.571-292.571-173.714-298.286-51.429 45.143-118.286 72.571-192 72.571s-140.571-27.429-192-72.571c-113.143 5.714-173.714 118.286-173.714 298.286 0 77.714 54.857 140 121.714 140h488z"
            ></path>
          </svg>
          <span class="main-dashboard-text14">
            Vous pouvez changer votre objectif
          </span>
        </div>
        </a>

        <div id="columnchart_material" class="main-dashboard-progress">
          <h1 class="main-dashboard-text15">Vos progressions</h1>
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);
      
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Jour','Poids'],
                ['Votre poids',0],
                <?php
                 if(mysqli_num_rows($resultp)>0){
                    while($row =mysqli_fetch_array($resultp)){
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

        
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
        <div class="main-dashboard-calendar">
          <div class="calendar">
            <div class="month">
              <i class="fas fa-angle-left prev"></i>
              <div class="date">
                <h1></h1>
                <p></p>
              </div>
              <i class="fas fa-angle-right next"></i>
            </div>
            <div class="weekdays">
              <div>Dim</div>
              <div>Lun</div>
              <div>Mar</div>
              <div>Mer</div>
              <div>Jeu</div>
              <div>Ven</div>
              <div>Sam</div>
            </div>
            <div class="days"></div>
          </div>
        </div>
        <script src="calendar.js"></script>

        <div class="main-dashboard-header"></div>

        

        <div class="main-dashboard-calories">
          <svg viewBox="0 0 1024 1024" class="main-dashboard-icon04">
            <path
              d="M321.008 1024c-68.246-142.008-31.902-223.378 20.55-300.044 57.44-83.956 72.244-167.066 72.244-167.066s45.154 58.7 27.092 150.508c79.772-88.8 94.824-230.28 82.782-284.464 180.314 126.012 257.376 398.856 153.522 601.066 552.372-312.532 137.398-780.172 65.154-832.85 24.082 52.676 28.648 141.85-20 185.126-82.352-312.276-285.972-376.276-285.972-376.276 24.082 161.044-87.296 337.144-194.696 468.73-3.774-64.216-7.782-108.528-41.55-169.98-7.58 116.656-96.732 211.748-120.874 328.628-32.702 158.286 24.496 274.18 241.748 396.622z"
            ></path>
          </svg>
          <h1 class="macros_title"><span>Calories consommées</span></h1>
          <span class="main-dashboard-text18 macros">
            <?php 
                $email=$_SESSION['email'];
                $sql= "SELECT SUM(calories) as sum FROM add_meal where date_repas=CURRENT_DATE() and email='$email'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                  while($row=mysqli_fetch_assoc($result)){
                    $output=$row['sum'];
                  }
                  echo "$output Kcal";
                } else{
                  echo "0 Kcal";
                }
                
          ?></span>
        </div>

              <!--macros-------------------------------------------------------->

        <div class="main-dashboard-protein">
          <svg viewBox="0 0 1024 1024" class="main-dashboard-icon06 icon">
            <path
              d="M224 0c-106.040 0-192 100.288-192 224 0 105.924 63.022 194.666 147.706 217.998l-31.788 518.124c-2.154 35.132 24.882 63.878 60.082 63.878h32c35.2 0 62.236-28.746 60.082-63.878l-31.788-518.124c84.684-23.332 147.706-112.074 147.706-217.998 0-123.712-85.96-224-192-224zM869.334 0l-53.334 320h-40l-26.666-320h-26.668l-26.666 320h-40l-53.334-320h-26.666v416c0 17.672 14.326 32 32 32h83.338l-31.42 512.122c-2.154 35.132 24.882 63.878 60.082 63.878h32c35.2 0 62.236-28.746 60.082-63.878l-31.42-512.122h83.338c17.674 0 32-14.328 32-32v-416h-26.666z"
            ></path>
          </svg>
          <h1 class="macros_title"><span>Protéine</span></h1>
          <span class="main-dashboard-text21 macros"><?php 
           
           $email=$_SESSION['email'];
           $sql= "SELECT * FROM add_meal where date_repas=CURRENT_DATE() and email='$email'";
           $result=mysqli_query($conn,$sql);
           if(mysqli_num_rows($result) > 0){
            $totalprote=0;
            while($row=mysqli_fetch_array($result)){
              $proteine=$row['proteine'];
              $totalprote= $totalprote + $proteine;
            }
              echo "$totalprote g";
           } else{
              echo "0 g";
           }
           ?></span>
        </div>
        <div class="main-dashboard-carbs">
          <svg viewBox="0 0 1024 1024" class="main-dashboard-icon08 icon">
            <path
              d="M791.498 544.092c-1.294-129.682 105.758-191.876 110.542-194.966-60.152-88.020-153.85-100.078-187.242-101.472-79.742-8.074-155.596 46.948-196.066 46.948-40.368 0-102.818-45.754-168.952-44.552-86.916 1.292-167.058 50.538-211.812 128.38-90.304 156.698-23.126 388.84 64.89 515.926 43.008 62.204 94.292 132.076 161.626 129.58 64.842-2.588 89.362-41.958 167.756-41.958s100.428 41.958 169.050 40.67c69.774-1.296 113.982-63.398 156.692-125.796 49.39-72.168 69.726-142.038 70.924-145.626-1.548-0.706-136.060-52.236-137.408-207.134zM662.562 163.522c35.738-43.358 59.86-103.512 53.28-163.522-51.478 2.096-113.878 34.29-150.81 77.55-33.142 38.376-62.148 99.626-54.374 158.436 57.466 4.484 116.128-29.204 151.904-72.464z"
            ></path>
          </svg>
          <h1 class="macros_title"><span>Glucides</span></h1>
          <span class="main-dashboard-text24 macros"><?php 
           
           $email=$_SESSION['email'];
           $sql= "SELECT * FROM add_meal where date_repas=CURRENT_DATE() and email='$email'";
           $result=mysqli_query($conn,$sql);
           if(mysqli_num_rows($result) > 0){
            $totalgluc=0;
            while($row=mysqli_fetch_assoc($result)){
              $glucide=$row['glucide'];
              $totalgluc= $totalgluc + $glucide;
            }
            echo "$totalgluc g";
           } else{
            echo "0 g";
           }
           
          ?></span>
        </div>
        <div class="main-dashboard-fats">
          <svg viewBox="0 0 1024 1024" class="main-dashboard-icon10 icon">
            <path
              d="M44 726h640v84h-640v-84zM684 640h-642q0-98 66-164t160-82 189 0 161 82 66 164zM42 938v-42h642v42q0 18-13 30t-31 12h-554q-18 0-31-12t-13-30zM770 980v-342q0-126-104-226-62-62-182-96l-12-100h212v-174h84v174h214l-72 702q-4 26-23 44t-45 18h-72z"
            ></path>
          </svg>
          <h1 class="macros_title"><span>Lipides</span></h1>
          <span class="main-dashboard-text27 macros"><?php 
           
           $email=$_SESSION['email'];
           $sql= "SELECT  *FROM add_meal where date_repas=CURRENT_DATE() and email='$email';";
           $result=mysqli_query($conn,$sql);
           if(mysqli_num_rows($result) > 0){
            $totallipide=0;
            while($row=mysqli_fetch_assoc($result)){
              $lipides=$row['lipides'];           
              $totallipide= $totallipide + $lipides;
            }
            echo "$totallipide g";
           } else{
            echo "0 g";
           }
          ?></span>
        </div>
        <div class="main-dashboard-sidebar">
          <nav class="main-dashboard-nav">
            <img
              alt="image"
              src="public/playground_assets/logow-200h.png"
              class="main-dashboard-image"
            />
            <a href="add-meal.php"><button class="main-dashboard-add-meal button add">
              Ajouter un repas
            </button></a>
            <a href="add-weight.php"><button class="main-dashboard-log-weight button add">
              Enregistrez votre poids
            </button></a>
            <span class="main-dashboard-text28 sider">
              <span></span>
              <a href="progress.php">Voir la progression</a>
            </span>
            <span class="main-dashboard-text30 sider"><a href="catalogue-calorique.php">Catalogue calorique</a></span>
            <span class="main-dashboard-text31 sider"><a href="about.php">À propos</a></span>
            <span class="main-dashboard-text32 sider"><a href="faq.php">FAQ</a></span>
          </nav>
          <a href="logout.php"><button class="main-dashboard-logut button">Déconnexion</button></a>
        </div>
        <footer class="main-dashboard-footer">
          <img
            alt="logo"
            src="public/playground_assets/logo2-200h.png"
            class="main-dashboard-image1"
          />
          <span class="main-dashboard-text33">
            © 2022 MacroTrackr, All Rights Reserved.
          </span>
        </footer>
        <div class="main-dashboard-background"></div>
      </div>
    </div>
  </body>
</html>
