<?php
@include 'Config.php';
session_start();

if(isset($_POST['submit'])  ){

  $date_repas = date('Y-m-d', strtotime($_POST['date_repas']));
  $aliment =  mysqli_real_escape_string($conn,$_POST['aliment']);
  $type_alim =  mysqli_real_escape_string($conn,$_POST['type_alim']);
  $calories =  mysqli_real_escape_string($conn,$_POST['calories']);
  $glucide =  mysqli_real_escape_string($conn,$_POST['glucide']);
  $proteine =  mysqli_real_escape_string($conn,$_POST['proteine']);
  $lipides =  mysqli_real_escape_string($conn,$_POST['lipides']); 
  $email = $_SESSION['email'];

  $query = "INSERT INTO add_meal(date_repas,aliment,type_alim,calories,glucide,proteine,lipides,email) VALUES ('$date_repas','$aliment','$type_alim','$calories','$glucide','$proteine','$lipides','$email')";
  $query_run = mysqli_query($conn, $query);

}
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Ajouter un repas - macrotrackr</title>
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

#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: var(--dl-color-primary-500);
  color: white;
}
tr{transition:all .25s ease-in-out}
tr:hover{background-color:#EEE;cursor: pointer}
.btn-meal a{

text-decoration: none;
color: rgb(0, 0, 0);
font-family: Georgia, 'Times New Roman', Times, serif;
font-weight: bold;

}

.btn-meal {
 width: 100px;
 border: 30px;
 background-size: cover;
 background:var(--dl-color-primary-500);
 margin-top: -50px;
 height: 40px;
 border-left:500px;
 margin-bottom: 10px;
 margin-left: 200px;
 font-size: 18px;
 border-radius: 10px;
 cursor: pointer;
 color: white;
 transition: .4s ease;
 left: 120px;
}
.btn-meal:hover{
 background :rgb(255, 255, 255);
 color:rgb(24, 83, 151);
}
.main-dashboard-header {
  top: 0px;
  right: -9px;
  width: 1245px;
  height: 108px;
  display: flex;
  z-index: 1;
  position: absolute;
  box-shadow: 5px 5px 10px 0px #d4d4d4;
  align-items: flex-start;
  background-color: #ffffff;
}
.main-dashboard-calories {
  top: 1500px;
  flex: 0 0 auto;
  left: 60px;
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
.main-dashboard-calories:hover {
  transform: scale(1.05);
}
.main-dashboard-icon04 {
  fill: #8449f1;
  width: 48px;
  height: 48px;
  align-self: center;
  margin-top: 5px;
}
.main-dashboard-text18 {
  align-self: center;
}

.main-dashboard-protein:hover {
  transform: scale(1.05);
}
.main-dashboard-icon06 {
  fill: #c2b5da;
  width: 48px;
  height: 48px;
}
.main-dashboard-text21 {
  align-self: center;
}
.main-dashboard-carbs:hover {
  transform: scale(1.05);
}
.main-dashboard-icon08 {
  fill: #79f149;
  width: 48px;
  height: 48px;
}
.main-dashboard-text24 {
  align-self: center;
}
.main-dashboard-icon10 {
  fill: #ec5959;
  width: 48px;
  height: 48px;
}
.main-dashboard-text27 {
  align-self: center;
}
.add-meal-container1 {
  width: 841px;
  border: 2px solid #14A9FF;
  height: 339px;
  display: flex;
  align-items: flex-start;
  margin-bottom: var(--dl-space-space-fourunits);
  overflow: hidden;
  overflow-y: scroll;
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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div>
      <link href="./add-meal.css" rel="stylesheet" />
      

      <div class="add-meal-container">
        <header data-role="Header" class="add-meal-header">
          <a href="main-dashboard.php"><img
            alt="logo"
            src="public/playground_assets/logo-1400w.png"
            class="add-meal-image"
          /></a>
          <div class="add-meal-nav">
            <nav
              class="navigation-links-in-nav navigation-links-in-root-class-name10"
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
          <div class="add-meal-btn-group">
            <a href="logout.php"><button class="button">Déconnexion</button></a>
          </div>
        </header>
        <form method="post" action="" class="add-meal-form form">
          <h1 class="add-meal-text form_title">Ajouter un repas</h1>
          <input
            type="date"
            placeholder="Date"
            class="add-meal-date input"
            id="date"
            name="date_repas"
            required
          />
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
            placeholder="type d'Aliment"
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
            id="calo"
            required
          />
          <input
            type="number"
            placeholder="Protéine"
            class="add-meal-protein input"
            name="proteine"
            id="prote"
            required
          />
          <input
            type="number"
            placeholder="Glucides"
            class="add-meal-carbs input"
            name="glucide"
            id="gluc"
            required
          />
          <input
           type="number"
            placeholder="Lipides"
            class="add-meal-fats input"
            name="lipides"
            id="lipide"
            required
          />
         
          <span class="add-meal-text1">
            
Votre journal alimentaire pour:
          </span>
          
          <!--<button class="btn-meal"   onclick="addTableRow()"  type="button">Ajouter</button>-->
         <!--<button class="btn-meal" onclick="editHtmlTbleSelectedRow()" type="button">Modifier</button>-->
         <!--<button class="btn-meal" onclick="removeSelectedRow()" type="button">Supprimer</button> -->
         
         <button class="btn-meal"  name="submit">Enregitrer</button>

         <!--<button name="submit" class="add-meal-button button signin">supprimer</button>-->

        </form>
        
        <div class="add-meal-line"></div>
        <h3 class="">
            
           N'oublier pas d'enregistrer vos données dans votre base de données : cliquez sur Enregitrer
</h3>

        <h1 class="add-meal-text2"><span>Historique de vos repas</span></h1>
        
        <div class="add-meal-container1">
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
          $sql= "SELECT * FROM add_meal where email='$email' order by date_repas";
          
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

        <br><br>
        

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
      <script src="add-meal.js"></script>

    </div>

  </body>
</html>




