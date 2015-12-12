<?php header ("Refresh: 5;URL=index.php"); ?>
<!doctype html>
<html class="no-js" lang="fr" style="height:100%;">
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
        <style>
        .spinner {
          margin: 0 auto
          overflow: visible;
          opacity: 0;
        }
        .line {
          stroke: #0083FF;
          stroke-width: 10;
          stroke-dasharray: 120, 37;
          stroke-linecap: square;
          stroke-linejoin: round;
          fill: transparent;
        }
        .arrow {
          fill: #0083FF;
        }
        .tick {
          opacity: 0;
        }
        </style>
    </head>
    <body style="position:relative; height:100%;">
      <section id="example" style="position:absolute; width:100%; top:40%;">
        <svg class="spinner" version="1.1" xmlns="http://www.w3.org/2000/svg" width="120" height="120">
          <defs>
            <clipPath id="clipPath">
              <circle cx="60" cy="60" r="55"></circle>
            </clipPath>
          </defs>
          <g class="background">
            <g transform="translate(120, 0) scale(-1, 1)">
              <circle class="line" cx="60" cy="60" r="50" clip-path="url(#clipPath)"></circle>
              <g transform="translate(95, 45)">
                <path class="arrow" d="M1 16L14.2 0l13.2 15.8H1z"></path>
              </g>
              <g transform="translate(25, 75) rotate(180)">
                <path class="arrow" d="M1 16L14.2 0l13.2 15.8H1z"></path>
              </g>
            </g>
          </g>
          <g class="tick" transform="rotate(-45, 60, 60)">
            <path fill="white" d="M17.977 35.553L0 16.276l5.112-4.768 17.727 19.01L52.31 0l4.93 4.76L22.83 40.39l-.316-.305-.168.156-2.98-3.194-1.465-1.416.074-.077z" transform="translate(28, 40) scale(1.15)" fill-rule="evenodd"></path>
          </g>
        </svg>
        <div class="messageSend">
          Thanks for sending me a message, I will respond as fast as I can !
        </div>
      </section>
      <script src="./bower_components/dynamics.js/lib/dynamics.js"></script>
      <script id="script">
      var spinner = document.querySelector('.spinner')
      var background = document.querySelector('.background')
      var line = document.querySelector('.line')
      var tick = document.querySelector('.tick')
      var arrows = document.querySelectorAll('.arrow')
      function start() {
        // Show the spinner
        dynamics.animate(spinner, {
          opacity: 1
        }, {
          duration: 250,
          complete: animateLine
        })
        // Fake the syncing success after 2.5s for this demo
        dynamics.setTimeout(animateSuccess, 2600)
      }
      // This rotate the background (circle+arrows) indefinitely
      function rotate() {
        dynamics.animate(background, {
          rotateZ: 180,
          rotateC: 60
        }, {
          type: dynamics.linear,
          duration: 500,
          complete: function() {
            dynamics.css(background, { rotateZ: 0 })
            rotate()
          }
        })
      }
      // Animate the line
      function animateLine() {
        dynamics.animate(line, {
          strokeDasharray: "40, 117"
        }, {
          type: dynamics.easeInOut,
          duration: 400,
          friction: 700,
          complete: function() {
            dynamics.animate(line, {
              strokeDasharray: "120, 37"
            }, {
              type: dynamics.easeInOut,
              duration: 800,
              complete: animateLine
            })
          }
        })
      }

      // Animate the success state
      function animateSuccess() {
        // First, we animate the line to form a whole circle
        dynamics.animate(line, {
          strokeDasharray: "157, 0",
        }, {
          type: dynamics.easeIn,
          duration: 500,
          friction: 200,
          complete: function() {
            // Then we change the line color and make it a full circle
            // by increasing the strokeWidth
            dynamics.animate(line, {
              strokeWidth: 100,
              stroke: "#0AB000"
            }, {
              friction: 200,
              duration: 300
            })

            // // We hide the arrows
            dynamics.animate(arrows, {
              fill: "#0AB000",
              translate: 5.5,
              scale: 0.5
            }, {
              friction: 200,
              duration: 300
            })

            // Animate the tick icon
            dynamics.animate(tick, {
              opacity: 1,
              rotateZ: 0,
              rotateC: 60
            }, {
              type: dynamics.spring,
              friction: 300,
              duration: 1000,
              delay: 300
            })

            // Restart the whole animation for this demo
          }
        })
      }

      // Restart the whole animation
      function restart() {
        dynamics.animate(spinner, {
          opacity: 0
        }, {
          duration: 2500,
          complete: function() {
            // Reset css properties to originals
            dynamics.css(tick, {
              opacity: 0,
              rotateZ: -45,
              rotateC: 60
            })
            dynamics.css(line, {
              strokeDasharray: "120, 37",
              stroke: "#0083FF",
              strokeWidth: 10
            })
            dynamics.css(arrows, {
              opacity: 1,
              fill: "#0083FF",
              scale: 1
            })

            // Start!
            dynamics.setTimeout(start, 500)
          }
        })
      }

      // Start!
      start()
      rotate()
      </script>
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
    <div id="hcard-Arnaud-Dassy" class="vcard toHide">
      <span class="fn">Arnaud Dassy</span>
      <a class="email" href="mailto:arnaud.dassy@gmail.com">arnaud.dassy@gmail.com</a>
      <div class="adr">
      <span class="region">Liège</span>
      <span class="country-name">Belgium</span>
   </div>
  </body>
</html>
