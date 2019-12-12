
<?php
  //idk why i wanted to log ip's, but i did, and its eBic
  //thanks to my buddy jacob on discord / Jacob H.#2208, he provided this code - 
  /* <?php
$myfile = fopen("testfile.txt", "w")
$txt = $_SERVER["REMOTE_ADDR"]."\n";
fwrite($myfile, $txt); */
    $myfile = fopen("allips.txt", "a+");
    $txt = $_SERVER["REMOTE_ADDR"]."\n";
    if ($txt != "::1\n")
    {
       if ($txt != "10.183.1.13\n")
       {
         fwrite($myfile, $txt);
       }
    }
    //$old_content = file_get_contents($myfile);
    //fwrite($file, $old_content."\n".$txt);
    fclose($myfile);
?>

<?php
  //idk why i wanted to log ip's, but i did, and its eBic
    $myfile = fopen("currentip.txt", "w");
    if ($txt != "::1\n")
    {
      fwrite($myfile, $txt);
    }
    $txt = $_SERVER["REMOTE_ADDR"]."\n";
    //$old_content = file_get_contents($myfile);
    //fwrite($file, $old_content."\n".$txt);
    fclose($myfile);
?>


<!DOCTYPE html>  
<iframe src="silence.mp3" allow="autoplay" id="audio" style="display:none"></iframe>
<audio id="player" autoplay loop>
    <source src="audio/source.mp3" type="audio/mp3">
</audio>
<style>
@font-face {
  font-family: myFirstFont;
  src: local("smallest pixel-7 Regular"),
       local("smallest_pixel-7"),
       url(/stuff/fonts/smallest_pixel-7.ttf); 
}

p {
  font-family: myFirstFont;
  font-size: 40px;
}
</style>

<script>
   var snd = new Audio("sket.mp3"); 
</script>

<html lang="en" onclick="snd.play()">

<head>
      <style type="text/css">
         html {
         overflow:hidden;
         }
      
      </style>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>publiccode.html</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="theme-color" content="#3b3b3b">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="favicon_pink.html">
      <link rel="stylesheet" href="assets/bootstrap.min.css">
      <link rel="stylesheet" href="assets/averion.min.css">
      <script src="../use.fontawesome.com/a5e30dd034.js"></script>
      <script>
      document.getElementById('music.mp3').play();
      </script>
      <link rel="stylesheet" href="assets/animate.min.css">
      <link rel="stylesheet" type="text/css" href="assets/star-animation.css">
      <link rel="stylesheet" href="assets/stylez.css">
      <link rel="stylesheet" href="assets/gallery.css">
      <style>
body{ 
   background: url('<?php $a = array('1521237911_1103453878_preview_LitNhNr.gif','a2a0943f1b608680028c23c910a55a04.gif', 'background2.gif', 'background_ebic.webp', 'background4.gif'); echo $a[array_rand($a)];?>');
  -moz-background-size: cover;
    -ms-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    text-decoration:none;
}
   a:hover {
   text-decoration:none;
   }

#sname a {
    font-size: 1em;
    transition: all 500ms;
}
    
#sname a:hover {
    font-size: 20px;
    font-size-adjust: 20px;
}
#sname2 a {
    font-size: 1.5em;
    transition: all 500ms;
}
    
#sname2 a:hover {
    font-size: 30px;
    font-size-adjust: 20px;
}
}
/* Style the video: 100% width and height to cover the entire window */
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}

/* Add some content at the bottom of the video/page */
.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
</style>
      <div class="bg-animation">
         <div id="stars"></div>
         <div id="stars2"></div>
         <div id="stars3"></div>
         <div id="stars4"></div>
      </div>
      <script>
      document.onkeypress = function (event) {
            event = (event || window.event);
            if (event.keyCode == 123) {
               //alert('No F-12');
                return false;
            }
         }
         document.onmousedown = function (event) {
            event = (event || window.event);
            if (event.keyCode == 123) {
                //alert('No F-keys');
                return false;
            }
         }
         document.onkeydown = function (event) {
            event = (event || window.event);
            if (event.keyCode == 123) {
                //alert('No F-keys');
                return false;
            }
            else if(event.ctrlKey && event.shiftKey && event.keyCode==73)
            {
               return false;  //Prevent from ctrl+shift+i
            }
            else if(event.ctrlKey && event.keyCode==73)
            {
               return false;  //Prevent from ctrl+shift+i
            }
            else if(event.ctrlKey && event.keyCode==74)
            {
               return false;  //Prevent from ctrl+shift+i
            }

         }
         
      </script>
      <script>document.addEventListener("contextmenu", function(e){
         e.preventDefault();
         }, false);
      </script>
      <div class="overlay">
         <marquee bgcolor="black" height="60" scrollamount="35">                                                                                                                              </marquee>
      </div>
   </head>
   <body>
      <div class="container" style="height: 100%; display: flex; align-items: center; margin: 0 auto; padding-top: 3rem;">
      <main>
         <div class="animated fadeInDown delay-250">
            <div class="japanese">
               <p><font size ="2000" class="japanese">Your ip = <?php include('currentip.txt'); ?></font></p>
            </div>
         </div>
         <div class="animated fadeInUp">
           <!--<a href="#" style="text-decoration:none;"> <H1>
               dambbruh.gq
            </H1>
         </a>-->
         </div>
         <p>
         <div class="animated fadeInUp"></div>
         <font face="courier"></a>
         <div class="animated fadeInUp"></div>
         <div class="container">
         </p>
         <center>
            <div class="animated fadeInUp" >
               <!--<marquee width="30%" class="japanese2">-->
               <i class="japanese2"  id="sname">
                  <!--<a href="about.html" target="_blank">about</a><br> -->
                 <a href="http://dambbruh.gq/" target="_blank">My Webstite</a> : 
                 <a href="https://CPlusPlusNewb.github.io/" target="_blank">My Github Website</a> : 
               <a href="https://github.com/CPlusPlusNewb?tab=repositories/" target="_blank">My Github Repos</a>

               </i>
               <!--</marquee>-->
            </div>
         </center>
         <div class="animated fadeInUp">
            <ul class="list-inline social"  id="sname2">
               <li class="list-inline-item">
                  <a href="https://www.youtube.com/channel/UCKRz6rT9icBg-w662I1Nycg/" target="_blank">
                  <i class="fab fa-youtube" aria-hidden="true"></i>
                  </a>
                  <a href="https://discord.gg/CY3ueDp" target="_blank">
                  <i class="fab fa-discord" aria-hidden="true"></i>
                  </a>
                  <a href="https://steamcommunity.com/id/stackhack_user" target="_blank">
                  <i class="fab fa-steam" aria-hidden="true"></i>
                  </a>
               </li>
            </ul>
         </div>
         <footer>
         </footer>
         <script>
            var x = document.getElementById("player").volume = 0.2;
         </script>
         <script src="assets/main.js.html"></script>
         <div class="gallerycontainer">
         <br><br>
         </div>
      </main>
      <div id="info">
         <marquee bgcolor="black" height="60" scrollamount="35">
         <p>
         <p>
         <div class="japanese3"></div>
      </div>
      <audio volume="0.8" loop="loop" autoplay="autoplay">
    <source src="music.mp3" type="audio/mpeg" />
</audio>
   </body>
</html>
