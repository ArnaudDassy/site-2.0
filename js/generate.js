(function() {
  "use strict";

  // HEADER

  var home = document.querySelector('.changeContextHome');
  var about = document.querySelector('.changeContextAbout');
  var contact = document.querySelector('.changeContextContact');

  var oldContext = "changeContextHome"
  var currentContext = "changeContextHome"

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

      if(currentContext == 'changeContextHome'){newSection = "nav__home";}
      if(currentContext == 'changeContextAbout'){newSection = "nav__about";}
      if(currentContext == 'changeContextContact'){newSection = "nav__contact";}

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

})();
