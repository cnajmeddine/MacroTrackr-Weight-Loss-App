<?php 
@include 'config.php';
session_start();

?>



<!DOCTYPE html>

<html lang="en">
  <head>
    <title>FAQ - macrotrackr</title>
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
      <link href="./faq.css" rel="stylesheet" />

      <div class="faq-container">
        <header data-role="Header" class="faq-header">
          <a href="main-dashboard.php"><img
            alt="logo"
            src="public/playground_assets/logo-200h.png"
            class="faq-image"
          /></a>
          <div class="faq-nav">
            <nav
              class="navigation-links-out-nav navigation-links-out-root-class-name33"
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
        </header>
        <div class="faq-about">
          <h1 class="faq-text">
            <span>Questions fréquemment posées sur les régimes :</span>
          </h1>
          <span class="faq-text02 question">
            <span>
              Q: Pour perdre du poids, vous devez planifier chaque repas. Vrai
              ou faux?
            </span>
          </span>
          <span class="faq-text04 answer">
            <span>
              La spontanéité est excellente pour certaines activités, mais
              manger n&apos;en fait pas partie. Les experts en perte de poids
              recommandent de planifier vos repas et vos collations pour vous
              assurer qu&apos;ils s&apos;intègrent dans un régime alimentaire
              bien équilibré.
            </span>
            <br />
            <span></span>
            <br />
            <span></span>
            <span>
              Sans un bon plan, vous êtes plus vulnérable à l&apos;appel des
              sirènes du distributeur automatique ou de la boulangerie la plus
              proche.
            </span>
          </span>
          <span class="faq-text10 question">
            <span>
              Q: Après avoir mangé, combien de temps faut-il attendre avant de
              se sentir rassasié ?
            </span>
          </span>
          <span class="faq-text12 answer">
            <span>
              15-20 minutes. Mangez lentement si vous voulez perdre du poids car
              il y a un décalage entre le moment où votre bouche dit &quot;mmm
              !&quot; et votre cerveau enregistre la plénitude dans votre
              estomac. Si vous posez votre fourchette entre deux bouchées et que
              vous faites votre rythme, vous donnerez plus de temps à votre
              cerveau pour dire à votre estomac que vous êtes rassasié.
            </span>
            <br />
            <span></span>
            <br />
            <span>
              Dans une étude, les femmes invitées à manger lentement mangeaient
              moins de calories et buvaient plus d&apos;eau que
              lorsqu&apos;elles étaient invitées à manger aussi vite
              qu&apos;elles le pouvaient.
            </span>
          </span>
          <span class="faq-text16 question">
            <span>
              Q: Si vous mangez trop le midi, devriez-vous sauter le dîner ? Oui
              ou non?
            </span>
          </span>
          <span class="faq-text18 answer">
            <span>
              Non. Ne sautez pas de repas si vous essayez de perdre du poids.
              Vous vous sentirez plus affamé plus tard et serez plus enclin à
              faire une descente dans le réfrigérateur ou à grignoter de la
              malbouffe - en exécutant le total de calories de votre journée
              potentiellement plus élevé que lors d&apos;un repas. Le fait de
              manquer un repas peut également vous laisser moins d&apos;énergie,
              ce qui rend moins probable que vous fassiez de l&apos;exercice, ce
              qui est important si vous essayez de perdre du poids. Il a été
              démontré que le fait de prendre de petits repas et collations
              nutritifs entre les repas aide les gens à perdre plus.
            </span>
            <br />
            <span></span>
            <br />
            <span>
              Le petit déjeuner est le repas clé à ne pas sauter. Les petits
              déjeuners réguliers sont plus maigres que ceux qui commencent la
              journée à jeun.
            </span>
          </span>
          <span class="faq-text22 question">
            <span>
              Q: Pour aider à perdre du poids plus rapidement, vous devez boire
              de l&apos;eau avant les repas. Vrai ou faux?
            </span>
          </span>
          <span class="faq-text24 answer">
            <span>
              Vrai. Boire de l&apos;eau, surtout avant les repas, aide à vous
              rassasier et vous fait manger moins. Une étude a révélé que les
              adultes qui buvaient deux tasses d&apos;eau avant chaque repas
              perdaient plus de poids que ceux qui n&apos;en buvaient pas.
            </span>
            <br />
            <span></span>
            <br />
            <span>
              L&apos;eau vous aide également à rester hydraté. Lorsque vos reins
              déplacent l&apos;eau dans votre corps, votre poids en eau est plus
              faible.
            </span>
          </span>
          <span class="faq-text28 question">
            <span>Q: Vous devriez vous peser souvent. Vrai ou faux?</span>
          </span>
          <span class="faq-text30 answer">
            <span>
              Vrai. Les personnes qui réussissent à perdre du poids sans le
              reprendre se pèsent souvent, selon les recherches. Un pas sur la
              balance au moins une fois par semaine semble mieux sensibiliser.
            </span>
            <br />
            <span></span>
            <br />
            <span>
              Ne vous inquiétez pas si le nombre sur la balance monte et descend
              : le poids peut changer de plusieurs livres en quelques jours à
              mesure que le poids de l&apos;eau change.
            </span>
          </span>
        </div>
        <footer class="faq-footer">
          <img
            alt="logo"
            src="public/playground_assets/logo2-200h.png"
            class="faq-image1"
          />
          <span class="faq-text34">
            © 2022 MacroTrackr, All Rights Reserved.
          </span>
        </footer>
      </div>
    </div>
  </body>
</html>
