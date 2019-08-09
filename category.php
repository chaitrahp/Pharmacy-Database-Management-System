<?php
    include("config.php");
?>

<html>



<head>
    <link rel="stylesheet" type="text/css" href="category.css">
    <link rel="text/javascript" href="category.js">


</head>

<body id="link">
    <style></style>
    <div>
    <svg height="130" width="500">
                <defs>
                  <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%"
                    style="stop-color:rgb(7,13,96);stop-opacity:1" />
                    <stop offset="100%"
                    style="stop-color:rgb(40,149,211);stop-opacity:1" />
                  </linearGradient>
                </defs>
                <ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)" />
                <text fill="orange" font-size="45" font-family="Verdana"
                x="50" y="86">BookManiac!!</text>
              </svg>
              <a href="1.html" style="float:right; padding-top: 60px; padding-right: 40px; color: black"><b><u>Back home</u></b></a>
          </div>

    <section class="strips">
        <article class="strips__strip">
            <div class="strip__content">
                <h1 class="strip__title" data-name=""><a id="h1" href="action.html">Action &<br>Adventure</a></h1>
            </div>
        </article>
       
        
        <article class="strips__strip">
            <div class="strip__content">
               <h1 class="strip__title"> <a id="h1" href="education.html">Education</a></h1>
            </div>
        </article>
         <article class="strips__strip">
            <div class="strip__content">
                <h1 class="strip__title"><a id="h1" href="dramabooks.html">Drama &<br>Biography</a></h1>
            </div>
        </article>
        
       
        
         <article class="strips__strip">
            <div class="strip__content">
                <h1 class="strip__title"><a id="h1" href="history.html">History</a></h1>
            </div>
        </article>

        <article class="strips__strip">
            <div class="strip__content">
                <h1 class="strip__title"><a id="h1" href="fictionbooks.html">Comic &<br>Fiction</a></h1>
            </div>
        </article>
        <i class="fa fa-close strip__close"></i>
    </section>

</body>


</html>