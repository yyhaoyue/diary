
<!-- We don't need full layout here, because this page will be parsed with Ajax-->
<!-- Top Navbar-->
<div class="navbar">
  <div class="navbar-inner">
    <div class="left"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
    <div class="center sliding">Write</div>
    <div class="right">
      <!-- Right link contains only icon - additional "icon-only" class--><a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
    </div>
  </div>
</div>
<div class="pages">
  <!-- Page, data-page contains page name-->
  <div data-page="form" class="page no-toolbar">
    <!-- Scrollable page content-->
    <div class="page-content">
      <div class="content-block-title">Write to Diary</div>
      <div class="list-block">

	<ul>
          <li class="align-top">
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-comment"></i></div>
              <div class="item-inner"> 
                <div class="item-input">
		<form id="myForm" action="processingscript.php" method="post" enctype="multipart/form-data">

                  <textarea id="field1" name="field1">Say something...</textarea>
		<input type="submit" id="submit-form" style="display: none;" />

 <style>
 img.likeordisklike { height: 24px; width: 24px; margin-right: 4px; }
h4.liketext { color:#F00; display:inline }



  .file_button_container,
  .file_button_container input {
       height: 47px;
       width: 47px;
   }

   .file_button_container {
       background: transparent url(res/Button.png) left top no-repeat;
       background-size: 40px auto; 
        font-size:16px;
 }

   .file_button_container input {
       opacity: 0;
   }  .file_button_container,
  .file_button_container input {
       height: 47px;
       width: 47px;
   }

   .file_button_container {
       background: transparent url(res/Button.png) left top no-repeat;
       background-size: 40px auto; 
        font-size:16px;
 }

   .file_button_container input {
       opacity: 0;
   }


</style>
 
  <div class="file_button_container">
 <input type="button" a href="#" data-popup=".popup-about" class="open-popup"/>
 </div>
         <script>
        var selDiv = "";
                
        document.addEventListener("DOMContentLoaded", init, false);
        
        function init() {
                document.querySelector('#files').addEventListener('change', handleFileSelect, false);
                selDiv = document.querySelector("#selectedFiles");
        }
                
        function handleFileSelect(e) {
                
                if(!e.target.files || !window.FileReader) return;
                
                selDiv.innerHTML = "";
                
                var files = e.target.files;
                var filesArr = Array.prototype.slice.call(files);
                filesArr.forEach(function(f) {
                        if(!f.type.match("image.*")) {
                                return;
                        }
                        var reader = new FileReader();
                        reader.onload = function (e) {
                                var html = "<img src=\"" + e.target.result + "\" height=\"42\" width=\"42\" class='likeordislike'><h4 class='liketext'> </h4>" ;
                                selDiv.innerHTML += html;                               
                        }
                        reader.readAsDataURL(f); 
                       });
        }
        </script>





		
                </div>
              </div>
            </div>
          </li>


          <li>
            <div class="item-content" >
              <div class="item-media"><i class="icon icon-form-toggle"></i></div>
              <div class="item-inner"> 
                <div class="item-title label">Lock</div>
                <div class="item-input">
                  <label class="label-switch">
                    <input type="checkbox" name="lock" value="lock" checked="lock"/>

                    <div class="checkbox"></div>
                  </label>

                </div>
              </div>
            </div>
          </li>




  



        </ul>
      </div>

<br>
      <div class="content-block">
        <div class="row">
          <div class="col-50"><a href="/mobile.php" class="button button-big button-fill color-red">Cancel</a></div>
          <div class="col-50" for="submit-form">
            <label for="submit-form fileupload" class="button button-big button-fill color-green">Submit</label>
  </div>
</div>
  </div>
</div>
</form>
</div>



