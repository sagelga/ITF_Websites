<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include("$root/Templates/NavigationBar.html");?>

<center><img src="web.sinchronize.com/images/loading.gif" width="50%" length="50%"></center>

<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

echo <h2>'You have cleaned session'</h2>;
header('Refresh: 2; URL = http://web.sinchronize.com/');
?>

<footer>
  <!-- Tabs with icons on Card -->
  <div class="card card-nav-tabs">
   <div class="header header-success">
    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
    <div class="nav-tabs-navigation">
     <div class="nav-tabs-wrapper">
      <ul class="nav nav-tabs" data-tabs="tabs">
       <li class="active">
        <a href="#a" data-toggle="tab">
         <i class="material-icons">face</i>
         Profile
       </a>
     </li>
     <li>
      <a href="#b" data-toggle="tab">
       Messages
     </a>
   </li>
   <li>
    <a href="#c" data-toggle="tab">
     Settings
   </a>
 </li>
 <li>
  <a href="#d" data-toggle="tab">
    Settings
  </a>
</li>
<li>
  <a href="#e" data-toggle="tab">
    Settings
  </a>
</li>
</ul>
</div>
</div>
</div>
<div class="content">
  <div class="tab-content text-center">
   <div class="tab-pane active" id="profile">
    <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
  </div>

  <div class="tab-pane" id="messages">
    <p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
  </div>

  <div class="tab-pane" id="settings">
    <h3 align="center"><img src="http://web.sinchronize.com/images/sinchronize.png"> Phodory</h3>
    <center>
      <!-- Enable ToolTip functionality -->
      <script> $(function () {$('[data-toggle="tooltip"]').tooltip()}) </script>
      <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Change Language
      <div id="google_translate_element" data-toggle="tooltip" data-placement="top" title="Choose your preferred language. Powered by Google Translate"></div>
      <script type="text/javascript"> function googleTranslateElementInit() {new google.translate.TranslateElement({pageLanguage: 'en', multilanguagePage: true, gaTrack: true, gaId:'UA-86183782-1'}, 'google_translate_element');}</script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      <div class="tab-pane" id="messages">
        <p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
      </div>

      <div class="tab-pane" id="messages">
        <p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
      </div>

    </center>

    <br>

    <p align="center">
      <a href="">Sitemaps</a> |
      <a href="http://web.sinchronize.com/Pages/status.html">Status</a> |
      <a href="">Contact Us</a>
    </p>

  </div>
</div>
</div>
</div>
<!-- End Tabs with icons on Card -->
</div>

</footer>
<!-- JS Importing Items -->
<!-- Google jQuery --> <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- BootStrap JS --> <script src="http://web.sinchronize.com/js/bootstrap.min.js"</script>
<!-- BootStrap JQuery --> <script src="http://web.sinchronize.com/js/jquery.min.js"</script>
<!-- Google Analytics Tag --> <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-86183782-1', 'auto');ga('send', 'pageview'); </script>
<!-- Matterial Kit JS --> <script src="http://web.sinchronize.com/js/jquery.sharrre.js"></script>
<!--                  --> <script src="http://web.sinchronize.com/js/material-kit.js"></script>
<!--                  --> <script src="http://web.sinchronize.com/js/bootstrap-datepicker.js"></script>
<!--                  --> <script src="http://web.sinchronize.com/js/nouislider.min.js"></script>
<!-- Matterial Kit JS --> <script src="http://web.sinchronize.com/js/material.min.js"></script>
</body>
</html>

<!--
,-~~-.___.
/ |  '     \
(  )        0
\_/-, ,----'
  ====           //
 /  \-'~;    /~~~(O)
/  __/~|   /       |
=(  _____| (_________|
  -Paul Hickey
-->
