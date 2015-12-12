<?php
  if($_SERVER['REQUEST_METHOD'] === 'POST' && $_REQUEST['sendable']!='no'){
    !empty($_POST['name']) ? $data['name']=$_POST['name'] : $error['name']='Votre nom*' ;
    !empty($_POST['object']) ? $data['object']=$_POST['object'] : $error['object']='Votre objet*' ;
    !empty($_POST['mail']) ? $data['mail']=$_POST['mail'] : $error['mail']='Votre email*' ;
    !empty($_POST['msg']) ? $data['msg']=$_POST['msg'] : $error['msg']='Votre message*' ;
    $message = 'From: '.$data['mail']."\r\n".$data['msg'];
    if(!isset($error)){
      mail('arnaud.dassy@gmail.com', $data['object'], $message);
    }
    header('Location: redirect.php');
  }
?>
<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Arnaud Dassy - Web Developer</title>
        <meta name="Author" content="Arnaud Dassy" />
      	<meta name="Rev" content="arnaud.dassy@gmail.com" />
      	<meta name="keywords" content="Arnaud, Dassy, arnauddassy, arnaud, arnau, dassy, infographiste, web, Web, webdesigner, designer, liège, waremme, oreye, developer, web developer" />
      	<meta name="Description" content="Je suis un étudiant en infographie qui habite près de Waremme ce site est une sorte de portefolio qui présente mes travaux" />
        <link rel="icon" href="./img/jump.gif" type="image/gif">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/buttons.css">
        <link rel="stylesheet" type="text/css" href="css/inputs.css">
        <link rel="stylesheet" type="text/css" href="css/menu_wave.css" />
        <link rel="stylesheet" type="text/css" href="css/tabs.css" />
        <link rel="stylesheet" type="text/css" href="css/tabstyles.css" />
        <link rel="stylesheet" type="text/css" href="font/font-awesome-4.3.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/card.css" />
      	<link rel="stylesheet" type="text/css" href="css/pattern.css" />


        <script src="./js/snap.svg-min.js"></script>
        <script src="./js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="./js/modernizr.custom.js"></script>
    </head>
    <body>
      <div class="container">
  			<div class="menu-wrap">
  				<nav class="menu">
            <div class="tabs tabs-style-linemove icon-list">
    					<nav>
    						<ul>
    							<li><a href="#section-linemove-1" class="changeContextHome"><span class="icon icon-home">Home</span></a></li>
    							<li><a href="#section-linemove-2" class="changeContextAbout"><span class="icon icon-box">About</span></a></li>
    							<li><a href="#section-linemove-4" class="changeContextWork"><span class="icon icon-tools">Works</span></a></li>
    							<li><a href="#section-linemove-5" class="changeContextContact"><span class="icon icon-upload">Contact</span></a></li>
    						</ul>
    					</nav>
    					<div class="contentx-wrap">
    						<section id="section-linemove-1"><p>1</p></section>
    						<section id="section-linemove-2"><p>2</p></section>
    						<section id="section-linemove-4"><p>4</p></section>
    						<section id="section-linemove-5"><p>5</p></section>
    					</div><!-- /content -->
    				</div><!-- /tabs -->
  				</nav>
  				<button class="close-button" id="close-button">Close Menu</button>
  				<div class="morph-shape" id="morph-shape" data-morph-open="M0,100h1000V0c0,0-136.938,0-224,0C583,0,610.924,0,498,0C387,0,395,0,249,0C118,0,0,0,0,0V100z">
  					<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1000 100" preserveAspectRatio="none">
  						<path d="M0,100h1000l0,0c0,0-136.938,0-224,0c-193,0-170.235-1.256-278-35C399,34,395,0,249,0C118,0,0,100,0,100L0,100z"/>
  					</svg>
  				</div>
  			</div>
  			<button class="menu-button" id="open-button">Open Menu</button>
        <div class="content-wrap">
  				<div class="content">
            <h1 class="toHide">Arnaud Dassy - Web Developer</h1>
            <nav class="menu__ball">
              <h2 class="toHide">Menu Rapide</h2>
              <ul>
                <div class="_home ball">
                  <a href="#home"><li>H<span>ome</span></li></a>
                  <div></div>
                </div>
                <div class="_about ball">
                  <a href="#about"><li>A<span>bout</span></li></a>
                  <div></div>
                </div>
                <div class="_work ball">
                  <a href="#work"><li>W<span>ork</span></li></a>
                  <div></div>
                </div>
                <div class="_contact ball">
                  <a href="#contact"><li>C<span>ontact</span></li></a>
                  <div></div>
                </div>
              </ul>
            </nav>
            <section class="nav__home nav" id="home">
              <h2 class="toHide">Home</h2>
              <p class="header"><span class="retourChariot name">Arnaud Dassy</span><span class="retourChariot function">Web Developer</span></p>
              <q><span class="retourChariot">Design is for <em>Artists</em>,</span>
              <span class="retourChariot">Development is for <b>Geniuses</b>.</span></q>
            </section>
            <section class="nav__about nav" id="about">
              <h2>About me</h2>
              <p>J'ai 20 ans, je suis web developer, et je suis votre gars !</p>
              <p class="skillHeader">Skills</p>
              <div class="skillContainer">
                <div class="skill">
          				<p>HTML5 / CSS3 </p>
          				<div class="ladderFull">
          					<div class="ladderSkill HTMLCSS"></div>
          				</div>
          			</div>
          			<div class="skill">
          				<p>Javascript </p>
          				<div class="ladderFull">
          					<div class="ladderSkill JS"></div>
          				</div>
          			</div>
          			<div class="skill">
          				<p>PHP / MYSQL </p>
          				<div class="ladderFull">
          					<div class="ladderSkill PHP"></div>
          				</div>
          			</div>
          			<div class="skill">
          				<p>CMS</p>
          				<div class="ladderFull">
          					<div class="ladderSkill CMS"></div>
          				</div>
          			</div>
          			<div class="skill">
          				<p>Photoshop</p>
          				<div class="ladderFull">
          					<div class="ladderSkill PS"></div>
          				</div>
          			</div>
          			<div class="skill">
          				<p>Illustrator</p>
          				<div class="ladderFull">
          					<div class="ladderSkill ILLU"></div>
          				</div>
          			</div>
          			<div class="skill">
          				<p>Premiere</p>
          				<div class="ladderFull">
          					<div class="ladderSkill PREMIERE"></div>
          				</div>
          			</div>
          			<div class="skill">
          				<p>3D (Maya)</p>
          				<div class="ladderFull">
          					<div class="ladderSkill MAYA"></div>
          				</div>
          			</div>
              </div>
            </section>
            <section class="nav__work nav" id="work">
              <div class="content-work">
                <div class="pattern pattern--hidden"></div>
          			<div class="wrapper">
                  <h2 class="toHide">Works</h2>
                  <h2>Pas trop mal, hein ?</h2>
          				<div class="card">
          					<div class="card__container card__container--closed">
          						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
          							<defs>
          								<clipPath id="clipPath1">
          									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
          								</clipPath>
          							</defs>
          							<image clip-path="url(#clipPath1)" width="1920" height="500" xlink:href="img/a.jpg"></image>
          						</svg>
                      <div class="card__content">
          							<i class="card__btn-close fa fa-times"></i>
          							<div class="card__caption">
          								<p><h2 class="card__title">The Creature</h2></p>
          								<p><p class="card__subtitle">3D Project</p></p>
          							</div>
          							<div class="card__copy">
          								<div class="meta">
          									<img class="meta__avatar" src="img/author.jpg" alt="author01" />
          									<span class="meta__author">Arnaud Dassy</span>
          									<span class="meta__date">2014</span>
          								</div>
          								<p>Dans le cadre d'un projet 3D, nous devions réaliser une créature à la forme anthropique.</p>
          								<p>Ceci est un projet qui m'a pris pas mal de temps, je dois bien l'avouer. Mais au final, j'en suis plutôt fière ! Réalisé à l'aide du logiciel Maya (version 2014 je pense hum hum), ce projet ne m'a pas toujours facilité la vie ! Entre les crashs de maya, les problèmes de symétrie et d'architecture, j'en ai bavé !</p>
          								<p>J'ai décidé non pas de modéliser un humain, mais plutôt une créature dont les caractéristiques s'en rapproche. Je me suis largement inspiré de Goulum, de la sage du Seigneur des Anneaux.</p>
          								<p>Par rapport aux soucis pratique du rendu, j'ai décidé d'utiliser des textures simples pour la peau, les cornes etc. Le morceau de tissu est quant à lui réalisé avec une texture cuir. J'ai créé la texture des yeux sous photoshop.</p>
          								<p>Pour accentuer le côté 'glauque' de la chose, je décidé de placer mon copain dans une grotte (modéliser par mes soins bien sur, faut pas déconner hèhè), avec un peu de décor. Les couleurs sont froides.</p>
          							</div>
          						</div>
          					</div>
          				</div>
          				<div class="card">
          					<div class="card__container card__container--closed">
          						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
          							<defs>
          								<clipPath id="clipPath2">
          									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
          								</clipPath>
          							</defs>
          							<image clip-path="url(#clipPath2)" width="1920" height="500" xlink:href="img/b.jpg"></image>
          						</svg>
          						<div class="card__content">
          							<i class="card__btn-close fa fa-times"></i>
          							<div class="card__caption">
          								<p><h2 class="card__title">Die Antwoord</h2></p>
          								<p><p class="card__subtitle">2D Project</p></p>
          							</div>
          							<div class="card__copy">
          								<div class="meta">
          									<img class="meta__avatar" src="img/author.jpg" alt="author02" />
                            <span class="meta__author">Arnaud Dassy</span>
          									<span class="meta__date">2014</span>
          								</div>
          								<p>Projet réalisé dans le cadre du cours de 2D avec le logiciel photoshop.</p>
          								<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
          								<p>Pas grand chose à dire ici. Le but était de réaliser un visuel sur une personne ou un groupe de personne (fictifs ou non), correspondant évidemement le plus possible au caractère et à l'identité visuelle de la cible.</p>
                          <p>La contrainte était d'utiliser le moins d'image possible tout en explorant les fonctionnalités des différents filtres Photoshop.</p>
                          <p>Mission accomplie ?</p>
          							</div>
          						</div>
          					</div>
          				</div>
          				<div class="card">
          					<div class="card__container card__container--closed">
          						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
          							<defs>
          								<clipPath id="clipPath3">
          									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
          								</clipPath>
          							</defs>
          							<image clip-path="url(#clipPath3)" width="1920" height="500" xlink:href="img/c.jpg"></image>
          						</svg>
          						<div class="card__content">
          							<i class="card__btn-close fa fa-times"></i>
          							<div class="card__caption">
          								<p><h2 class="card__title">Robot</h2></p>
          								<p><p class="card__subtitle">3D Project</p></p>
          							</div>
          							<div class="card__copy">
          								<div class="meta">
          									<img class="meta__avatar" src="img/author.jpg" alt="author03" />
          									<span class="meta__author">Arnaud Dassy</span>
          									<span class="meta__date">2013</span>
          								</div>
          								<p>Modélisation et rendu d'un robot sous le logiciel Maya.</p>
                          <p>Mon premier gros projet en infographie. Il m'a demandé pas mal de temps, environ 4 mois. J'ai modélisé et texturé (textures toutes faites ceci dit) moi même le bonhomme.</p>
                          <p>Le rendu est assez travaillé et m'a permis d'apprendre pas mal de choses. Le rendu a été légérement retravaillé sous photoshop.</p>
          							</div>
          						</div>
          					</div>
          				</div>
          				<div class="card">
          					<div class="card__container card__container--closed">
          						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
          							<defs>
          								<clipPath id="clipPath4">
          									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
          								</clipPath>
          							</defs>
          							<image clip-path="url(#clipPath4)" width="1920" height="500" xlink:href="img/d.jpg"></image>
          						</svg>
          						<div class="card__content">
          							<i class="card__btn-close fa fa-times"></i>
          							<div class="card__caption">
          								<p><h2 class="card__title">Let's play a game</h2></p>
          								<p><p class="card__subtitle">Javascript Game</p></p>
          							</div>
          							<div class="card__copy">
          								<div class="meta">
          									<img class="meta__avatar" src="img/author.jpg" alt="author04" />
          									<span class="meta__author">Arnaud Dassy</span>
          									<span class="meta__date">2015</span>
          								</div>
          								<p>Projet réalisé dans le cadre du cours d'applications multimédia.</p>
          								<p>Voici donc un petit jeu que j'ai réalisé en Canvas (HTML 5) et Javascript. Ce projet m'a fait énormément avancé en JS et m'a permis d'apprendre un tas de trucs géniaux !</p>
                          <p>Bon, qu'on s'entende bien, c'est pas le jeu de l'année, et certes il y a quelques petits bugs, mais il m'aurait fallu beaucoup plus de temps pour le perfectionner .. :(</p>
                          <p>Bon sinon pas grand chose à dire, je n'ai pas créé le fond, les objets, le personnage. J'ai juste découpé et créé un sprite moi même. Puis bon, c'est quand même du 60 fps, donc ça pète.</p>
                          <p>Allez vous amuser ! <a href="http://arnauddassy.be/game" target="_blank">Game</a></p>
                      </div>
          					</div>
          				</div>
          			</div>
                <div class="card">
                  <div class="card__container card__container--closed">
                    <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                      <defs>
                        <clipPath id="clipPath5">
                          <polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
                        </clipPath>
                      </defs>
                      <image clip-path="url(#clipPath5)" width="1920" height="500" xlink:href="img/e.jpg"></image>
                    </svg>
                    <div class="card__content">
                      <i class="card__btn-close fa fa-times"></i>
                      <div class="card__caption">
                        <p><h2 class="card__title">Bibliothèque</h2></p>
                        <p><p class="card__subtitle">PHP Project</p></p>
                      </div>
                      <div class="card__copy">
                        <div class="meta">
                          <img class="meta__avatar" src="img/author.jpg" alt="author05" />
                          <span class="meta__author">Arnaud Dassy</span>
                          <span class="meta__date">2015</span>
                        </div>
                        <p>Projet réalisé dans le cadre du cours de programmation web côté serveur.</p>
                        <p>On devait réaliser un projet qui jouait avec une base de données, c'est chose faites.</p>
                        <p>Amusez vous à l'explorer ! <a href="http://arnauddassy.be/Biblio" target="_blank">Bibliothèque</a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card__container card__container--closed">
                    <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                      <defs>
                        <clipPath id="clipPath6">
                          <polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
                        </clipPath>
                      </defs>
                      <image clip-path="url(#clipPath6)" width="1920" height="500" xlink:href="img/f.jpg"></image>
                    </svg>
                    <div class="card__content">
                      <i class="card__btn-close fa fa-times"></i>
                      <div class="card__caption">
                        <p><h2 class="card__title">My ex web site</h2></p>
                        <p><p class="card__subtitle">Web project</p></p>
                      </div>
                      <div class="card__copy">
                        <div class="meta">
                          <img class="meta__avatar" src="img/author.jpg" alt="author06" />
                          <span class="meta__author">Arnaud Dassy</span>
                          <span class="meta__date">2015</span>
                        </div>
                        <p>Mon premier site web, un one page quoi.</p>
                        <p>J'ai pas grand chose à dire, je voulais juste commencer à avoir une certaine visibilité sur internet.</p>
                        <p>Vous moquez pas, faut bien commencer par quelque part !</p>
                        <p>Bon allait comme je suis gentil, <a href="http://arnauddassy.be/site1" target="_blank">allez voir ça</a></p>
                      </div>
                    </div>
                  </div>
                </div>
          		</div><!-- /content -->
            </section>
            <section class="nav__contact nav" id="contact">
              <h2 class="toHide">Contact</h2>
              <h2>Une idée, un projet ?</h2>
              <form action="index.php" method="post">
                <div class="input input--kozakura"><input type="text" name="name" id="name" class="input__field input__field--kozakura" ><label for="name" class="input__label input__label--kozakura">Name</label><svg class="graphic graphic--kozakura" preserveAspectRatio="none" viewBox="0 0 1200 60" height="100%" width="300%"><path d="M1200,9c0,0-305.005,0-401.001,0C733,9,675.327,4.969,598,4.969C514.994,4.969,449.336,9,400.333,9C299.666,9,0,9,0,9v43c0,0,299.666,0,400.333,0c49.002,0,114.66,3.484,197.667,3.484c77.327,0,135-3.484,200.999-3.484C894.995,52,1200,52,1200,52V9z"></svg></div>
                <div class="input input--kozakura"><input type="text" name="object" id="object" class="input__field input__field--kozakura" ><label for="object" class="input__label input__label--kozakura">Object</label><svg class="graphic graphic--kozakura" preserveAspectRatio="none" viewBox="0 0 1200 60" height="100%" width="300%"><path d="M1200,9c0,0-305.005,0-401.001,0C733,9,675.327,4.969,598,4.969C514.994,4.969,449.336,9,400.333,9C299.666,9,0,9,0,9v43c0,0,299.666,0,400.333,0c49.002,0,114.66,3.484,197.667,3.484c77.327,0,135-3.484,200.999-3.484C894.995,52,1200,52,1200,52V9z"></svg></div>
                <div class="input input--kozakura"><input type="text" name="mail" id="mail" class="input__field input__field--kozakura" ><label for="mail" class="input__label input__label--kozakura">Mail</label><svg class="graphic graphic--kozakura" preserveAspectRatio="none" viewBox="0 0 1200 60" height="100%" width="300%"><path d="M1200,9c0,0-305.005,0-401.001,0C733,9,675.327,4.969,598,4.969C514.994,4.969,449.336,9,400.333,9C299.666,9,0,9,0,9v43c0,0,299.666,0,400.333,0c49.002,0,114.66,3.484,197.667,3.484c77.327,0,135-3.484,200.999-3.484C894.995,52,1200,52,1200,52V9z"></svg></div>
                <div class="message input input--kozakura"><textarea type="text" name="msg" id="msg" class="input__field input__field--kozakura"></textarea><label for="mail" class="input__label input__label--kozakura">Message</label><svg class="graphic graphic--kozakura" preserveAspectRatio="none" viewBox="0 0 1200 60" height="100%" width="300%"><path d="M1200,9c0,0-305.005,0-401.001,0C733,9,675.327,4.969,598,4.969C514.994,4.969,449.336,9,400.333,9C299.666,9,0,9,0,9v43c0,0,299.666,0,400.333,0c49.002,0,114.66,3.484,197.667,3.484c77.327,0,135-3.484,200.999-3.484C894.995,52,1200,52,1200,52V9z"></svg></div>
                <input type="hidden" name="sendable" value="no">
                <input type="button" name="submit" value="soumettre" class="toHide">
                <div class="buttonBackWorks">
                  <span class="button button--wayra button--border-thick button--text-upper button--size-l" style='cursor:pointer;'>Send</span>
                </div>
                <p><input type="text" id="useless" placeholder='NE PAS REMPLIR CE CHAMP' style="position:absolute;left:-8000px;display:none;"></p>
              </form>
            </section>
            <nav class="menu__bottom">
              <h2 class="toHide">Menu de navigation</h2>
              <ul>
                <div class="changeContextHome">
                  <div class="home"></div><li>Home</li>
                </div>
                <div class="changeContextAbout">
                  <div class="about"></div><li>About</li>
                </div>
                <div class="changeContextWork">
                  <div class="work"></div><li>Work</li>
                </div>
                <div class="changeContextContact">
                  <div class="contact"></div><li>Contact</li>
                </div>
              </ul>
            </nav>
            <div id="hcard-Arnaud-Dassy" class="vcard toHide">
              <span class="fn">Arnaud Dassy</span>
              <a class="email" href="mailto:arnaud.dassy@gmail.com">arnaud.dassy@gmail.com</a>
              <div class="adr"></div>
              <span class="region">Liège</span>
              <span class="country-name">Belgium</span>
           </div>
          </div>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="js/vendor/jquery-1.11.3.min.js">
      </script>
      <script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
          function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
          e=o.createElement(i);r=o.getElementsByTagName(i)[0];
          e.src='https://www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
          ga('create','UA-XXXXX-X','auto');ga('send','pageview');
      </script>
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>
      <script src="./js/generate.js"></script>
      <script src="./js/classie.js"></script>

      <script src="./js/vendor/trianglify.min.js"></script>
      <script src="./js/vendor/TweenMax.min.js"></script>
      <script src="./js/vendor/ScrollToPlugin.min.js"></script>
      <script src="./js/vendor/cash.min.js"></script>
      <script src="./js/Card-polygon.js"></script>
      <script src="./js/demo-2.js"></script>
      <script src="./js/main3.js"></script>
      <script src="./js/cbpFWTabs.js"></script>


      <script>
  			(function() {

  				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
  					new CBPFWTabs( el );
  				});

  			})();
  		</script>

      <script>
  			(function() {
  				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
  				if (!String.prototype.trim) {
  					(function() {
  						// Make sure we trim BOM and NBSP
  						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
  						String.prototype.trim = function() {
  							return this.replace(rtrim, '');
  						};
  					})();
  				}

  				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
  					// in case the input is already filled..
  					if( inputEl.value.trim() !== '' ) {
  						classie.add( inputEl.parentNode, 'input--filled' );
  					}

  					// events:
  					inputEl.addEventListener( 'focus', onInputFocus );
  					inputEl.addEventListener( 'blur', onInputBlur );
  				} );
          [].slice.call( document.querySelectorAll( 'textarea' ) ).forEach( function( inputEl ) {
  					// in case the input is already filled..
  					if( inputEl.value.trim() !== '' ) {
  						classie.add( inputEl.parentNode, 'input--filled' );
  					}

  					// events:
  					inputEl.addEventListener( 'focus', onInputFocus );
  					inputEl.addEventListener( 'blur', onInputBlur );
  				} );

  				function onInputFocus( ev ) {
  					classie.add( ev.target.parentNode, 'input--filled' );
  				}

  				function onInputBlur( ev ) {
  					if( ev.target.value.trim() === '' ) {
  						classie.remove( ev.target.parentNode, 'input--filled' );
  					}
  				}
  			})();
  		</script>

      <script type="text/javascript">
    		function start(){

    			var inputs = document.getElementsByTagName('input');
          var buttonSend = document.querySelector(".buttonBackWorks").children[0];
          buttonSend.preventDefault;
    			buttonSend.addEventListener('click',isEmpty);
          var name = [
            "Nom",
            "Objet",
            "Mail",
            "Message"
          ]
    			function isEmpty(){
    				var errors = [];
    				for(var i = 0;i<3;i++){
    					if(inputs[i].value == ''){
                inputs[i].parentNode.children[1].style.color="red";
                inputs[i].parentNode.children[1].innerHTML= name[i] + ' (Veuillez remplir ce champs !)'
    						errors[i]=i;
    					}
    					else{
                inputs[i].parentNode.children[1].style.color="black";
                inputs[i].parentNode.children[1].innerHTML= name[i];
    					}
    				}
    				var textarea = document.getElementsByTagName('textarea');
    				if(textarea[0].value == ''){
              textarea[0].parentNode.children[1].style.color="red";
              textarea[0].parentNode.children[1].innerHTML= name[3] + ' (Veuillez remplir ce champs !)'
    					errors[3]=3;
    				}
    				else{
              textarea[0].parentNode.children[1].style.color="black";
              textarea[0].parentNode.children[1].innerHTML= name[3];
    				}
    				if(errors.length==0 && inputs[5].value == ''){
              inputs[3].value='yes';
    					inputs[4].type='submit';
    					inputs[4].checked=true;
              inputs[4].click();

    				}
    			}
    		} start();
    	</script>



    </body>
</html>
