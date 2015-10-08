(function() {
  "use strict";

  var i = 1;

  // var affichageWork = function() {
  //
  //   var works = document.querySelector('.nav__work');
  //   console.log(works.children[2]);
  //   //On compresse d'abord chaque work
  //   function compressAll(works) {
  //     i=-1;
  //     for( ; ++i<works.children[2].children.length ; ) {
  //       works.children[2].children[i].className="canBeHovered";
  //       works.children[2].children[i].style.opacity='0';
  //       works.children[2].children[i].children[0].children[3].style.display="none";
  //       works.children[2].children[i].children[0].children[4].style.display="none";
  //       works.children[2].children[i].children[0].children[2].className="";
  //       works.children[2].children[i].children[1].style.display="none";
  //       works.children[2].children[i].style.display='inline-block';
  //       works.children[2].children[i].style.opacity='1';
  //     }
  //   };
  //
  //   var aEventListener = [];
  //   //On ajoute un addEventListener sur chaque work
  //   for( i=-1 ; ++i<works.children[2].children.length ; ) {
  //     works.children[2].children[i].newID = i;
  //     aEventListener[i] = works.children[2].children[i].addEventListener('click', function() {
  //       showWork(this);
  //     })
  //   }
  //   //On masque d'abord tout les autres works, sauf celui sur lequel on vient de cliquer, et ensuite on décompresse ce dernier
  //   function showWork(work) {
  //     if (work.className != "scoped") {
  //
  //       i=-1;
  //       //On masque tout les works n'ayant pas la class 'scoped'
  //       for( ; ++i<works.children[2].children.length ; ) {
  //           works.children[2].children[i].className='disableWork';
  //       }
  //
  //       i=-1;
  //       //On désactive TOUT les works et on réactive le bon
  //       setTimeout(function(){
  //         for( ; ++i<works.children[2].children.length ; ) {
  //             works.children[2].children[i].style.display='none';
  //         }
  //         work.className="scoped";
  //         work.style.display='inline-block';
  //         work.style.width="100%";
  //         work.style.height="auto";
  //         work.style.opacity="1";
  //         work.children[0].children[3].style.display="block";
  //         work.children[0].children[4].style.display="block";
  //         work.children[0].children[2].className="imgWork";
  //         work.children[1].style.display="flex";
  //         work.removeEventListener("click", aEventListener[work.newID]);
  //       }, 600);
  //     }
  //     //On ajoute un addEventListener sur le boutton du travail
  //     work.children[1].children[0].addEventListener("click", function() {
  //       hideWork(this);
  //     })
  //
  //   }
  //   //On compresse le travail et on raffiche tout les autres travaux, eux aussi compressés
  //   function hideWork(work) {
  //     i=-1;
  //     var article = work.parentNode.parentNode;
  //     article.style.opacity='0';
  //     article.style.width='192px';
  //     article.style.height='192px';
  //     article.children[0].children[3].style.display="none";
  //     article.children[0].children[4].style.display="none";
  //     article.children[0].children[2].className="";
  //     article.children[1].style.display="none";
  //     setTimeout(function(){
  //       for( ; ++i<works.children[2].children.length ; ) {
  //           works.children[2].children[i].style.display='inline-block';
  //           works.children[2].children[i].className='canBeHovered';
  //           works.children[2].children[i].style.opacity='1';
  //
  //       }
  //     }, 300);
  //   }
  //
  //   compressAll(works);
  //
  // }

  var init = function() {

    var aContexts = [
      "changeContextHome",
      "changeContextAbout",
      "changeContextWork",
      "changeContextContact" ],
    aSections = [
      "nav__home",
      "nav__about",
      "nav__work",
      "nav__contact" ],
    // aButtons = [
    //   "_home",
    //   "_about",
    //   "_work",
    //   "_contact" ],
    i = -1,
    oldContext = "changeContextHome",
    currentContext = oldContext,
    oldSection = "nav__home",
    newSection = oldSection,
    oldButton, newButton, oSection;

    //Recenter
    var $j = jQuery.noConflict();

    $j('.'+newSection).css({
      top:($j(window).height() - $j('.'+newSection).outerHeight()) / 2
    });

    $j(window).resize(function() {
      if( newSection == "nav__home" || newSection == "nav__about"){
        $j('.'+newSection).css({
          top:($j(window).height() - $j('.'+newSection).outerHeight()) / 2
        });
      }
    });


    //add event listener
    for ( ; ++i < aContexts.length ; ) {
      document.querySelector('.'+aContexts[i]).addEventListener("click",function(){
        oldContext = currentContext;
        currentContext = this.className;
        changeContext(this);
      });
    }

    //Disable others sections
    for ( i=0 ; ++i < aSections.length ; ) {
      document.querySelector('.'+aSections[i]).style.display = "none";
    }


    function changeContext(ctx) {
      if(oldContext != currentContext){

        for ( i=-1 ; ++i < aContexts.length ; ) {
          ( oldContext == aContexts[i] ) && ( oldSection = aSections[i] );
          ( currentContext == aContexts[i] ) && ( newSection = aSections[i] );
        };

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
          if( newSection == "nav__home" || newSection == "nav__about"){
            console.log('ok');
            $j('.'+newSection).css({
              top:($j(window).height() - $j('.'+newSection).outerHeight()) / 2
            });
          }
          newContextSection.click();
          if(newSection == 'nav__contact'){
            newContextSection.parentNode.style.height='auto';
          }
          else{
            newContextSection.parentNode.style.height='100%';
          }
        // var oldContextButton = document.querySelector('.'+oldButton);
        // oldContextButton.style.top="-150px";
        // setTimeout(function(){
        //   var newContextButton = document.querySelector('.'+newButton);
        //   newContextButton.style.top="-48px";
        }, 500);
      }
    }
  }

  init();

})();
