<head>
<meta name = "viewport"  content = "initial-scale = 1.0, user-scalable = no">

<script type="text/javascript">
  <!--
  if (screen.width >= 800) {
    window.location = "/index.php";
  }
</script>


<link href="lightbox2-master/dist/css/lightbox.css" rel="stylesheet">

</head>
<style>
img.likeordisklike { height: 24px; width: 24px; margin-right: 4px; }
h4.liketext { color:#F00; display:inline }


//table { width:250px;table-layout:fixed; }
//table tr { height:1em;  }
//td { overflow:hidden;white-space:nowrap;  }

  .fpath input {
	border: none;
	border-color: transparent;
	background: transparent;
}

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
   }




  .camera_button_container,
  .camera_button_container input {
       height: 47px;
       width: 47px;
   }

   .camera_button_container {
       background: transparent url(res/camera.png) left top no-repeat;
       background-size: 40px auto; 
        font-size:16px;
 }

   .camera_button_container input {
       opacity: 0;
   }



.fit {
        max-width: 90%;
        max-height: 90%;
    }
.center {
        display: block;
	margin-left: 55px;
	 width: auto;
    height: 50px;
    overflow: hidden;
    }

.ltext {
	align: left;
}

#slideout {
    position: fixed;
    top: 40px;
    left: 0;
    width: 35px;
    padding: 12px 0;
    text-align: center;
    background: #EEEEEE;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    -webkit-border-radius: 0 5px 5px 0;
    -moz-border-radius: 0 5px 5px 0;
    border-radius: 0 5px 5px 0;
}
#slideout_inner {
    position: fixed;
    top: 40px;
    left: -300px;
    background: #EEEEEE;
    width: 250px;
    padding: 25px;
    height: 300px;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    text-align: left;
    -webkit-border-radius: 0 0 5px 0;
    -moz-border-radius: 0 0 5px 0;
    border-radius: 0 0 5px 0;
}
#slideout_inner textarea {
    width: 250px;
    height: 100px;
    margin-bottom: 6px;
}
#slideout:hover {
    left: 250px;
}
#slideout:hover #slideout_inner {
    left: 0;
}



    #container{
        width: 250px;
        margin: 0 auto;
    }
    input{
        width: 250px;
        height: 25px;
        font-size:18px;
        -webkit-border-radius: 5px;
    }
    input#submit{
        width: 80px;
        height: 30px;
    }

</style>

<div id="container">
<div id="slideout">
    <img src="/res/pencil.png" alt="Write" />
    <div id="slideout_inner">
                <form id="myForm" action="processingscript.php" method="post" enctype="multipart/form-data">

            <textarea id="field1" name="field1" placeholder="Say something..." rows=13 cols=29></textarea>
            <br /><br />
	    <div class="file_button_container">
            <input type="file" name="files[]" id="files" multiple="multiple" accept="image/*" /> </div>&nbsp&nbsp<div class="camera_button_container"><input type="file" capture="camera" accept="image/*" id="cameraInput" name="cameraInput"></div>
<div id="selectedFiles"></div>
            <br /><br />
            <input type="submit" value="submit" id="submit">
        </form>



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


<body style="background-color:#1abc9c;">

<div id="data">
<?php $myfilename="data.txt" ; if(file_exists($myfilename)){ echo file_get_contents($myfilename); } ?>
</div>




</div>
<script src="lightbox2-master/dist/js/lightbox-plus-jquery.js"></script>
</body>
<div id="myDiv" >
<a href="mailto:derekyingyong@gmail.com?subject=Send_Feedback" style="background-color:#99c739;background-image:url(https://imgur.com/clZqdfM.gif);border:1px solid #7ea613;border-radius:3px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:13px;font-weight:bold;line-height:36px;text-align:center;text-decoration:none;width:200px;-webkit-text-size-adjust:none;mso-hide:all;">Send Feedback</a>
<br>
</div>
<script>
document.getElementById("myDiv").style.margin = "50px 10px 20px 30px";
</script>
