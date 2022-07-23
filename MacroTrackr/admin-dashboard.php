<?php

@include 'config.php';
$query = "SELECT id, count(*) as number FROM users ORDER BY id";  
 $result = mysqli_query($conn, $query);  


?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Tableau du bord Admin - macrotrackr</title>
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
             tr:hover{background-color:#5178d6;cursor: pointer}
             td {
  width: 200px;
  height: 90px;
  align-content: center;
  text-align: center;
  background-color: aliceblue;
}
thead {
  background-color: var(--dl-color-primary-500);
  height: 40px;
  color: #ffffff;
}
h2{
  text-align: center;
}
.btn-up-rmv a{

text-decoration: none;
color: rgb(255, 255, 255);
font-weight: normal;
}

.btn-up-rmv {
 width: 150px;
 border: 30px;
 background-size: cover;
 background:var(--dl-color-primary-500);
 margin-top: -50px;
 height: 40px;
 border-left:500px;
 margin-bottom: 20px;
 margin-left: 20px;
 font-size: 18px;
 border-radius: 10px;
 cursor: pointer;
 color: #FFFFFF;
 transition: .4s ease;
}
.btn-up-rmv:hover{
 background : #7193e3;
 color:#425175;
}
.admin-dashboard-container {
  width: 100%;
  display: flex;
  overflow: auto;
  min-height: 100vh;
  align-items: flex-start;
  flex-direction: column;
  justify-content: flex-start;
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
      <link href="./admin-dashboard.css" rel="stylesheet" />

      <div class="admin-dashboard-container">
        <div class="admin-dashboard-users">
        <!--<h2>informations utilisateurs</h2>-->

          <table overflow=hidden class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">username</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">operation</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $sql= "SELECT *FROM users";
          $result=mysqli_query($conn,$sql);
          if($result){
          
          while( $row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $username=$row['username'];
            $email=$row['email'];
            $pwd=$row['password'];
            echo'<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$username.'</td>
            <td>'.$email.'</td>
            <td>'.$pwd.'</td>
            <td>
                   <br> <button class="btn-up-rmv"><a href="update.php ? updateid='.$id.'" class="text-light">Modifier</a></button>
                    <button class="btn-up-rmv"><a href="delete.php ? deleteid='.$id.'" class="text-light">Supprimer</a></button>

                  </td>
          </tr>';
          }
          }

          ?>
        </tbody>
      </table>

        </div>
        <div class="admin-dashboard-header"></div>

        <div class="admin-dashboard-totalusers">
          <svg viewBox="0 0 1024 1024" class="admin-dashboard-icon">
            <path
              d="M896 896v-85.333c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464h-341.333c-58.88 0-112.299 23.936-150.869 62.464s-62.464 91.989-62.464 150.869v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-85.333c0-35.371 14.293-67.285 37.504-90.496s55.125-37.504 90.496-37.504h341.333c35.371 0 67.285 14.293 90.496 37.504s37.504 55.125 37.504 90.496v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667zM725.333 298.667c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464-112.299 23.936-150.869 62.464-62.464 91.989-62.464 150.869 23.936 112.299 62.464 150.869 91.989 62.464 150.869 62.464 112.299-23.936 150.869-62.464 62.464-91.989 62.464-150.869zM640 298.667c0 35.371-14.293 67.285-37.504 90.496s-55.125 37.504-90.496 37.504-67.285-14.293-90.496-37.504-37.504-55.125-37.504-90.496 14.293-67.285 37.504-90.496 55.125-37.504 90.496-37.504 67.285 14.293 90.496 37.504 37.504 55.125 37.504 90.496z"
            ></path>
          </svg>
          <h1 class="macros_title">Total d&apos;utilisateurs</h1>
          <span class="admin-dashboard-text03 macros"><?php
          $query="SELECT id FROM users ORDER BY id";
          $result =mysqli_query($conn,$query);
          $row=mysqli_num_rows($result);
          echo '<h1>'.$row.'</h1>';

           ?></span>
        </div>

        <div class="admin-dashboard-activeusers">
          <svg viewBox="0 0 1024 1024" class="admin-dashboard-icon2">
            <path
              d="M725.333 896v-85.333c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464h-298.667c-58.88 0-112.299 23.936-150.869 62.464s-62.464 91.989-62.464 150.869v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-85.333c0-35.371 14.293-67.285 37.504-90.496s55.125-37.504 90.496-37.504h298.667c35.371 0 67.285 14.293 90.496 37.504s37.504 55.125 37.504 90.496v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667zM576 298.667c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464-112.299 23.936-150.869 62.464-62.464 91.989-62.464 150.869 23.936 112.299 62.464 150.869 91.989 62.464 150.869 62.464 112.299-23.936 150.869-62.464 62.464-91.989 62.464-150.869zM490.667 298.667c0 35.371-14.293 67.285-37.504 90.496s-55.125 37.504-90.496 37.504-67.285-14.293-90.496-37.504-37.504-55.125-37.504-90.496 14.293-67.285 37.504-90.496 55.125-37.504 90.496-37.504 67.285 14.293 90.496 37.504 37.504 55.125 37.504 90.496zM695.168 499.499l85.333 85.333c16.683 16.683 43.691 16.683 60.331 0l170.667-170.667c16.683-16.683 16.683-43.691 0-60.331s-43.691-16.683-60.331 0l-140.501 140.501-55.168-55.168c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331z"
            ></path>
          </svg>
          <h1 class="macros_title"><span>Utilisateurs actifs</span></h1>
          <span class="admin-dashboard-text06 macros"><?php
            $query="SELECT id FROM infopers ORDER BY id";
            $result =mysqli_query($conn,$query);
            $row=mysqli_num_rows($result);
            echo '<h1>'.$row.'</h1>';
  
          ?></span>
        </div>

        <div class="admin-dashboard-sidebar">
          <nav class="admin-dashboard-nav">
            <img
              alt="image"
              src="public/playground_assets/logow-200h.png"
              class="admin-dashboard-image"
            />
            
            <a href="add-meal-perad.php"><button class="main-dashboard-add-meal button add">
              Ajouter un repas
            </button></a>
            <span class="admin-dashboard-text09 sider">
              
            </span>
            <span class="admin-dashboard-text10 sider"><a href="about.php">À propos</a></span>
            <span class="admin-dashboard-text11 sider"><a href="faq.php">FAQ</a></span>
          </nav>
          <a href="logout.php"><button class="admin-dashboard-logut button">Déconnexion</button></a>
        </div>
        <footer class="admin-dashboard-footer">
          <img
            alt="logo"
            src="public/playground_assets/logo2-200h.png"
            class="admin-dashboard-image1"
          />
          <span class="admin-dashboard-text12">
            © 2022 MacroTrackr, All Rights Reserved.
          </span>
        </footer>
        <div class="admin-dashboard-background"></div>
        <h1 class="admin-dashboard-text13">
          <span>Tableau de bord d&apos;administration</span>
        </h1>
        <svg viewBox="0 0 1024 1024" class="admin-dashboard-icon4">
          <path
            d="M512 0c282.857 0 512 229.143 512 512 0 281.143-228 512-512 512-283.429 0-512-230.286-512-512 0-282.857 229.143-512 512-512zM865.714 772c53.143-73.143 85.143-162.857 85.143-260 0-241.714-197.143-438.857-438.857-438.857s-438.857 197.143-438.857 438.857c0 97.143 32 186.857 85.143 260 20.571-102.286 70.286-186.857 174.857-186.857 46.286 45.143 109.143 73.143 178.857 73.143s132.571-28 178.857-73.143c104.571 0 154.286 84.571 174.857 186.857zM731.429 402.286c0-121.143-98.286-219.429-219.429-219.429s-219.429 98.286-219.429 219.429 98.286 219.429 219.429 219.429 219.429-98.286 219.429-219.429z"
          ></path>
        </svg>
        <span class="admin-dashboard-text15">Admin</span>
      </div>
    </div>
  </body>
</html>
