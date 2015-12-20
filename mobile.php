<!DOCTYPE html>
<html>
  <head>
<meta name="apple-mobile-web-app-capable" content="yes">
	<style>
img.likeordisklike { height: 24px; width: 24px; margin-right: 4px; }
h4.liketext { color:#F00; display:inline }

iframe[seamless]{
    background-color: transparent;
    border: 0px none transparent;
    padding: 0px;
    overflow: hidden;
}

</style>
<link href="lightbox2-master/dist/css/lightbox.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>My App</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="css/framework7.ios.min.css">
    <link rel="stylesheet" href="css/framework7.ios.colors.min.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="css/my-app.css">
  </head>
  <body>
   <div class="popup popup-about">
    <div class="content-block">
      <p>Add Picture</p>
      <p>Pick From Phone</p>
        <iframe seamless='seamless' src="jQuery-File-Upload-9.11.2/index.html" height="200"></iframe>        
	<div class="col-50"><a href="#" class="close-popup button button-big button-fill color-blue">Alright.</a></div>
    </div>
  </div>

    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
    <div class="panel panel-left panel-reveal">
      <div class="content-block">
        <p>Left panel content goes here</p>
      </div>
    </div>
    <!-- Right panel with cover effect-->
    <div class="panel panel-right panel-cover">
      <div class="content-block">
        <p>Right panel content goes here</p>
      </div>
    </div>
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <!-- We have home navbar without left link-->
            <div class="center sliding">Diary</div>
            <div class="right">
              <!-- Right link contains only icon - additional "icon-only" class--><a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
            </div>
          </div>
        </div>
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, data-page contains page name-->
          <div data-page="index" class="page">
            <!-- Scrollable page content-->
            <div class="page-content infinite-scroll" data-distance="50">
              <div class="content-block-title">Welcome To Diary</div>

<?php $myfilename="data.txt" ; if(file_exists($myfilename)){ echo file_get_contents($myfilename); } ?>


                
             
		 
              
              <div class="content-block-title">Tools</div>
              <div class="list-block">
                <ul>
                  <li><a href="about.php" class="item-link">
                      <div class="item-content">
                        <div class="item-inner"> 
                          <div class="item-title">Wipe</div>
                        </div>
                      </div></a></li>
                  <li><a href="services.html" class="item-link">
                      <div class="item-content"> 
                        <div class="item-inner">
                          <div class="item-title">[placeholder]</div>
                        </div>
                      </div></a></li>
                  <li><a href="form.html" class="item-link">
                      <div class="item-content"> 
                        <div class="item-inner">
                          <div class="item-title">Diary Settings</div>
                        </div>
                      </div></a></li>
                </ul>
              </div>
              <div class="content-block-title">Side panels</div>
              <div class="content-block">
                <div class="row">
                  <div class="col-50"><a href="#" data-panel="left" class="button open-panel">Left Panel</a></div>
                  <div class="col-50"><a href="#" data-panel="right" class="button open-panel">Right Panel</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <div class="toolbar-inner"><a href="javascript:window.location.reload();" class="link">Refresh</a><a href="WriteDiary.php" class="link">Write</a></div>
        </div>
      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="js/my-app.js"></script>
<script src="lightbox2-master/dist/js/lightbox-plus-jquery.js"></script>
  </body>
</html>
