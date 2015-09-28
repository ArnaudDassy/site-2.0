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
        <meta name="description" content="Web Developer">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
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
      <?php if($_SERVER['REQUEST_METHOD'] === 'POST' && $_REQUEST['sendable']!='no'): ?>
        <div class="messageSend">
          <p>
            Thanks for sending me message, I will respond you as fast as I can !
          </p>
        </div>
      <?php endif; ?>
      <section class="nav__home nav" id="home">
        <h2 class="toHide">Home</h2>
        <p class="header"><span class="retourChariot name">Arnaud Dassy</span><span class="retourChariot function">Web Developer</span></p>
        <q><span class="retourChariot">Design is for <em>Artists</em>,</span>
        <span class="retourChariot">Development is for <b>Geniuses</b>.</span></q>
        <div><img src="./img/flag.gif" alt="#"><img src="./img/jump.gif" alt="#"></div>
      </section>
      <section class="nav__about nav" id="about">
        <h2>About me</h2>
        <p>I'm 20, I'm a web developer & I'm the guy you need !</p>
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
        <h2 class="toHide">Works</h2>
        <h2>I know I'm amazing!</h2>
        <div>
          <article class="scoped">
            <div>
              <h3>Titre</h3>
              <p>Date</p>
              <img src="./img/1.jpg" alt="work" class="imgWork">
              <dl>
                <div><dt>Date : </dt><dd> 12/06/06</dd></div>
                <div><dt>Sponsor : </dt><dd>Licorne</dd></div>
                <dt class="retourChariot">What did I have to do</dt><dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas dolor vitae orci egestas, non volutpat diam tincidunt. Nullam eget rhoncus turpis. Vivamus non maximus quam. Fusce nec ullamcorper ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus commodo ac odio at sollicitudin. Maecenas consequat, quam nec sodales vestibulum, mauris ante egestas orci, quis ultricies augue odio sit amet neque. In hac habitasse platea dictumst. Etiam quam felis, laoreet iaculis urna vel, porta placerat quam. Suspendisse condimentum velit sed enim mollis, at sagittis ligula eleifend.</dd>
              </dl>
              <p class="clearFloat">a</p>
            </div>
            <div class="buttonBackWorks">
              <p>Back</p>
            </div>
          </article>
          <article class="scoped">
            <div>
              <h3>Titre</h3>
              <p>Date</p>
              <img src="./img/2.jpg" alt="work" class="imgWork">
              <dl>
                <div><dt>Date : </dt><dd> 12/06/06</dd></div>
                <div><dt>Sponsor : </dt><dd>Licorne</dd></div>
                <dt class="retourChariot">What did I have to do</dt><dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas dolor vitae orci egestas, non volutpat diam tincidunt. Nullam eget rhoncus turpis. Vivamus non maximus quam. Fusce nec ullamcorper ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus commodo ac odio at sollicitudin. Maecenas consequat, quam nec sodales vestibulum, mauris ante egestas orci, quis ultricies augue odio sit amet neque. In hac habitasse platea dictumst. Etiam quam felis, laoreet iaculis urna vel, porta placerat quam. Suspendisse condimentum velit sed enim mollis, at sagittis ligula eleifend.</dd>
              </dl>
              <p class="clearFloat">a</p>
            </div>
            <div class="buttonBackWorks">
              <p>Back</p>
            </div>
          </article>
          <article class="scoped">
            <div>
              <h3>Titre</h3>
              <p>Date</p>
              <img src="./img/3.jpg" alt="work" class="imgWork">
              <dl>
                <div><dt>Date : </dt><dd> 12/06/06</dd></div>
                <div><dt>Sponsor : </dt><dd>Licorne</dd></div>
                <dt class="retourChariot">What did I have to do</dt><dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas dolor vitae orci egestas, non volutpat diam tincidunt. Nullam eget rhoncus turpis. Vivamus non maximus quam. Fusce nec ullamcorper ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus commodo ac odio at sollicitudin. Maecenas consequat, quam nec sodales vestibulum, mauris ante egestas orci, quis ultricies augue odio sit amet neque. In hac habitasse platea dictumst. Etiam quam felis, laoreet iaculis urna vel, porta placerat quam. Suspendisse condimentum velit sed enim mollis, at sagittis ligula eleifend.</dd>
              </dl>
              <p class="clearFloat">a</p>
            </div>
            <div class="buttonBackWorks">
              <p>Back</p>
            </div>
          </article>
          <article class="scoped">
            <div>
              <h3>Titre</h3>
              <p>Date</p>
              <img src="./img/4.jpg" alt="work" class="imgWork">
              <dl>
                <div><dt>Date : </dt><dd> 12/06/06</dd></div>
                <div><dt>Sponsor : </dt><dd>Licorne</dd></div>
                <dt class="retourChariot">What did I have to do</dt><dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas dolor vitae orci egestas, non volutpat diam tincidunt. Nullam eget rhoncus turpis. Vivamus non maximus quam. Fusce nec ullamcorper ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus commodo ac odio at sollicitudin. Maecenas consequat, quam nec sodales vestibulum, mauris ante egestas orci, quis ultricies augue odio sit amet neque. In hac habitasse platea dictumst. Etiam quam felis, laoreet iaculis urna vel, porta placerat quam. Suspendisse condimentum velit sed enim mollis, at sagittis ligula eleifend.</dd>
              </dl>
              <p class="clearFloat">a</p>
            </div>
            <div class="buttonBackWorks">
              <p>Back</p>
            </div>
          </article>
          <article class="scoped">
            <div>
              <h3>Titre</h3>
              <p>Date</p>
              <img src="./img/5.jpg" alt="work" class="imgWork">
              <dl>
                <div><dt>Date : </dt><dd> 12/06/06</dd></div>
                <div><dt>Sponsor : </dt><dd>Licorne</dd></div>
                <dt class="retourChariot">What did I have to do</dt><dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas dolor vitae orci egestas, non volutpat diam tincidunt. Nullam eget rhoncus turpis. Vivamus non maximus quam. Fusce nec ullamcorper ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus commodo ac odio at sollicitudin. Maecenas consequat, quam nec sodales vestibulum, mauris ante egestas orci, quis ultricies augue odio sit amet neque. In hac habitasse platea dictumst. Etiam quam felis, laoreet iaculis urna vel, porta placerat quam. Suspendisse condimentum velit sed enim mollis, at sagittis ligula eleifend.</dd>
              </dl>
              <p class="clearFloat">a</p>
            </div>
            <div class="buttonBackWorks">
              <p>Back</p>
            </div>
          </article>
          <article class="scoped">
            <div>
              <h3>Titre</h3>
              <p>Date</p>
              <img src="./img/6.jpg" alt="work" class="imgWork">
              <dl>
                <div><dt>Date : </dt><dd> 12/06/06</dd></div>
                <div><dt>Sponsor : </dt><dd>Licorne</dd></div>
                <dt class="retourChariot">What did I have to do</dt><dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas dolor vitae orci egestas, non volutpat diam tincidunt. Nullam eget rhoncus turpis. Vivamus non maximus quam. Fusce nec ullamcorper ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus commodo ac odio at sollicitudin. Maecenas consequat, quam nec sodales vestibulum, mauris ante egestas orci, quis ultricies augue odio sit amet neque. In hac habitasse platea dictumst. Etiam quam felis, laoreet iaculis urna vel, porta placerat quam. Suspendisse condimentum velit sed enim mollis, at sagittis ligula eleifend.</dd>
              </dl>
              <p class="clearFloat">a</p>
            </div>
            <div class="buttonBackWorks">
              <p>Back</p>
            </div>
          </article>
          <article class="scoped">
            <div>
              <h3>Titre</h3>
              <p>Date</p>
              <img src="./img/7.jpg" alt="work" class="imgWork">
              <dl>
                <div><dt>Date : </dt><dd> 12/06/06</dd></div>
                <div><dt>Sponsor : </dt><dd>Licorne</dd></div>
                <dt class="retourChariot">What did I have to do</dt><dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas dolor vitae orci egestas, non volutpat diam tincidunt. Nullam eget rhoncus turpis. Vivamus non maximus quam. Fusce nec ullamcorper ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus commodo ac odio at sollicitudin. Maecenas consequat, quam nec sodales vestibulum, mauris ante egestas orci, quis ultricies augue odio sit amet neque. In hac habitasse platea dictumst. Etiam quam felis, laoreet iaculis urna vel, porta placerat quam. Suspendisse condimentum velit sed enim mollis, at sagittis ligula eleifend.</dd>
              </dl>
              <p class="clearFloat">a</p>
            </div>
            <div class="buttonBackWorks">
              <p>Back</p>
            </div>
            <div class="buttonBackWorks">
              <p>Back</p>
            </div>
          </article>
          <article class="scoped">
            <div>
              <h3>Titre</h3>
              <p>Date</p>
              <img src="./img/8.jpg" alt="work" class="imgWork">
              <dl>
                <div><dt>Date : </dt><dd> 12/06/06</dd></div>
                <div><dt>Sponsor : </dt><dd>Licorne</dd></div>
                <dt class="retourChariot">What did I have to do</dt><dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas dolor vitae orci egestas, non volutpat diam tincidunt. Nullam eget rhoncus turpis. Vivamus non maximus quam. Fusce nec ullamcorper ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus commodo ac odio at sollicitudin. Maecenas consequat, quam nec sodales vestibulum, mauris ante egestas orci, quis ultricies augue odio sit amet neque. In hac habitasse platea dictumst. Etiam quam felis, laoreet iaculis urna vel, porta placerat quam. Suspendisse condimentum velit sed enim mollis, at sagittis ligula eleifend.</dd>
              </dl>
              <p class="clearFloat">a</p>
            </div>
            <div class="buttonBackWorks">
              <p>Back</p>
            </div>
          </article>
          <article class="scoped">
            <div>
              <h3>Titre</h3>
              <p>Date</p>
              <img src="./img/1.jpg" alt="work" class="imgWork">
              <dl>
                <div><dt>Date : </dt><dd> 12/06/06</dd></div>
                <div><dt>Sponsor : </dt><dd>Licorne</dd></div>
                <dt class="retourChariot">What did I have to do</dt><dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas dolor vitae orci egestas, non volutpat diam tincidunt. Nullam eget rhoncus turpis. Vivamus non maximus quam. Fusce nec ullamcorper ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus commodo ac odio at sollicitudin. Maecenas consequat, quam nec sodales vestibulum, mauris ante egestas orci, quis ultricies augue odio sit amet neque. In hac habitasse platea dictumst. Etiam quam felis, laoreet iaculis urna vel, porta placerat quam. Suspendisse condimentum velit sed enim mollis, at sagittis ligula eleifend.</dd>
              </dl>
              <p class="clearFloat">a</p>
            </div>
            <div class="buttonBackWorks">
              <p>Back</p>
            </div>
          </article>
          <article class="scoped">
            <div>
              <h3>Titre</h3>
              <p>Date</p>
              <img src="./img/2.jpg" alt="work" class="imgWork">
              <dl>
                <div><dt>Date : </dt><dd> 12/06/06</dd></div>
                <div><dt>Sponsor : </dt><dd>Licorne</dd></div>
                <dt class="retourChariot">What did I have to do</dt><dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas dolor vitae orci egestas, non volutpat diam tincidunt. Nullam eget rhoncus turpis. Vivamus non maximus quam. Fusce nec ullamcorper ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus commodo ac odio at sollicitudin. Maecenas consequat, quam nec sodales vestibulum, mauris ante egestas orci, quis ultricies augue odio sit amet neque. In hac habitasse platea dictumst. Etiam quam felis, laoreet iaculis urna vel, porta placerat quam. Suspendisse condimentum velit sed enim mollis, at sagittis ligula eleifend.</dd>
              </dl>
              <p class="clearFloat">a</p>
            </div>
            <div class="buttonBackWorks">
              <p>Back</p>
            </div>
          </article>
          <article class="scoped">
            <div>
              <h3>Titre</h3>
              <p>Date</p>
              <img src="./img/3.jpg" alt="work" class="imgWork">
              <dl>
                <div><dt>Date : </dt><dd> 12/06/06</dd></div>
                <div><dt>Sponsor : </dt><dd>Licorne</dd></div>
                <dt class="retourChariot">What did I have to do</dt><dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas dolor vitae orci egestas, non volutpat diam tincidunt. Nullam eget rhoncus turpis. Vivamus non maximus quam. Fusce nec ullamcorper ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus commodo ac odio at sollicitudin. Maecenas consequat, quam nec sodales vestibulum, mauris ante egestas orci, quis ultricies augue odio sit amet neque. In hac habitasse platea dictumst. Etiam quam felis, laoreet iaculis urna vel, porta placerat quam. Suspendisse condimentum velit sed enim mollis, at sagittis ligula eleifend.</dd>
              </dl>
              <p class="clearFloat">a</p>
            </div>
            <div class="buttonBackWorks">
              <p>Back</p>
            </div>
          </article>
          <article class="scoped">
            <div>
              <h3>Titre</h3>
              <p>Date</p>
              <img src="./img/4.jpg" alt="work" class="imgWork">
              <dl>
                <div><dt>Date : </dt><dd> 12/06/06</dd></div>
                <div><dt>Sponsor : </dt><dd>Licorne</dd></div>
                <dt class="retourChariot">What did I have to do</dt><dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas dolor vitae orci egestas, non volutpat diam tincidunt. Nullam eget rhoncus turpis. Vivamus non maximus quam. Fusce nec ullamcorper ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus commodo ac odio at sollicitudin. Maecenas consequat, quam nec sodales vestibulum, mauris ante egestas orci, quis ultricies augue odio sit amet neque. In hac habitasse platea dictumst. Etiam quam felis, laoreet iaculis urna vel, porta placerat quam. Suspendisse condimentum velit sed enim mollis, at sagittis ligula eleifend.</dd>
              </dl>
              <p class="clearFloat">a</p>
            </div>
            <div class="buttonBackWorks">
              <p>Back</p>
            </div>
          </article>
        </div>
      </section>
      <section class="nav__contact nav" id="contact">
        <h2 class="toHide">Contact</h2>
        <h2>Any idea or project ?</h2>
        <form action="index.php" method="post">
          <div><label for="name">Name</label><input type="text" name="name" id="name"></div>
          <div><label for="object">Object</label><input type="text" name="object" id="object"></div>
          <div><label for="mail">Mail</label><input type="text" name="mail" id="mail"></div>
          <div class="containerTextContact"><label for="msg">Message</label><textarea name="msg" rows="5" cols="40" id="msg"></textarea></div>
          <input type="hidden" name="sendable" value="no">
          <div class="buttonSubmitForm"><input type="button" value="Send"></div>
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

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>

      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

      <script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
          function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
          e=o.createElement(i);r=o.getElementsByTagName(i)[0];
          e.src='https://www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
          ga('create','UA-XXXXX-X','auto');ga('send','pageview');
      </script>

      <script src="./js/generate.js"></script>
      <script type="text/javascript">
    		function start(){
    			var inputs = document.getElementsByTagName('input');
    			inputs[4].addEventListener('click',isEmpty);
    			function isEmpty(){
            console.log('ok');
    				var errors = [];
    				for(var i = 0;i<3;i++){
    					if(inputs[i].value == ''){
    						inputs[i].parentNode.style.borderBottom = 'red 4px solid';
    						inputs[i].placeholder='Le champ '+inputs[i].name+' doit être rempli';
    						errors[i]=i;
    					}
    					else{
    						inputs[i].parentNode.style.color = 'black' ;
    						inputs[i].parentNode.style.borderBottom = '4px solid black';
    					}
    				}
    				var textarea = document.getElementsByTagName('textarea');
    				if(textarea[0].value == ''){
    					textarea[0].style.color = 'black' ;
    					textarea[0].style.border = 'red 4px solid';
    					textarea[0].placeholder='Le champ '+textarea[0].name+' doit être rempli';
    					errors[3]=3;
    				}
    				else{
    						textarea[0].style.color = 'black' ;
    						textarea[0].style.border = '4px solid black';
    				}
    				if(errors.length==0 && inputs[5].value == ''){
    					inputs[4].type='submit';
    					inputs[4].checked=true;
    					inputs[3].value='yes';
    				}
    			}
    		} start();
    	</script>
      <div id="hcard-Arnaud-Dassy" class="vcard toHide">
        <span class="fn">Arnaud Dassy</span>
        <a class="email" href="mailto:arnaud.dassy@gmail.com">arnaud.dassy@gmail.com</a>
        <div class="adr">
        <span class="region">Liège</span>
        <span class="country-name">Belgium</span>
     </div>
    </body>
</html>
