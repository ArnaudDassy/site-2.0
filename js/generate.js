(function() {
  "use strict";

  var i=1;
  // HEADER
  var changementDeSection = function() {
    var home = document.querySelector('.changeContextHome');
    var about = document.querySelector('.changeContextAbout');
    var contact = document.querySelector('.changeContextContact');
    var work = document.querySelector('.changeContextWork');

    document.querySelector('.nav__about').style.display = "none";
    document.querySelector('.nav__work').style.display = "none";
    document.querySelector('.nav__contact').style.display = "none";

    var oldContext = "changeContextHome";
    var currentContext = "changeContextHome";

    function changeContext(ctx) {
      if(oldContext == currentContext){
        console.log('same context');
      }
      else{
        //Changing global context
        var oldSection, newSection;
        if(oldContext == 'changeContextHome'){oldSection = "nav__home";}
        if(oldContext == 'changeContextAbout'){oldSection = "nav__about";}
        if(oldContext == 'changeContextContact'){oldSection = "nav__contact";}
        if(oldContext == 'changeContextWork'){oldSection = "nav__work";}

        if(currentContext == 'changeContextHome'){newSection = "nav__home";}
        if(currentContext == 'changeContextAbout'){newSection = "nav__about";}
        if(currentContext == 'changeContextContact'){newSection = "nav__contact";}
        if(currentContext == 'changeContextWork'){newSection = "nav__work";}

        var oldContextSection = document.querySelector('.'+oldSection);
        oldContextSection.style.animationName="section_animation_out";
        oldContextSection.style.animationDuration=".5s";
        oldContextSection.style.animationFillMode="forwards";
        setTimeout(function() {oldContextSection.style.display="none"}, 500);
        setTimeout(function(){
          var newContextSection = document.querySelector('.'+newSection);
          newContextSection.style.display="block";
          newContextSection.style.opacity="0";
          newContextSection.style.animationName="section_animation_in";
          newContextSection.style.animationDuration=".5s";
          newContextSection.style.animationFillMode="forwards";
        }, 500);

        //Changin speed button

        var oldButton, newButton;
        if(oldContext == 'changeContextHome'){oldButton = "_home";}
        if(oldContext == 'changeContextAbout'){oldButton = "_about";}
        if(oldContext == 'changeContextContact'){oldButton = "_contact";}
        if(oldContext == 'changeContextWork'){oldButton = "_work";}

        if(currentContext == 'changeContextHome'){newButton = "_home";}
        if(currentContext == 'changeContextAbout'){newButton = "_about";}
        if(currentContext == 'changeContextContact'){newButton = "_contact";}
        if(currentContext == 'changeContextWork'){newButton = "_work";}

        var oldContextButton = document.querySelector('.'+oldButton);
        oldContextButton.style.top="-150px";
        setTimeout(function(){
          var newContextButton = document.querySelector('.'+newButton);
          newContextButton.style.top="-48px";
        }, 500);
      }
    }
    home.addEventListener('click', function(){
      oldContext = currentContext;
      currentContext = "changeContextHome";
      changeContext(this);
    });
    about.addEventListener('click', function(){
      oldContext = currentContext;
      currentContext = "changeContextAbout";
      changeContext(this);
    });
    contact.addEventListener('click', function(){
      oldContext = currentContext;
      currentContext = "changeContextContact";
      changeContext(this);
    });
    work.addEventListener('click', function(){
      oldContext = currentContext;
      currentContext = "changeContextWork";
      changeContext(this);
    });
  }

  var affichageWork = function() {
    var works = document.querySelector('.nav__work');
    for( ; ++i<works.children.length ; ) {
      works.children[i].newID = i;
      works.children[i].addEventListener('click', function() {
        showWork(this);
      })
    }
    function showWork(work) {
      i=1;
      for( ; ++i<works.children.length ; ) {
          works.children[i].className='disableWork';
      }
      i=1;
      setTimeout(function(){
        for( ; ++i<works.children.length ; ) {
            works.children[i].style.display='none';
        }
        work.className="";
        work.style.display='inline-block';
        work.style.position="absolute";
        work.style.left="96px";
        work.style.width="100%";
        work.style.opacity="1";
        work.children[0].children[3].style.display="block";
        work.children[0].children[2].className="imgWork";
        work.children[0].children[4].style.display="block";
      }, 600);
    }
  }

  changementDeSection();
  affichageWork();

})();
