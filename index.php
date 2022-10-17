<!DOCTYPE html>
<?php
  session_start();
   $mardi =["MardiEntree"=>"Soupe à la courgette","MardiPP"=>"Brochettes de boeuf/agneau saveur citronée","MardiDessert"=>"Tarte au citron meringuée"];

  // $mardi =array("MardiEntree"=>"Soupe à la courgette","MardiPP"=>"Brochettes de boeuf/agneau saveur citronée","MardiDessert"=>"Tarte au citron meringuée");
  $mercredi =array("mercrediEntree"=>"Tomates farcies au four","mercrediPP"=>"Lasagbes à la bolognaise","mercrediDessert"=>"Fondant chocolat coeur coulant");
  $jeudi =array("jeudiEntree"=>"Galettes de flocons d'avoine au fromages","jeudiPP"=>"Risotto aux champignons et crevettes","jeudiDessert"=>"Créme brulée rapide");
  $vendredi =array("vendrediEntree"=>"Mini vols au poulet","vendrediPP"=>"Maquereaux marinés au basilic cuits à la plancha","vendrediDessert"=>"Mousse au chocolat");
  $samedi =array("samediEntree"=>"Soufflé au crabe","samediPP"=>"Risotto /pates aux fruit de mer","samediDessert"=>"Flan patissier");
  $dimanche =array("dimancheEntree"=>"Quesadillas au fromage","dimanchePP"=>"Brochettes de poulet au lait et aux épices","dimancheDessert"=>"Panna cotta vanille citron");
  
  $days = array($mardi,$mercredi,$jeudi,$vendredi,$samedi,$dimanche);
  $_SESSION['days']= $days;
  $_SESSION['mardi'] = $mardi;
  $_SESSION['mercredi'] = $mercredi;
  $_SESSION['jeudi'] = $jeudi;
  $_SESSION['vendredi'] = $vendredi;
  $_SESSION['samedi'] = $samedi;
  $_SESSION['dimanche'] = $dimanche;
 ?>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>Le Quai Des Machines</title>
  </head>
  <body>
    <div id="container-global">
      <!-- *********************************button to top********************************** -->
      <button onclick="topFunction()" id="button-top" title="Go to top">
        <i class="fa-solid fa-up-long"></i>
      </button>

      <!-- ********************************partie navbar -->
      <section id="navbar">
        <header id="menu_container">
          <div id="menu_logo">
            <a href="#formulaire">
              <i class="fa-solid fa-wheat-awn"></i>
              <p>le Quai des Machines</p>
            </a>
          </div>
          <div id="menu_buttons_container">
            <ul>
              <li>
                <a href="#accueil"
                  ><button class="menu_button">Accueil</button></a
                >
              </li>
              <li>
                <a href="#galerie"
                  ><button class="menu_button">Galerie</button></a
                >
              </li>
              <li>
                <a href="#menu-de-la-semaine-container"
                  ><button class="menu_button">Menu de la semaine</button></a
                >
              </li>
              <li>
                <a href="#evenements"
                  ><button class="menu_button">Evenements</button></a
                >
              </li>
              <li>
                <a href="#formulaire"
                  ><button class="menu_button">Contact</button></a
                >
              </li>
              <li>
                <a href="panier.php"
                  ><button class="menu_button">reservation</button></a
                >
              </li>
            </ul>
          </div>
          <div id="menu_bars" class="hamburger">
            <a><i id="ouvrir" class="fa-solid fa-bars"></i></a>
            <a><i id="close" class="fa-solid fa-xmark"></i></a>
          </div>
        </header>
      </section>

      <!-- **********************************partie Accueil********************************** -->
      <section id="accueil">
        <img src="img/accueil.jpg" alt="" />

        <h1>
          Le Quai Des Machines <br />
          Bienvenue
        </h1>
      </section>

      <!--  ****************************************partie video Youtube -->
      <section id="video">
        <div class="youtube">
          <video loop autoplay muted>
            <source src="video/Video.mp4" type=video/mp4>
          </video>
        </div>
      </section>

      <!-- **********************************************partie Galerie photos -->
      <section id="galerie">
        <div class="slider">
          <div class="slide active">
            <img src="img/1.jpg" alt="" />
            <div class="info">
              <h2>Une Décoration Simple Et Elegante</h2>
            </div>
          </div>

          <div class="slide">
            <img src="img/2.jpg" alt="" />
            <div class="info">
              <h2>Une Terrasse Exterieur Pour Les Repas En Plein Air</h2>
            </div>
          </div>

          <div class="slide">
            <img src="img/3.jpg" alt="" />
            <div class="info">
              <h2>Des Repas Entre Amis Conviviaux</h2>
            </div>
          </div>

          <div class="slide">
            <img src="img/4.jpg" alt="" />
            <div class="info">
              <h2>Une Selection De Grands Vins Par Nos Someliers</h2>
            </div>
          </div>

          <div class="slide">
            <img src="img/5.jpg" alt="" />
            <div class="info">
              <h2>Dressage Des Assiettes Soignés Pour Vous Ouvrir L'appetit</h2>
            </div>
          </div>

          <div class="slide">
            <img src="img/6.jpg" alt="" />
            <div class="info">
              <h2>
                Des Pièces De Viandes De Choix
              </h2>
            </div>
          </div>

          <div class="slide">
            <img src="img/7.jpg" alt="" />
            <div class="info">
              <h2>Large Choix De Poissons Frais</h2>
            </div>
          </div>

          <div class="slide">
            <img src="img/8.jpg" alt="" />
            <div class="info">
              <h2>Des Desserts Fruités ...</h2>
            </div>
          </div>

          <div class="slide">
            <img src="img/9.jpg" alt="" />
            <div class="info">
              <h2>... Et Chocolatés Pour Les Gourmands</h2>
            </div>
          </div>

          <div class="navigation">
            <i class="fas fa-chevron-left prev-btn"></i>
            <i class="fas fa-chevron-right next-btn"></i>
          </div>

          <div class="navigation-visibility">
            <div class="slide-icon active"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
          </div>
        </div>
      </section>

      <!--************************ partie section menu de la semaine**************************-->
      <section id="menu-de-la-semaine-container">
        <h1>Menu de la semaine</h1>
        <a href="menu.pdf" download="">
          <div id="download-container">
            <p>Télechargez en PDF</p>
            <i class="fa-solid fa-download"></i>
          </div>
        </a>
        <div class="accordeon-container close">
          <h2 class="accordeon-titre">Mardi</h2>
          <div class="accordeon-contenu">
            <ul>
              <h3>Entrée</h3>
              <li><?php echo $mardi["MardiEntree"] ?></li>
            </ul>
            <ul>
              <h3>Plat principale</h3>
              <li><?php echo $mardi["MardiPP"] ?></li>
            </ul>
            <ul>
              <h3>Dessert</h3>
              <li><?php echo $mardi["MardiDessert"] ?></li>
            </ul>
          </div>
        </div>
        <div class="accordeon-container close">
          <h2 class="accordeon-titre">Mercredi</h2>
          <div class="accordeon-contenu">
            <ul>
              <h3>Entrée</h3>
              <li><?php echo $mercredi["mercrediEntree"] ?></li>
            </ul>
            <ul>
              <h3>Plat principale</h3>
              <li><?php echo $mercredi["mercrediPP"] ?></li>
            </ul>
            <ul>
              <h3>Dessert</h3>
              <li><?php echo $mercredi["mercrediDessert"] ?></li>
            </ul>
          </div>
        </div>
        <div class="accordeon-container close">
          <h2 class="accordeon-titre">Jeudi</h2>
          <div class="accordeon-contenu">
            <ul>
              <h3>Entrée</h3>
              <li><?php echo $jeudi["jeudiEntree"] ?></li>
            </ul>
            <ul>
              <h3>Plat principale</h3>
              <li><?php echo $jeudi["jeudiPP"] ?></li>
            </ul>
            <ul>
              <h3>Dessert</h3>
              <li><?php echo $jeudi["jeudiDessert"] ?></li>
            </ul>
          </div>
        </div>
        <div class="accordeon-container close">
          <h2 class="accordeon-titre">Vendredi</h2>
          <div class="accordeon-contenu">
            <ul>
              <h3>Entrée</h3>
              <li><?php echo $vendredi["vendrediEntree"] ?></li>
            </ul>
            <ul>
              <h3>Plat principale</h3>
              <li><?php echo $vendredi["vendrediPP"] ?></li>
            </ul>
            <ul>
              <h3>Dessert</h3>
              <li><?php echo $vendredi["vendrediDessert"] ?></li>
            </ul>
          </div>
        </div>
        <div class="accordeon-container close">
          <h2 class="accordeon-titre">Samedi</h2>
          <div class="accordeon-contenu">
            <ul>
              <h3>Entrée</h3>
              <li><?php echo $samedi["samediEntree"] ?></li>
            </ul>
            <ul>
              <h3>Plat principale</h3>
              <li><?php echo $samedi["samediPP"] ?></li>
            </ul>
            <ul>
              <h3>Dessert</h3>
              <li><?php echo $samedi["samediDessert"] ?></li>
            </ul>
          </div>
        </div>
        <div class="accordeon-container close">
          <h2 class="accordeon-titre">Dimanche</h2>
          <div class="accordeon-contenu">
            <ul>
              <h3>Entrée</h3>
              <li><?php echo $dimanche["dimancheEntree"] ?></li>
            </ul>
            <ul>
              <h3>Plat principale</h3>
              <li><?php echo $dimanche["dimanchePP"] ?></li>
            </ul>
            <ul>
              <h3>Dessert</h3>
              <li><?php echo $dimanche["dimancheDessert"] ?></li>
            </ul>
          </div>
        </div>
      </section>

      <section id="evenements">
        <div class="card">
          <div class="card__inner">
            <div class="card__face card__face--front">
              <img src="img\pp.jpg" alt="" class="ph" />
            </div>
            <div class="card__face card__face--back">
              <div class="card__content">
                <div class="card__header">
                  <h2>Evenements</h2>
                </div>
                <div class="card__body">
                  <h3>Scènes Ouvertes</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Libero nisi sit quis! Fugiat error esse iste, molestias
                    atque fuga, expedita quasi perspiciatis totam, doloremque
                    eum commodi animi laudantium neque nihil!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card__inner">
            <div class="card__face card__face--front">
              <img src="img\bb.jpg" alt="" class="ph" />
            </div>
            <div class="card__face card__face--back">
              <div class="card__content">
                <div class="card__header">
                  <h2>Evenements</h2>
                </div>
                <div class="card__body">
                  <h3>Concert</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Libero nisi sit quis! Fugiat error esse iste, molestias
                    atque fuga, expedita quasi perspiciatis totam, doloremque
                    eum commodi animi laudantium neque nihil!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card__inner">
            <div class="card__face card__face--front">
              <img src="img\dd.jpg" alt="" class="ph" />
            </div>
            <div class="card__face card__face--back">
              <div class="card__content">
                <div class="card__header">
                  <h2>Evenements</h2>
                </div>
                <div class="card__body">
                  <h3>Exposition</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Libero nisi sit quis! Fugiat error esse iste, molestias
                    atque fuga, expedita quasi perspiciatis totam, doloremque
                    eum commodi animi laudantium neque nihil!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ************************************* partie formulaire**************************** -->
      <section id="formulaire">
        <div class="contact">
          <h1>Reservation</h1>

          <form action="traitement.php?action=reserver" method="POST">    

              <div class="service"> 
                <label for="sub_menu_select">Choisir Jour</label>
                  <select name="day" id="sub_menu_select">
                      <option value="mardi">Mardi</option>
                      <option value="mercredi">Mercredi</option>
                      <option value="jeudi">Jeudi</option>
                      <option value="vendredi">Vendredi</option>
                      <option value="samedi">Samedi</option>
                      <option value="dimanche">Dimanche</option>
                  </select>
                </div>      

              <div class="service"> 
                <label for="sub_menu_select">Choisir Service</label>
                  <select name="sub_menu" id="sub_menu_select" onchange="cache(this.value)">
                      <option value="">Service</option>
                      <option value="midi">Midi</option>
                      <option value="soir">Soir</option>
                  </select>
              </div>  
          <div class="heures">

              <div class="midi" >

                <label for="sub_menu_midi">Choisir Horaires</label>
                  <select name="" id="sub_menu_midi">
                      <option value="12h00">12h00</option>
                      <option value="12h30">12h30</option>
                      <option value="13h00">13h00</option>
                      <option value="13h30">13h30</option>
                      <option value="14h00">14h00</option>
                  </select> 

              </div> 

              <div class="soir" >

                <label for="sub_menu_soir">Choisir Horaires</label>
                  <select name="" id="sub_menu_soir">
                      <option value="19h00">19h00</option>
                      <option value="19h30">19h30</option>
                      <option value="20h00">20h00</option>
                      <option value="20h30">20h30</option>
                      <option value="21h00">21h00</option>
                      <option value="21h30">21h30</option>
                      <option value="22h00">22h00</option>
                  </select>  

                </div>

          </div>
              

          
            <label for="clientName">Nom & prénom</label>
            <input
              type="text"
              id="clientName"
              name="clientName"
              placeholder="Votre nom et prénom"
            />

            <label for="clientNb">Nombre De Personne</label>
            <input
              type="number"
              min=1
              id="clientNb"
              name="clientNb"
              placeholder="Nombre De Personne"
            />

            <label for="clientEmail">Email</label>
            <input
              id="clientEmail"
              type="email"
              name="clientEmail"
              placeholder="Votre email"
            />

      

            <input type="submit" name="submit" value="Envoyer" />
          </form>

        </div>

        <div class="logo">
          <i class="fa-solid fa-wheat-awn"></i>
        </div>

        <div class="infos">

          <h1>Infos Pratiques</h1>
          <div id="info-contenu">
            <ul class="info">
              <li class="info">
                Horaires d'ouvertures : <br />
                Du Mardi au Dimanche <br />12h-14h / 19h00-22h00 <br /><br />
              </li>
              <li class="info">
                Adresse : <br />Parc des Chantiers Bd Léon Bureau <br />
                44200 Nantes <br />
                <br />
              </li>
              <li class="info">
                Telephone : <br />04.33.22.11.00 <br />
                <br />
              </li>
              <li class="info">
                Email : <br />
                resto@resto.fr
              </li>
            </ul>

            <iframe
              class="map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2710.529967959851!2d-1.5704820841539067!3d47.20621172354339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805e94ae243bfbb%3A0xffb532a991ab8ced!2sParc%20des%20Chantiers!5e0!3m2!1sfr!2sfr!4v1664265408703!5m2!1sfr!2sfr"
              width="400"
              height="300"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>

        </div>

      </section>

      <script src="js/script.js"></script>
    
  </body>

  <footer>
    <span>Le Quai Des Machines</span>

    <a href="https://www.instagram.com/" target="_blank">
      <i class="fa-brands fa-instagram"></i
    ></a>
    <a href="https://www.facebook.com/" target="_blank">
      <i class="fa-brands fa-facebook-f"></i
    ></a>
  </footer>
</html>
