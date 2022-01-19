<?php require_once "formulaire.php" ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Portfolio</title>
  <meta name="description" content="Portfolio de Stevie Oyini avec ses réalisations" />
  <meta name="author" content="nom portfolio année 2021" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="assets/CSS/main.css" />
</head>

<body>
  <header id="header">
    <img id="float1" src="assets/images/moi3.jpg" alt="photo Oyini Stevie en dessin" />
    <nav class="menu">
      <ul id="ul">
        <li><a href="index.php">Accueil</a></li>
        <li>
          <a href="#profil">Profil</a>
        </li>
        <li>
          <a href="#compétences">Parcours</a>
        </li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main class="main">
    <section class="section1">
      <h1><span>Stevie Oyini</span></h1>
      <p class="titre">Développeur Web junior</p>
    </section>
    <section id="profil" class="colorback">
      <h2>À PROPOS DE MOI</h2>
      <img id="float2" src="assets/images/moi2.jpg" alt="photo d'Oyini Stevie" />
      <p>
        Bonjour, Je m'appelle Stevie Oyini, je suis développeur web junior.
      </p>
      <p>
        Après quelques années passées dans le domaine commercial, qui m'a
        permis d'acquérir de très bonnes compétences telles que
        l'organisation, le travail d'équipe et le conseil, suite à un
        licenciement économique et passionné par l'univers du web, j'ai donc
        profité de l'occasion pour effectuer une reconversion professionnelle.
      </p>
      <p>
        Après un Bootcamp, suivi de 6 mois de formation en tant que développeur web
        Fullstack, aujourd'hui, j'adore créer, mettre en pratique des projets
        sur demande, et régler les bugs. Je suis quelqu'un d'assez organisé,
        très curieux, avec une grande attention sur le details.
      </p>
      <p>
        Fan de musique, de foot, et de la bonne cuisine, je
        suis aussi amateur de films et series fantastique.
      </p>
    </section>
    <section id="compétences" class="colorback">
      <h2>COMPÉTENCES</h2>
      <p class="center">
        En constante amelioration, voici quelques compétences acquises au
        cours de mes formations
      </p>
      <div>

      </div>
      <article class="Flex1">
        <div>
          <h3>FRONT END</h3>
          <img src="assets/images/icons8-html-5-48.png" alt="logo html" />
          <img src="assets/images/icons8-css3-48.png" alt="logo CSS" />
          <img src="assets/images/icons8-javascript-48.png" alt="logo Javascript" />
          <img src="assets/images/icons8-bootstrap-48.png" alt="logo Bootstrap" />
        </div>
        <div>
          <h3>BACK END</h3>
          <img src="assets/images/icons8-logo-php-50.png" alt="logo php" />
          <img src="assets/images/icons8-logo-de-mysql-50.png" alt="logo Mysql" />
        </div>
        <div>
          <h3>CMS</h3>
          <img src="assets/images/icons8-wordpress-60.png" alt="logo Wordpress" />
        </div>
        <div>
          <h3>INFOGRAPHE</h3>
          <img src="assets/images/icons8-adobe-photoshop-48.png" alt="logo Photoshop" />
        </div>
      </article>
    </section>
    <section class="colorback">
      <h2 id="portfolio">PORTFOLIO</h2>
      <article class="Flex1">
        <div>
          <h3>Projets en PHP</h3>
          <div>

            <div>
              <img src="assets/images/portfolio.png" alt="photo de mon Portfolio" width="300" height="200" />
            </div>
            <a href="https://www.stevieoyini.com/"><button>DEMO</button></a>

            <div>
              <img src="assets/images/Todolist.png" alt="photo du site de gestion des taches" width="300" height="200" />
            </div>
            <a class='div' href="https://www.todolistdev.tech/"><button>DEMO</button></a>

          </div>
        </div>
        <div>
          <h3>Projets en Javascript</h3>
          <div>
            <div>
              <img src="assets/images/risu.png" alt="photo du site risu voyage" width="300" height="200" />
            </div>
            <a class='div' href="https://risuvoyage.fr/"><button>DEMO</button></a>


            <div>
              <img src="assets/images/tetris.png" alt="photo du site tetrisdemo" width="300" height="200" />
            </div>
            <a class='div' href="https://tetrisdemo.online/"><button>DEMO</button></a>

          </div>
        </div>
      </article>
    </section>
    <section id="contact" class="formulaire">
      <h2>CONTACT</h2>
      <div class="logo">
        <p class="mail">contact@stevieoyini.com</p>
        <a href="https://github.com/stevieoyini"> <img src="assets/images/icons8-github-50.png" alt="logo de Github" /></a>
        <a href="https://www.linkedin.com/in/stevieoyini"><img src="assets/images/icons8-linkedin-48.png" alt="logo de Linkedin" /></a>
      </div>
      <p class="center" id="center2">
        N'hesitez pas à me contacter, je vous répondrai dans les plus brefs
        délais.
      </p>

      <form method="POST">
        <fieldset>
          <div class="Flex1">
            <p>
              <label for="nom">Nom:</label>
              <input type="text" id="nom" name="nom" placeholder="Nom" />
            </p>
            <p>
              <label for="prenom">Prenom:</label>
              <input type="text" id="prenom" name="prenom" placeholder="Prenom" />
            </p>
          </div>
          <div class="Flex1">
            <p>
              <label for="email">email:</label>
              <input type="text" id="email" name="email" placeholder="mail" class="form-control">
            </p>
            <p>
              <label for="telephone">Téléphone :</label>
              <input type="text" id="telephone" name="telephone" placeholder="telephone" />
            </p>
          </div>
          <p>
            <label for="message">Message:</label>
          </p>
          <div class="center">
            <p>
              <textarea id="message" name="message" cols="90" rows="15" required></textarea>
            </p>
          </div>
          <p>
            <input type="checkbox" id="accepter" name="accepter" value="OK" />
            <label for="accepter" class="accepter">En soumettant ce formulaire, j'accepte que mes données
              personnelles soient utilisées pour me recontacter. Aucun autre
              traitement ne sera effectué avec mes informations. Pour
              connaître et exercer vos droits, veuillez consulter la
              <a href="politiqueconfidence.php" class="hover"><mark>Politique de confidentialité</mark></a>.</label>
          </p>
          <button class="bouton1" value="envoyer">Envoyer</button>

        </fieldset>
      </form>
    </section>
  </main>
  <footer>© Copyright 2021 - Stevie OYINI. Tous droits réservés.</footer>
</body>

</html>