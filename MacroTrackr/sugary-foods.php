<?php
@include 'config.php';
session_start();
?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Produits sucrés - macrotrackr</title>
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
      <link href="./sugary-foods.css" rel="stylesheet" />

      <div class="sugary-foods-container">
        <header data-role="Header" class="sugary-foods-header">
          <a href="main-dashboard.php"><img
            alt="logo"
            src="public/playground_assets/logo-1400w.png"
            class="sugary-foods-image"
          /></a>
          
          <div class="sugary-foods-nav">
            <nav
              class="navigation-links-out-nav navigation-links-out-root-class-name32"
            >
              <span class="navigation-links-out-f-a-q">
                <a href="catalogue-calorique.php"><span>Catalogue calorique</span></a>
              </span>
              <span class="navigation-links-out-f-a-q1">
                <a href="about.php"><span>À propos</span></a>
              </span>
              <span class="navigation-links-out-f-a-q2">
                  <a href="faq.php"><span>FAQ</span></span></a>
            </nav>
          </div>
        </header>
        <h1 class="sugary-foods-text">Calories dans les aliments</h1>
        <span>Entrez un nom pour rechercher un aliment spécifique:</span>
        <form action="" method="GET">

        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="sugary-foods-searchbar input" placeholder="Chercher un aliment" />

        </form>
        <span class="sugary-foods-text02">
          (Vous ne trouvez pas ce que vous cherchez ? - Entrez votre propre
          repas personnalisé <a href="add-meal-per.php">ici</a>)
        </span>
        
        <table class="sugary-foods-list list">
          <thead class="table-dark">
            <tr>
              <th scope="col">Num</th>
              <th scope="col">Aliment</th>
              <th scope="col">Portion</th>
              <th scope="col">Calories</th>
              <th scope="col">Protéine</th>
              <th scope="col">Glucides</th>
              <th scope="col">Lipides</th>
              <th scope="col">Action</th>
            </tr>
          </thead>

          <tbody>  
          <?php
          if(isset($_GET['search']))
          {
              $filtervalues = $_GET['search'];
              $query = "SELECT * FROM cata WHERE categorie='sucreries' and aliment LIKE '%$filtervalues%' ";
              $query_run = mysqli_query($conn, $query);
              $row=mysqli_fetch_array($query_run);

              if(mysqli_num_rows($query_run) > 0)
              {
                $id_cata=$row['id_cata'];
                  foreach($query_run as $items)
                  {
                      ?>
                      <tr>
                          <td><?= $items['id_cata']; ?></td>
                          <td><?= $items['aliment']; ?></td>
                          <td>100g</td>
                          <td><?= $items['calories']; ?> Kcal</td>
                          <td><?= $items['protein']; ?> g</td>
                          <td><?= $items['carbs']; ?> g</td>
                          <td><?= $items['fats']; ?> g</td>
                          <td>
                  <?php echo'<button class="btn btn-primary"><a href="ajouter.php ? addid='.$id_cata.'" class="text-light">Ajouter</a></button>
                  <button class="btn btn-danger"><a href="supprimer.php ? deleteid='.$id_cata.'" class="text-light">Supprimer</a></button>'; ?>
                  </td>
                      </tr>
                      <?php
                  }
              }
              else
              {
                  ?>
                      <tr>
                          <td colspan="8">Aucun aliment trouvé</td>
                      </tr>
                  <?php
              }
          }

          $sql= "SELECT * FROM cata WHERE categorie='sucreries'; ";
          $result=mysqli_query($conn,$sql);
          if($result){
          
          while( $row=mysqli_fetch_assoc($result)){
            $id_cata=$row['id_cata'];
            $aliment=$row['aliment'];
            $calories=$row['calories'];
            $protein=$row['protein'];
            $carbs=$row['carbs'];
            $fats=$row['fats'];
            echo'<tr>
            <th scope="row">'.$id_cata.'</th>
            <td>'.$aliment.'</td>
            <td> 100g </td>
            <td>'.$calories.' Kcal</td>
            <td>'.$protein.' g</td>
            <td>'.$carbs.' g</td>
            <td>'.$fats.' g</td>
            <td>
            <button class="btn btn-primary"><a href="ajouter.php ? addid='.$id_cata.'" class="text-light">Ajouter</a></button>
            <button class="btn btn-danger"><a href="supprimer.php ? deleteid='.$id_cata.'" class="text-light">Supprimer</a></button>
                  </td>
          </tr>';
          }
          }

          ?>
          </tbody>
      </div>
    </div>
  </body>
</html>
