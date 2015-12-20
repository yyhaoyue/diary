
<!-- We don't need full layout here, because this page will be parsed with Ajax-->
<!-- Top Navbar-->
<div class="navbar">
  <div class="navbar-inner">
    <div class="left"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
    <div class="center sliding">Wipe</div>
    <div class="right">
      <!-- Right link contains only icon - additional "icon-only" class--><a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
    </div>
  </div>
</div>
<div class="pages">
  <!-- Page, data-page contains page name-->
  <div data-page="about" class="page">
    <!-- Scrollable page content-->
    <div class="page-content">
      <div class="content-block">
        <div class="content-block-inner">
          <p>wipe all data!</p>
          <p>Go <a href="#" class="back">back</a> or click  <a href="#" class="create-page">here </a>to create dynamic page.</p>
          <p>Wipeing</p>
        <?php 
	$cmd = 'echo "<div class=\"card\">
        <div class=\"card-header\">12/17</div><div class=\"card-content\">
        <div class=\"card-content-inner\">
        <table> <tr> <td></td> <td></td> <td valign=\"top\">Example Example Example Example</td></tr></table>
   </div>
</div>
</div>" > data.txt';

exec($cmd);
?> 
<meta http-equiv="refresh" content="0; URL='/#'" />
	  <p>null</p>
        </div>
      </div>
    </div>
  </div>
</div>
